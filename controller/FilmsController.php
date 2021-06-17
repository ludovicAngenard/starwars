<?php
class FilmsController implements FilmsControllerInterface{
    private $collectionName = 'films';

    public function getFilms(){
        $response = file_get_contents('https://swapi.dev/api/films/');

        $response = json_decode($response);

        foreach ($response->results as $film) {
            $this->addFilm($film);
        }
        return Film::getAllEntitiesOfCollection($this->collectionName);
    }
    public function getFilmByTitle($title){
        return Film::getEntityByTitle($title);
    }
    public function addFilm($film){
        Film::addEntityByCollection($this->collectionName, new Film(
            $film->title,
            $film->episode_id,
            $film->director,
            $film->producer,
            $film->release_date,
            $film->opening_crawl,
            $film->created,
            $film->edited,
            $film->url
        ));
    }
}
?>