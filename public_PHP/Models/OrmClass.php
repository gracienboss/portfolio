<?php
class Orm

 {

     // singleton (ne peut avoir qu'une seule instance qu'a un endroit. 1 seul seul tuyau en seul temps)

    private static $_instance = null;
    private $user = "?";
    private $password = "?";
    private $db = "?";
    
    


    private function __construct(){
    
    
    }

    public static function getInstance()
    {
        if(is_null(self::$_instance)){
            self::$_instance = new Orm();
        }
        return self::$_instance;
    }

    public function getAllData($table)
    {
        //creer la connexion

        $db = new PDO('mysql:host=localhost;dbname=' . $this->db . '',$this->user, $this->password);
        $request = $db->prepare('SELECT * FROM '. $table);
        $request->execute();
        return $request->fetchAll();// renvoi tous les elements
    }

     public function getOneData($table)
    {
        // récupère juste 1 donnée
        $db = new PDO('mysql:host=localhost;dbname=' . $this->db . '',$this->user, $this->password);
        $request = $db->prepare('SELECT * FROM '. $table);
        $request->execute();
        return $request->fetch();
    }

    public function insertData($table,$name, $description)
    {
        
        $db = new PDO('mysql:host=localhost;dbname=' . $this->db . '',$this->user, $this->password);
        $request = $db->prepare('INSERT INTO '. $table . '(name, description) VALUES (:name, :description)');
        $request->bindParam(':name', $name);
        $request->bindParam(':description', $description);        
        $request->execute();
        return True;
    }

      public function deleteData($table, $id)
    {
        
        $db = new PDO('mysql:host=localhost;dbname=' . $this->db . '',$this->user, $this->password);
        $request = $db->prepare('DELETE FROM '. $table . ' WHERE id=:id');
        $request->bindParam(':id', $id);       
        $request->execute();
        return True;
    }


}