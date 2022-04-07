<html>
<head>
<title>
Home
</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="animate.css-master/animate.min.css">



<style>
body{ background-color:#F2F2F2; padding:0px;}
.Head1{ font-family:Tahoma; color:white; text-align:center; font-size:30px; letter-spacing:5px;}
.tagName{font-size:30px; color:red; font-family:Forte; font-weight:bold; }



/***********/
#home,#menu1,#menu2,#menu3, #menu4{ background-color:white; font-family:tahoma; font-size:16px;
box-shadow:#737373 1px 5px 5px 0px; border-radius:5px; height:520px; overflow-y:auto }

/**** input and label styling ***/
.label{color:red; font-size:18px; font-family:tahoma; }
input[type=text] {
  font-size:18px;
  box-shadow:#737373 1px 5px 5px 0px;
 
}

input[type=number] {
  font-size:18px;
  box-shadow:#737373 1px 5px 5px 0px;
  border-radius:5px;
}
textarea {
  font-size:18px;
  box-shadow:#737373 1px 5px 5px 0px;
  border-radius:5px; 
}
table#t01 {
    width: 100%;
    background-color: #f1f1c1;
    box-shadow:#737373 1px 5px 5px 0px;
    font-family:Charlemagne Std;
    font-weight:1900px;
    color:black;
    
}

table#t01 td{  color:black;}

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
#select_more_options{box-shadow:#737373 1px 5px 5px 0px; font-size:18px;}
#bkCategory{box-shadow:#737373 1px 5px 5px 0px; font-size:18px;}
#bokShelve{box-shadow:#737373 1px 5px 5px 0px; font-size:18px;}

 /* navigatin links styling */
.linksNav{cursor:pointer; border:1px gray solid; font-size:14px; 
           padding:0px 8px; font-family:tahoma; color:lightBlue; border-radius:4px;
            box-shadow:#737373 1px 1px 1px 0px;}
.linksNav:hover{background-color:lightGreen; color:white; }

/******form button */
#viewBookedBooks,#searchBtn,#btnSubmit,#viewBooks,#searchTit,#avail,#dataAvail{ box-shadow:#737373 1px 5px 5px 0px; font-size:18px; padding:8 0}
#searchTitles{ box-shadow:#737373 1px 5px 5px 0px; font-size:18px; padding:8 0;
 border-radius:4px; border:none; cursor:pointer}
 .del_{height:70px; width:70px; box-shadow:#737373 1px 5px 5px 0px; border-radius:500px; border:5px lightcoral solid; color:lightsalmon;}
 #btnForDel{box-shadow:#737373 1px 5px 5px 0px;}


 /* tables with green background styling */
 .links:hover{text-decoration:none; color:white}
.book_quantity, .quantity, .links {cursor:pointer; color:black }
 .bookTitles{ color:black ; cursor:pointer; }
 .bookTitles:hover{color:white}
 .book_titles{ color:black }

 .quantity,.book_quantity,.bookTitles {background-color:lightGreen;  }

/* for animated-search */
#searchMe, #searchMe2{
  padding:10 0;
  width: 200px;
  border:none;
  border-radius:3px;
  box-shadow:#737373 1px 5px 5px 0px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
  font-size:18px;
}


/* When the input field gets focus, change its width to 100% */
#searchMe:focus, #searchMe2:focus {
  width: 30%;
}

#searchTitles{
  padding:10 0;
  width: 200px;
  border:none;
  border-radius:3px;
  box-shadow:#737373 1px 5px 5px 0px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
  font-size:18px;
}
#searchTitles:focus {
  width: 30%;
}

/** loader1 */
.loader {
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

/** loader2 */
#loader2 {
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

/** loader3 */
#loader3 {
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

<link rel="stylesheet" href="css/shrink_effects.css">
 <script src="js/jquery-3.4.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>


 


 <script src="js/edit_titles.js"></script>
<script src="js/add_books_details.js"></script>
<script src="js/edit_books_details.js"></script>
<script src="js/search_names.js"></script>


<link rel="stylesheet" href="package/dist/sweetalert2.min.css">
<script src="package/dist/sweetalert2.min.js"></script>
<script src="js/hover_effects.js"></script>

</head>

<body onload='
const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true
})

Toast.fire({
  icon: "success",
  title: "Welcome Admin!"
}) '>

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
        <li><a href="dashboard.php"><span class="glyphicon glyphicon-refresh"></span> Reload</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <b style="color:lightGreen; 
        font-size:18px; font-family:Birch Std">Hello</b> Admin</a></li>
        <li><a href="admin.php"><span class="glyphicon glyphicon-log-out"></span> Log-out</a></li>
      </ul>
    </div>
  </div>
</nav><!-- end of Nav bar section -->

<div class="container">
            <div class="row">
                 <div class="col-md-12">

 <ul class="nav nav-pills nav-justified">
  <li class="active"><a data-toggle="tab" href="#home">BOOKS BOOKED </a></li>
  <li><a data-toggle="tab" href="#menu1">RETURNED BOOKS</a></li>
  <li><a data-toggle="tab" href="#menu2">NEW ENTRY</a></li>
  <li><a data-toggle="tab" href="#menu3">LIST OF BOOKS</a></li>
 
