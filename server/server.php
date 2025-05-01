<?php
// A simple PHP server script to handle HTTP requests and responses
// This script will handle GET and POST requests and return a JSON response

// It will also handle CORS headers for cross-origin requests
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Max-Age: 86400'); // 24 hours


// Start the session
session_start();

// Check if the request method is OPTIONS (preflight request)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    // If it is, just return a 200 OK response
    http_response_code(200);
    exit;
}

// Handle GET and POST requests
