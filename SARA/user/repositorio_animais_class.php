<?php

require_once 'conexao.class.php';
require_once 'Animais.class.php';

interface IRepositorioAnimais{
    public function cadastraranimais($animais);
    // public function atualizaranimais($animais);
    public function buscaranimais($animais);
    // public function removeranimais($animais);
    public function getlistaanimais();
}
class RepositorioAnimaisMySQL implements IRepositorioAnimais{
    private $conexao;
    //conexao
    public function __construct() {
        $this->conexao = new conexao("localhost", "root", "usbw", "sara");
        if($this->conexao->conectar() == false){
            echo "Erro! Conexão não identificada".mysqli_error();
        }
    }
    //cadastra animais
    public function cadastraranimais($animais) {
        $id_animais = $animais->getid_animais();
        $animal = $animais->getanimais();
        $id_especie = $animais->getid_especie();
        $id_familia = $animais->getid_familia();
        $id_classe  = $animais->getid_classe();
        $id_filo    = $animais->getid_filo();
        $id_ordem   = $animais->getid_ordem();
        $id_genero  = $animais->getid_genero();
        $id_subspecie = $animais->getid_subspecie();

        $sql = "INSERT INTO `sara`.`animais` (
            `id_animais`,
            `animais`,
            `id_especie`,
            `id_familia`,
            `id_classe`,
            `id_filo`,
            `id_ordem`,
            `id_genero`,
            `id_subspecie`
            ) VALUES (
                '$id_animais',
                '$animal',
                '$id_especie',
                '$id_familia',
                '$id_classe',
                '$id_filo',
                '$id_ordem',
                '$id_genero',
                '$id_subspecie')";

        $this->conexao->executarQuery($sql);
    }
    // // remove um autor da lista
    // public function removerAutor($codigo) {
    //     $sql = "DELETE FROM autores WHERE id_autor = '$codigo'";
    //     $this->conexao->executarQuery($sql);
    // }
    // // altera autor da lista
    // public function atualizarAutor($autor){
    //     $codigo = $autor->getCodigo();
    //     $animais = $autor->getanimais();
    //     $foto = $autor->getFoto();
    //     $descricao = $autor->getDescricao();

    //     $sql = "UPDATE autores SET id_autor = '$codigo', animais = '$animais', foto = '$foto', descricao = '$descricao' WHERE codigo = '$codigo'";

    //     $this->conexao->executarQuery($sql);
    // }

    // Busca um novo autor a partir de seu codigo

    public function buscaranimais($id_animais) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM animais WHERE id_animais = '$id_animais'");
        return $linha;
    }

    public function verificaranimais($animais) {
        $registro = $this->conexao->obtemRegistroDuplicado("SELECT * FROM animais WHERE animais = '$animais'");
        return $registro;
        if (!$registro){
            echo 'erro';
        }
    } 

    public function getlistaanimais() {
        $lista_animais = $this->conexao->executarQuery("SELECT * FROM animais");
        return $lista_animais;
    }

}

$repositorio = new RepositorioAnimaisMySQL();
?>
