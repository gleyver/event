<?php

// require class controller
require_once "./controller/client_controller.php";
require_once "./controller/events_controller.php";
require_once './model/client_model.php';
require_once './model/event_model.php';
// Get controller to send data
$controller = $_GET["controller"];

// Get action to make some action
$action = $_GET["action"];

// Choose controller
switch ($controller)
{
  case 'client':

    // Choose action
    switch($action)
    {
      case 'add': // Add new client
        $cliente = new Client();

        // Add new client
        Client::addClient();
      break;

      case 'listAll': //list all client
        $cliente = new Client();

        // list all client
        $cliente::listAllClient();
      break;

      case 'update': // update client
        $cliente = new Client();

        // update client
        $cliente::updateClient();
      break;
    }
    break;

  case 'event':

    // Choose action
    switch ($action) {

      case 'add'://Add Events
        $event = new Event(); // Instace class Event controller

        $event::addEvent();
      break;

      case 'listAll': // listEvents
        $event = new Event(); // Instace class Event controller

        $event::listAllEvent(); // list all event
      break;

      case 'update': // UpdateEvents
        $event = new Event(); // Instace class Event controller

        $event::updateEvent(); // Update event
      break;

      case 'insertlaunchTablet'://Add launch table Events
        $event = new Event(); // Instace class Event controller

        $event::insertlaunchTableEvent();//Add launch table Events
      break;

      case 'updatelaunchTable': // update launch Table
        $event = new Event(); // Instace class Event controller
        $event::updatelaunchTableEvent(); // update launch Table
      break;

      case 'deletelaunchTable': // delete launch Table
        $event = new Event(); // Instace class Event controller

        $event::deletelaunchTableEvent(); // delete launch Table
      break;

    }

    break;

    default:

      break;
}

?>