</ul>


<div class="tab-content">

  <div id="home" class="tab-pane fade in active">
  <br/>
    <center><button class="btn btn-success" id="viewBookedBooks" >VIEW BOOKED DETAILS  </button></center>
    <center><h3 style="color:red;letter-spacing:5px;text-shadow: 1px 1px #000000;
 line-height: 1.8; font-family:Chaparral Pro Light;">CLICK THE BUTTON ABOVE TO DISPLAY BOOKED LIST. </h3></center>
<!-- displays the student frequent bookings  -->
<table class="table table-hover  table-responsive-sm  table-condensed " id="main" >
  <thead>
<tr>
<th>
<center> JSS ONE </center>
</th>
<th>
<center> JSS TWO </center>
</th>
<th>
<center>JSS THREE  </center>
</th>
<th>
<center> SS ONE  </center>
</th>
<th>
<center> SS TWO  </center>
</th>
<th>
<center> SS THREE  </center>
</th>
</tr>

</thead>

<tbody>
<tr>
<td >
<div class="progress" style="height:30px">

<div class="progress1 progress-bar progress-bar-striped active" role="progressbar"
aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" >
<strong style="color:black; font-size:15px;"><span id="jssOne"></span>%</strong>

</div>
</div><!-- end of progress -->

</td>

<td>
<div class="progress" style="height:30px">

<div class="progress2 progress-bar progress-bar-striped active" role="progressbar"
aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
<strong style="color:black; font-size:15px;"><span id="jssTwo"></span>%</strong>

</div>

</div><!-- end of progress -->
</td>
<td>
<div class="progress" style="height:30px">

<div class="progress3 progress-bar progress-bar-striped active" role="progressbar"
aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
<strong style="color:black; font-size:15px;"><span id="jssThree"></span>%</strong>

</div>

</div><!-- end of progress -->
</td>

<td>
<div class="progress" style="height:30px">

<div class="progress4 progress-bar progress-bar-striped active" role="progressbar"
aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
<strong style="color:black; font-size:15px;"><span id="ssOne"></span>%</strong>

</div>

</div><!-- end of progress -->
</td>

<td>
<div class="progress" style="height:30px">

<div class="progress5 progress-bar progress-bar-striped active" role="progressbar"
aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
<strong style="color:black; font-size:15px;"><span id="ssTwo"></span>%</strong>

</div>

</div><!-- end of progress -->
</td>

<td>
<div class="progress" style="height:30px">

<div class="progress6 progress-bar progress-bar-striped active" role="progressbar"
aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
<strong style="color:black; font-size:15px;"><span id="ssThree"></span>%</strong>

</div>

</div><!-- end of progress -->
</td>
</tr>
</tbody>

</table>

    <div class="page-header"></div>
    <center><div class="loader"></div></center>
    <center><div id="displayBookedBooks"></div></center>
    <script  src="js/dynamicPaging.js"></script>
  </div><!-- end of section TABLE OF BOOKINGS  -->

  <div id="menu1" class="tab-pane fade">
  
  
  <br/>
  <form method="post" action="" class="form" id="" role="form" onSubmit="return false;"> 
<center><input type="text" id="searchMe" name="searchMe" placeholder="Enter First Name"><input type="text" id="searchMe2" name="searchMe2" placeholder="Enter Last Name"><button class="btn btn-success" id="searchBtn">Search For Name</button></center>
</form>
<br/>
<center><h3 style="color:red;letter-spacing:5px;text-shadow: 1px 1px #000000;
 line-height: 1.8; font-family:Chaparral Pro Light;">USE THE SEARCH BAR TO FIND NAMES </h3></center>
  <div class="page-header"></div>

  <center> <div id="loader"></div></center>
    <div id="displaySearchedNames"></div>
 
  </div>

  <div id="menu2" class="tab-pane fade">

  <br/>
  <center><h3 style="color:red; letter-spacing:5px;text-shadow: 1px 1px #000000;
 line-height: 1.8; font-family:Chaparral Pro Light;">FILL IN THE FORM TO UPLOAD THE BOOK DETAILS </h3></center>
  <div class="page-header"></div>
    <form method="post" action="dashboard.php" class="form" role="form" onsubmit="return false;">
                        <div class="form-group col-lg-7 ">
                        <label class="label" for="bookTitle">Book Title:</label>
                        <input type="text" name="bookTitle" id="bookTitle" placeholder="Enter Book Title" class="form-control">
                        </div>
                        <br/>

                        <div class="form-group col-lg-7 ">
                        <label class="label" for="authorNm">Author's Name:</label>
                        <input type="text" name="authorNm" id="authorNm" placeholder="Enter Author's Name" class="form-control">
                        </div>
                        <br/>

                        <div class="form-group col-lg-7 ">
                        <label class="label" for="publisherNm">Publisher's Name:</label>
                        <input type="text" name="publisherNm" id="publisherNm" placeholder="Enter Publisher's Name" class="form-control">
                        </div>
                           <br/>  

                           <div class="form-group col-lg-7 ">
                        <label class="label" for="booksHint">Book's Content: </label> 
                        <textarea cols=68 rows=3 id="bkHint" name="bkHint" placeholder="Enter Book's Hints"></textarea>

                        </div>

                        <div class="form-group col-lg-7 "   >
                        <label class="label" for="bokShelve"  >Book Location:</label>
                        <select id="bokShelve" name="bokShelve" class="form-control" >
  <optgroup label="Shelve ">
    <option value="">Select Shelf</option>
    <option value="Shelf One">Shelf One</option>
    <option value="Shelf Two">Shelf Two</option>
    <option value="Shelf Three">Shelf Three</option>
    <option value="Shelf Four">Shelf Four</option>
    <option value="Shelf Five">Shelf Five</option>
    <option value="Shelf Six">Shelf Six</option>
    <option value="Shelf Seven">Shelf Seven</option>
    <option value="Shelf Eight">Shelf Eight</option>
    <option value="Shelf Nine">Shelf Nine</option>
    <option value="Shelf Ten">Shelf Ten</option>
  </optgroup>

