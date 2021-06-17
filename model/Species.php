<?php
class Species extends Model {
    public $name;
    public $classification;
    public $designation;
    public $average_height;
    public $skin_colors;
    public $hair_colors;
    public $eye_colors;
    public $average_lifespan;
    public $homeworld;
    public $language;
    public $people;
    public $films;
    public $created;
    public $edited;
    public $url;

    public function __construct(
        $name,
        $classification,
        $designation,
        $average_height,
        $skin_colors,
        $hair_colors,
        $eye_colors,
        $average_lifespan,
        $homeworld,
        $language,
        $people,
        $films,
        $created,
        $edited,
        $url) {
            $this->name = $name;
            $this->classification = $classification;
            $this->designation = $designation;
            $this->average_height = $average_height;
            $this->skin_colors = $skin_colors;
            $this->hair_colors = $hair_colors;
            $this->eye_colors = $eye_colors;
            $this->average_lifespan = $average_lifespan;
            $this->homeworld = $homeworld;
            $this->language = $language;
            $this->people = $people;
            $this->films = $films;
            $this->created = $created;
            $this->edited = $edited;
            $this->url = $url;
    }
}
?>