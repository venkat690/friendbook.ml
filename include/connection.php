<?php
Class Connection {
    private  $server = "mysql:host=localhost;dbname=cloudways";
    private  $user = "root";
    private  $pass = "";
    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                              PDO::ATTR_EMULATE_PREPARES   => false
                            );
    protected $con;
    function __construct() {
        try{
            $this->con = new PDO($this->server, $this->user,$this->pass,$this->options);
            return $this->con;
          }
          catch (PDOException $e){
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
          }
    }
    public function closeConnection(){
      $this->con = null;
    }
    public function insert_data($query, $params = [] ){
      try{
        $stmt = $this->con->prepare($query);
        $stmt->execute($params);
        return TRUE;
      }catch (PDOException $e){
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
      }
    }
    public function update_data($query, $params = [] ){
      try{
        $stmt = $this->con->prepare($query);
        $stmt->execute($params);
        return TRUE;
      }catch (PDOException $e){
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
      }
    }
    public function delete_data($query, $params = [] ){
      try{
        $stmt = $this->con->prepare($query);
        $stmt->execute($params);
        return TRUE;
      }catch (PDOException $e){
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
      }
    }
    public function select_single_row($query, $params = [] ){
      try{
        $stmt = $this->con->prepare($query);
        $stmt->execute($params);
        return $stmt->fetch();
      }catch (PDOException $e){
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
      }
    }
    public function select_mutiple($query, $params = [] ){
      try{
        $stmt = $this->con->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll();
      }catch (PDOException $e){
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
      }
    }
    public function row_count($query, $params = [] ){
      try{
        $stmt = $this->con->prepare($query);
        $stmt->execute($params);
        return $stmt->rowCount();
      }catch (PDOException $e){
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
      }
    }   
    
}
?>