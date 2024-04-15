<?php 
    class connection{
        static public function infoDataBase(){
            $infoDB = array(
                "host" => "roundhouse.proxy.rlwy.net",
                "port" => "50981",
                "database" => "railway",
                "user" => "root",
                "password" => "AdcMFeqUeaDzEGtcKBOjgmmCGClmWcEX"
            );
            return $infoDB;
        }
        
        static function connect(){
            try{

                $databaseConfig = Connection::infoDataBase();
                $connectionDNS = "mysql:host={$databaseConfig['host']};port={$databaseConfig['port']};dbname={$databaseConfig['database']}";
                
                $connectionDB = new PDO(
                    $connectionDNS,
                    $databaseConfig['user'],
                    $databaseConfig['password']
                );

                $connectionDB -> exec("set names utf8");

            }catch(PDOException $e){

                die("Error:" . $e -> getMessage());

            }

            return $connectionDB;

        }
    }
?>