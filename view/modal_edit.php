<?php
/**
 * Created by PhpStorm.
 * User: Gleyver
 * Date: 30/09/2018
 * Time: 20:22
 */?>


<html>
<head>
    <title>Modal</title>
    <link rel="stylesheet" type="text/css" href="../css/style_modal_edit.css">

    <script>
        $(document).ready(function(){/*fechar a modal*/
            $(".fechar").click(function(){
                $(".container_modal").fadeOut();
            });
        });
    </script>
</head>

<body>

<script>
    $("#form").submit(function(event){
        //Recupera o id gravado no Form pelo atribute-id
        var id = $(this).data("id");
        //anula a ação do submit tradicional "botao" ou F5
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "../router.php?controller=nivel&modo="+modo+"&id="+id,
            //alert (url);
            data: new FormData($("#form")[0]),
            cache:false,
            contentType:false,
            processData:false,
            async:true,
            success: function(dados){
                $('.modal').html(dados);
                //alert(dados);
            }
        });
    });
</script>
<div class="main_modal"><!--main que segura tudo-->
    <div class="close_modal">
        <a href="#" class="fechar"><img src="imagens/close.png"></a>
    </div>

    <div class="content_modal">
        <form action="" method="post" id="form" data-id="<?php echo($id)?>" enctype="multipart/form-data">

            <div class="content_logo"><!--content do logo e do titulo-->
                <div class="titulo">
                    <a>Editar mesas</a>
                </div>
            </div>

            <div class="content_campos"><!--content dos campos de cadastro-->
                <div class="campo"><!--campos--> <!--nome-->
                    <div class="string_campo">
                        <a>Qtd Mesas:</a>
                    </div>

                    <div class="input_campo">
                        <input type="text" value="" name="txt_nome" >
                    </div>
                </div>

                <div class="campo_botao">
                    <div class="botao">
                        <input id="bnt_cadastrar" type="submit" name="btn_cadastrar" value="Editar">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
