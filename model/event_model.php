<?php


require_once './model/connection.php';

class EventDAO{

  public function insert($eventDAO){
    $db = new MySqlDB();

    // Get connection to database
    $conn = $db->getConnection();

      try{
          $sql = "INSERT INTO tbl_event(name, qtd_table, date, address) VALUES ('$eventDAO->name_event', $eventDAO->qtd_table, '$eventDAO->date_event', '$eventDAO->address_event')";
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

  public function listAll($eventDAO){
    $db = new MySqlDB();

    // Get connection to database
    $conn = $db->getConnection();



    // Close connection to database
    $db->offConnection();

  }

  public function update($eventDAO){
    $db = new MySqlDB();

    // Get connection to database
    $conn = $db->getConnection();



    // Close connection to database
    $db->offConnection();

  }


  public function insertLaunchTable($eventDAO){

    $db = new MySqlDB();

    // Get connection to database
    $conn = $db->getConnection();

    try{
      $sql = "INSERT INTO tbl_event_table(id_event, ocupada, id_client) VALUES ($eventDAO->name_event,'$eventDAO->qtd_table',$eventDAO->name_client)";
      echo $sql;
      $query =  $conn->query($sql); //prepare of query
      header('location: view/lancamento_mesas.php');
    }catch (\Exception $e){

        echo "<script>
                    alert('Erro ao inserir');
              </script>";
    }



    // Close connection to database
    $db->offConnection();

  }


  public function updateLaunchTable($eventDAO){

    $db = new MySqlDB();

    // Get connection to database
    $conn = $db->getConnection();

      $sql = "UPDATE tbl_event_table
              SET ocupada = '$eventDAO->qtd_table'
              WHERE id_event_table = $eventDAO->id;";
      echo $sql;
      $query =  $conn->query($sql); //prepare of query
      header('location: view/listar_editar_mesas.php');


      // Close connection to database
    $db->offConnection();

  }


  public function deleteLaunchTable($eventDAO){


    $db = new MySqlDB();

    // Get connection to database
    $conn = $db->getConnection();

    try{
      $sql = "DELETE FROM tbl_event_table WHERE id_event_table = $eventDAO->id";
      echo $sql;
      $query =  $conn->query($sql); //prepare of query
      header('location: view/listar_editar_mesas.php');
    }catch (\Exception $e){

      echo "<script>
                      alert('Erro ao inserir');
                </script>";
  }
    // Close connection to database
    $db->offConnection();

  }

}

 ?>
