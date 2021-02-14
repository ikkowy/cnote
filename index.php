<?php

function view ($path, $data=[]) {
    ob_start();
    include "views/$path.php";
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
}

echo view('base', [
    'title' => 'CNote',
    'style' => ['global'],
    'body' => view('start'),
]);
