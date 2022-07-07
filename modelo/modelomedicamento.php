<?php
class Modelo_mitabla
{
    private $db;private $tabla;
    var $idmed;
    var $nombre;
    var $laboratorio;
    var $presentacion;
    var $pesovol;
    var $unid;
    var $nrolote;
    var $fechaven;
    var $estado;

    var $valor;

    public function __construct()
    {
        $this->db = Conectar::conexion();
    }

    public function datostabla()
    {
        $consulta = $this->db->query("SELECT * FROM medicamento WHERE pesovol > $valor");
        while ($fila = $consulta->fetch_array()) {
            $this->tabla[] = $fila;
        };
        return $this->tabla;
    }
   
    public function getId()
    {
        return $this->idmedic;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getLaboratorio()
    {
        return $this->laboratorio;
    }
    public function getPresentacion()
    {
        return $this->presentacion;
    }
    public function getPeso()
    {
        return $this->pesovol;
    }
    public function getUnid()
    {
        return $this->unid;
    }
    public function getNroLote()
    {
        return $this->nrlote;
    }
    public function getFecha()
    {
        return $this->fechavenc;
    }
    public function getEstado()
    {
        return $this->estado;
    }
    
    public function instabla($id = 0, $fila)
    {
         $sqlinsertar = $this->db->query("insert medicamento(nombre,laboratorio,presentacion,pesovol,unid,nrolote,fechaven,estado)
         values('$fila[0]','$fila[1]','$fila[2]','$fila[3]','$fila[4]','$fila[5]','$fila[6]','$fila[7]');");
       
         header('location: index.php');
    }

    public function eliminar($id){
        $sqlelimina = $this->db->query("delete from medicamento where idmedic=$idmed");
    }
}
?>
