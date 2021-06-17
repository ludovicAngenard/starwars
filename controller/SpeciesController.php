<?php
class SpeciesController implements SpeciesControllerInterface{
    private $collectionName = 'species';

    public function getSpecies(){
        $response = file_get_contents('https://swapi.dev/api/species/');
        $response = json_decode($response);
        foreach ($response->results as $species) {
            $this->addSpecies($species);
        }
        return Species::getAllEntitiesOfCollection( $this->collectionName);
    }
    public function getSpeciesByName($name){
        return Film::getEntityByNameAndCollection($this->collectionName, $name);
    }
    public function addSpecies($species){
        Species::addEntityByCollection( $this->collectionName, new Species(
            $species->name,
            $species->classification,
            $species->designation,
            $species->average_height,
            $species->skin_colors,
            $species->hair_colors,
            $species->eye_colors,
            $species->average_lifespan,
            $species->homeworld,
            $species->language,
            $species->people,
            $species->films,
            $species->created,
            $species->edited,
            $species->url
        ));
    }
}