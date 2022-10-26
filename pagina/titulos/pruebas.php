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
function header()
{
    // Logo
 
        $this->SetXY(10, 10);
        $this->SetFont('Arial','U',10);
        $this->SetFillColor(2,157,116);//Fondo verde de celda
        $this->SetTextColor(240, 255, 240); //Letra color blanco
        
            //Atención!! el parámetro true rellena la celda con el color elegido
            <div id="cerrar">   
    <input id="" onclick="sesion()" type="submit" value="Cerrar Sesion" name=""><br>
    </div>
           
   echo $nombre ;
echo $ap;
echo $am;
echo $sexo;
echo $nacionalidad;
echo $curp;
echo $periodo_bachillerato;
echo $periodo_tsu;
echo $periodo_bachillerato;
echo $lic_inst;
echo $fk_bachillerato;
echo $fk_carrera;
echo $fk_estado;
    
    // Salto de línea
    $this->Ln(20);
}


}

// Creación del objeto de la clase heredada

$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);


    while($fila=$resultado->fetch_assoc()){


      $pdf->Cell(160,5,utf8_decode('El presente documento no requiere Legalización, toda vez que es emitido por un'),'T,L,R',1,'C');
      $pdf->Cell(160,5,utf8_decode('Organismo Público Descentralizado de carácter estatal'),'R,B,L',1,'C');

          $pdf->Cell(40,5,'',1,0,'C',0);

        $pdf->Cell(100,5,utf8_decode($fila['nombre']).(' ').utf8_decode($fila['ap']).(' ').utf8_decode($fila['am']),1,1,'C',0);
        


        

        $pdf->Cell(40,10,'',1,0,'C',0);
        $pdf->Cell(40,10,$fila['nacionalidad'],1,1,'C',0);

        $pdf->Cell(40,10,'',1,0,'C',0);
        $pdf->Cell(40,10,'LICENCIATURA',1,1,'C',0);

        $pdf->Cell(40,10,'',1,0,'C',0);
        $pdf->Cell(40,10,$fila['curp'],1,1,'C',0);



        $pdf->Cell(40,10,utf8_decode(''),1,0,'C',0);
        $pdf->Cell(40,10,$fila['nombre_bachillerato'],1,1,'C',0);

        $pdf->Cell(40,10,utf8_decode(''),1,0,'C',0);
        $pdf->Cell(40,10,$fila['nombre_estado'],1,1,'C',0);

        $pdf->Cell(40,10,'',0,0,'C',0);
        $pdf->Cell(40,10,$fila['periodo_bachillerato'],0,1,'C',0);




        $pdf->Cell(40,10,'',0,0,'C',0);
        $pdf->Cell(40,10,$fila['periodo_tsu'],0,1,'C',0);


        $pdf->Cell(40,10,'',1,0,'C',0);
        $pdf->Cell(40,10,utf8_decode('UNIVERSIDAD TECNOLOGICA DE ESCUINAPA'),1,1,'C',0);
        $pdf->Cell(40,10,'',1,0,'C',0);
        $pdf->Cell(40,10,('LICENCIATURA EN ').$fila['nombre_carrera'],1,1,'C',0);
        $pdf->Cell(40,10,'',1,0,'C',0);
        $pdf->Cell(40,10,utf8_decode('SINALOA'),1,1,'C',0);
        $pdf->Cell(40,10,'',0,0,'C',0);
        $pdf->Cell(40,10,$fila['periodo_licenciatura'],0,1,'C',0);



        $pdf->Cell(200,5,utf8_decode('Escuinapa de Hidalgo Sinaloa A ').date('d').(' De ').date('m').utf8_decode(' Del 20').date('y'),1,0,'C',0);

        
        $pdf->Cell(90,5,'',0,0,'C',0);
        $pdf->Cell(100,5,'UNIVERSIDAD TECNOLOGICA DE ESCUINAPA',1,1,'C',0);
   


        $pdf->Cell(50,10,'Folio','L,T',0,'C',0);
        $pdf->Cell(10,10,$fila['folio'],'T,R',1,'C',0);
        $pdf->Cell(50,10,'Libro','L',0,'C',0);
        $pdf->Cell(10,10,$fila['libro'],'R',1,'C',0);
        $pdf->Cell(50,10,'Foja','L,B',0,'C',0);
        $pdf->Cell(10,10,$fila['foja'],'R,B',1,'C',0);



       }

  $pdf->Output();



?>




<?php 
}
 ?>
