<?php

require_once 'conexao.class.php';
require_once 'post.class.php';

interface IRepositorioPost{
    public function cadastrarPost($post);
    public function atualizarPost($post);
    public function buscarPost($post);
    public function removerPost($post);
    public function getlistaPost();
}
class RepositorioPostMySQL implements IRepositorioPost{
    private $conexao;
    //conexao
    public function __construct() {
        $this->conexao = new conexao("localhost", "root", "usbw", "helpix");
        if($this->conexao->conectar() == false){
            echo "Erro ".mysqli_error();
        }
    }
    //cadastra Post
    public function cadastrarPost($post) {
        $codigo = $post->getCodigo();
        $titulo = $post->gettitulo();
        $id_usuario = $post->getid_usuario();
        $postagem = $post->getpost();
        $id_tag = $post->getid_tag();
        
        $sql = "INSERT INTO `helpix`.`posts` (`id_post`, `titulo`, `id_usuario`, `postagem`, `id_tag`) VALUES ('$codigo','$titulo','$id_usuario','$postagem','$id_tag')";
        
        $this->conexao->executarQuery($sql);
    }
    // remove um Post da lista
    public function removerPost($codigo) {
        $sql = "DELETE FROM posts WHERE id_post = '$codigo'";
        $this->conexao->executarQuery($sql);
    }
    // altera Post da lista
    public function atualizarPost($post){
        $codigo = $post->getCodigo();
        $titulo = $post->gettitulo();
        $id_usuario = $post->getid_usuario();
        $postagem = $post->getpost();
        $id_tag = $post->getid_tag();
        
        $sql = "UPDATE posts SET id_post = '$codigo', titulo = '$titulo', id_usuario = '$id_usuario', postagem = '$postagem', id_tag = '$id_tag' WHERE id_post = '$codigo'";
        $this->conexao->executarQuery($sql);
    }
    
    // Busca um novo Post a partir de seu codigo
    
    public function buscarPost($codigo) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM posts WHERE id_post = '$codigo'");
        return $linha;
    }

    public function buscarPostagem($titulo) {
        $linha = $this->conexao->obtemPrimeiroRegistroQuery("SELECT * FROM posts WHERE titulo = '$titulo'");
        return $linha;
    }

    public function buscarPosts($codigo) {
        $linha = $this->conexao->executarQuery("SELECT * FROM posts WHERE id_post = '$codigo'");
        return $linha;
    }
    
    public function verificarPost($user) {
        $registro = $this->conexao->executarQuery("SELECT * FROM posts WHERE id_usuario = '$user'");
        return $registro;
    }

    public function verificarPaginaPost($user,$inicio,$fim) {
        $registro = $this->conexao->executarQuery("SELECT * FROM posts WHERE id_usuario = '$user' LIMIT $inicio, $fim");
        return $registro;
    }
    
    public function getlistaPost() {
        $listagem_Post = $this->conexao->executarQuery("SELECT * FROM posts");
        return $listagem_Post;
    }
    
    public function getlistaPaginaPost($inicio,$fim) {
        $listagem_Post = $this->conexao->executarQuery("SELECT * FROM posts LIMIT $inicio, $fim");
        return $listagem_Post;
    }
    /*public function getlistaPost() {
        $listagem = $this->conexao->executarQuery("SELECT * FROM posts");
        $arrayPost = array();
        while ($linha = mysqli_fetch_array($listagem)){
            $post = new Post(
                $linha['id_post'],
                $linha['titulo'],
                $linha['id_usuario'],
                $linha['post']
            );
            array_push($arrayPost,$post);
        }
        return $arrayPost;
    }*/
}

$repositorio = new RepositorioPostMySQL();
?>
