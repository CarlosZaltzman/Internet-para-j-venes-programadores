<!DOCTYPE html>
<head>
    <title>Listado</title>
    <link rel="stylesheet" type="text/css" href="css/forms.css"
    <meta charset="UTF-8">
</head>
<body>
  <div class="">
  <table>
    <thead>
      <th>Email</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Fecha de nacimiento</th>
     </thead>
   <?php 
   $conn=mysql_connect('localhost','root','');
   mysql_select_db("demo",$conn);
   $query1 = "select * from emails";
   $result=mysql_query($query1);
   while($row=mysql_fetch_assoc($result)){
   ?>
   <tr>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['nombre'] ?></td>
      <td><?php echo $row['apellido'] ?></td>
      <td><?php echo $row['fecha_nacimiento'] ?></td>
   </tr>
   <?php 
   }
   ?>
  </table>  	
  <a href="http://localhost/formulario_post.php">Ingresar datos.</a>
  </div>
</body>
</html>