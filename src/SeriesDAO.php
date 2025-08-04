<?php 
require_once "ConexaoBD.php";

class SeriesDAO{
    static function cadastrar(){
        $sql = "insert into serie(titulo_serie, diretor_serie, ano_serie, elenco_serie, premios_serie, temporadas_serie, episodios_serie, id_categoria, id_classificacao, imagem_serie) values (?,?,?,?,?,?,?,?,?,?);";
        $conexao = ConexaoBD::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1,$_GET['titulo_serie']);
        $stmt->bindParam(2,$_GET['diretor_serie']);
        $stmt->bindParam(3,$_GET['ano_serie']);
        $stmt->bindParam(4,$_GET['elenco_serie']);
        $stmt->bindParam(5,$_GET['premios_serie']);
        $stmt->bindParam(5,$_GET['temporadass_serie']);
        $stmt->bindParam(5,$_GET['episodios_serie']);
        $stmt->bindParam(9,$_GET['id_categoria']);
        $stmt->bindParam(10,$_GET['id_classificacao']);
        $stmt->bindParam(11,$_GET['imagem_serie']);

        $stmt->execute();
    }

    static function consultar(){
        $sql = "select * from serie;";
        $conexao = ConexaoBD::conectar();
        $resultado = $conexao->query($sql);
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>