</select>

</div>
                       
                           <br/> 
                           <div class="form-group col-lg-7 ">
                           <label class="label" for="book_quantity">Book Quantity:</label><br/> 
                           <input type="number" name="book_quantity" id="book_quantity" placeholder="Enter Book Quantity"  min="1">
                           <br/>

                          </div> 

                           <div class="form-group col-lg-7 ">
                        <label class="label" for="bkCategory">Book Category:</label>
                        <select id="bkCategory" name="bkCategory" class="form-control" >
 
    <option value="">Select Category</option>
    <option value="generalBks">General</option>
    <option value="classesBk">For Classes Only</option>

</select>

<br/>

                        </div> 
                        
                        <div class="form-group col-lg-7 "   >
                        <label class="label" for="stdntClass" id="labelForSelClass" >Students Class:</label>
                        <select id="select_more_options" name="" class="form-control" >
  <optgroup label="Junior Secondary School">
    <option value="">Select Classes</option>
    <option value="jssOne">J.S.S ONE</option>
    <option value="jssTwo">J.S.S TWO</option>
    <option value="jssThree">J.S.S THREE</option>
  </optgroup>
 
  <optgroup label="Senior Secondary School">
    
    <option value="ssOne">S.S ONE</option>
    <option value="ssTwo">S.S TWO</option>
    <option value="ssThree">S.S THREE</option>
    
  </optgroup>

</select>
<br/>
<button class="btn btn-success" id="btnSubmit" name="btnSubmit" > Upload Details </button>

</div>

      <div class="dispMsg"> </div>                       
                        
               </form>
             
               

                   </div>


                   <div id="menu3" class="tab-pane fade">
 
  <center><button class="btn btn-primary" id="viewBooks">  CLICK TO VIEW BOOK RECORDS </button></center>
<br>
 <form method="post" action="" class="form" id="" role="form" onSubmit="return false;"> 
<center><input type="text" id="searchTitles" name="searchTitles" placeholder="Search By Title"><button class="btn btn-success" id="searchTit">Search By Titles</button></center>
</form>

  <center><h3 style="color:red; letter-spacing:5px;text-shadow: 1px 1px #000000;
 line-height: 1.8; font-family:Chaparral Pro Light;">COLUMNS WITH GREEN BACKGROUND ARE EDITABLE </h3></center>
 
  <div class="page-header"></div>
  <center><div id="loader2"></div></center>
  
 <center><div id="displayBooks"></div></center>
 <center><div id="displayTitleResults"></div></center>
 <script>
 $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

 <script>
/* $(document).ready(function(){
  $(document).on('click','#viewBooks', function(){
    
    //loadData(0); 

  })
})//end of doc ready state */
  //script is for requesting views of all the books in the system

 
  
       

    /* function loadData(pagenum){

       

        $.ajax({
            method:"POST",
            beforeSend: function(){
                $("#loader2").css("display","block");
            },
            url:'viewAllBooks.php?p='+pagenum,
            success:function(response){ 
              $("#loader2").css("display","none");
              $('#displayBooks').html(response);                
            }
    
            
        })//end of ajax call

    }// end of loadData */

    


</script>

  </div>



 

    
  

</div><!-- end of  tab-content -->



 </div><!-- end of col-md-12  -->
     </div><!-- end of row -->
</div><!-- end of container  -->

<div class="page-header"></div>

<div class="container">
     <div class="row">
        <div class=" col-md-12">
              <strong> <p>&copy; <em style="color:red;"> Webspark Technologies Solutions Inc.</em> <?php echo date("Y-m-d");  ?> </p> For more inquires contact us on<span class="gly glyphicon-phone"></span> (07060474268)  </strong>
        </div><!-- end of col-md-12  -->
     </div><!-- end of row -->
</div><!-- end of container  -->
</body>
</html>