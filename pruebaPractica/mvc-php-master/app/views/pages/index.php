<?php
require ROUTE_APP . '/views/includes/header.php';
$BigClass = new Index();

?>
<main role="main">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1>CRUD USERS</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12 mt-3">
        <div class="d-flex flex-row-reverse mb-1">
          <a href="<?php echo ROUTE_URL?>/add" class="btn btn-primary">Add</a>
          <a href="#" class="btn btn-primary" id="btn-sincronizar-data"  onClick="sincronizar()">sincronizar </a>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach( $data['usuarios'] as $user):  ?>
              <tr>
                <td><?php echo $user->idUsuario ?></td>
                <td><?php echo $user->firstname ?></td>
                <td><?php echo $user->lastname ?></td>
                <td><?php echo $user->age ?></td>
                <td class="text-center">
                  <a href="<?php echo ROUTE_URL; ?>/pages/edit/<?php echo $user->id; ?>" class="text-warning">
                    <i class="fa fa-pencil"></i>
                  </a>
                   <a href="#" id="btn-eliminar" class="text-danger">
                    <i class="fa fa-trash"></i>
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo ROUTE_URL ?>/js/main.js"></script>

<script type="text/javascript">
      function sincronizar(){
        <?php
        $BigClass->sincronizar();
          ?>
      }
</script>
</body>
</html> 




  

  

