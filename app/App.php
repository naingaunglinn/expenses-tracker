<?php

declare(strict_types = 1);

function getTransactionFiles (array $files): array 
{
    $files = [];

    foreach(scandir(FILES_PATH) as $file) {
        var_dump($file);
    }
}