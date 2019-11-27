<?php
class Especialidade{
    public $id_especialidade;
    public $especialidade;
    public $valor_dia;

    function getId(){
        return $this->id_especialidade;
    }

    function setId($id){
        $this ->id_especialidade = $id;
    }

    public function getEspecialidade(){
        return $this ->especialidade;
    }

    public function setEspecialidade(){
        $this->especialidade;
    } 
    //valor ----------------
    public function getValor_dia(){
        return $this->valor_dia;
    }
    public function setValor_dia(){
        $this->valor_dia - $valor_dia;
    }

    function add(){
        try{
            $sql = "Insert into especialidade (especialidade, valor_dia) values(:especialidade, :valor)";
            require_once("dao.php");
            $dao = new Dao;
            $stman =$dao->conecta()->prepare($sql);
            $stman ->bindParam(":especialidade",getEspecialidade());
            $stman ->bindParam(":logradouro", getValor_dia());
            $stman->execute();
            aviso("Cadastrado!");    
        } catch(Exception $e){
            erro("Erro ao cadastrar! " . $e->getMessage());
        }
    }
}
function listAll()
{
    $result =null;
    try{
        $sql = "select *from especialidade";
        require_once("dao.php");
        $dao = new Dao;
        $stman =$dao->conecta()->prepare($sql);
        $stman->execute();
        $result = $stman->fetchAll(PDO::FETCH_OBJ);
    } catch(Exception $e){
        erro("Erro ao listar! " . $e->getMessage());
    }
    return $result;
}
}
