<?php 
require_once("../api/db.php");
class Gender{

    public $id;
    public $gendername;

    public $con;
    public $db;

    public function save(){
      try {
    
        $this->con = new Instance();
        $this->db = $this->con->Get();
      
        $sql = "INSERT INTO genders(gender) VALUES (?)";
        $this->db->prepare($sql)->execute([
          $this->gendername,
        ]);
        
        print "New record created successfully";
      } 
      catch (\Throwable $th) {
        //throw $th;
      }
    }
    public function GetAllGenders(){

      $this->con = new Instance();
      $this->db = $this->con->Get();

      $statement = $this->db->prepare("SELECT * FROM genders");
    
      $statement->execute();
    
      $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    
      $json = json_encode($results);
      
      print $json;
     
    
    }
}

?>