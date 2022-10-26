<?php 
$pk_titulado=$_GET["pk_titulado"];


require_once("clases/clases_titulado.php");
$titulado=new Titulado();
$datos=$titulado->buscarPorId($pk_titulado);

while ($fila=mysqli_fetch_array($datos)){
 
$resultado=$titulado->mostrar3($pk_titulado);


 
 ?>


<?php 

include "fpdf/fpdf.php";
require "clases/conexion2.php";
$consulta="SELECT * FROM titulado where pk_titulado=";
$resultado2= $conn->query($consulta);
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(10);
    // Título
    $this->Cell('C',10,utf8_decode(' '),0,1,'C',0);
    // Salto de línea
    $this->Ln(20);

    

$this->Cell(100,5,date(''),0,0,'C');

}


}
header("Content-Type: text/html; charset=iso-8859-1 ");

$pdf = new PDF('L','mm','A4');
$pdf->SetAutoPageBreak(true,1);
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B','12');
$pdf->AddPage();



   while($fila=$resultado->fetch_assoc()){
       
      $pdf->Ln(20);     
$pdf->SetFont('Arial','B',14);
        $pdf->Cell(95,5,utf8_decode(''),0,0,'C');
       	$pdf->Cell(100,5,utf8_decode($fila['nombre']).(' ').utf8_decode($fila['ap']).(' ').utf8_decode($fila['am']),0,1,'C',0);
  $pdf->Ln(30);     	

  $pdf->Cell(150,5,utf8_decode(''),0,0,'C');
         $pdf->Cell(30,5,utf8_decode($fila['nombre_cat'] ).(' EN ').utf8_decode($fila['nombre_carrera']),0,0,'C',0);
 

$pdf->SetFont('Arial','B',8);

       $pdf->Ln(40);
        $pdf->Cell(95,5,utf8_decode(''),0,0,'C');
        $pdf->Cell(30,5,utf8_decode($fila['dia']),0,0,'C',0);
        $pdf->Cell(30,5,utf8_decode($fila['mes']),0,0,'C',0);
        $pdf->Cell(30,5,utf8_decode($fila['año']).('.'),0,0,'C',0);
        
        $pdf->Ln(20);
        $pdf->Cell(80,5,utf8_decode(''),0,0,'C');  
        $pdf->Cell(160,5,utf8_decode('Expedido en  la Ciudad de Escuinapa de Hidalgo, Sinaloa, el dia ').date('d').(' del mes ').date('m').utf8_decode(' del año 20').date('y').('.'),0,1,'C',0);
     
       $pdf->Ln(30);  
     $pdf->SetFont('Arial','B',12);   
      $pdf->Cell(150,5,utf8_decode(''),0,0,'C');  
      $pdf->Cell(50,5,utf8_decode('MPGP. Julio Cesar Ramos Robledo'),0,1,'C',0);
        $pdf->Cell(150,5,utf8_decode(''),0,0,'C');
       $pdf->Cell(50,5,utf8_decode('Rector'),0,0,'C',0);
    



       }



$pdf->Output();
?>

<?php 
}
 ?>
