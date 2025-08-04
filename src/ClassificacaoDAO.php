<?php
require_once "ConexaoBD.php";

class ClassificacaoDAO{
    static function consultar(){
        $sql = "select * from classificacao;";
        $conexao = ConexaoBD::conectar();
        $resultado = $conexao->query($sql);
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>