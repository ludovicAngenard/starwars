<?php
class Vehicle extends Mobility{
    public $vehicle_class;

    public function __constuct(
        $vehicle_class
        ){
            $this->$vehicle_class = $vehicle_class;
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
                $url,
            );
        }
}
?>