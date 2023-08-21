<?php
require_once("./util/config.php");
class ConDB{
    public $con = null;

    public function __construct(){
        try{
            $this->con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);
            if ( mysqli_connect_error()){
                echo "Error". mysqli_connect_error();
            }else{
                echo "Conectado";
            }
        }catch(Exception $e){
            var_dump($e);
            echo "error conexión:". mysqli_connect_error();
        }
    }
}

?>