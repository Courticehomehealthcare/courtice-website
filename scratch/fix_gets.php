<?php
$baseDir = dirname(__DIR__);
$controllersDir = $baseDir . '/app/Http/Controllers/Admin';
$controllerFiles = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($controllersDir));

foreach ($controllerFiles as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $content = file_get_contents($file->getPathname());
        
        // We only want to replace get() with paginate(15) for the main assignment in index() methods.
        // Let's do a more generic replacement but only for the first one that assigns to a variable.
        // Actually, we can just look for specific patterns that we missed:
        $content = str_replace("orderByDesc('last_updated')->get()", "orderByDesc('last_updated')->paginate(15)", $content);
        $content = str_replace("orderByDesc('id')->get()", "orderByDesc('id')->paginate(15)", $content);
        $content = str_replace("latest()->get()", "latest()->paginate(15)", $content);
        $content = str_replace("orderByDesc('created_at')->get()", "orderByDesc('created_at')->paginate(15)", $content);
        $content = str_replace("orderBy('galleryid', 'desc')->get()", "orderBy('galleryid', 'desc')->paginate(15)", $content);
        $content = str_replace("orderBy('page_label')->get()", "orderBy('page_label')->paginate(15)", $content);
        $content = str_replace("orderBy('priority', 'desc')->get()", "orderBy('priority', 'desc')->paginate(15)", $content);
        $content = str_replace("orderBy('sort_order')->get()", "orderBy('sort_order')->paginate(15)", $content);
        $content = str_replace("orderBy('title')->get()", "orderBy('title')->paginate(15)", $content);
        
        // Fix for specific simple get calls
        if (str_contains($content, 'public function index')) {
            $content = str_replace("DynamicContent::get()", "DynamicContent::paginate(15)", $content);
        }

        file_put_contents($file->getPathname(), $content);
    }
}
echo "Fixed gets!\n";
