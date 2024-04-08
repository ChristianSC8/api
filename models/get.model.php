<?php 
    require ("connection.php");

    class getModel{
        static public function getData($table, $select){
            $sql = "SELECT $select FROM $table";

            $stmt = Connection::connect()->prepare($sql);
            $stmt -> execute();
            return $stmt -> fetchAll(PDO::FETCH_CLASS);
        }
    }
?>