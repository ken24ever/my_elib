//script for searched names 

       $(document).ready(function(){
          
        $(document). on('click','#searchBtn', searchNames= function(){
               var searchInput = $("#searchMe").val();
               var searchInput2 = $("#searchMe2").val();
              

               if (searchInput == "" || searchInput2 ==""){

                swal({
                    title: "Ooops!",
                    text: "Nothing Was Entered, Type In A Name!",
                    type: "error",
                    confirmButtonText:"Exit",
                     allowOutsideClick: false,
          timer: 3000
                    });

               }else{

            $.ajax({
                method:"POST",
                data: {firstName:searchInput, lastName:searchInput2, p:""},
                beforeSend: function(){
                    $("#loader").css('display', 'block');
                },
                url: "returned_books.php",
                success:function(data){ 
                    $("#loader").css('display', 'none');
                   var dispName = $('#displaySearchedNames').html(data); 
                   dispName.fadeIn("slow");
                   //swal(data)    
                                
                }
        
                
            })//end of ajax call

        }//end of else control statement

        })//end of doc onClick

      })//end of doc ready


      /// search for titles
      $(document).ready(function(){
          
        $(document). on('click','#searchTit', function(){
               var searchInp = $("#searchTitles").val();
            
              

               if (searchInp == ""){

                swal({
                    title: "Ooops!",
                    text: "Nothing Was Entered, Type In A Book Title!",
                    type: "error",
                    confirmButtonText:"Exit",
                     allowOutsideClick: false,
          timer: 3000
                    });

               }else{

            $.ajax({
                method:"POST",
                data: {searchedBook:searchInp, p:""},
                beforeSend: function(){
                    $("#loader3").css('display', 'block');
                },
                url: "search_titles.php",
                success:function(data){ 
                    $("#loader3").css('display', 'none');
                    
                   $('#displayTitleResults').html(data); 
                
                   //swal(data)    
                                
                }
        
                
            })//end of ajax call

        }//end of else control statement

        })//end of doc onClick

      })//end of doc ready

//on click event to control displays of results set
$(document).ready(function (){

    $(document). on('click','#viewBooks', function(){

        $("#displayBooks").slideDown(1200);
        $('#displayTitleResults').fadeOut(1200); 
    })//end of on click 

    $(document). on('click','#searchTit', function(){
        var searchInput = $("#searchTitles").val();
          if (searchInput == ""){
            return false;
          }else{
            $("#displayBooks").fadeOut(1200);
            $('#displayTitleResults').slideDown(1200)
          }
      
    })//end of on click

})//end of ready state



      
      // delete names from system

$(document).on('click','.del', function(){
													
    var id = $(this).data("id9");
swal({	

type: 'warning',
title: '<strong style="color:red; font-size:20px; font-family:tahoma">Are you sure you want to delete this ID: '+id+'?</strong>',
text: "This action can not be undo",
showCancelButton: true,
ConfirmButtonColor: '#FF0000',
ConfirmButtonText: 'Yes, Delete it!',
allowOutsideClick: false,
showLoaderOnConfirm: true,

preConfirm: function () {

return new Promise (function (resolve) {
$.ajax({
url:"delete_names.php",
method:"POST",
data:{id:id},
dataType:"text",
success:function(data){
swal("Deleted!", '<strong style="color:green; font-size:20px; font-family:tahoma">'+data+'</strong>', "success");
searchNames()
}// end of success func
});// end of ajax 
})// end of promise object

}//end of preconfirm function

     })//end of swal

});//end of document on click


 // delete book records from system

 $(document).on('click','.anchor', function(){
													
    var bookId = $(this).data("id11");
    
  swal({	
  
  type: 'warning',
  title: '<strong style="color:red; font-size:20px; font-family:tahoma">Are you sure you want to delete this book records with ID: '+bookId+'?</strong>',
  text: "This action can not be undo",
  showCancelButton: true,
  ConfirmButtonColor: '#FF0000',
  ConfirmButtonText: 'Yes, Delete it!',
  allowOutsideClick: false,
  showLoaderOnConfirm: true,
  
  preConfirm: function () {
  
  return new Promise (function (resolve) {
  $.ajax({
  url:"delete_book_record.php",
  method:"POST",
  data:{bookId:bookId},
  dataType:"text",
  success:function(data){
  swal("Deleted!", '<strong style="color:green; font-size:20px; font-family:tahoma">'+data+'</strong>', "success");
  $("#displayTitleResults").html(data)
  }// end of success func
  });// end of ajax 
  })// end of promise object
  
  }//end of preconfirm function
  
     })//end of swal
  
  });//end of document on click
  




