<?php  //Start the Session
session_start();
require ('connect.php');


?>
<!DOCTYPE html>
<html>
<head>
  <title>بردية</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    
 <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
    
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
      <a class="navbar-brand" href="#myPage">بردية</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
   
        <ul class="nav navbar-nav navbar-left ">
            
<?php
If(isset($_SESSION['user_first'])) {
$name =  $_SESSION['user_first']  ;
echo "<li class='navbar-brand'> مرحبا $name </li>" ;
    
 $controlPanelLink = "control.php"; // Link goes here!

     
 $logOutLink = "logout.php"; // Link goes here!
echo "<li><a href='$logOutLink'>  تسجيل الخروج</a></li>";   
 echo "<li><a href='$controlPanelLink'>  لوحة التحكم</a></li>";

} else {
$link = "LOGIN1.Php"; // Link goes here!
echo "<li><a href='$link'>تسجيل الدخول</a></li>";
$linka = "regester.php"; // Link goes here!
echo "<li><a href='$linka'>التسجيل</a></li>";

} ?> 
          
         
          <li><a href="#about">نبذة</a></li>
          <li><a href="#demo">عرض مرئي</a></li>
          <li><a href="#features">المميزات</a></li>
          <li><a href="#subscribe">اشترك</a></li>
          <li><a href="#contact">تواصل معنا</a></li>
  
      </ul>
    </div>
  </div>
</nav>
    
    
    

    

    <div class="jumbotron text-center header">
          <a href="index.php">
           <img class="logo img-responsive center-block" src="Bardyah_logo/logo_web.png" alt="logo">
             </a> 
        <p style="padding: 35px 0px;">لا تُرسل رسالة.. ابعث بَردِيّة!</p> 
    </div>
    
    <div id="about" class="container-fluid bg-lightbrown">
        <div class="row">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-question-sign icon"></span>
            </div>
            <div class="col-sm-8">
                <h2>ما هي بَردِيّة؟</h2>
                <p> بَرْدِيّة أو البردي هو نوع قديم من الورق يستخدم قديماً في مصر وفلسطين  لكتابة الرسائل وتبادلها. <br>
                نحن هنا نقدم لك بَرديةً لتكتب رسائلك والمحتوى الذي تريد مشاركته، ونقوم نحن بدورنا بإرساله إلى قنوات التواصل المختلفة:<br>
                 الرسائل النصية SMS، الواتساب، التيلقرام، وحتى البريد الإلكتروني!</p>
            </div>
        </div>
    </div>
     
     <div id="demo" class="container-fluid text-center bg-darkbrown">
        <div class="col-sm-12 video">
         <h2 class="text-center demo">عرض للخدمة</h2>
         <div class="row">
         <div class="col-sm-2"></div>
         <div class="col-sm-8 center-block">
         <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item" controls>
              <source src="files/demo.mp4" type="video/mp4">
              متصفحك لا يدعم الفيديو
            </video>
          </div>
         </div>
         <div class="col-sm-2"></div>
         </div>
         </div>
     </div>
     
     <div id="features" class="container-fluid bg-lightbrown">
         <div class="row">
             <div class="col-sm-4">
                 <span class="glyphicon glyphicon-thumbs-up icon"></span>
             </div>
             <div class="col-sm-8">
                 <h2>مميزات:</h2>
                 <p># مرونة في الإستخدام.<br>
                 # مصداقية في التعامل. <br>
                 # سرعة في الإستجابة.</p>
                 <a href="regester.php"><h3>.. سجل الآن!</h3></a>
             </div>
         </div>
     </div>
      
      <div id="subscribe" class="container-fluid text-center bg-darkbrown coming-soon">
       <div class="row">
           <div class="col-sm-8">
            <h2>بَردِيّة تحت التجهيز الآن!</h2>
            <p>سجل بريدك الإلكتروني لنخبرك حين الإطلاق</p>
            <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<div id="mc_embed_signup">
<form action="//144.us16.list-manage.com/subscribe/post?u=9d23e1d0bd44c09db74477a8a&amp;id=620bea3e5e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	
<div class="mc-field-group">
	<label for="mce-EMAIL" style="text-align:right;">بريدك الالكتروني </label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" style="color:black;">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_9d23e1d0bd44c09db74477a8a_620bea3e5e" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="اشترك" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
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
