<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <center><h3>All Notices</h3></center><br>
    <?php
   include 'config.php';
    $query = 'select * from notice';
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      ?>
      <div class="row">
        <div class="col-sm-12">
          <div class="card text-center">
            <div class="card-header">
            <?php echo $row['title'];?>
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['title'];?></h5>
              <p class="card-text"><?php echo $row['message'];?></p>
            </div>
              <br><br>
          </div><br>`
        </div>
      </div>
      <?php
    }
    ?>
  </body>
</html>
