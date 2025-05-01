<?php

// clear the session and cookie

session_start();
session_destroy();

// clear all cookies
foreach ($_COOKIE as $key => $value) {
    setcookie($key, '', time() - 3600, '/');
}

header('Location: /');