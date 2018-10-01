<?php

  require_once('./model/connection.php');

  class ClientDAO{

    public function insert($clientDAO){
        $db = new MySqlDB();

        // Get connection to database
        $conn = $db->getConnection();


        try{
            $sql = "INSERT INTO tbl_client(name, cep, cpf, address) VALUES ('$clientDAO->name', '$clientDAO->cep', '$clientDAO->cpf', '$clientDAO->address')";
            $query =  $conn->query($sql); //prepare of query

            echo $sql;
            header('location: view/home.php');
        }catch (\Exception $e){

            echo "<script> 
                    alert('Erro ao inserir');
              </script>";
        }



        // Close connection to database
        $db->offConnection();
    }

    public function listAll($clientDAO){
      $db = new MySqlDB();

      // Get connection to database
      $conn = $db->getConnection();



      // Close connection to database
      $db->offConnection();
    }

    public function update($clientDAO){
      $db = new MySqlDB();

      // Get connection to database
      $conn = $db->getConnection();




      // Close connection to database
      $db->offConnection();
    }

  }



 ?>
