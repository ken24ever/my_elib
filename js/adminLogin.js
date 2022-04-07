$(document).ready(function() {
	
    $(document).on('click','#btnSubmit',function(){
    
        var admin = $('#adminId').val()
        var pass = $('#passWord').val()
        
        if (admin == "" || pass == "") {
            
            swal({
                title: "Ooops!",
                text: "Blank Form, Fill All!",
                textColor: "red",
                type: "error",
                confirmButtonText:"Exit",
                 allowOutsideClick: false,
      timer: 3000
                });

        
        }// end of if admin == ''
        
        else{
            
            $.ajax({
                method:"POST",
                beforeSend: function(){
                     swal({
     title: '',
     text: 'Logging In Shortly...'
});
swal.showLoading();
                },
                data:{adm:admin, password:pass},
                url: "login_admin.php",
                success:function(data){ 

                    swal(data);
            /*         var LoginStatus = data;
                       
                    
                    if (LoginStatus == "Login Success" ){
                     window.location='dashboard.php';

                     return true;
                    }
            if (LoginStatus != "Login Success" ){
                    swal({
                        title: "Ooops!",
                        text: "Login Failed, Review Your Login Details!",
                        textColor: "red",
                        type: "error",
                        confirmButtonText:"Exit",
                         allowOutsideClick: false,
              timer: 3000
                        });
                        
                        return false;
                 
                    }//end of if   */
                                
                }//end of success property
        
                
            })//end of ajax call
            
            
            
            
        }//end of else
        
    })//end of on click event
    
    
    
});//end of document ready

/* 
$(document).ready(function() {
	// add books details to the systems
    function add_names(id, text, columnName){

        $.ajax({
            url: "insert_names.php",
            data:{id:id, text:text, columnName:columnName},
             method: "POST",
            dataType:"text",
           success: function(data){
          $('#displaySearchedBooks').html(data);
           
         }//end of success
   
    });//end of ajax

}// end of add_names()

$(document). on('click','.bookAvailability', function(){
												
	var id = $(this).data("id7");
	var title = $(this).text();
	var cust_titleColumn = "custitle";
	      edit_customer( id, title, cust_titleColumn); 
     // alert(id + user_name + colNam );
     //declare local variables 
    var firstN = $("#firstName").val();
    var lastN= $("#lastName").val();
    var classLv= $("#select_class_level").val();

    $(document). on('click','#submitBtn', function(){
    $.ajax({
    
        url: "insert_names.php",
        data:{id:id, text:text, columnName:columnName},
         method: "POST",
        dataType:"text",
       success: function(data){
      $('#displaySearchedBooks').html(data);
       
     }//end of success

});//end of ajax

    })//end of inner onClick

		});//end of onClick
         
    
});//end of document ready */