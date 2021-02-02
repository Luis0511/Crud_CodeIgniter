
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">usuario</th>
      <th scope="col">nombre</th>
      <th scope="col">email</th>
      <th scope="col">editar</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($users->result_array() as $row): ?>
    <tr>
        <td><?php echo $row['id_usuario'];?></td>
        <td><?php echo $row['nombre'];?></td>
        <td><?php echo $row['gmail'];?></td>
        <td><a href="<?php echo base_url()."index.php/ControllerPrueba/editar/$row[id_usuario]"?>">editar</a></td>
        <td><a href="<?php echo base_url()."index.php/ControllerPrueba/eliminar/$row[id_usuario]"?>">eliminar</a></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
   
<!-- 
    
<td><a href="http://localhost/CodeIgniterP1/index.php/ControllerPrueba/editar?row=$row['id_usuario']"><button >editar</button></a></td> -->