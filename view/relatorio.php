<?php
/**
 * Created by PhpStorm.
 * User: Gleyver
 * Date: 27/09/2018
 * Time: 08:26
 */
?>

<?php
require_once '../model/connection.php';
$db = new MySqlDB();// Instance db

// Get connection to database
$conn = $db->getConnection();

//require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/style_home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="content">

</div>
<form class="" action="gera_relatorio.php" method="post">
    <div class="suporte_conteudo">
        <?php include_once './../include/menu.php'; ?>
        <div class="suporte_titulo">
            <div class="titulo_formulario">
                Cadastro de Mesas
            </div>
        </div>
        <div class="suporte_eventos">
            <div class="titulo_subtopicos">
                Evento
            </div>
            <div class="campos">

                <select name="txtNameEvent">
                    <?php
                    $sql =  "SELECT id_event, name FROM tbl_event;"; // SELECT table event


                    $sqli = $conn->prepare($sql); // Execute query
                    $sqli->execute();
                    while($isi = $sqli->fetch(PDO::FETCH_ASSOC)) {
                        $cod = $isi['id_event'];
                        $name = $isi['name'];


                        ?>
                        <option value="<?php echo $cod ?>">
                            <?php echo $name ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="suporte_eventos">
            <div class="segura_botao">

                <input type="submit" name="btn_confirmar" value="IMPRIMIR"  class="btn_confirmar">
            </div>

        </div>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
