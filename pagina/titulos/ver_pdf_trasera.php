<?php 
$pk_titulado=$_GET["pk_titulado"];


require_once("clases/clases_titulado.php");
$titulado=new Titulado();
$datos=$titulado->buscarPorId($pk_titulado);

while ($fila=mysqli_fetch_array($datos)){
 
$resultado=$titulado->mostrar4($pk_titulado);


 
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
    // Logo
 
    // Arial bold 15
    $this->SetFont('Arial','B',11);
    // Movernos a la derecha
     
    // Títulonom
    
    
    // Salto de línea
    $this->Ln(20);
}


}

// Creación del objeto de la clase heredada

$pdf = new PDF('L','mm','A4');
$pdf->SetAutoPageBreak(true,1);
$pdf->AliasNbPages();
$pdf->AddPage();



    while($fila=$resultado->fetch_assoc()){

          $pdf->Cell(60,5,'',0,0,'C',0);
          $pdf->Cell(160,5,utf8_decode('El presente documento no requiere Legalización, toda vez que es emitido por un'),'T,L,R',1,'C');
          $pdf->Cell(60,5,'',0,0,'C',0);
          $pdf->Cell(160,5,utf8_decode('Organismo Público Descentralizado de carácter estatal'),'R,B,L',1,'C');


$pdf->Ln(10);





      $pdf->SetFont('Arial','B',10);
        $pdf->Cell(180,5,'',0,0,'C',0);      $pdf->Cell(70,10,utf8_decode('SERVICIOS ESCOLARES'),'L,T,R',1,'C',0);
        $pdf->Cell(180,5,'',0,0,'C',0);      $pdf->Cell(20,5,'    FOLIO','L',0,'L',0);

        $pdf->SetFont('Arial','U',10);
        $pdf->Cell(50,5,('        ').$fila['folio'].('        '),'R',1,'C',0);
        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(180,5,'',0,0,'C',0);      $pdf->Cell(20,5,'    LIBRO','L',0,'L',0);

        $pdf->SetFont('Arial','U',10);
        $pdf->Cell(50,5,('        ').$fila['libro'].('        '),'R',1,'C',0);
        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(180,5,'',0,0,'C',0);       $pdf->Cell(20,5,'    FOJA','L',0,'L',0);

        $pdf->SetFont('Arial','U',10);
        $pdf->Cell(50,5,('        ').$fila['foja'].('        '),'R',1,'C',0);
        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(35,5,'',0,0,'C',0); 
         $pdf->Cell(145,5,utf8_decode($fila['nombre']).(' ').utf8_decode($fila['ap']).(' ').utf8_decode($fila['am']),0,0,'l',0);

        $pdf->Cell(70,5,utf8_decode(''),'L,R',1,'C',0);

        $pdf->Cell(35,5,'',0,0,'C',0);
        $pdf->Cell(145,5,utf8_decode($fila['nacionalidad']),0,0,'l',0);

        $pdf->Cell(70,5,utf8_decode(''),'L,R',1,'C',0);

        $pdf->Cell(35,5,'',0,0,'C',0);
        $pdf->Cell(145,5,'LICENCIATURA',0,0,'l',0);
        $pdf->Cell(70,5,utf8_decode('Ing. Jorge Luís De La Paz Ramos'),'L,R',1,'C',0);

          $pdf->Cell(35,5,'',0,0,'C',0);
          $pdf->Cell(145,5,$fila['curp'],0,0,'l',0);
          $pdf->Cell(70,5,'JEFE DEL DEPARTAMENTO DE','L,R',1,'C',0);

            $pdf->Cell(180,5,'',0,0,'C',0);      $pdf->Cell(70,5,'SERVICIOS ESCOLARES','L,R',1,'C',0);

        $pdf->Cell(180,5,'',0,0,'C',0);      $pdf->Cell(70,2,'','L,R,B',0,'C',0);

      $pdf->SetFont('Arial','B',10);


$pdf->Ln(5);



$pdf->Cell(35,5,utf8_decode(''),0,0,'C',0);
        $pdf->Cell(100,5,$fila['nombre_bachillerato'],0,1,'l',0);

        $pdf->Cell(45,5,utf8_decode(''),0,0,'C',0);
        $pdf->Cell(40,5,utf8_decode($fila['nombre_estado']),0,1,'l',0);

        $pdf->Cell(35,5,'',0,0,'C',0);
        $pdf->Cell(40,5,$fila['periodo_bachillerato'],0,1,'l',0);

$pdf->Ln(5);


   $pdf->Cell(35,5,'',0,0,'C',0);
        $pdf->Cell(100,5,utf8_decode($fila['lic_inst']),0,1,'l',0);
         $pdf->Cell(45,5,'',0,0,'C',0);
        $pdf->Cell(40,5,utf8_decode('SINALOA'),0,1,'l',0);
        $pdf->Cell(35,5,'',0,0,'C',0);
        $pdf->Cell(40,5,$fila['periodo_tsu'],0,1,'l',0);

$pdf->Ln(5);

     $pdf->Cell(38,5,'',0,0,'C',0);
        $pdf->Cell(100,5,utf8_decode('UNIVERSIDAD TECNOLÓGICA DE ESCUINAPA'),0,1,'l',0);
        $pdf->Cell(35,5,'',0,0,'C',0);
        $pdf->Cell(100,5,('LICENCIATURA EN ').$fila['nombre_carrera'],0,1,'l',0);
        $pdf->Cell(45,5,'',0,0,'C',0);
        $pdf->Cell(40,5,utf8_decode('SINALOA'),0,1,'l',0);
        $pdf->Cell(35,5,'',0,0,'C',0);
        $pdf->Cell(40,5,$fila['periodo_licenciatura'],0,1,'l',0);

$pdf->Ln(2);
        $pdf->Cell(75,5,utf8_decode(''),0,0,'C');
        $pdf->Cell(50,5,utf8_decode($fila['dia']).(' de ').($fila['mes']).(' del ').($fila['año']),0,1,'l',0);
        
         $pdf->Cell(200,5,utf8_decode('Escuinapa de Hidalgo Sinaloa A ').date('j').(' De ').date('m').utf8_decode(' Del 20').date('y'),0,1,'C',0);

$pdf->Ln(8);
          $pdf->Cell(70,5,'',0,0,'C',0);
         $pdf->Cell(100,5,utf8_decode('Ing. Jorge Luís De La Paz Ramos'),0,1,'C',0);
           $pdf->Cell(70,5,'',0,0,'C',0);
        $pdf->Cell(100,5,utf8_decode('Jefe del Departamento De Servicios Escolares'),0,1,'C',0);

$pdf->Ln(50);















    	  $pdf->Cell(40,5,'',1,0,'C',0);
        $pdf->Cell(100,5,utf8_decode($fila['nombre']).(' ').utf8_decode($fila['ap']).(' ').utf8_decode($fila['am']),1,1,'C',0);
        

        $pdf->Cell(40,5,'',1,0,'C',0);
        $pdf->Cell(40,5,$fila['nacionalidad'],1,1,'C',0);

        $pdf->Cell(40,5,'',1,0,'C',0);
        $pdf->Cell(40,5,'LICENCIATURA',1,1,'C',0);

        $pdf->Cell(40,5,'',1,0,'C',0);
        $pdf->Cell(40,5,$fila['curp'],1,1,'C',0);



       	$pdf->Cell(40,5,utf8_decode(''),1,0,'C',0);
       	$pdf->Cell(40,5,$fila['nombre_bachillerato'],1,1,'C',0);

        $pdf->Cell(40,5,utf8_decode(''),1,0,'C',0);
        $pdf->Cell(40,5,$fila['nombre_estado'],1,1,'C',0);

        $pdf->Cell(40,5,'',0,0,'C',0);
        $pdf->Cell(40,5,$fila['periodo_bachillerato'],0,1,'C',0);



         $pdf->Cell(40,5,'',1,0,'C',0);
        $pdf->Cell(40,5,utf8_decode('lugar del TSU '),1,1,'C',0);
         $pdf->Cell(40,5,'',1,0,'C',0);
        $pdf->Cell(40,5,utf8_decode('estado del tsu'),1,1,'C',0);
       	$pdf->Cell(40,5,'',0,0,'C',0);
       	$pdf->Cell(40,5,$fila['periodo_tsu'],0,1,'C',0);


        $pdf->Cell(40,5,'',1,0,'C',0);
        $pdf->Cell(40,5,utf8_decode('UNIVERSIDAD TECNOLÓGICA DE ESCUINAPA'),1,1,'C',0);
        $pdf->Cell(40,5,'',1,0,'C',0);
        $pdf->Cell(40,5,('LICENCIATURA EN ').$fila['nombre_carrera'],1,1,'C',0);
        $pdf->Cell(40,5,'',1,0,'C',0);
        $pdf->Cell(40,5,utf8_decode('SINALOA'),1,1,'C',0);
       	$pdf->Cell(40,5,'',0,0,'C',0);
       	$pdf->Cell(40,5,$fila['periodo_licenciatura'],0,1,'C',0);



        $pdf->Cell(200,5,utf8_decode('Escuinapa de Hidalgo Sinaloa A ').date('j').(' De ').date('m').utf8_decode(' Del 20').date('y'),1,1,'C',0);

        
        $pdf->Cell(150,5,'',1,0,'C',0);
        $pdf->Cell(40,5,utf8_decode('Ing. Jorge Luís De La Paz Ramos'),1,1,'C',0);
        $pdf->Cell(150,5,'',1,0,'C',0);
        $pdf->Cell(40,5,utf8_decode('Jefe del Departamento De Servicios Escolares'),1,1,'C',0);













$pdf->Ln(40);

$pdf->SetFont('Arial','B',10);
        $pdf->Cell(70,10,utf8_decode('SERVICIOS ESCOLARES'),'L,T,R',1,'C',0);

        $pdf->Cell(20,5,'    FOLIO','L',0,'L',0);

        $pdf->SetFont('Arial','U',10);
        $pdf->Cell(50,5,('        ').$fila['folio'].('        '),'R',1,'C',0);
        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(20,5,'    LIBRO','L',0,'L',0);

        $pdf->SetFont('Arial','U',10);
        $pdf->Cell(50,5,('        ').$fila['libro'].('        '),'R',1,'C',0);
        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(20,5,'    FOJA','L',0,'L',0);

        $pdf->SetFont('Arial','U',10);
        $pdf->Cell(50,5,('        ').$fila['foja'].('        '),'R',1,'C',0);
        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(70,10,utf8_decode(''),'L,R',1,'C',0);
        $pdf->Cell(70,5,utf8_decode('Ing. Jorge Luís De La Paz Ramos'),'L,R',1,'C',0);
        $pdf->Cell(70,5,'Jefe del Departamento De','L,R',1,'C',0);
        $pdf->Cell(70,5,'Servicios Escolares','L,R',1,'C',0);
        $pdf->Cell(70,2,'','L,R,B',1,'C',0);


       }



$pdf->Output();
?>

<?php 
}
 ?>