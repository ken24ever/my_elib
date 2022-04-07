// add books details to the systems
function add_books_details(){
    //declare local variables 
    var bookTitle = $("#bookTitle").val();
    var authorName= $("#authorNm").val();
    var publisherName= $("#publisherNm").val();
    var bookHint= $("#bkHint").val();
    var selectClass= $("#select_more_options").val();
    var selectCategory = $("#bkCategory").val();
    var bookQuantity = $("#book_quantity").val();
    var bookshelve = $("#bokShelve").val();

    if ( bookTitle == "" || authorName == "" ||  publisherName == "" || bookHint == "" 
     || selectCategory == "" || bookQuantity =="" || bookshelve == ""){
    	swal({
			title: "Ooops!",
			text: "Blank Form, Fill All!",
			textColor: "red",
			type: "error",
			confirmButtonText:"Exit",
			 allowOutsideClick: false,
  timer: 3000
			});

    }else{

        $.ajax({
            method:"POST",
            beforeSend: function(){
                 swal({
 title: '',
 text: 'Uploading Shortly...'
});
swal.showLoading();
            },
            data:{bkTitle:bookTitle, authName:authorName,
                 pubName:publisherName, 
                 bukHint:bookHint, selClass:selectClass, selCat:selectCategory, bkQty:bookQuantity, bkShelve:bookshelve},
            url: "add_book_info.php",
            success:function(data){ 
                 
                        swal(data);
                      $("#bookTitle").val("");
                        $("#authorNm").val("");
                        $("#publisherNm").val("");
                         $("#bkHint").val("");
                         $("#select_more_options").val("");
                        $("#bkCategory").val("");
                        $("#book_quantity").val("");
                         $("#bokShelve").val("");
                            
            }
    
            
        })//end of ajax call


    }// end of else control statement




    
}// end of add_books_details()

$(document). on('click','#btnSubmit', function(){
    add_books_details(); 
    return false;
      });//end of doc onClick

      /*here we set the selection category to display none until
       a condition is reached during uploading book details */

      $(document).ready(function (){

        $("#select_more_options").css('display', 'none');
        $("#labelForSelClass").text(" ")
       
        $(document). on('mouseout','#bkCategory', function(){
            var selectCategory = $("#bkCategory").val();
            var selectClass = $("#select_more_options").val();
            
            if (selectCategory == 'classesBk'){
                

                $("#select_more_options").fadeIn("slow");
                $("#labelForSelClass").text("Students Class:")
                selectCategory.val(" ")
            
            }else if (selectCategory == 'generalBks'){

                $("#select_more_options").fadeOut("slow");
           $("#labelForSelClass").text(" ");
           selectClass.val(" ")
            }//end of else
              });// end of document onMouseout

      })//end of ready state

     
      
       
      
      //script is for requesting views of all the booked books in the system

      $(document).ready(function(){
          
        $(document). on('click','#bookedBooks', function(){
               
            $.ajax({
                method:"POST",
                beforeSend: function(){
                    $(".loader").css('display', 'block');
                },
                url: "booked_books.php",
                success:function(data){ 
                    $(".loader").css('display', 'none');
                   $('#displayBookedBooks').html(data);         
                                
                }
        
                
            })//end of ajax call

        })//end of doc onClick


        
      })//end of doc ready

/* count for each class js scripts stay here  */
      $(document).ready(function (){

        function count_all (){

            $.ajax({
                method:"POST",
                beforeSend: function(){
                   // $("#loader4").css('display', 'block');
                },
                url: "count_jssOne.php",
                success:function(data){ 
                    //$("#loader4").css('display', 'none');
                    $(".progress1").css('width', data+"%");
                    
                   $('#jssOne').html(data);         
                                
                }

            })//end of ajax 

            $.ajax({
                method:"POST",
                beforeSend: function(){
                   // $("#loader4").css('display', 'block');
                },
                url: "count_jssTwo.php",
                success:function(data){ 
                    //$("#loader4").css('display', 'none');
                   
                    $(".progress2").css('width', data,"%");
                   $('#jssTwo').html(data);         
                                
                }

            })//end of ajax 

            $.ajax({
                method:"POST",
                beforeSend: function(){
                   // $("#loader4").css('display', 'block');
                },
                url: "count_jssThree.php",
                success:function(data){ 
                    //$("#loader4").css('display', 'none');
                    $(".progress3").css('width', data+"%");
                   $('#jssThree').html(data);         
                                
                }

            })//end of ajax

            $.ajax({
                method:"POST",
                beforeSend: function(){
                   // $("#loader4").css('display', 'block');
                },
                url: "count_ssOne.php",
                success:function(data){ 
                    //$("#loader4").css('display', 'none');
                    $(".progress4").css('width', data+"%");
                   $('#ssOne').html(data);         
                                
                }

            })//end of ajax

            $.ajax({
                method:"POST",
                beforeSend: function(){
                   // $("#loader4").css('display', 'block');
                },
                url: "count_ssTwo.php",
                success:function(data){ 
                    //$("#loader4").css('display', 'none');
                    $(".progress5").css('width', data+"%");
                   $('#ssTwo').html(data);         
                                
                }

            })//end of ajax

            $.ajax({
                method:"POST",
                beforeSend: function(){
                   // $("#loader4").css('display', 'block');
                },
                url: "count_ssThree.php",
                success:function(data){ 
                    //$("#loader4").css('display', 'none');
                    $(".progress6").css('width', data+"%");
                   $('#ssThree').html(data);         
                                
                }

            })//end of ajax


        }// end of count_all()
 
        setInterval(count_all , 4000);

      })//end of doc ready