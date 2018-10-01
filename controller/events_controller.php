<?php

  // Include class model
  require_once './model/event_model.php';

  class Event{

    //Atributtes
    public $name_event;
    public $location_event;
    public $date_event;
    public $qtd_table;
    public $table;
    public $cont_array_table;

    //Create function for plus client
    public function addEvent(){

        $eventDAO =  new EventDAO(); // Instance class EventDAO

        /* get text write user*/
        $eventDAO->name_event = $_POST["txtNameEvent"];
        $eventDAO->address_event = $_POST["txtLocationEvent"];
        $eventDAO->date_event = $_POST["txtDateEvent"];
        $eventDAO->qtd_table = $_POST["txtQtdTable"];


        $eventDAO::insert($eventDAO); //insertDAO

    }

    //Create function for list all client
    public function listAllEvent(){

        $eventDAO =  new EventDAO();// Instance class EventDAO

        return $eventDAO::listAll(); //return list Client for view

    }

    //Create function for plus client
    public function updateEvent(){

        $eventDAO =  new EventDAO();// Instance class EventDAO

        /* get text write user*/
        $eventDAO->name_event = $_POST["txtNameEvent"];
        $eventDAO->location_event = $_POST["txtLocationEvent"];
        $eventDAO->date_event = $_POST["txtDateEvent"];
        $eventDAO->qtd_table = $_POST['txtQtdTable'];

        return $eventDAO->update($eventDAO); // pass for DAO in update

    }

    public function insertlaunchTableEvent(){
        $eventDAO =  new EventDAO();// Instance class EventDAO

        /* get text write user*/
        $eventDAO->name_client = $_POST["txtNameClient"];
        $eventDAO->name_event = $_POST["txtNameEvent"];
        $eventDAO->qtd_table = $_POST["txtTable"];

        echo $eventDAO->name_client."<br>";
        echo $eventDAO->name_event."<br>";
        echo $eventDAO->qtd_table."<br><br><br>";

        $eventDAO->table = explode(",", $eventDAO->qtd_table);

        echo $eventDAO->table[1]."<br>";
        echo $eventDAO->cont_array_table = count($eventDAO->table);

        return $eventDAO->insertLaunchTable($eventDAO); // pass for DAO in insert
    }

    public function updatelaunchTableEvent(){
        $eventDAO =  new EventDAO();// Instance class EventDAO

        /* get text write user*/
        $eventDAO->id = $_GET["id"];
        $eventDAO->qtd_table = $_POST['txtTable'];
        echo
        $eventDAO->updateLaunchTable($eventDAO); // pass for DAO in update
    }

    public function deletelaunchTableEvent(){
        $eventDAO =  new EventDAO();// Instance class EventDAO
        $eventDAO->id = $_GET["id"];
        $eventDAO->deleteLaunchTable($eventDAO); // pass for DAO in delete
    }
  }


 ?>
