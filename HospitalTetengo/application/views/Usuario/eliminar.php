<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">
  </head>
  
  <body>
    <div class="cover">
      <div class="cover-image" style="background-image: url(https://unsplash.imgix.net/photo-1418065460487-3e41a6c84dc5?q=25&amp;fm=jpg&amp;s=127f3a3ccf4356b7f79594e05f6c840e);"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header">
              <h1>Eliminación de Datos&nbsp;
                <small>Usuarios</small>
              </h1>
            </div>
            <div class="jumbotron">
              <table class="table">
                <thead>
                  <tr>
                    <th>Usuario</th>
                    <th>Perfil</th>
                    <th>Contraseña</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($_SESSION['dataUsuario'] as $value) {?>
                    <?php echo '<tr>'?>
                    <?php echo '<td>'.$value->user_Name.'</td>'?>
                    <?php echo '<td>'.$value->perfil.'</td>'?>
                    <?php echo '<td>'.$value->contraseña.'</td>'?>
                    <?php echo '</tr>'?>
                  <?php }?>
                </tbody>
              </table>
              <form role="form" method="POST" action="<?php echo base_url('CI_Usuario/eliminarUsuario') ?>">
                <div class="form-group">
                  <label class="control-label" for="exampleInputEmail1">Ingrese el nombre de usuario que desea eliminar</label>
                  <input class="form-control"
                  id="exampleInputEmail1" type="text" required="" name="user_Name">
                </div>
                <button type="submit" class="btn btn-default">Eliminar Usuario</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>