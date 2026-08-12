<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS)
);
$count = 0;

foreach ($files as $file) {
    if (!$file->isFile() || $file->getExtension() !== 'php') {
        continue;
    }

    $relativePath = substr($file->getPathname(), strlen($root) + 1);
    if (str_starts_with(str_replace('\\', '/', $relativePath), 'vendor/')) {
        continue;
    }

    $output = [];
    $status = 0;
    exec(
        escapeshellarg(PHP_BINARY) . ' -l ' . escapeshellarg($file->getPathname()),
        $output,
        $status
    );
    if ($status !== 0) {
        fwrite(STDERR, implode(PHP_EOL, $output) . PHP_EOL);
        exit($status);
    }
    ++$count;
}

fwrite(STDOUT, "Validated {$count} PHP files." . PHP_EOL);
