
<body>
    <!-- <form action="controllers/ControllerPrueba.php" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="pasword" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInpunombre" class="form-label">nombre</label>
        <input type="email" class="form-control" name="nombre" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form> -->
    <?php  echo form_open('/ControllerPrueba/registro');
    echo form_label('Nombre:', 'nombre');
    $dataname = array(
        'name'        => 'nombre',
        'placeholder' => 'escribe tu nombre',
        'maxlength'   => '100',
        'size'        => '50',
        'style'       => 'width:50%',
      );
    echo form_input($dataname);?>
    <br>
    <?php
    echo form_label('Email:', 'email');
    
    $dataEmail = array(
        'name'        => 'email',
        'placeholder' => 'ingresa tu Email',
        'maxlength'   => '100',
        'size'        => '50',
        'style'       => 'width:50%',
    );
    echo form_input($dataEmail);?>
    <br>
    <?php
    echo form_label('Contraseña:', 'password');
    $dataPassword = array(
        'name'        => 'password',
        'placeholder' => 'ingresa tu Contraseña',
        'maxlength'   => '100',
        'size'        => '50',
        'style'       => 'width:50%',
    );
    echo form_password ($dataPassword);?>
    <br>
    <?php
        echo form_submit('mysubmit', 'enviar');
    ?>
    <?php echo form_close() ?>
    

