<?php

abstract class Model {
    public static $entity_list = [];

    public function getEntityByNameAndCollection($collection, $name){
        foreach (Model::$entity_list[$collection] as $key => $value) {
            if ($value->name == $name){
                return $value;
            }
        }
    }

    public static function getAllEntitiesOfCollection($collection){
        return Model::$entity_list[$collection];
    }

    public static function addEntityByCollection($collection, $entity){
        Model::$entity_list[$collection][] = $entity;
        //var_dump(Model::$entity_list);
    }
}
?>