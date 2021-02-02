<?php
    $id_usuario= $idusuario[0]['id_usuario'];
    $id_nombre= $idusuario[0]['nombre'];
    $id_gmail= $idusuario[0]['gmail'];
?>
<body>
    
<form method="POST"action="<?php echo base_url().'index.php/ControllerPrueba/actualizar'?>">
    <input type="text" id="id_usuario" name="id_usuario" hidden="" value="<?php echo $id_usuario?>">
    <label for="nombre">nombre</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $id_nombre?>">
    <label for="email">email</label>
    <input type="email" id="gmail" name="gmail" value="<?php echo $id_gmail?>">
    <button>actulizar</button>
    
</form>