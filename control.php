<?php
   session_start();
//require ('connect.php');
//connect to database
$db = mysqli_connect("localhost","root","", "loginsystem");

 if (isset($_POST['login']))
   {
$session_email =$_SESSION ['user_email']; 
$whatsApp = $_POST['whatsApp'];
$telegram = $_POST['telegram'];
$sms = $_POST['sms'];

     $sql="INSERT INTO control (user_email,whatsApp,telegram,sms)VALUES('$session_email' ,'$whatsApp','$telegram','$sms')";
      mysqli_query($db,$sql);

   }
   
   

?>

<html>
<head>
  <title>لوحة التحكم</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="scroll.js"></script>
  <link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Changa:600|Harmattan" rel="stylesheet">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    
    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header navbar-right">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">بردية</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left ">
          
          <?php
If(isset($_SESSION['user_email'])) {
$name =  $_SESSION['user_email']  ;
echo "<li class='navbar-brand'>  $name مرحبا </li>" ;
    
 $link = "logout.php"; // Link goes here!
echo "<li><a href='$link'>  تسجيل الخروج</a></li>";   
     $links = "control.php"; // Link goes here!

echo "<li><a href='$links'>  لوحة التحكم</a></li>"; 

} else {
$link = "LOGIN1.Php"; // Link goes here!
echo "<li><a href='$link'>تسجيل الدخول</a></li>";
$linka = "regester.php"; // Link goes here!
echo "<li><a href='$linka'>التسجيل</a></li>";

} ?> 
      
          <li><a href="index.php">نبذة</a></li>
          <li><a href="index.php">عرض مرئي</a></li>
          <li><a href="index.php">المميزات</a></li>
          <li><a href="index.php">اشترك</a></li>
            <li><a href="control.html"> تفعيل الخدمة</a></li>
          <li><a href="index.php">تواصل معنا</a></li>
      </ul>
    </div>
  </div>
</nav>

    <div class="jumbotron text-center header">
          <a href="index.html">
           <img class="logo img-responsive center-block" src="Bardyah_logo/logo_web.png" alt="logo">
             </a> 
        <p style="padding: 35px 0px;">لا تُرسل رسالة.. ابعث بَردِيّة!</p> 
    </div>
    
   
<form method="post" id="myForm" onSubmit="alert('تم التسجيل شكرا');" >
    <div class="jumbotron text-center header">
   رقم الجوال لخدمة الواتس اب:<br> <input type="name" name="whatsApp" value="">
  <br>
 رقم الجوال لخدمة التليقرام:<br>
  <input type="name" name="telegram" value="">
  <br><br>
   رقم الجوال لخدمة الرسائل القصيره sms :<br>
  <input type="name" name="sms" value="">
  <br><br>
<input class="fbbutton" type="submit" name="login" value="تأكيد الآختيار">
 
  

  <br><br>
        <p style="padding: 35px 0px;">لا تُرسل رسالة.. ابعث بَردِيّة!</p> 
    </div>
    </form>
    
    


      
      <div id="subscribe" class="container-fluid text-center bg-darkbrown coming-soon">
       <div class="row">
           <div class="col-sm-8">
            <h2>بَردِيّة تحت التجهيز الآن!</h2>
            <p>سجل بريدك الإلكتروني لنخبرك حين الإطلاق</p>
            <form class="form-inline">
            <div class="input-group">
              <input type="email" class="form-control" size="40" placeholder="البريد الإلكتروني" required>
              <div class="input-group-btn">
                <button type="button" class="btn btn-warning">اشترك</button>
                <button type="button" class="btn btn-danger">إلغاء الاشتراك</button>
                </div>
            </div>
            </form>
           </div>
           <div class="col-sm-4">
              <span class="glyphicon glyphicon-envelope icon"></span>
            </div>
        </div>
    </div>
    
    <div id="contact" class="container-fluid bg-lightbrown contact">
  <h2 class="text-center contact-us">تواصل معنا</h2>
  <div class="row">
       <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="الإسم" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="البريد الإلكتروني" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="الرسالة" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group contact-us">
          <button class="btn btn-default pull-right" type="submit">أرسل</button>
        </div>
      </div> 
    </div>
    <div class="col-sm-6 text-center contact-us">
      <p>تواصل معنا وسنرد عليك بإذن الله في أقل من 24 ساعة.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> السعودية</p>
      <p><span class="glyphicon glyphicon-phone"></span> 96655555555+</p>
      <p><span class="glyphicon glyphicon-envelope"></span> info@group1.com</p> 
    </div>

  </div>
</div>
   
   <footer class="container-fluid text-center">
  <a href="#myPage" title="إلى الأعلى">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>جميع الحقوق محفوظة لـ <a href="#myPage" title="Group 1">Group1</a></p> 
</footer>
    

</body>
</html>
