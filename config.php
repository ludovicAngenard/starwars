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


$peopleController = new PeopleController();

$planetsController = new PlanetsController();

$spaceshipsController = new SpaceshipsController();

$speciesController = new SpeciesController();

$vehiclesController = new VehiclesController();

// You can access to specific data by using this :
var_dump($filmsController->getFilmByTitle("A New Hope"));
var_dump($peopleController->getPersonByName("Luke Skywalker"));

//You can access to all the collection's data by using this :
$films = $filmsController->getFilms();
foreach ($films as $film) {
   echo($film->title."\n");
}
?>