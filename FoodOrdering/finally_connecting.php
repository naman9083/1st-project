<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<center>
<body style=>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $uname = $_POST['username'];
        $pass = $_POST['password'];
        
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "aashish2";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `logindb` (`USERNAME`, `PASSWORD`) VALUES ('$uname', '$pass')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success " role="alert">
          <strong>Success!</strong> You have been logged in successfully!
          
        </div>';
        }
        else{
            echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry was not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?>


    <div class="container" style="background-color:#f1f1f1">
        <form action="">
            <h2>Log In</h2>
            <div class="image-box"><img src="img/download.png" class="avatar" alt=""></div>
                <br>
                <p1 style="margin-right:390px;"><b>USERNAME</b></p1><br><input type="text" name="username" placeholder="Enter Username" id="username">
                <p1 style="margin-right:390px;"><b><br> PASSWORD</b></p1><br><input type="password" name="password" placeholder="Enter Password" id="password">
                    <br><br>
                
                <button type="submit" onclick="">Log In</button><br> <br>
                            <p1 style="margin-right:350px;"><input type="checkbox" checked="checked"> Remember me</p1> 
                <br>
                <br>

                <div class="container2">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw"> <a href="#">Forgot password?</a></span></div>
                <br>
                <br>
                <div class="register1"> New to Foomdies ? <a href="Project_signUp.html" target="blank">Sign Up Now!</a></div>

            </div>
</center>
        </form>   
</body> 

</html>