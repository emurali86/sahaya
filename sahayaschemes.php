<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title>SAHAYA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="College Education Responsive Template">
    <meta name="author" content="Esmet">
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
        
    <!-- CSS Bootstrap & Custom -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="css/animate.css" rel="stylesheet" media="screen">
    
    <link href="style.css" rel="stylesheet" media="screen">
        
    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    
    <!-- JavaScripts -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/modernizr.js"></script>
    <!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
</head>
<body>

    <!-- This one in here is responsive menu for tablet and mobiles -->
    

    <header class="site-header">
         <!-- /.container -->

        <div class="nav-bar-main" role="navigation">
            <div class="container">
                <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                         <ul class="main-menu sf-menu">
                            <li ><a href="home.html">Home</a></li>
                           <li><a href="about.html">About Us</a></li>
                <li class="active"><a href="sahayaschemes.html">Sahaya Schemes</a></li>
                              <li><a href="contact.html">Contact Us</a></li>
                        </ul> <!-- /.main-menu --hemes>

                         <!-- /.social-icons -->
                </nav> <!-- /.main-navigation -->
            </div> <!-- /.container -->
        </div> <!-- /.nav-bar-main -->

    </header> <!-- /.site-header -->
    
    
    <div class="container">
        
    </div>


    <div class="container" >
        <div class="row">
            
            <!-- Here begin Main Content -->
            <div class="col-md-14">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-item" style="background-color:purple;height:500px;" >
                            <h2 style="border-bottom: 1px solid #d5dbe0;color:black" class="welcome-text">SAHAYA SCHEMES</h2>

 <?php
$beneficiary=$_POST["beneficiary"];
$scheme_provider=$_POST["scheme_provider"];
 if($_POST['beneficiary']=="WOMEN" && $_POST['scheme_provider']=="State.Govt")
 {
	echo "<h3><a href='jsy.html'>1.JANANI SURAKSHA YOJANA(JSY)</a></h3>";
        echo "<h3><a href='swavlamban.html'>2.SWAVLAMBAN</a></h3>";
        echo "<h3><a href='ksy.html'>3.kISHORI SHAKTHI YOJANA(KSY)</a></h3>"; 
 }
 elseif($_POST['beneficiary']=="CHILD" && $_POST['scheme_provider']=="State.Govt")
 {
	echo "<h3><a href='anganwadi.html'>1.ANGANWADI</a></h3>";
        echo "<h3><a href='bsy.html'>2.BALIKA SAMRIDHI YOJANA(BSY)</a></h3>";
        echo "<h3><a href='sgs.html'>3.SHISHU GREHA SCHEME</a></h3>";
 }
 elseif($_POST['beneficiary']=="SENIOR CITIZEN" && $_POST['scheme_provider']=="State.Govt")
 {
	echo "<h3><a href='ntrbharosa.html'>1.NTR BHAROSA</a></h3>";
        echo "<h3><a href='ntrvaidya.html'>2.NTR VAIDYASEVA</a></h3>";
 }
  elseif($_POST['beneficiary']=="DISABLE" && $_POST['scheme_provider']=="State.Govt")
 {
	echo "<h3><a href='deendayal.html'>1.DEENDAYAL DISABLED REHABILITATION SCHEME</a></h3>";
        echo "<h3><a href='ntrbharosa1.html'>2.NTR BHAROSA</a></h3>"; 
 }
 elseif($_POST['beneficiary']=="WOMEN" && $_POST['scheme_provider']=="Central.Govt")
 {
	echo "<h3><a href='mother.html'>1.MOTHER AND CHILD TRACKING SYSTEM(MCTS)</a></h3>";
        echo "<h3><a href='rajiv.html'>2.RAJIV GANDHI SCHEME FOR EMPOWERMENT OF ADOLOSCENT GIRLS</a></h3>";
        echo "<h3><a href='swadhar.html'>3.SWADHAR</a></h3>";
 }
 elseif($_POST['beneficiary']=="CHILD" && $_POST['scheme_provider']=="Central.Govt")
 {
	echo "<h3><a href='betibachao.html'>1.BETIBACHAO,BETIPADHAO</a></h3>";
        echo "<h3><a href='indradhanush.html'>2.MISSION INDRADHANUSH</a></h3>";
        echo "<h3><a href='icds.html'>3.INTEGRATED CHILD DEVELOPEMENT SERVICE</a></h3>";
 }
 elseif($_POST['beneficiary']=="SENIOR CITIZEN" && $_POST['scheme_provider']=="Central.Govt")
 {
	 echo "<h3><a href='cghs.html'>1.THE CENTRAL GOVERNAMENT HEALTH SCHEME</a></h3>";
         echo "<h3><a href='scss.html'>2.SENIOR CITIZEN SAVINGS SCHEME</a></h3>";
 }
  elseif($_POST['beneficiary']=="DISABLE" && $_POST['scheme_provider']=="Central.Govt")
 {
	echo "<h3><a href='disable1.html'>1.NATIONAL SCHOLORSHIP SCHEME</a></h3>";
        echo "<h3><a href='disable2.html'>2.NATIONAL EMPOWERMENT AWARD</a></h3>";
 }
 ?>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                
            

            </div> <!-- /.col-md-8 -->
            
            <!-- Here begin Sidebar -->
            

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>