<?php 

require_once 'vehicleBase.php';
require_once 'vehicleActions.php';
require_once 'fileHandler.php';

class VehicleManager extends VehicleBase implements VehicleActions{
    use FileHandler;

    public function addVehicle($data){
        $vehicles = $this->readFile();
        $vehicles[] = $data;
        $this->writeFile($vehicles);
    }

    public function editVehicle($id, $data){
        $vehicles = $this->readFile();
        if(isset($vehicles[$id])){
            $vehicles[$id] = $data;
            $this->writeFile($vehicles);
        }
    }

    public function deleteVehicle($id){
        $vehicles = $this->readFile();
        if(isset($vehicles[$id])){
            unset($vehicles[$id]);
            $this->writeFile($vehicles);
        }
    }

    public function getVehicle(){
        return $this->readFile();
    }

    public function getDetails(){
        return [
            'name' => $this->name,
            'type' => $this->type,
            'price' => $this->price,
            'image' => $this->image
        ];
    }

}
