<?php
   session_start();
 //connect to database
 $ip_addr = gethostbyname('apsouth1-mysql-instance2.cpip3m9hs2h0.ap-south-1.rds.amazonaws.com'); 
$username = "adminer";
$password = "adminer123";
$dbname = "bardyahdb";
   $conn = new mysqli($ip_addr, $username, $password, $dbname);
   

   if (isset($_POST['submit']))
   {
    $user_first = $_POST["user_first"]; 
    $user_email = $_POST["user_email"];
    $user_pwd = $_POST["user_pwd"];
    $password1 = $_POST["pass1"];

    if($user_pwd==$password1)
    {
     $sql="INSERT INTO users (user_first,user_email,user_pwd)VALUES('$user_first','$user_email','$user_pwd')";
      mysqli_query($conn,$sql);
     $_SESSION['user_first']=$user_first;
      header("location:index.php");
    }
    else
    {
       echo "check the password not equal the other ";
    }
   }

?>


<!DOCTYPE HTML>
<html lang="ar"> 
<head>

    <meta charset="UTF-8">
  <title>التسجيل </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="scroll.js"></script>
  <link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Changa:600|Harmattan" rel="stylesheet">
  
  
  
  <link rel="stylesheet" href="style.css">

    <style>
/* 'Open Sans' font from Google Fonts */
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

   body {
          direction: rtl;
          background-color: #fefaef;
      }

.login {
  width: 400px;
  margin: 16px auto;
  font-size: 16px;
}

/* Reset top and bottom margins from certain elements */
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}

/* The triangle form is achieved by a CSS hack */
.login-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: #543e12;
}

.login-header {
  background: #543e12;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}

.login-container {
  background: #e7c17a;
  padding: 12px;
}

/* Every row inside .login-container is defined with p tags */
.login p {
  padding: 12px;
}

.login input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 16px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}

.login input[type="email"],
.login input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}

/* Text fields' focus effect */
.login input[type="email"]:focus,
.login input[type="password"]:focus {
  border-color: #888;
}

.login input[type="submit"] {
  background: #543e12;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
}

.login input[type="submit"]:hover {
  background:  #543e12;
}

/* Buttons' focus effect */
.login input[type="submit"]:focus {
  border-color: #fefaef;
}</style>

</head>
<body >
  <div class="jumbotron text-center header">
          <a href="index.php">
           <img class="logo img-responsive center-block" src="Bardyah_logo/logo_web.png" alt="logo">
             </a> 
        
    </div>
<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">التسجيل</h2>
    


<form method="POST" action="regester.php" class="login-container">
 <td class="form-control" dir="rtl">الاسم</td>
<td> <input type="text" name="user_first" class="form-control" required></td>
<tr dir="rtl"> <td>البريد الالكتروني</td>
<td><input type="text" name="user_email" class="form-control" required></td></tr>
<tr dir="rtl"> <td>كلمة السر</td><td> 
<input type="password" name="user_pwd"class="form-control" required></td> </tr> 
<tr dir="rtl"> <td>تاكيد كلمة السر  </td>
<td><input class="form-control" type="password" name="pass1" required></td> </tr>
<td> <input type="checkbox" required ><a  href="banod.php" dir="rtl" required>نعم اوافق على سياسة الخصوصية
      </a> </td>
 <td><input  type="checkbox" required >
    
 <a  href="security.php" dir="rtl">نعم اوافق على بنود الخدمة 
</a></td>

    <p><td ><input class="fbbutton" type="submit" name="submit" value="تسجيل"></td></p>
    <td ><input  class="fbbutton" id="clear" type="reset" value="مسح الكل " name="clear"></td>
    </form> 
  

    </div>
    
    </body>
       <footer class="container-fluid text-center">
  
  <p>جميع الحقوق محفوظة لـ <a href="index.php" title="Group 1">Group1</a></p> 
</footer>
</html>
