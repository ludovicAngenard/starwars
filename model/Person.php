<?php
class Person extends Model {
    public $name;
    public $height;
    public $mass;
    public $hair_color;
    public $skin_color;
    public $eye_color;
    public $birth_year;
    public $gender;
    public $homeworld;
    public $films;
    public $species;
    public $vehicles;
    public $starships;
    public $created;
    public $edited;
    public $url;

    function __construct(
        $name,
        $height,
        $mass,
        $hair_color,
        $skin_color,
        $eye_color,
        $birth_year,
        $gender,
        $homeworld,
        $films,
        $species,
        $vehicles,
        $starships,
        $created,
        $edited,
        $url){

            $this->name = $name;
            $this->height = $height;
            $this->mass = $mass;
            $this->hair_color = $hair_color;
            $this->skin_color = $skin_color;
            $this->eye_color = $eye_color;
            $this->birth_year = $birth_year;
            $this->gender = $gender;
            $this->homeworld;
            $this->films;
            $this->species;
            $this->vehicles;
            $this->starships;
            $this->created = $created;
            $this->edited = $edited;
            $this->url = $url;
    }
}
?>