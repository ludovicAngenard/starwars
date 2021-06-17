<?php
class Film extends Model {
    public  $title;
    public  $episode_id;
    public  $opening_crawl;
    public  $director;
    public  $producer;
    public  $release_date;
    public  $created;
    public  $edited;
    public  $url;

    public function __construct(
        $title,
        $episode_id,
        $director,
        $producer,
        $release_date,
        $opening_crawl,
        $created,
        $edited,
        $url) {

            $this->title = $title;
            $this->director = $director;
            $this->producer = $producer;
            $this->release_date = $release_date;
            $this->opening_crawl = $opening_crawl;
            $this->episode_id = $episode_id;
            $this->created = $created;
            $this->edited = $edited;
            $this->url = $url;
    }

    public static function getEntityByTitle($title){
        foreach (Model::$entity_list['films'] as $key => $value) {
            if ($value->title == $title){
                return $value;
            }
        }
    }

}
?>