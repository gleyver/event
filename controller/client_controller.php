<?php

  // Include class model
  require_once './model/client_model.php';
  require_once './controller/validacao.php';
//  require_once 'vendor/autoload.php';

class Client{

    //Atributtes
    public $name;
    public $cpf;
    public $email;
    public $adddress;
    public $this;

    //Create function for plus client
    public function addClient(){

//       $params = JansenFelipe\CpfGratis\CpfGratis::getParams();

        // Instance Class
        $clientDAO =  new ClientDAO();
        $validacao =  new Validacao();

        $validado = $validacao::validaCPF($_POST["txtCPF"]);

        if($validado == true){
            /* get text write user*/
            $clientDAO->name = $_POST["txtName"];
            $clientDAO->cep = $_POST["txtCep"];
            $clientDAO->cpf = $_POST["txtCPF"];
            $clientDAO->address = $_POST['txtAddress'];
            $clientDAO::insert($clientDAO); //insertDAO
        }else{

            echo "<script> 
                      alert('Digite o CPF correto'); 
                      window.location.assign('./view/home.php'); 
                 </script>";

        }




    }

    //Create function for list all client
    public function listAllClient(){

        $clientDAO =  new ClientDAO();// Instance class ClientDAO

        return $clientDAO::listAll(); //return list Client for view

    }

    //Create function for plus client
    public function updateClient(){

        $clientDAO =  new ClientDAO();// Instance class ClientDAO

        /* get text write user*/
        $clientDAO->name = $_POST["txtName"];
        $clientDAO->email = $_POST["txtEmail"];
        $clientDAO->cpf = $_POST["txtCPF"];
        $clientDAO->address = $_POST['txtAddress'];

        return $clientDAO->update($clientDAO); // pass for DAO in update

    }



  }


 ?>
