<html lang="HTML5">

<head>
    <title>PHP Quick Start</title>
</head>

<body>
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Admin\AdminApi;

echo '<h1>Cloudinary PHP Quick Start</h1>';

// replace `cloudinary://my_key:my_secret@my_cloud_name` with your environment variable

Configuration::instance('cloudinary://481561933546341:SIN4tJ_kYm2Yaa9ILszfBnPZnd4@drnzbtsqx?secure=true');

// Admin api
echo '<h2>Admin API Response</h2>';

// Get the asset details
$admin = new AdminApi();
$profileAssetDetails = $admin->asset('profile', ['colors' => true]);

// Print the asset details in a formatted way
echo '<pre>';
print_r($profileAssetDetails);
echo '</pre>';

// Display all images associated with the 'profile' asset
echo '<h2>All Images</h2>';
foreach ($profileAssetDetails['derived'] as $derivedResource) {
    echo '<img src="' . $derivedResource['secure_url'] . '" alt="' . $derivedResource['public_id'] . '">';
}

?>
</body>

</html>
