<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

foreach(\App\Models\Faq::all() as $f) {
    echo $f->id . " | " . $f->question . " | " . json_encode($f->page) . "\n";
}
