<?php
class Dispatcher{

    var $request;

    function __construct(){// le constructeur par defaut de Dispatcher
        //echo "lol";
        $this->request = new Request(); // cree une requete
        //$this->request->url;//
        Router::parse($this->request->url,$this->request);
        // les :: c'est que Router class globale pas instancier une seule Route
        // dans une fonction si un parametre est en entree est change a la fin de la fonction il sera change
        $controller = $this->loadController();   
        //$controller->view(); 
     //  call_user_func_array(array($controller,$this->request->action),array()); //elle execute la fonction avex le nom de action dans request
       call_user_func_array(array($controller,$this->request->action),$this->request->params); //elle execute la fonction avex le nom de action dans request
    
    }


    function loadController(){
        $name = ucfirst($this->request->controller).'Controller'; // mettre le nom de Controller en majiscule qui se trouve dans dossier controller
        $file=ROOT.DS.'controller'.DS.$name.'.php';
        require $file;
        return new $name($this->request);
    }
    
}


?>