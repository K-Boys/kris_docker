<?php
$nombre=strtoupper($_POST["nombre"]);
$ap=strtoupper($_POST["ap"]);
$am=strtoupper($_POST["am"]);
$sexo=$_POST["sexo"];
$nacionalidad=$_POST["nacionalidad"];
$curp=strtoupper($_POST["curp"]);
$periodo_bachillerato=$_POST["periodo_bachillerato"];
$periodo_tsu=$_POST["periodo_tsu"];
$periodo_licenciatura=$_POST["periodo_licenciatura"];
$lic_inst=strtoupper($_POST["lic_inst"]);
$fk_bachillerato=$_POST["fk_bachillerato"];
$fk_carrera=$_POST["fk_carrera"];
$fk_estado=$_POST["fk_estado"];
$folio2=$_POST["folio2"];
$libro2=$_POST["libro2"];
$foja2=$_POST["foja2"];
$fk_caregoria=$_POST["fk_caregoria"];


require_once("clases/clases_titulado.php");
$titulado=new Titulado();

$resultado=$titulado->insertar($nombre, $ap, $am, $sexo, $nacionalidad, $curp, $periodo_bachillerato, $periodo_tsu, $periodo_licenciatura, $lic_inst, $fk_bachillerato, $fk_carrera,$fk_estado, $folio2, $libro2, $foja2, $fk_caregoria);


 ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link href="sweetalert/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="sweetalert/css/main.css" rel="stylesheet">
    <!-- Scroll Menu -->
    <link href="sweetalert/css/sweetalert.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="sweetalert/js/bootstrap.min.js"></script>

    <!-- Custom functions file -->
    <script src="sweetalert/js/functions.js"></script>
    <!-- Sweet Alert Script -->
    <script src="sweetalert/js/sweetalert.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="jquery/jquery-3.5.1.js"></script>
	<script src="jquery/jquery.dataTables.min.js"></script>
	<script src="jquery/dataTables.bootstrap4.min.js"></script>
	<script src="sweetalert/sweetalert2@11.js"></script>
  </head>
  <body>




 

  

 

          <?php
          
            if ($resultado) {
              echo "<script>
function alerta2(){
 Swal.fire({
   title: '¡TITULADO REGISTRADO EXITOSAMENTE!',
   text: '',
   icon: 'success',
 }).then((result) => {
  if (result.isConfirmed) {
    window.location='index.php';
  } else{window.location='index.php';}  
  })  
  }
     alerta2();                   
</script>";
}

else{
  echo "<script>
function x(){
 Swal.fire({
   title: '¡ERROR!',
   text: 'Esto es un mensaje de no guardado',
   icon: 'error',
 }).then((result) => {
  if (result.isConfirmed) {
    window.location='index.php';
  }
  })  
  }
     x();     
                       
</script>";
}
            
          ?>



        </div>
      </div>
    </div>
    <!-- /MAIN CONTENT -->

  </body>
</html>
