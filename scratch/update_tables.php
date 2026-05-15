<?php
$baseDir = dirname(__DIR__);

// 1. Fix Controllers regex issue
$controllersDir = $baseDir . '/app/Http/Controllers/Admin';
$controllerFiles = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($controllersDir));

foreach ($controllerFiles as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $content = file_get_contents($file->getPathname());
        
        // Correcting the regex by adding capturing groups and replacing correctly.
        $content = preg_replace('/->orderByDesc\(([^)]+)\)->get\(\)/', '->orderByDesc($1)->paginate(15)', $content);
        $content = preg_replace('/->latest\(\)->get\(\)/', '->latest()->paginate(15)', $content);
        $content = preg_replace('/->orderBy\(([^)]+)\)->get\(\)/', '->orderBy($1)->paginate(15)', $content);
        $content = preg_replace('/->latest\(\)->get\(\)/', '->latest()->paginate(15)', $content);
        
        file_put_contents($file->getPathname(), $content);
    }
}

// 2. Fix Views
$viewsDir = $baseDir . '/resources/views/admin';
$viewFiles = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($viewsDir));

foreach ($viewFiles as $file) {
    if ($file->isFile() && str_ends_with($file->getFilename(), 'index.blade.php')) {
        $content = file_get_contents($file->getPathname());
        
        // Fix the previous string interpolation mistake
        // The script already added some broken text if it was executed.
        // Let's clean up any broken pagination lines first
        $content = preg_replace('/<div class="d-flex justify-content-end mt-4">.*?\n\s*\{\{.*?\}\}\n\s*<\/div>/s', '', $content);
        
        // Find the variable name used in the foreach loop
        if (preg_match('/@foreach\s*\(\s*\$([a-zA-Z0-9_]+)\s+as\s+\$([a-zA-Z0-9_]+)\s*\)/', $content, $matches)) {
            $collectionVar = $matches[1];
            
            if (!str_contains($content, '->links()')) {
                // Use string concatenation safely
                $paginationCode = "\n        <div class=\"d-flex justify-content-end mt-4\">\n            {{ $" . $collectionVar . "->links('pagination::bootstrap-4') }}\n        </div>\n";
                
                if (str_contains($content, '</table>')) {
                    $content = str_replace('</table>', "</table>" . $paginationCode, $content);
                }
            }
        }
        
        // Make the table look like the design: table-striped removed, table-hover added, borderless
        $content = str_replace('table-bordered', '', $content);
        $content = str_replace('table-striped', 'table-hover', $content);
        
        file_put_contents($file->getPathname(), $content);
    }
}

echo "Done fixing files!\n";
