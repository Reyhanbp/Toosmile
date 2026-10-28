<?php

// Buat folder temporary writable di Vercel untuk compiled views
if (!is_dir('/tmp/views')) {
    mkdir('/tmp/views', 0755, true);
}

require __DIR__ . '/../public/index.php';
