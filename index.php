<?php
include('config/app.php');
include('html/header.php');
include('fct/item.php');
include('fct/request.php');

if(!file_exists(FILE_NAME)){
  file_put_contents(FILE_NAME,serialize([]));
}

?>

        <div class="row">
          <div class="col-lg-12">
          <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
              <form action="addItem.php" method="POST">
                <div class="input-group input-group-sm">
              
                  <input type="text" class="form-control" name="tache" >
                  <span class="input-group-append">
                    <button type="submit" class="btn btn-info btn-flat">+</button>
                  </span>
                  
                </div>
              </form>

                <!-- Liste des choses à faire -->
                <ul class="todo-list ui-sortable" data-widget="todo-list">
                    <?php
                    $items = getItems();
                    foreach($items as $key => $item){
                      echo displayItem($key,$item);
                    }
                    ?>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->

        <?php
include('html/footer.php');
?>