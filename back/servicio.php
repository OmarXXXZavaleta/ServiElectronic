<?php
//include('conexiondb.php');
class servicio
{
    private $nombreServicio;
    private $costoInicial;
    private $tipoServicio;
    private $imagen;
    private $urlVideo;
    private $presentacionServicio;
    private $descripcionServicio;
    
    public function inicializar($nombreServicio, $costoInicial, $urlVideo, $presentacionServicio, $descripcionServicio)
    {
        $this->nombreServicio = $nombreServicio;
        $this->costoInicial = $costoInicial;

        // $this->tipoServicio = $tipoServicio;
        // $this->imagen = $imagen;

        $this->urlVideo = $urlVideo;
        $this->presentacionServicio = $presentacionServicio;
        $this->descripcionServicio= $descripcionServicio;
        
    }


    public function conexion()
    {
        $conn = mysqli_connect("localhost", "root", "", "proyectoservi") or die("Problemas con la conexión a la base de datos");

        //$conn = mysqli_connect("localhost","id19215195_servielectronic801","@ElectronicServi01","id19215195_servielectronic") or die("Problemas con la conexión a la base de datos");
        return $conn;
    }

    public function insertar()
    {
        $registros = mysqli_query($this->conexion(), "select * from servicios where nombreServicio = '$this->nombreServicio'");

        if ($reg = mysqli_fetch_array($registros)) {
            echo 'ya existe intenta de nuevo';
        } else {
            mysqli_query($this->conexion(), "INSERT INTO servicios(nombreServicio, costoInicialServicio, urlVideo, presentacionServicio, descripcionServicio, status) VALUES ('$this->nombreServicio', '$this->costoInicial','$this->urlVideo', '$this->presentacionServicio', '$this->descripcionServicio', 1)") or die("Problemas en el insert" . mysqli_error($this->conexion()));
            echo 'El nuevo dispositivo se almaceno';
        }
    }

    
}
