<?php 

require_once '../../app/Classes/vehicleManager.php';

$id = 2;

$vehicleManager = new VehicleManager('','','', '');
$vehicleManager->deleteVehicle($id);

echo "Vehicle with ID $id deleted successfully!";