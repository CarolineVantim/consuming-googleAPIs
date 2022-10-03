<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Text\Translate;

//input = texto base para traducao
$input = $argv[1];

$languages = [
    'en',
    'es',
    'fr',
    'pt'
];

$result = Translate::run($input, $languages);

echo "<pre>";
print_r($result);
echo "</pre>"; exit;