 <?php 

$conn=mysqli_connect('boys','root','pass','titulos');
	
	if (!$conn->set_charset('utf8')) {
		printf("Error cargando el conjunto de caracteres utf8: %s\n", $conn->error);
		exit;
	}

  ?>