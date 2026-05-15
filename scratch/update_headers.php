<?php
$baseDir = dirname(__DIR__);
$viewsDir = $baseDir . '/resources/views/admin';
$viewFiles = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($viewsDir));

foreach ($viewFiles as $file) {
    if ($file->isFile() && str_ends_with($file->getFilename(), 'index.blade.php')) {
        $content = file_get_contents($file->getPathname());
        
        // Skip if already has the new card-header bg-white layout
        if (str_contains($content, 'card-header bg-white d-flex justify-content-between align-items-center')) {
            continue;
        }

        // Get the title from h1
        $title = 'List';
        if (preg_match('/<h1>(.*?)<\/h1>/', $content, $matches)) {
            $title = trim($matches[1]);
        }

        // Extract the Add button if it exists before the card
        $addButtonHtml = '';
        if (preg_match('/<a\s+href="[^"]+"\s+class="btn\s+btn-primary[^"]*">.*?<\/a>/s', $content, $matches)) {
            $oldButton = $matches[0];
            // Remove it from its original place
            $content = str_replace($oldButton, '', $content);
            
            // Reformat it for the header
            // Extract href and inner HTML
            preg_match('/href="([^"]+)"/', $oldButton, $hrefMatch);
            $href = $hrefMatch[1] ?? '#';
            preg_match('/<i[^>]+><\/i>\s*(.*?)$/s', $oldButton, $textMatch);
            $btnText = isset($textMatch[1]) ? trim(strip_tags($textMatch[1])) : 'Add New';
            if (!$btnText) {
                preg_match('/<a[^>]+>(.*?)<\/a>/s', $oldButton, $innerMatch);
                $btnText = trim(strip_tags($innerMatch[1] ?? 'Add New'));
            }

            $addButtonHtml = '
            <a href="'.$href.'" class="btn btn-primary" style="height: 34px; display: flex; align-items: center; border-radius: 4px; font-weight: 500; background-color: #007bff; border-color: #007bff;">
                <i class="fas fa-plus mr-1" style="font-size: 0.8rem;"></i> '.$btnText.'
            </a>';
        }

        // Build the new header
        $newHeader = '<div class="card-header bg-white d-flex justify-content-between align-items-center" style="padding: 1rem 1.25rem;">
        <h3 class="card-title m-0" style="font-size: 1.1rem; font-weight: 500; color: #111827;">'.$title.'</h3>
        <div class="d-flex align-items-center">
            <div class="input-group input-group-sm mr-3" style="width: 250px;">
                <input type="text" name="table_search" class="form-control" placeholder="Search..." style="border-radius: 4px 0 0 4px; border-color: #e2e8f0; height: 34px;">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default" style="border-color: #e2e8f0; background: #ffffff; color: #6b7280; height: 34px; border-radius: 0 4px 4px 0;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>' . $addButtonHtml . '
        </div>
    </div>';

        // Check if there's already a card header (e.g. contacts)
        if (str_contains($content, '<div class="card-header')) {
            // Complex case: just inject above the existing card-body and let the user fix any duplicates manually if needed, 
            // but wait, contacts has a custom card header. Let's merge them or just replace the card-header if it's basic.
            // Actually, replace `<div class="card-body` with `$newHeader . <div class="card-body` and then remove the old header.
            // Let's just find `<div class="card shadow-sm border-0 table-wrapper">`
            if (preg_match('/<div class="card shadow-sm border-0 table-wrapper">\s*<div class="card-header[^>]*>(.*?)<\/div>\s*<div class="card-body table-responsive">/s', $content, $matches)) {
                $oldHeaderContent = $matches[1];
                // Put old header content into the new header (left side)
                $newHeaderWithOld = str_replace('<h3 class="card-title', $oldHeaderContent . ' <h3 class="card-title', $newHeader);
                $content = preg_replace('/(<div class="card shadow-sm border-0 table-wrapper">)\s*<div class="card-header[^>]*>.*?<\/div>\s*(<div class="card-body table-responsive">)/s', "$1\n    $newHeaderWithOld\n    $2", $content);
            } else {
                $content = preg_replace('/(<div class="card shadow-sm border-0 table-wrapper">)\s*(<div class="card-body table-responsive">)/', "$1\n    $newHeader\n    $2", $content);
            }
        } else {
            // Normal case
            $content = preg_replace('/(<div class="card shadow-sm border-0 table-wrapper">)\s*(<div class="card-body table-responsive">)/', "$1\n    $newHeader\n    $2", $content);
        }
        
        // Change `card-body table-responsive` to `card-body table-responsive p-0`
        $content = str_replace('class="card-body table-responsive"', 'class="card-body table-responsive p-0"', $content);

        file_put_contents($file->getPathname(), $content);
    }
}

echo "Headers updated!\n";
