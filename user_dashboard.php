<?php
session_start();
include 'config.php';
if(isset($_POST['update_profile'])){
 
  $query = "update users set fname='$_POST[fname]',lname='$_POST[lname]',email='$_POST[email]',password='$_POST[password]',class=$_POST[class] where email='$_SESSION[email]'";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
    alert('Profile Updated successfully...');
    window.location.href = 'user_dashboard.php'
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
    alert('Can't update try again...');
    window.location.href = 'user_dashboard.php'
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Dashboard</title>
    <!-- Bootstrap files -->
    <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <!-- CSS File -->
    <link rel="stylesheet" href="css/style.css">
    <script src="jQuery/juqery_latest.js" charset="utf-8"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#edit_profile_button").click(function(){
          $("#main_content").load('edit_profile.php');
        });

        $("#view_notice_button").click(function(){
          $("#main_content").load('view_notice.php');
        });

      });
    </script>
  </head>
  <body>
    <div class="row" id="header">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <h3>Online Notice Board System</h3>
      </div>
      <div class="col-md-4">
        
      </div>
    </div>
    <br>
    <div class="container-fluid">
        <section id="container">
          <div class="row">
            <div class="col-md-4" id="left_sidebar">
            <button type="button" class="btn btn-primary btn-block" id="edit_profile_button">Edit Profile</button>
            <button type="button" class="btn btn-warning btn-block" id="view_notice_button">View All Notices</button>
              <a href="logout.php" type="button" class="btn btn-success btn-block">Logout</a><br>
            </div>
            <div class="col-md-4" id="main_content">
             <img src="https://thumbs.dreamstime.com/z/school-notice-board-green-white-background-57532711.jpg" style="height:500px;width:auto;"alt="">
            </div>
          </div>
        </section>
        
        </div>
      </div>
    </div>
  </body>
</html>
