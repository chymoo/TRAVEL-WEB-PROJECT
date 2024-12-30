<?php
// Get the details passed via URL
$image = isset($_GET['image']) ? $_GET['image'] : '';
$name = isset($_GET['name']) ? $_GET['name'] : '';
$description = isset($_GET['description']) ? $_GET['description'] : '';

// If no data is passed, show an error message
if (empty($image) || empty($name) || empty($description)) {
    echo "No booking details found.";
    exit;
}
?>

<section style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center; padding: 3rem; background-color: #f9f9f9;">
    <div style="flex: 1; max-width: 400px; margin: 1rem;">
        <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" 
             style="width: 100%; height: auto; border-radius: 10px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); max-height: 300px; object-fit: cover;">
    </div>
    <div style="flex: 1; max-width: 600px; margin: 1rem; color: #333; background-color: #fff; padding: 1.5rem; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
        <h2 style="font-size: 2rem; color: #003366; margin-bottom: 1rem;"><?php echo $name; ?></h2>
        <p style="font-size: 1.2rem; line-height: 1.6; margin-bottom: 1rem;"><?php echo $description; ?></p>
    </div>
</section>
