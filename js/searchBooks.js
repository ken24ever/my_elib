
    $(document).ready(function (){
      $(document).on('click','.bookAvailability',function(){
        var id = $(this).data("id7");
        //alert(id)
        $.ajax({
          data:{ID:id},
          url: "ramdom_ids.php",
          method: "POST",
          success: function(data){
            //alert(data);
          // $('#live_add_sales').html(data);
         }
       
        });//end of ajax
       })//end of onclick avail
       
           
       $("#submitBtn").click(function(){

        var firtName = $("#firstName").val();
        var lastName = $("#lastName").val();
        var studentClassLevel = $("#select_class_level").val();
            
            if (firtName == "" || lastName == "" || studentClassLevel == ""){
               swal({
                title: "Ooops!",
                text: "Blank Form, Fill All!",
                textColor: "red",
                type: "error",
                confirmButtonText:"Exit",
                 allowOutsideClick: false,
            timer: 3000
                }); 

               // alert("Empty Form, Please Fill All!")

                return false;
            }//end of if control statement
          else {
                
            $.ajax({
              method:"POST",
              beforeSend: function(){
                   swal({
   title: '',
   text: 'Adding Details Shortly...'
  });
  swal.showLoading();
              },
              data:{first_name:firtName, last_name:lastName, class_level:studentClassLevel},
              url: "add_names.php",
              success:function(data){ 
                   
                          swal(data);
                          
                        //  alert(id);
                        $("#firstName").val("");
                          $("#lastName").val("");
                          $("#select_class_level").val("");
                           
                              
              }
      
              
          })//end of ajax call




          }//end of if else statement


       });// end of click method

   })//end of doc ready 

  
   /*  $(document).on('click', '.a', function (){

        $('#demo').show("slow")
        $(this).hide("slow")
        $('#b').show("slow")

   })

   $(document).on('click', '#b', function (){

    $('#demo').hide("slow")
        $('#a').show("slow")
        $(this).hide("slow")

}) */