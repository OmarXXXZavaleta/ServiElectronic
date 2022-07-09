<?php
//include('conexiondb.php');
class dispositivo
{
    private $nombreDispositivo;
    private $modeloDispositivo;
    
    public function inicializar($nombreDispositivo, $modeloDispositivo)
    {
        $this->nombreDispositivo = $nombreDispositivo;
        $this->modeloDispositivo = $modeloDispositivo;
        //$this->statusDispositivo = $statusDispositivo;
    }


    public function conexion()
    {
        $conn = mysqli_connect("localhost", "root", "", "proyectoservi") or die("Problemas con la conexión a la base de datos");

        //$conn = mysqli_connect("localhost","id19215195_servielectronic801","@ElectronicServi01","id19215195_servielectronic") or die("Problemas con la conexión a la base de datos");


        return $conn;
    }

    public function insertar()
    {
        $registros = mysqli_query($this->conexion(), "select * from dispositivos where modeloDispositivo = '$this->modeloDispositivo'");

        if ($reg = mysqli_fetch_array($registros)) {
            echo 'ya existe intenta de nuevo';
        } else {
            mysqli_query($this->conexion(), "INSERT INTO dispositivos(nombreDispositivo, modeloDispositivo, status) VALUES ('$this->nombreDispositivo', $this->modeloDispositivo, 1)") or die("Problemas en el insert" . mysqli_error($this->conexion()));
            echo 'El nuevo dispositivo se almaceno';
        }
    }

    
}
