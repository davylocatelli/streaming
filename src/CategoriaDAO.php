<?php
require_once "ConexaoBD.php";

class CategoriaDAO{
    static function consultar(){
        $sql = "select * from categoria;";
        $conexao = ConexaoBD::conectar();
        $resultado = $conexao->query($sql);
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>