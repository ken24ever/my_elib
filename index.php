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
 
<style>
body{ background-color:#F2F2F2; padding:0px;}
.Head1{ font-family:Chaparral Pro Light; color:white; text-align:center; font-size:30px; letter-spacing:5px;text-shadow: 3px 2px #000000;
 line-height: 1.8;}
.tagName{font-size:30px; color:red; font-family:Forte; font-weight:bold; }
.welcome_container{ background-color:DodgerBlue; border-radius:8px; height:95px;  
margin:6px auto; box-shadow:#737373 1px 8px 8px 0px;}
h4{font-family:tahoma; font-size:14px; font-weight:bold; }

 /* navigatin links styling */
 .linksNav{cursor:pointer; border:1px gray solid; font-size:14px; 
           padding:0px 8px; font-family:tahoma; color:lightBlue; border-radius:4px;
            box-shadow:#737373 1px 1px 1px 0px;}
.linksNav:hover{background-color:lightGreen; color:white; }


/*** table styling ****/
table#t01 {
    width: 100%;
    background-color: #f1f1c1;
    box-shadow:#737373 1px 5px 5px 0px;
    font-family:Charlemagne Std;
    font-weight:bold;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
    background-color: #fff;
}
table#t01 th {
    color: white;
    background-color: black;
}

/* for animated-search */
input[type=text] {
  padding:10 0;
  width: 200px;
  border:none;
  border-radius:3px;
  box-shadow:#737373 1px 5px 5px 0px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
  font-size:18px;
}

select{box-shadow:#737373 1px 5px 5px 0px;}

/* When the input field gets focus, change its width to 100% */
input[type=text]:focus {
  width: 30%;
}
/******form button */
.btn{padding:12 0; box-shadow:#737373 1px 5px 5px 0px; font-size:18px;}

#select_pub_names, #select_class_level, #select_General_Books, #select_authors{padding:10 0; border-radius:3px; font-size:18px;}
.shadow_border{ box-shadow:#737373 1px 5px 5px 0px; border:1px black solid; border-radius:8px;}
#form_name{display:none}

/** loader1 */
#loader {
  border: 4px solid #f3f3f3;
  border-radius: 50%;
  border-top: 4px solid blue;
  border-right: 4px solid green;
  border-bottom: 4px solid red;
  width: 40px;
  height: 40px;
  display:none;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}


</style>

<link rel="stylesheet" href="animate.css-master/animate.min.css">

<script type="text/javascript" src="js/add_books_details.js"></script>
<script type="text/javascript" src="js/searchBooks.js"></script>
<script type="text/javascript" src="js/adminLogin.js"></script>
<script type="text/javascript" src="js/search_names.js"></script>
<script src="js/edit_titles.js"></script>

<link rel="stylesheet" href="package/dist/sweetalert2.min.css">
<script src="package/dist/sweetalert2.min.js"></script>
<script type="text/javascript">
// animation section
function animElem1(){
 var animateNam = 'animated fadeIn';
 var animationend ='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationEnd'
 $(document).ready(function(e){
 
 $(".Head1").addClass(animateNam).one(animationend, function(){ $(this).removeClass(animateNam)})
 })
 
 
 }
 
 setInterval('animElem1()',4100);

// for blinking directions
function animElem2(){
 var animateNam = 'animated shake';
 var animationend ='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationEnd'
 $(document).ready(function(e){
 
 $(".blinkDirection").addClass(animateNam).one(animationend, function(){ $(this).removeClass(animateNam)})
 })
 
 
 }
 
 setInterval('animElem2()',1000);

 // class level not specified.
function animElem3(){
 var animateNam = 'animated fadeIn';
 var animationend ='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationEnd'
 $(document).ready(function(e){
 
 $(".classNotAssigned").addClass(animateNam).one(animationend, function(){ $(this).removeClass(animateNam)})
 })
 
 
 }
 
 setInterval('animElem3()',3000);
 

</script>

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
        <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
      </ul>
    </div>
  </div>
</nav><!-- end of Nav bar section -->

<div class="container">
     <div class="row">
        <div class="welcome_container col-md-12">
          <center><p class="Head1 lead"> Sacred Heart High School e-library Desktop Application.</p></center>
        </div><!-- end of col-md-12  -->
     </div><!-- end of row -->
</div><!-- end of container  -->



<div class="page-header"></div>
<center><h3 style="color:blue; font-family:Chaparral Pro Light; text-shadow: 1px 1px #000000;
  letter-spacing: 3px;line-height: 1.8;">
Search For The Text Book Of Choice Here!</h3></center>
<form method="post" action="" class="form" id="" role="form" onSubmit="return false;"> 
<center><input type="text" id="searchMe" name="searchMe" placeholder="Search For Books, Textbooks e.t.c"><button class="btn btn-success" id="searchBtn">Search Book</button></center>
<center><h4 style="color:black; font-family:tahoma;">Sort By:</h4></center>

<center>
<select id="select_pub_names" name="select_pub_names" >
  <optgroup label="Publishers">
    <option value="">Publishers</option>
    <?php
                 class MyDB1 extends SQLite3
        {
            function __construct()
            {
                 $this->open('database.db');
            }
        }

        $db1 = new MyDB1();
        $sql1 = "SELECT * FROM book_details "; // query
		    $ret1 = $db1->query($sql1);
			  while($row1 = $ret1->fetchArray(SQLITE3_ASSOC) ){
          $pubNames =$row1["publishers"];
          echo "<option value='$pubNames'>".$pubNames."</option>";
          }	
    ?>
  </optgroup>
 
</select>


<select id="select_authors" name="select_authors" >
  <optgroup label="Authors">
    <option value="">Authors</option>
    <?php
                 class MyDB extends SQLite3
        {
            function __construct()
            {
                 $this->open('database.db');
            }
        }

        $db = new MyDB();
        $sql = "SELECT * FROM book_details "; // query
		    $ret = $db->query($sql);
			  while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
          $authNames =$row["authors"];
          echo "<option value='$authNames'>".$authNames."</option>";
          }	
    ?>
  </optgroup>
 

</select>



</center>

</form>

<div class="page-header"></div>


<div class="container">
     <div class="row">
        <div class=" col-md-12">

<div class="panel-group">
  <div class="panel panel-default">
  
    <div class="panel-heading">
    
      <h2 class="panel-title">
      
        <a data-toggle="collapse" href="#collapse1">Instructions On How To Use The e-library</a> 
      </h2>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body"><h4>1. Use the search bar to search for the books and textbooks you want to read; a tabulated list of books will be displayed with their details as follows:
  <p><b style="color:red; font-family: verdana; font-size:15px;">NOTE: You can also narrow your search to get better searched results by using the sorting options like (Publishers, Authors,
              classes, general books).</b></p>
  <p><b>-</b> Column for checking Availability (i.e if the book is currently booked or not in the library's archive).</p>
  <p><b>-</b> Column that shows hint about the book and textbook like (The Author of the book, publisher and what the book is about).</p>
  <p><b>-</b> Column for frequently booked books , that is; (This shows the number of times a particular 
               book has been read by students).</p>
  <p><b>-</b> Column for the section of shelves where the books or textbooks are are kept for easy access .</p>
  </h4>
  <h4>2. Then, there is a column on the searched results for booking a book by simply ticking. Note: When ticking, the system will prompt you for
         your name to be stored.</h4>
  <h4>3. The admin would have to login to view all booked books and attend to them according to time of booking.</h4>
  <h4>4. Lastly, the admin control panel has sections like (view booked books, view returned books and input new book details e.t.c.)</h4></div>
      <div class="panel-footer"></div>
    </div>
  </div>
</div>
<center> <div id="loader"></div></center>
<div id="displaySearchedBooks"> </div>



<!-- modal -->
 <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;">Fill In This Short Form To Make Your Booking</h4>
        </div>
        <div class="modal-body">
          <form role="form" onSubmit="return false">
            <div class="form-group">
              <label for="firstName"><span class="glyphicon glyphicon-user"></span>First Name:</label>
              <input type="text" class="form-control" id="firstName" placeholder="Enter First Name">
            </div>
            <div class="form-group">
              <label for="lastName"><span class="glyphicon glyphicon-user"></span> Last Name:</label>
              <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
            </div>
            <div class="form-group">
              <label for="classLevel">class Level:</label><br/>
              <select id="select_class_level" name="select_class_level" >
  <optgroup label="Junior Secondary School">
    <option value="">Classes</option>
    <option value="jssOne">J.S.S ONE</option>
    <option value="jssTwo">J.S.S TWO</option>
    <option value="jssThree">J.S.S THREE</option>
  </optgroup>
 
  <optgroup label="Senior Secondary School">
    <option value="">Class</option>
    <option value="ssOne">S.S ONE</option>
    <option value="ssTwo">S.S TWO</option>
    <option value="ssThree">S.S THREE</option>
    <option value="Others">Others</option>
  </optgroup>

</select>
            </div>
        
            <button type="submit" class="btn btn-default btn-success btn-block col-md-6" id="submitBtn">Make Booking</button>
          </form>
        </div>
        
        <div class="modal-footer">
        <br/>
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>
        </div><!-- end of col-md-12  -->
     </div><!-- end of row -->
</div><!-- end of container  -->

<div class="page-header"></div>

<div class="container">
     <div class="row">
        <div class=" col-md-12">
              <strong> <p>&copy; <em style="color:red;"> Webspark Technologies Solutions Inc.</em> <?php echo date("Y-m-d");  ?> </p> For more inquires contact us on <span class="gly glyphicon-phone"></span> (07060474268)  </strong>
        </div><!-- end of col-md-12  -->
     </div><!-- end of row -->
</div><!-- end of container  -->
</body>
</html>
