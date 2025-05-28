<?php 

require_once '../../app/Classes/vehicleManager.php';

$newVehicle = [
    'name' => 'BMW i5',
    'type' => 'Electric',
    'price' => 400002,
    'image' => 'https://www.pexels.com/photo/blue-bmw-sedan-near-green-lawn-grass-170811/'
];

$vehicleManager = new VehicleManager('','','', '');
$vehicleManager->addVehicle($newVehicle);

echo "Vehicle added successfully!";