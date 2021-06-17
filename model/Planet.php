<?php
class Planet extends Model {
    public $name;
    public $rotation_period;
    public $orbital_period;
    public $diameter;
    public $climate;
    public $gravity;
    public $terrain;
    public $surface_water;
    public $population;
    public $created;
    public $edited;
    public $url;
    public function __construct(
        $name,
        $rotation_period,
        $orbital_period,
        $diameter,
        $climate,
        $gravity,
        $terrain,
        $surface_water,
        $population,
        $created,
        $edited,
        $url){
            $this->name = $name;
            $this->rotation_period = $rotation_period;
            $this->orbital_period = $orbital_period;
            $this->diameter = $diameter;
            $this->climate = $climate;
            $this->gravity = $gravity;
            $this->terrain = $terrain;
            $this->surface_water = $surface_water;
            $this->population = $population;
            $this->created = $created;
            $this->edited = $edited;
            $this->url = $url;
    }
}


?>