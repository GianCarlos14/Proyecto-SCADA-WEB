<!DOCTYPE html>

<?php
$connect = mysqli_connect("localhost","root","laravel","DBinvernadero");
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sensores</title>
	
</head>
<body>		

   



						<table align="center" width="700" bgcolor="skyblue">
							<tr align="center">
								<td colspan="5"><h2>Sensores</h2> </td>								
							</tr>
							<tr align="center">
								<td>Luminosidad</td>
								<td>Magnetismo</td>
								<td>Vibracion</td>
								<td>Sonido</td>
							</tr>							
							 
							<?php  

							global $connect;

								$sel_datos = "select * from sensor order by id desc";
								$run_datos = mysqli_query($connect, $sel_datos);
							
								

								while($p_data=mysqli_fetch_array($run_datos)){

									$lum = $p_data['Luminosidad'];
									$mag = $p_data['Magnetismo'];
									$vib = $p_data['Vibracion'];
									$son = $p_data['Sonido'];
									

							?>

							<tr align="center">
								<td><?php echo $lum?><br>
								<td><?php echo $mag?><br>
								<td><?php echo $vib?><br>
								<td><?php echo $son?></td>
							</tr>
							
							<?php } ?>

					</table>		
	
	
</body>
</html>