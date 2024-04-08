<?php 
    class connection{
        static public function infoDataBase(){
            $infoDB = array(
                "database" => "database-1",
                "user" => "root",
                "pass" => ""
            );
            return $infoDB;
        }
        
        static function connect(){
            try{
                $link = new PDO(
                    "mysql:host=localhost;dbname=".Connection::infoDataBase()["database"],
                    Connection::infoDataBase()["user"],
                    Connection::infoDataBase()["pass"]
                );

                $link->exec("set names utf8");
            }catch(PDOException $e){
                die("Error:" . $e->getMessage());
            }
            return $link;
        }
    }
?>