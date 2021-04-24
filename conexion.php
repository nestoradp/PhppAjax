<?php

class conexion {

    private $host = 'localhost';
    private $port = '5432';
    private $db = 'usuarios';
    private $user = 'postgres';
    private $pass = 'postgres';
    private $conexion;

    function __construct() {
        
    }

    private function conectar() {
        $this->conexion = pg_connect("host=$this->host port=$this->port dbname=$this->db user=$this->user password=$this->pass");
    }

    private function desconectar() {
        pg_close($this->conexion);
    }

    public function consulta($query) {
        $this-> conectar();
        $consulta = pg_query($this->conexion, $query);
     //  $datos = pg_fetch_all($consulta);
        $this->desconectar();
      return $consulta;
    }

     public function consultaElemntos($query) {
        $this-> conectar();
        $consulta = pg_query($this->conexion, $query);
     
     $output = array();

        while ($record = pg_fetch_assoc($consulta)) {
            $output[] = $record;
        }

     
        
        
        $this->desconectar();
      return $output;
    }
    
    
}
?>

