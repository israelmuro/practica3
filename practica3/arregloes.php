 <!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8" />
    </head>
    <body>
    	<center><table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellido Materno</th>
				<th>Apellido Paterno</th>
				<th>Edad</th>
				<th>Domicilio</th>
				<th>Hobitt</th>
			</tr>
		</thead>
		<body>
		
		 <?php
         $personas=array(
               "1"=>array('id_empleado'=>'1',
               	     'nombre'=>'Israel',
                     'ape_materno'=>'Muro',
                     'ape_paterno'=>'Barajas',
                     'edad'=>26,
                     'domicilio'=>'paseo del malecon',
                     'hobitt'=>'futbol'),
               "2"=>array('id_empleado'=>'2',
               	     'nombre'=>'Ana',
                     'ape_materno'=>'Barajas',
                     'ape_paterno'=>'Espinoza',
                     'edad'=>45,
                     'domicilio'=>'jardines de babiliona',
                     'hobitt'=>'cocinar'),
                "3"=>array('id_empleado'=>'3',
                	  'nombre'=>'Hisao',
                      'ape_materno'=>'Muro',
                      'ape_paterno'=>'Magaña',
                      'edad'=>3,
                      'domicilio'=>'loma dorada',
                      'hobitt'=>'dormir'),
                "4"=>array('id_empleado'=>'4',
                	  'nombre'=>'Jose',
                      'ape_materno'=>'Muro',
                      'ape_paterno'=>'Figueroa',
                      'edad'=>47,
                      'domicilio'=>'zapopan',
                      'hobitt'=>'dormir'),     
                "5"=>array('id_empleado'=>'5',
                	  'nombre'=>'Isadora',
                      'ape_materno'=>'Silva',
                      'ape_paterno'=>'Martinez',
                      'edad'=>25,
                      'domicilio'=>'galerias',
                      'hobitt'=>'tocar')          
                      );

			foreach ($personas as $k => $persona) {	?>
			<tr>
				<td><center><?php echo $persona['id_empleado']; ?></center></td>
				<td><center><?php echo $persona['nombre']; ?></center></td>
				<td><center><?php echo $persona['ape_materno']; ?></center></td>
				<td><center><?php echo $persona['ape_paterno']; ?></center></td>
				<td><center><?php echo $persona['edad']; ?></center></td>
				<td><center><?php echo $persona['domicilio']; ?></center></td>
				<td><center><?php echo $persona['hobitt']; ?></center></td>
			</tr>
		<?php } ?>
		
		</body>
	</table></center>
</html>

