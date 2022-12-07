<?php

Class Usuario{

    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha){
        global $pdo;
        try{
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        }catch(PDOException $e){
            $msgErro = $e->getMessage();
        }    
    }


    public function cadastrar($usuario, $email, $senha){
        global $pdo;
        //verifica no banco

        $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();

        if($sql->rowCount() > 0){ //se retornar falso é pq já existe o email cadastrado no banco
            return false;
        }else{
            $sql = $pdo->prepare("INSERT INTO usuarios (usuario, email, senha) VALUES (:u, :e, :s)");
            $sql->bindValue(":u", $usuario);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();
            return true;
        }

    }

    public function logar($email, $senha){
        global $pdo;

        $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :e AND senha = :s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", md5($senha));
        $sql->execute();
        if($sql->rowCount() > 0 ){

            $dado = $sql->fetch();
            session_start();
            $_SESSION['id'] = $dado['id'];
            return true;
        }else{
            return false;
        }
    }
}