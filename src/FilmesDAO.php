<?php 
require_once "ConexaoBD.php";

class FilmesDAO{
    static function cadastrar(){
        $sql = "insert into filme(titulo_filme, diretor_filme, ano_filme, elenco_filme, premios_filme, imagem_filme, id_categoria, id_classificacao) values (?,?,?,?,?,?,?,?);";
        $conexao = ConexaoBD::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1,$_GET['titulo_filme']);
        $stmt->bindParam(2,$_GET['diretor_filme']);
        $stmt->bindParam(3,$_GET['ano_filme']);
        $stmt->bindParam(4,$_GET['elenco_filme']);
        $stmt->bindParam(5,$_GET['premios_filme']);
        $stmt->bindParam(6,$_GET['imagem_filme']);
        $stmt->bindParam(7,$_GET['id_categoria']);
        $stmt->bindParam(8,$_GET['id_classificacao']);

        $stmt->execute();
    }

    static function consultar(){
        $sql = "select * from filme;";
        $conexao = ConexaoBD::conectar();
        $resultado = $conexao->query($sql);
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>