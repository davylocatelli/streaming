<?php 
class ConexaoBD{
    public static function conectar():PDO{
        $conexao = new PDO("pgsql:host=localhost;dbname=streaming", "postgres", "postgres");
        return $conexao;
    }
}

$conexao = ConexaoBD::conectar();
$sql = "delete from filme where id_filme=1000;";
$conexao->exec($sql);
?>