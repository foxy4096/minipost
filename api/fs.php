<?php

echo json_encode([
    'status' => 'ok',
    'message' => 'Hello from the file system API!',
    'timestamp' => time(),
    'data' => [
        'file' => __FILE__,
        'directory' => __DIR__,
        'server' => $_SERVER['SERVER_NAME'],
        'user_agent' => $_SERVER['HTTP_USER_AGENT'],
    ],
    $_FILES
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION | JSON_UNESCAPED_LINE_TERMINATORS | JSON_PARTIAL_OUTPUT_ON_ERROR | JSON_INVALID_UTF8_IGNORE | JSON_INVALID_UTF8_SUBSTITUTE | JSON_THROW_ON_ERROR);