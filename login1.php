<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
    width:100vw;
    height:100vh;
    margin:0;
    padding:0;
    display:flex;
    align-items:center;
    justify-content:center;
    background-image:url("logo.jpg");
    background-repeat:no-repeat;
    background-size:cover;
   }
   form{
    width:300px;
    height:200px;
    margin-top:-5%;
    margin-left:-5%;
    /*background-color:lightgrey;*/
   border:2px solid black;
   }
   #sub
   {
    width:5rem;
    height:2rem;
    margin-left:19%;
    background-color:lightblue;
    align-items:center;
   }
        </style>
</head>
<body>
    <?php
      if($_SERVER['REQUEST_METHOD']=='POST')
      {
        $servername="localhost";
        $username="root";
        $password="";
        $database="application_development";

        $user=$_POST['user'];
        $pass=$_POST['pass'];

        $con=mysqli_connect($servername,$username,$password,$database);
        $sql="INSERT INTO `loginpro` (`username1`, `password1`) VALUES ('$user', '$pass')";
        $result= mysqli_query($con,$sql);
        
      }
    ?>
     <form action="/project/login1.php" method="POST">
        <label>User_name</label>
        <input type="text" id="user" name="user"><br><br>
        <label>Password</label>&nbsp;&nbsp;&nbsp;
        <input type="text" id="pass" name="pass"><br><br>
           <input type="submit" value="SUBMIT" id="sub" onclick="create()">
    </form>
    <script>
        function create()
        {
            alert("login successfully...");
            window.open("page1.html");
        }
    </script>
</body>
</html>