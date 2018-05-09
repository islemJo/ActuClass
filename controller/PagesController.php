<?php
class PagesController extends Controller{
    
    function view($nom){//doit etre comme nom de la request->action
       //echo "vous avez demande la page :". $nom;
       //$this->set('phrase', 'Bienvenu sur lapage '.$nom);
       $this->set(array(
           'phrase' => 'Salut',
           'nom ' => 'machin'
       )) ;
       $this->render('index');

    }
    
}



?>