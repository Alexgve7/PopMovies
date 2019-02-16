<?php 
require_once("../api/db.php");
class Gender{

    public $id;
    public $gendername;

    
    public function save(){
      try {
    
        $con = new Instance();
        $db = $con->Get();
     
      
        $sql = "INSERT INTO genders(gender) VALUES (?)";
        $db->prepare($sql)->execute([
          $this->gendername,
        ]);
        
        echo "New record created successfully";
      } 
      catch (\Throwable $th) {
        //throw $th;
      }
    }

}

?>