<?php
    class Controller{

        public $vars = array();
        public $request;
        function __construct($request){
            $this->request=$request;
        }



        public function render($view){// elle permet de rendre view
            extract($this->vars);// avoir
            $view=ROOT.DS.'view'.DS.$this->request->controller.DS.$view.'.php';
            ob_start();
            require $view;
            $content_for_layout = ob_get_clean();
            require ROOT.DS.'view'.DS.'layout'.DS.'default.php';
            //die($view);//a voir

        }
        public function set($key,$value=null){// sa veut dire le deuxieme parametre est optionnel
            if(is_array($key)){
                $this->vars+=$key;
            }else{
                $this->vars[$key]=$value;
            }

              
        }



    
    }




?>