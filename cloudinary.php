<?php
// cloudinary.php

// Include Composer autoloader
require 'vendor/autoload.php';

// Use the AdminApi class for managing assets
use Cloudinary\Api\Admin\AdminApi;
use Dotenv\Dotenv;

// Load environment variables from .env file
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();


// Set your Cloudinary credentials
\Cloudinary::config(array(
    "cloud_name" => $_ENV['CLOUDINARY_CLOUD_NAME'],
    "api_key" => $_ENV['CLOUDINARY_API_KEY'],
    "api_secret" => $_ENV['CLOUDINARY_API_SECRET']
));

// Get the asset details
$admin = new AdminApi();
$assetName = 'flower_sample'; // Replace with the name of the asset you want to retrieve details for

try {
    $assetDetails = $admin->asset($assetName, ['colors' => true]);
    header('Content-Type: application/json');
    echo json_encode($assetDetails, JSON_PRETTY_PRINT);
} catch (\Exception $e) {
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(['error' => 'Failed to retrieve asset details']);
}
