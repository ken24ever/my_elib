/* $(document).ready(function(){
    $(document). on('click','#viewBooks', function(){
      loadData(0); 
  
    })
  })//end of doc ready state
    //script is for requesting views of all the books in the system
  
   
    
         
  
      function loadData(pagenum){
  
          $.post( 'viewAllBooks.php?p='+pagenum, function(response){
  
              $('#displayBooks').html(response);  
          })
  
      }// end of loadData */

   
      

            function editBooksInfo(bookID, text, columnName){
                $.ajax({
                         url: "edit_quantity.php",
                         data:{bukID:bookID, text:text, columnNn:columnName},
                          method: "POST",
                         dataType:"text",
                        success: function(data){
                            swal({
                                title: 'Updated Details',
                                width: 600,
                                padding: '3em',
                                html: data,
                                background: '#fff url(/images/trees.png)',
                                backdrop: `
                                  rgba(0,0,123,0.4)
                                  url("/images/nyan-cat.gif")
                                  left top
                                  no-repeat
                                `
                              });
                           // loadData(0); 
                            
                      }//end of success
                
                 });//end of ajax
                    
                        
                    }// end of editBooksInfo()
                

  
  



          //edit quantity for view section  
      $(document). on('blur','.quantity', function(){

        Swal.fire({
          title: 'Are you sure you want to update?',
          html: "<h3 style='color:red;'>You won't be able to reverse this if you proceed!</h3>",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Update  It!'
        }).then((result) => {
          if (result.value) {
            var bookID = $(this).data("id8");
            var title = $(this).text();
            var columnName= "quantity";
            editBooksInfo( bookID, title, columnName); 
             // alert(id + user_name + colNam );

            Swal.fire(
              'RECORD UPDATED!',
              'Your book quantity has been updated.',
              'success'
            )
          }else{

            swal("Cancelled", "No Action Was Taken! :)", "info");
           // loadData(); 
          }
        })
                                                                
        
            });

  //edit quantity for search section 
            $(document). on('blur','.book_quantity', function(){

              Swal.fire({
                title: 'Are you sure you want to update?',
                html: "<h3 style='color:red;'>You won't be able to reverse this if you proceed!</h3>",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Update  It!'
              }).then((result) => {
                if (result.value) {
                  var bookID = $(this).data("id8");
                  var title = $(this).text();
                  var columnName= "quantity";
                  editBooksInfo( bookID, title, columnName); 
                   // alert(id + user_name + colNam );
      
                  Swal.fire(
                    'RECORD UPDATED!',
                    'Your book quantity has been updated.',
                    'success'
                  )
                }else{
      
                  swal("Cancelled", "No Action Was Taken! :)", "info");
                  //loadData(); 
                }
              })
                                                                      
              
                  }); 
                  
                