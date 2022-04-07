<html>
<head>
<title>
Home
</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="animate.css-master/animate.min.css">

<script src="js/jquery-3.2.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/adminLogin.js"></script>
 <link rel="stylesheet" href="package/dist/sweetalert2.min.css">
<script src="package/dist/sweetalert2.min.js"></script>
<style>
body{ background-color:#F2F2F2; padding:0px;}
.Head1{ font-family:Tahoma; color:white; text-align:center; font-size:30px; letter-spacing:5px;}
.tagName{font-size:30px; color:red; font-family:Forte; font-weight:bold; }
.welcome_container{ background-color:black; border-radius:8px; height:95px;  
margin:6px auto; box-shadow:#737373 1px 14px 14px 0px;}
h4{font-family:tahoma; font-size:14px; font-weight:bold; }
.label{color:red; font-size:18px; font-family:tahoma;}
/***** */
input[type=text] {
  box-shadow:#737373 1px 5px 5px 0px;
  font-size:18px; 
}

input[type=password] {
  box-shadow:#737373 1px 5px 5px 0px;
  font-size:18px;
}

.btn {
  box-shadow:#737373 1px 5px 5px 0px;
  font-size:18px;
}
</style>

</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><strong class="tagName">e-Lib App</strong></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="admin.php"><span class="glyphicon glyphicon-refresh"></span> Reload</a></li>
      </ul>
    </div>
  </div>
</nav><!-- end of Nav bar section -->


       <div class="container">
            <div class="row">
                 <div class="col-md-12">
               <h2 style="color:#000000; font-family:Tahoma;  font-weight:bold"> ADMIN LOG-IN </h2>
               </div><!-- end of col-md-12  -->
     </div><!-- end of row -->
</div><!-- end of container  -->

<div class="page-header"></div>

<div class="container">
            <div class="row">
                 <div class="col-md-6">
               <form method="post" action="login_admin.php" class="form" role="form" >
                        <div class="form-group col-md-7 col-sm-7 ">
                        <label class="label" for="adminId">Admin ID:</label>
                        <input type="text" name="adminId" id="adminId"  placeholder="Enter Admin ID" class="form-control">
                        </div>
                        <br/>
                        <div class="form-group col-md-7 col-sm-7 ">
                        <label class="label" for="passWord">Password:</label>
                        <input type="password" name="passWord" id="passWord"  placeholder="Enter Password" class="form-control">
                        <br/>
                        <a href="#"><b style="color:red; font-family:tahoma; font-size:14px;"> Forgot Password?</b></a> 
                        <br/>
                        <button class="btn btn-success" id="btnSubmit" name="btnSubmit" type="submit" > Admin Dashboard </button>
                        </div>
                        
                        
               </form>
               </div><!-- end of col-md-12  -->
     </div><!-- end of row -->
</div><!-- end of container  -->

<div class="page-header"></div>

<div class="container">
     <div class="row">
        <div class=" col-md-12">
              <strong> <p>&copy; <em style="color:red;"> Webspark Technologies Solutions Inc.</em> <?php echo date("Y-m-d");  ?> </p> For more inquires contact us on <span class="gly glyphicon-phone"></span>(07060474268) </strong>
        </div><!-- end of col-md-12  -->
     </div><!-- end of row -->
</div><!-- end of container  -->
</body>
</html>