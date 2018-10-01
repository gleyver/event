<?php
/**
 * Created by PhpStorm.
 * User: Gleyver
 * Date: 30/09/2018
 * Time: 19:17
 */?>

<?php
require_once '../model/connection.php';

$db = new MySqlDB();// Instance db

// Get connection to database
$conn = $db->getConnection();
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/style_home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"/>
    <script>
        $(document).ready(function(){
            $(".editar").click(function(){
                $(".container_modal").fadeIn(2000);
            });
        });

        //Editar
        function Editar(IdIten){
            $.ajax({
                type:"GET",
                url:"modal_edit.php",
                data: {modo:'buscarId',id:IdIten},
                success: function(dados){
                    $('.modal').html(dados);
                }
            });
        }
    </script>
</head>
<body>
<div class="container_modal"><!--container da modal-->
    <div class="modal"><!--modal-->
    </div>
</div>
<div class="content">

</div>
<form class="" action="listar_editar_mesas.php" method="post">
    <div class="suporte_conteudo">
        <?php include_once './../include/menu.php'; ?>
        <div class="suporte_titulo">
            <div class="titulo_formulario">
                Listar e editar mesas
            </div>
        </div>
        <div class="suporte_eventos">


                <?php
                    $sql =  "SELECT et.id_event_table, e.name as name_event, c.name as name_client FROM tbl_client as c, tbl_event_table as et, tbl_event as e WHERE c.id_client = et.id_client and et.id_event = e.id_event;"; // SELECT table event


                    $sqli = $conn->prepare($sql); // Execute query
                    $sqli->execute();
                    while($isi = $sqli->fetch(PDO::FETCH_ASSOC)) {
                        $name_event = $isi['name_event'];
                        $name_client = $isi['name_client'];
                        $id = $isi['id_event_table'];
                    ?>
            <div class="suporte_lista">
                <div class="suport_mesa"><?= $name_event ?></div>
                <div class="suport_mesa"><?= $name_client ?></div>
                <div class="suport_mesa"><a href="lancamento_mesas.php?modo=Editar&id=<?= $id ?>"    class="editar">edit</a></div>
                <div class="suport_mesa"><a href="./../router.php?controller=event&action=deletelaunchTable&id=<?= $id ?>">del</a></div>
            </div>
                <?php } ?>


        </div>

    </div>
</form>
</body>
</html>
