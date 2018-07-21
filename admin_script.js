$(document).ready(function() {

	
    // ===========SHOW Manufacture PAGE=============================
     $('.add_manufacture').click(function(){
     	
        $.ajax({
            type: "post",
            url: "create_manufacture.php",
            dataType: 'html',
            success:function(data){
                $('#wrappercal').html(data);    
            }
        });
    });

     // ===========model form PAGE(CREATE)=============================
     $('.add_cars').click(function(){
        $.ajax({
            type: "post",
            url: "create_cars.php",
            dataType: 'html',
            success:function(data){
                $('#wrappercal').html(data);    
            }
        });
    });

     // ===========SHOW model PAGE(LISTING)=============================
     $('.show_cars').click(function(){
        $.ajax({
            type: "post",
            url: "view_car_listing.php",
            dataType: 'html',
            success:function(data){
                $('#wrappercal').html(data);    
            }
        });
    });




     // -----------------SAVE NEW MAIN manufacture-----------------
     $(document).on('click','.save_details',function(){
       
        if($('#manufacture_name').val())
        {
            $('.save_details').attr('disabled','true');
           
           $.ajax({
                    type: "post",
                    url: "insertmanufacture.php",
                    data:{
                    manufacture_name:$('#manufacture_name').val(),
                 },
                    datatype:'html',
                    success:function(data){
                       $('#msg').html(data);   
                       setTimeout(function () { // wait 1 seconds and reload
                          $( ".add_manufacture" ).trigger( "click" );
                        }, 2000); 
                    }
            });
        }
        else
        {
            $('#msg').html("<p class='alert alert-warning'>title is mandatory.</p>");  
        }
    });

		
		//============UPDATING manufacture========================= 
      $(document).on('click','.updatemanufacture',function(){
      	var $row = $(this).closest("tr");

            if($('#manu_name').val() =='')
                $('#msg').html("<p class='alert alert-warning'>title name is required.</p>");   
            else { 

            $.ajax({
                type: "post",
                url: "updatemanufacture.php",
                data:{
                    manu_id:$row.find(".manu_id").text(),
                    //manu_name:$('#manu_name').val(),
                    manu_name:$row.find('#manu_name').val(),
                    
                },
                dataType: 'html',
                success:function(data){
                   
                   $('#msg').html(data);    
                }
            });
        }
      });

      $(document).on('click','.deletemanufacture',function(){
            var $row = $(this).closest("tr");
             
            $.ajax({
                type: "post",
                url: "deletemanufacture.php",
                dataType: 'html',
                data:{
                    id:$row.find(".manu_id").text(),
                  
                },
                success:function(data){
                   
                   $('#msg').html(data); 
                    setTimeout(function () { // wait 1 seconds and reload
                    $( ".add_manufacture" ).trigger( "click" );
                    }, 2000);    
                }
            });
        
      });
});

  // -----------------Save New Model -----------------
	function submitdata()
			{     
			  	  var success = true;
			      var model_name = $("#model_name").val();        
			      var desc = $("#desc").val();
			      var color = $("#color").val();
			      var manu_year = $("#manu_year").val();
			      var manufacture = $("#manufacture").val();
			      if(model_name == '')
			       {
			          document.getElementById("error1").innerHTML = "Enter the model Name!";
			          success=false;
			       }
			       if(desc == '')
			       {
			         document.getElementById("error2").innerHTML = "Enter the  description!";
			         success=false;
			       } 
			       if(color == '')
			       {
			         document.getElementById("error3").innerHTML = "Enter the color";
			         success=false;
			       }  
			       if(manu_year == '')
			       {
			          document.getElementById("error4").innerHTML = "Enter manufactuing year";
			          success=false;
			       }
			       if(manufacture == '')
			       {
			          document.getElementById("error6").innerHTML = "Enter the manufacturer";
			          success=false;
			       }
			     	if( document.getElementById("car_photo1").files.length == 0 ){
					  document.getElementById("error7").innerHTML = "upload image";
			          success=false;
					}
			     if(success==true)
			     {

			         $('.submitdata').attr('disabled','true');
			         var datastring1 = new FormData($('#detailform')[0]);
			         $.ajax({
			                type: "POST",
			                url: "insertcardetails.php",    
			                dataType: 'html',
			                data:datastring1, 
			                mimeType: "multipart/form-data",
			                cache: false,
			                contentType: false,
			                processData: false, 
			                success: function(data) { 
			                 console.log(data);
			                  swal("Data Inserted", "", "success")
			                   setTimeout(function () { // wait 1 seconds and reload
		                          $(".add_cars").trigger( "click" );
		                        }, 1000); 
			                 },
			                error: function(data){
			                alert("Some Fields Are Missing");
			                }
			             });
			     }
			  }

//======================Delete Each model================================
	function delete_each_model(model_id)
	{
		$.ajax({
                type: "post",
                url: "deletemodel.php",
                dataType: 'html',
                data:{
                    model_id:model_id,
                },
                success:function(data){
                   swal("Product sold", "", "success") 
                    setTimeout(function () { // wait 1 seconds and reload
                    $( ".show_cars" ).trigger( "click" );
                    }, 2000);    
                }
            });
	}

	
 //======================Update Each model(Page)================================
	function view_each_model(model_id)
	{
		$.ajax({
                type: "post",
                url: "update_model.php",
                data:{model_id:model_id},
                dataType: 'html',
                success:function(data){
                   $('#wrappercal').html(data);       
                }
            });
	}

	//======================Update Each model================================
	function update_model_profile()
	{
		
		$.ajax({
                type: "post",
                url: "updateeachmodel.php",
                data: $('#updatemodel').serialize(),
                dataType: 'html',
                success:function(data){

                   swal("data Updated", "", "success") 
                        
                }
            });
	}



