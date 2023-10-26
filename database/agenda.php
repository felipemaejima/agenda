<?php
require './connect.php';

session_start();

date_default_timezone_set('America/Sao_Paulo');

class Agenda {
    private $titulo;
    private $ds;
    private $dt;
    private $hr;
    private $dt_final;
    private $hr_final;
    private $imp;
    private $sql;

    public function __construct() {
        $this->titulo = $_POST['titulo'];
        $this->ds = $_POST['descricao'];
        $this->dt = $_POST['data'];
        $this->hr = $_POST['hora'];
        $this->dt_final = $_POST['data2'];
        $this->hr_final = $_POST['hora2'];
        $this->imp = $_POST['importancia'];
    }

    public function criarCompromisso() {
        $dt_hr = date('Y-m-d H:i:s', strtotime($this->dt . $this->hr));
        $criacao = date('Y-m-d H:i:s');
        $sql = "INSERT INTO compromissos (descricao, data_comp, data_criacao, titulo, importancia) values (
            '$this->ds', 
            '$dt_hr', 
            '$criacao',
            '$this->titulo',
            $this->imp
        )";
        return $this->sql = $sql;
    }
    public function consultarCompromisso() {
        $ds = !empty($this->ds)? "AND descricao = '$this->ds' ": " ";
        $imp = !empty($this->imp)? "AND importancia = $this->imp ": " ";
        $titulo = !empty($this->titulo)? "AND titulo = '$this->titulo' " : " ";
        $data_inicial = '1900-01-01 10:00:00';
        $data_final = '3000-01-01 10:00:00';
        if (!empty($this->dt) && !empty($this->hr)) {
            $data_inicial = date('Y-m-d H:i:s', strtotime($this->dt . $this->hr));
        } elseif (!empty($this->dt)) {
            $data_inicial = date('Y-m-d', strtotime($this->dt));
        };
        if (!empty($this->dt_final) && !empty($this->hr_final)) {
            $data_final = date('Y-m-d H:i:s', strtotime($this->dt_final . $this->hr_final));
        } elseif (!empty($this->dt_final)) {
            $data_final = date('Y-m-d', strtotime($this->dt_final));
        };
        $filtro_intervalo = " AND data_comp BETWEEN '$data_inicial' and '$data_final' ";

        $filtro = "WHERE  1=1  
        $ds
        $titulo 
        $imp 
        $filtro_intervalo";

        $sql = "SELECT * FROM compromissos $filtro ";
        echo $sql;
        return $this->sql = $sql;
    }
}
$agenda = new Agenda(); 
if ($_GET['tipo'] == 1) {
    $sql = $agenda->criarCompromisso();
    $conn->query($sql);
    header("Location: ../src/cadastrar.php");
} elseif ($_GET['tipo'] == 2) {
    $sql = $agenda->consultarCompromisso();
    $consulta = $conn->query($sql);
    $dados = $consulta->fetch_all(MYSQLI_ASSOC);
    $_SESSION['consulta'] = $dados;
    header("Location: ../src/consultar.php?listagem=1");
}
