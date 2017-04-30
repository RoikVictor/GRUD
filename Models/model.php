<?php
class Article
{
    private $dbhost = "localhost";
    private $dbname = "CRUD";
    private $dataBase_username = 'root';
    private $dataBase_password = 'root';
    public $pdo_conn;

    private function getConnection()
    {
        $pdo_conn = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->dataBase_username, $this->dataBase_password);
        return $pdo_conn;
    }

    public function insert($name, $description, $created_at)
    {
        $getConn = $this->getConnection();
        $sql = "INSERT INTO article (name, description, created_at) VALUES ( :name, :description, :created_at)";
        $pdo_statement = $getConn->prepare($sql);
        $pdo_statement->bindValue(":name", $name);
        $pdo_statement->bindValue(":description", $description);
        $pdo_statement->bindValue(":created_at", $created_at);
        $pdo_statement->execute();
       // var_dump($pdo_statement->errorInfo());
        return $pdo_statement->errorInfo();
            //$getConn->lastInsertId();
    }

    public function select()
    {
        $getConn = $this->getConnection();
        $sql = "SELECT * FROM article";
        $pdo_statement = $getConn->prepare($sql);
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        return $result;
    }

    public function updateById($name, $description, $created_at, $id)
    {
        $getConn = $this->getConnection();
        $sql = "UPDATE article SET name = :name, 
description = :description,
 created_at = :created_at 
 WHERE id = :id";
        $pdo_statement = $getConn->prepare($sql);
        $pdo_statement->bindValue(":name", $name);
        $pdo_statement->bindValue(":description", $description);
        $pdo_statement->bindValue(":created_at", $created_at);
        $pdo_statement->bindValue(":id", $id);
        $result = $pdo_statement->execute();
        return $result;
    }

    public function deleteById($id)
    {
        $getConn = $this->getConnection();
        $sql = "DELETE FROM article WHERE id=:id";
        $pdo_statement = $getConn->prepare($sql);
        $pdo_statement->bindValue(":id", $id);
        $result = $pdo_statement->execute();
        return $result;
    }

//--------------------------------------------------------------------

    public function selectAll()
    {
      $getConn = $this->getConnection() ;
      $sql = "SELECT * from article";
      $pdo_statment = $getConn->prepare($sql);
      $pdo_statment->execute();
      return $pdo_statment->fetchAll();
    }

    public function findById($id)
    {
        $getConn = $this->getConnection();
        $sql = ('SELECT * FROM article WHERE id = :id');
        $pdo_statement = $getConn->prepare($sql);
        $pdo_statement->execute(array(':id' => $id));
        $result = $pdo_statement->fetch();
        return $result;
    }

    public function update( $id,$name, $description, $created_at)
    {
        $getConn = $this->getConnection();
        $sql = "UPDATE article SET name = :name, 
        description = :description,
        created_at = :created_at 
        WHERE id = :id";
        $pdo_statement = $getConn->prepare($sql);
        $pdo_statement->bindValue(":id", $id);
        $pdo_statement->bindValue(":name", $name);
        $pdo_statement->bindValue(":description", $description);
        $pdo_statement->bindValue(":created_at", $created_at);
        $result = $pdo_statement->execute();
        return $result;
    }
}