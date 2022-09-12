<?php

    class Postagem
    {
        public static function selecionaTodos()
        {
			$con = Connection::getConn();
            
            $sql = "SELECT * FROM postagem ORDER BY id DESC";
            $sql = $con->prepare($sql);
            $sql->execute();

            $resultado = array();
            while($row = $sql->fetchObject('Postagem')){
                $resultado[] = $row;
            }
            if(!$resultado){
                throw new Exception("Not Found Any Record");
            }
            return $resultado;
        }
    }

?>