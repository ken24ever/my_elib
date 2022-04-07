$(document).ready(function(){
    $(document). on('click','#viewBooks', function(){
      loadData(0); 
  
    })
  })//end of doc ready state
    //script is for requesting views of all the books in the system
  
   
    
       const  loadData = (pagenum) => {

        $.post( 'viewAllBooks.php?p='+pagenum, function(response){
  
          $('#displayBooks').html(response);  
      })

       }// end of loadData
  
     /*  function loadData(pagenum){
  
          $.post( 'viewAllBooks.php?p='+pagenum, function(response){
  
              $('#displayBooks').html(response);  
          })
  
      }// end of loadData */





        
        //edit book title for search section 

        function editBooksTitle(bookIDs, texts, columnNames){
          $.ajax({
                   url: "edit_titles.php",
                   data:{bukIDs:bookIDs, txt:texts, columnNns:columnNames},
                    method: "POST",
                   dataType:"text",
                  success: function(response){
                      swal({
                          title: 'Updated Details',
                          width: 600,
                          padding: '3em',
                          html: response,
                          background: '#fff url(/images/trees.png)',
                          backdrop: 'rgba(0,0,123,0.4) url("/images/nyan-cat.gif") left top no-repeat'
                        });
                      loadData(0); 
                      
                }//end of success
          
           });//end of ajax
              
                  
              }// end of editBooksTitle()

          //updating the book title scripts
        $(document). on('blur','.bookTitles', function(){

          Swal.fire({
            title: 'Are you sure you want to update this book title?',
            html: "<h3 style='color:red;'>You won't be able to reverse this if you proceed!</h3>",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Update  It!'
          }).then((result) => {
            if (result.value) {
              var bookIDs = $(this).data("id1");
              var bookTitles = $(this).text();
              var columnNames= "bookTitles";
              editBooksTitle( bookIDs, bookTitles, columnNames); 
               //alert(bookIDs + bookTitles + columnNames );
  
              Swal.fire(
                'RECORD UPDATED!',
                'Your book title has been updated.',
                'success'
              )
            }else{
  
              swal("Cancelled", "No Action Was Taken! :)", "info");
              loadData(); 
            }
          })
                                                                  
          
              }); 

             $(document).ready(function(){


                $(this). on('click', '.a', function(){
              
            $('.a').css("display", "none")
            
            
              }) 
             

              $(this). on('click', '.b', function(){
              
                $('.a').css("display", "block")
              
                  }) 

             })