<?php 

    class Core 
    {
        public function start($urlGet)
        {
            $controller = ucfirst($urlGet['pagina'].'Controller');
            $method = 'index';
            call_user_func_array(array(new $controller, $method), array());
        }
    }

?>