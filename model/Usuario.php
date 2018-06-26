<?php
 
class Usuario extends Model{

	protected $table = "usuario";
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $idade;
    private $foto;



    public function insert()
    {
        //ID LOGIN SENHA NM_USUARIO CPF RG DT_NASCIMENTO NIVEL_USER LOGRADOURO NR_CASA CIDADE UF TELEFONE
       $stmt = $this->prepare("INSERT INTO $this->table (NOME, EMAIL, SENHA, IDADE, FOTO) VALUES (:NOME, :EMAIL, :SENHA,:IDADE, :FOTO)");
       
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