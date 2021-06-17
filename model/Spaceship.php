<?php
class Spaceship extends Mobility{
    public $hyperdrive_rating;
    public $MGLT;
    public $starship_class;

    public function __constuct(
        $hyperdrive_rating,
        $MGLT,
        $starship_class
        ){
            $this->$hyperdrive_rating = $hyperdrive_rating;
            $this->$MGLT = $MGLT;
            $this->$starship_class = $starship_class;
            parent::__construct(
                $name,
                $model,
                $manufacturer,
                $cost_in_credits,
                $length,
                $max_atmosphering_speed,
                $crew,
                $passengers,
                $cargo_capacity,
                $consumables,
                $pilots,
                $films,
                $created,
                $edited,
                $url
            );
        }
}
?>