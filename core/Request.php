<?php
// avoire la requete de l'utilisateur
class Request{

    public $url; // URL apple par l'utilisateur
    function __construct(){
            $this->url = $_SERVER['REQUEST_URI'];// avoir l'urll taper par l'utilisateur PATH_INFO n'est plus utilise
            // apres un $this->ne pas utiliser $ mais directement le nom
            // REQUEST_URI donne tous l'url
    }
}

?>