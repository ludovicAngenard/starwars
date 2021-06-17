<?php
class PeopleController implements PeopleControllerInterface{
    private $collectionName = 'people';

    public function getPeople(){
        $response = file_get_contents('https://swapi.dev/api/people/');

        $response = json_decode($response);

        foreach ($response->results as $person) {
            $this->addPerson($person);

        }
        return Person::getAllEntitiesOfCollection($this->collectionName);
    }
    public function getPersonByName($name){
        return Film::getEntityByNameAndCollection($this->collectionName, $name);
    }
    public function addPerson($person){
        Person::addEntityByCollection( $this->collectionName, new Person(
            $person->name,
            $person->height,
            $person->mass,
            $person->hair_color,
            $person->skin_color,
            $person->eye_color,
            $person->birth_year,
            $person->gender,
            $person->homeworld,
            $person->films,
            $person->species,
            $person->vehicles,
            $person->starships,
            $person->created,
            $person->edited,
            $person->url
        ));

    }
}
?>