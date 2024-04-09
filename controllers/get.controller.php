<?php 
    require "models/get.model.php";

    class getController{
        // get sin filtros
        static public function getData($table,$select){
            $response = getModel::getData($table,$select);
            $return = new getController();
            $return -> fncResponse($response);
        }  
        // get con filtros 
        static public function getDataFilter($table,$select,$linkTo,$equalTo){
            $response = getModel::getDataFilter($table,$select,$linkTo,$equalTo);
            $return = new getController();
            $return -> fncResponse($response);
        }  
        //respuesta en formato json.
        public function fncResponse($response){
            if(!empty($response)){
                $json = array(
                    'status' => 200,
                    'total' => count($response),
                    'response' => $response
                );
            }else{
                $json = array(
                    'status' => 404,
                    'response' => 'Not Found'
                );
            }
            echo json_encode($json, http_response_code($json["status"]));
        }
    }
    
?>