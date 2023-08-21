<?php
include_once("ConDB.php");
class Usuario{
    private $_con;
    private $usuario;
    private $contrasena;

    public function __construct(){
        $db = new ConDB();
        $this->_con = $db->con;
        $this->usuario = "Sebas";
        $this->contrasena = "678";
    }

    public function registrarUsuario(){
        $query = "INSERT INTO usuarios VALUES(null,'$this->usuario','$this->contrasena');";
        echo $query;
        if(mysqli_query($this->_con, $query)){
            //mysql_close($this->_con);
            echo "Se registró";
        }else{
            echo "error";
        }
    }

    public function queryUsers(){
        $query = "SELECT * FROM usuarios;";
        $resultado = mysqli_query($this->_con, $query);                  
        $data = array();
        while ($row = mysqli_fetch_assoc($resultado)) { 
            $arr = array();
            $arr["id"] = $row["usu_id"];
            $arr["usuario"] = utf8_encode($row["usu_user"]);
            $arr["pass"] = utf8_encode($row["use_password"]);      
            $data[$row["usu_id"]] = $arr;     
        }       
    
    mysqli_free_result($resultado);
    mysqli_close($this->_con); 
    //print_r($data);     
    return $data;
    }

}

?>