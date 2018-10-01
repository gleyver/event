<?php

//referenciar o DomPDF com namespace
use Dompdf\Dompdf;

// include autoloader
require_once("../dompdf/autoload.inc.php");
require_once '../model/connection.php';
//Criando a Instancia
$dompdf = new DOMPDF();

$db = new MySqlDB();// Instance db

// Get connection to database
$conn = $db->getConnection();

$evento = $_POST['txtNameEvent'];

$sql = "SELECT DISTINCT et.ocupada,c.name FROM tbl_event_table AS et, tbl_client as c WHERE et.id_event = $evento and c.id_client = et.id_client;";

$sqli = $conn->prepare($sql); // Execute query
$sqli->execute();
$html = "";
while($isi = $sqli->fetch(PDO::FETCH_ASSOC)) {
    $qtd_mesa = $isi['ocupada'];
    $name_client = $isi['name'];

    $html = "<li>".$name_client." mesas ".$qtd_mesa."</li>";
    $ocupaHTML= $html.$html;
}
// Carrega seu HTML
$dompdf->load_html('
			<h1 style="text-align: center;">Relatório de mesas do Evento</h1>
			
			'."<ul>
			
			$ocupaHTML
</ul>");

//Renderizar o html
$dompdf->render();

//Exibibir a página
$dompdf->stream(
    "relatorio_celke.pdf",
    array(
        "Attachment" => false //Para realizar o download somente alterar para true
    )
);

// Close connection to database
$db->offConnection();
?>