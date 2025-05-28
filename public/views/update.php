<?php 

require_once '../../app/Classes/vehicleManager.php';

$id = 4;

$updatedVehicle = [
    'name' => 'BMW i5',
    'type' => 'Electric Car',
    'price' => 500000,
    'image' => 'https://shorturl.at/2f7sC'
];

$vehicleManager = new VehicleManager('','','', '');
$vehicleManager->editVehicle($id, $updatedVehicle);

echo "Vehicle with ID $id updated successfully!";