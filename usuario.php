<?php 

require_once "model.php";
 
class usuario extends model{

	protected $table = "usu";
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $idade;
    private $foto;



    public function insert()
    {
     
       $stmt = $this->prepare("INSERT INTO $this->table (NOME, EMAIL, SENHA, IDADE, FOTO) VALUES 
        (:NOME, :EMAIL, :SENHA,:IDADE,:FOTO)");
       
       $stmt->bindParam(":NOME", $this->nome);
       $stmt->bindParam(":EMAIL", $this->email);
       $stmt->bindParam(":SENHA", $this->senha);
       $stmt->bindParam(":IDADE", $this->idade);
       $stmt->bindParam(":FOTO", $this->foto);
       $stmt->execute();
       $stmt->closeCursor();
    }


    public function delete($id)
    {
        $stmt = $this->prepare("DELETE FROM $this->table WHERE id = :ID");
        $stmt->bindParam(":ID", $id);
        $stmt->execute();
        $stmt->closeCursor();
    }

 public function update()
    {
        
        $stmt = $this->prepare("UPDATE $this->table SET NOME = :NOME, EMAIL = :EMAIL, SENHA = :SENHA,
                                    IDADE = :IDADE, FOTO = :FOTO WHERE id = :ID");

        $stmt->bindParam(":ID", $this->id);
        $stmt->bindParam(":NOME", $this->nome);
        $stmt->bindParam(":EMAIL", $this->email);
        $stmt->bindParam(":SENHA", $this->senha);
        $stmt->bindParam(":IDADE", $this->idade);
        $stmt->bindParam(":FOTO", $this->foto);
        $stmt->execute();
        $stmt->closeCursor();
    }



    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }





}



?>