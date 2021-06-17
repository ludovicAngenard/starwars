<?php
class VehiclesController implements VehiclesControllerInterface{
    private $collectionName = 'vehicles';

    public function getVehicles(){
        $response = file_get_contents('https://swapi.dev/api/vehicles/');
        $response = json_decode($response);
        foreach ($response->results as $vehicle) {
            $this->addVehicle($vehicle);
        }
        return Vehicle::getAllEntitiesOfCollection( $this->collectionName);
    }
    public function getVehicleByName($name){
        return Film::getEntityByNameAndCollection($this->collectionName, $name);
    }
    public function addVehicle($vehicle){
        Vehicle::addEntityByCollection( $this->collectionName, new Vehicle(
            $vehicle->name,
            $vehicle->model,
            $vehicle->manufacturer,
            $vehicle->cost_in_credits,
            $vehicle->length,
            $vehicle->max_atmosphering_speed,
            $vehicle->crew,
            $vehicle->passengers,
            $vehicle->cargo_capacity,
            $vehicle->consumables,
            $vehicle->vehicle_class,
            $vehicle->pilots,
            $vehicle->films,
            $vehicle->created,
            $vehicle->edited,
            $vehicle->url
        ));
    }
}