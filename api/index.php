<?php

// Buat struktur folder di /tmp (satu-satunya folder writable di Vercel)
$dirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Override path storage & bootstrap cache Laravel
app()->useStoragePath('/tmp/storage');

require __DIR__ . '/../public/index.php';
