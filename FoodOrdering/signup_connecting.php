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
                $phone = $_POST['phonenum'];
                $email = $_POST['email'];
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
                $sql = "INSERT INTO `signupdb` (`USERNAME`,`PHONE`,`EMAIL`,`PASS`) VALUES ('$uname', ' $phone', ' $email', '$pass')";
                $result = mysqli_query($conn, $sql);
        
                if($result){

                    
                echo '<div class="alert alert-success " role="alert"  >
                <strong>Success!</strong> You have been registered successfully!
                
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
            <h2 class="register">Sign Up</h2>
            <div class="image-box"><img src="img/download (1).png" class="avatar" alt=""></div>
            <p style="margin-left:-390px;"><b>USERNAME</b></p><input type="text" name="username" placeholder="Enter Username" id="username">
            <p style="margin-left:-390px;"><b>PHONE NO.</b></p><input type="number" name="phonenum" placeholder="Enter Mobile number" id="username">
            <p style="margin-left:-350px;"><b> EMAIL-ADDRESS</b></p><input type="email" name="email" placeholder="Enter EMAIL-ADDRESS" id="password">
            
            <p style="margin-left:-330px;"><b>CREATE PASSWORD</b></p><input type="password" name="password" placeholder="Enter Password" id="password">
            
            <br>
            <br>
            <a href="register.html"><button class="registerbutton" type="submit"  >Register</button><br> <br></a> 
                        
            <br>
            <br>

            <div class="container2">
            <button type="button" class="cancelbtn2">Cancel</button>
            <span class="login"><button> <a href="Project_login.html">Login</a></button></span></div>
            <br>

        </div>
    </body>    
</center>    
