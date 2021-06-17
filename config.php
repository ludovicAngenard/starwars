<?php
spl_autoload_register(function ($class_name) {
    if (substr("$class_name", -10) == 'Controller'){ // include controller
        include './controller/' . $class_name . '.php';
    } elseif (substr("$class_name", -9) == 'Interface'){ // include interface
        include './interfaceController/' . $class_name . '.php'; // include model
    }else {
        include './model/' . $class_name . '.php';
    }
});

// get the data from the api

$filmsController = new FilmsController();
$film = $filmsController->getFilms();

$peopleController = new PeopleController();
$people = $peopleController->getPeople();

$planetsController = new PlanetsController();
$planets = $planetsController->getPlanets();

$spaceshipsController = new SpaceshipsController();
$spaceships = $spaceshipsController->getSpaceships();

$speciesController = new SpeciesController();
$species = $speciesController->getSpecies();

$vehiclesController = new VehiclesController();
$vehicles = $vehiclesController->getVehicles();

// You can access to specific data by using this :
var_dump($filmsController->getFilmByTitle("A New Hope"));
var_dump($peopleController->getPersonByName("Luke Skywalker"));

//You can access to all the collection's data by using this :
$films = $filmsController->getFilms();
foreach ($films as $film) {
   echo($film->title."\n");
}
?>