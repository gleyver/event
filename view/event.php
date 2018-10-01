<?php
/**
 * Created by PhpStorm.
 * User: Gleyver
 * Date: 26/09/2018
 * Time: 16:18
 */

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
<form class="" action="../router.php?controller=event&action=add" method="post">
    <div class="suporte_conteudo">
      <?php include_once './../include/menu.php'; ?>
        <div class="suporte_titulo">
            <div class="titulo_formulario">
                Cadastro de Eventos
            </div>
        </div>
        <div class="suporte_eventos">
            <div class="titulo_subtopicos">
                Nome
            </div>
            <div class="campos">
                <input type="text" name="txtNameEvent">
            </div>
        </div>
        <div class="suporte_eventos">
            <div class="titulo_subtopicos2">
                Local
            </div>
            <div class="campos">
                <input type="text" name="txtLocationEvent">
            </div>
        </div>
        <div class="suporte_eventos">
            <div class="titulo_subtopicos">
                Data
            </div>
            <div class="campos">
                <input type="text" name="txtDateEvent">
            </div>
        </div>
        <div class="suporte_eventos_obs">
            <div class="titulo_subtopicos2">
                Quantidade Mesas
            </div>
            <div class="campos">
                <input type="text" name="txtQtdTable">
            </div>
        </div>
        <div class="suporte_eventos">
            <div class="segura_botao">
                <input type="submit" name="btn_confirmar" value="Cadastro"  class="btn_confirmar">
            </div>

        </div>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