$(document).ready(function(){
    
//search pagination script one

const loadSearchedPage = (firstName, lastName, p) => {
 // make an ajax call to execute for every searched data while paginating
 $.ajax({
    method:"POST",
    beforeSend: function(){
        $("#loader").css("display","block");
    },
    data: {firstName:firstName , lastName:lastName, p:p },
    url:"returned_books.php",
    success:function(response){ 
      $("#loader").css("display","none");
      var dispName = $('#displaySearchedNames').html(response); 
      dispName.fadeIn("slow");               
    }

    
})//end of ajax call

}//end of func loadSearchedPage()

/* function loadSearchedPage (firstName, lastName, p){
    
            // make an ajax call to execute for every searched data while paginating
            $.ajax({
                method:"POST",
                beforeSend: function(){
                    $("#loader").css("display","block");
                },
                data: {firstName:firstName , lastName:lastName, p:p },
                url:"returned_books.php",
                success:function(response){ 
                  $("#loader").css("display","none");
                  var dispName = $('#displaySearchedNames').html(response); 
                  dispName.fadeIn("slow");               
                }
        
                
            })//end of ajax call


    
}//end of func loadSearchedPage()
 */



    //trigger this function i.e (loadSearchedPage()) with an onclick event handler
    $(document).on('click', '.p', function (){

        var inputFirstName = $("#searchMe").val();
        var inputSecondName = $("#searchMe2").val();
        var page = $(this).data("id9")

        loadSearchedPage(inputFirstName, inputSecondName, page )
//alert(inputFirstName + inputSecondName + page)
    })//end of on click event for loadSearchedPage()



    //search pagination script two
 const loadSearchedPage1 = (searchedBook, p) => {
// make an ajax call to execute for every searched data while paginating
$.ajax({
    method:"POST",
    beforeSend: function(){
        $("#loader3").css("display","block");
    },
    data: {searchedBook:searchedBook, p:p },
    url:"search_titles.php",
    success:function(response1){ 
        $("#loader3").css('display', 'none');
                
        $('#displayTitleResults').html(response1);               
    }

    
})//end of ajax call



}//end of func loadSearchedPage1()

/* function loadSearchedPage1 (searchedBook, p){
    
    // make an ajax call to execute for every searched data while paginating
    $.ajax({
        method:"POST",
        beforeSend: function(){
            $("#loader3").css("display","block");
        },
        data: {searchedBook:searchedBook, p:p },
        url:"search_titles.php",
        success:function(response1){ 
            $("#loader3").css('display', 'none');
                    
            $('#displayTitleResults').html(response1);               
        }

        
    })//end of ajax call



}//end of func loadSearchedPage1()
 */



//trigger this function i.e (loadSearchedPage1()) with an onclick event handler
$(document).on('click', '.p1', function (){

var textBookTitle = $("#searchTitles").val();
var page1 = $(this).data("id10")

loadSearchedPage1(textBookTitle, page1 )

})//end of on click event for loadSearchedPage1()








})//end of doc ready



//script for searched books 

$(document).ready(function(){
          
    $(document). on('click','#searchBtn', function(){
           var searchInput = $("#searchMe").val();
           var pubName = $("#select_pub_names").val();
           var byAuthor = $("#select_authors").val();
          

           if (searchInput == ""){

            swal({
                title: "Ooops!",
                text: "Nothing Was Entered, Type In A Book Title!",
                type: "error",
                confirmButtonText:"Exit",
                 allowOutsideClick: false,
      timer: 3000
                });

           }else{

        $.ajax({
            beforeSend: function(){
                $("#loader").css('display', 'block');
                
            },
            method:"POST",
            data: {searchedBook:searchInput, booksPub:pubName,
                 booksAuth:byAuthor, p:""},
            url: "search_books.php",
            success:function(data){ 
                $("#loader").css('display', 'none');
                //$("#searchMe").val("");
                $(".panel-group").fadeOut("slow");
               $('#displaySearchedBooks').html(data); 
               //swal(data)    
                            
            }
    
            
        })//end of ajax call

    }//end of else control statement

    })//end of doc onClick

  })//end of doc ready


$(document).ready(function(){

//search pagination script three
function loadSearchedPage2 (searchedBook, booksPub, booksAuth,  p){
    
    // make an ajax call to execute for every searched data while paginating
    $.ajax({
        method:"POST",
        beforeSend: function(){
            $("#loader").css("display","block");
        },
        data: {searchedBook:searchedBook, booksPub:booksPub, booksAuth:booksAuth,  p:p },
        url:"search_books.php",
        success:function(response2){ 
            $("#loader").css('display', 'none');
                   
                    $(".panel-group").fadeOut("slow");
                   $('#displaySearchedBooks').html(response2); 
                
                   

                            
        }

        
    })//end of ajax call



}//end of func loadSearchedPage2()




//trigger this function i.e (loadSearchedPage2()) with an onclick event handler
$(document).on('click', '.pa', function (){

var textBookTitle1 =  $("#searchMe").val();
var publish = $("#select_pub_names").val();
var author= $("#select_authors").val();
var page2 = $(this).data("id11")
 

loadSearchedPage2(textBookTitle1, publish, author, page2 )

})//end of on click event for loadSearchedPage1()



        

        })//end of doc onClick



