//script is for requesting views of all the books in the system  
$(document).ready(function(){
    $(document).on('click','#viewBookedBooks', function(){
      
        loadData1(0); // zero in the parameter here means that the data records are to start from the very beginning.
  
    })
  })//end of doc ready state

   
 function  loadData1(pageNum){
               
               $.ajax({
                   method:"POST",
                   beforeSend: function(){
                       $(".loader").css('display', 'block');
                   },
                   url: 'booked_books.php?p='+pageNum,
                   success:function(data){ 
                       $(".loader").css('display', 'none');
                      $('#displayBookedBooks').html(data);         
                                   
                   }
           
                   
               })//end of ajax call
   
           }// end 
         /*   function loadData1(pageNum){

            $.post( 'booked_books.php?p='+pageNum, function(data){
    
                $('#displayBookedBooks').html(data);  
            })
    
        }// end of laodData */


 

    
 