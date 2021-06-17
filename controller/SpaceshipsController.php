<?php
class SpaceshipsController implements SpaceshipsControllerInterface{
    private $collectionName = 'spaceships';

    public function getSpaceships(){
        $response = file_get_contents('https://swapi.dev/api/starships/');
        $response = json_decode($response);
        foreach ($response->results as $spaceship) {
            $this->addSpaceship($spaceship);
        }
        return Spaceship::getAllEntitiesOfCollection( $this->collectionName);
    }
    public function getSpaceshipByName($name){
        return Film::getEntityByNameAndCollection($this->collectionName, $name);
    }
    public function addSpaceship($spaceship){
        Spaceship::addEntityByCollection( $this->collectionName, new Spaceship(
            $spaceship->name,
            $spaceship->model,
            $spaceship->manufacturer,
            $spaceship->cost_in_credits,
            $spaceship->length,
            $spaceship->max_atmosphering_speed,
            $spaceship->crew,
            $spaceship->passengers,
            $spaceship->cargo_capacity,
            $spaceship->consumables,
            $spaceship->hyperdrive_rating,
            $spaceship->MGLT,
            $spaceship->starship_class,
            $spaceship->pilots,
            $spaceship->films,
            $spaceship->created,
            $spaceship->edited,
            $spaceship->url
        ));
    }
}