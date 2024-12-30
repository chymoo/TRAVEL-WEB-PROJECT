<?php
// Example destinations (you can loop through them or add dynamically)
$destinations = [
    [
        'image' => 'https://img.freepik.com/free-photo/happy-couple-having-wine-with-view-eiffel-tower_181624-33226.jpg?ga=GA1.1.163804140.1731760303&semt=ais_hybrid',
        'name' => 'Paris: The City of Love',
        'description' => 'Experience the romance of Paris with dreamy strolls along the Seine, breathtaking views from the Eiffel Tower, and intimate dinners in charming bistros.'
    ],
    // Add other destinations here
];

foreach ($destinations as $destination) {
    echo '
    <section style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center; padding: 3rem; background-color: #f9f9f9;">
        <div style="flex: 1; max-width: 400px; margin: 1rem;">
            <img src="' . $destination['image'] . '" alt="' . $destination['name'] . '" 
                 style="width: 100%; height: auto; border-radius: 10px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); max-height: 300px; object-fit: cover;">
        </div>
        <div style="flex: 1; max-width: 600px; margin: 1rem; color: #333; background-color: #fff; padding: 1.5rem; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); position: relative;">
            <h2 style="font-size: 2rem; color: #003366; margin-bottom: 1rem;">' . $destination['name'] . '</h2>
            <p style="font-size: 1.2rem; line-height: 1.6; margin-bottom: 1rem;">' . $destination['description'] . '</p>
            <a href="booking_details.php?image=' . urlencode($destination['image']) . '&name=' . urlencode($destination['name']) . '&description=' . urlencode($destination['description']) . '" 
               style="display: inline-block; text-decoration: none; padding: 0.8rem 2rem; background-color: #ff6f61; color: white; font-size: 1.2rem; border-radius: 5px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); position: absolute; top: 50%; right: -30%; transform: translateY(-50%);">
                Book Now
            </a>
        </div>
    </section>';
}
?>
