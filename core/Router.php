<?php
// c'est une classe globale qui n'est pas instanciable 
class Router{
    /**
     * permet de parser une url
     * @param $url Url a parser
     *
     * 
     */
    static function parse($url,$request){
        $url= trim($url,'/ActuClass');
        $params = explode('/',$url);//retourne un tableau avec les chaine separer par le separateur mis 
        $request->controller = $params[0];
        $request->action = isset($params[1]) ? $params[1] : 'index';
        $request->params =array_slice($params,2);//cree un tableau avec nom param et qui a 2 index de tableau
        return true;
    }



}


?>