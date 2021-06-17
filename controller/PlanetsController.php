<?php
class PlanetsController implements PlanetsControllerInterface{
    private $collectionName = 'planets';

    public function getPlanets(){
        $response = file_get_contents('https://swapi.dev/api/planets/');
        $response = json_decode($response);
        foreach ($response->results as $planet) {
            $this->addPlanet($planet);
        }
        return Planet::getAllEntitiesOfCollection( $this->collectionName);
    }
    public function getPlanetByName($name){
        return Film::getEntityByNameAndCollection($this->collectionName, $name);
    }
    public function addPlanet($planet){
        Planet::addEntityByCollection( $this->collectionName, new Planet(
            $planet->name,
            $planet->rotation_period,
            $planet->orbital_period,
            $planet->diameter,
            $planet->climate,
            $planet->gravity,
            $planet->terrain,
            $planet->surface_water,
            $planet->population,
            $planet->created,
            $planet->edited,
            $planet->url
        ));
    }
}