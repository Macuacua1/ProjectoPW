
<?php
	include_once '../controller/reserva_controller.php';
?>
<!-- <a href="../reserva_controller.php?accao=listar">teste</a> -->

<form enctype="multipart/form-data" action = "?accao=listar " method ="post" >
	<?php
				echo
				'<table class="table">
					<tr>
						<th>Nr_Estudante </th>	<th>Nome</th>	<th>Data</th> 	<th>Foto</th>	<th>Accoes</th>
					</tr>';
				if ($lista->num_rows > 0) {
				    // output data of each row
				    while($row = $lista->fetch_assoc()) {
				    //$myfile = fopen("uploads/".$row["foto"], "r") or die("Unable to open file!");
				    $id=$row["cod_artigo"];
				    echo   '<tr> <td>'.$row["cod_artigo"];
				    }
				} else {
				    	echo "0 results";
					}
				

			?>			
			</table>
			<input type="submit" name="submit" value="Listar"></input>
			</form>
			

	</body>

	<?php
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
			  include_once("../controller/reserva_controler.php");
		   }
	?>
<?
	
	
?>
