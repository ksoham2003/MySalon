<?php include_once("header.php");
include('hms/include/config.php');
?><!--Header-->
<div class="main">
    <div class="container">
        <div class="row">
            <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                <center><h4>Book Your Appointment Today</h4></center>
                <br>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form role="form" action='' method="POST" id='contact-form' enctype="multipart/form-data">
                      <div class="form-group">
                        
                        <input type="text" class="form-control" name='name' id="name" placeholder="Enter Your Name*" 
                        onkeyup="document.getElementById('nameErr').innerHTML=''" required="">
                        <label class="text-danger " id="nameErr"></label>
                      </div>
                      <div class="form-group">
                       
                        <input type="number" class="form-control" size="10" maxlength="10" minlength="0" name='phone' id="phone" placeholder="Enter Your Phone*" 
                        onkeyup="document.getElementById('phoneErr').innerHTML=''" required>
                        <label class="text-danger " id="phoneErr"></label>
                      </div>
                      <div class="form-group">
                        
                        <input type="email" class="form-control" name='email' id="email" aria-describedby="emailHelp" placeholder="Enter email*"
                        onkeyup="document.getElementById('emailErr').innerHTML=''" required>
                        <label class="text-danger " id="emailErr"></label>
                      </div>
                      <div class="form-group">
                        <input type="date" class="form-control" name='date' id="date"   data-provide="datepicker"
                        onkeyup="document.getElementById('dateErr').innerHTML=''" required>
                      </div>
                      <div class="form-group">
                            <label for="select">Choose Your Time:<br></label>
                            <select class="form-control" name='time' id="time">
                                <option name="appo-time">09:30AM-10:00AM</option>
                                <option name="appo-time">10:30AM-11:00AM</option>
                                <option name="appo-time">11:30AM-12:00PM</option>
                                <option name="appo-time">13:30PM-14:00PM</option>
                                <option name="appo-time">14:30PM-15:00PM</option>
                                <option name="appo-time">15:30PM-16:00PM</option>
                                <option name="appo-time">16:30PM-17:00PM</option>
                                <option name="appo-time">17:30PM-18:00PM</option>
                                <option name="appo-time">18:30PM-19:00PM</option>
                            </select>
                      </div>
                      <div class="submit">
                          <button type="submit" name="btnSubmit" id='btnSubmit' class="btn btn-primary">Submit</button>
                      </div>
                      
                      <div id="mail-status"></div>
                </form>
            </div>       
        </div>
    </div>
</div>
<?php include_once("footer.php");?> <!--Footer-->
<script>

 $(document).ready(function () {

		$("#btnSubmit").click(function (event) {

			event.preventDefault();

			  var data = new FormData($('#contact-form')[0]);

			  if($('#name').val().trim()==''){

				 document.getElementById("nameErr").innerHTML = "Please provide Name";

				 document.getElementById("name").focus();

				 return;

			  }

			  if($('#email').val().trim()==''){

				 document.getElementById("emailErr").innerHTML = "Please provide Email";

				 document.getElementById("email").focus();

				 return;

			  }

			  if($('#phone').val().trim()==''||$('#phone').val().maxlength){

				 document.getElementById("phoneErr").innerHTML = "Please Correct provide Mobile Number";

				 document.getElementById("phone").focus();

				 return;

			  }
			  
			  var dateTime = document.getElementById("date").value;

			  if(document.getElementById("date").value == "" || document.getElementById("date").value == null){

				 document.getElementById("date").innerHTML = "Please choose date";
				
				 document.getElementById("dateErr").focus();

				 return;

			  }
			  $("#btnSubmit").prop("disabled", true);

			  

   

   	 //alert(dataString);

    	//var form = $(this);

		 $.ajax({

            type: "POST",

            url: "appointment-result.php",

            data: data,

            processData: false,

				contentType: false,

				cache: false,

				success: function(data) { 
 				console.log(data);
               $("#mail-status").removeClass('text-danger');

						$("#mail-status").addClass('text-success');

						$("#mail-status").html("We have received your enquiry successfully!");
						alert("We have received your enquiry successfully!, our team contact soon..")

						$("#btnSubmit").prop("disabled", false);

						$('#name').val('');

						$('#email').val('');

						$('#phone').val('');
						
						$('#date').val('');

            },

            error:function(error){

                $("#mail-status").removeClass('text-success');

						$("#mail-status").addClass('text-danger');

						$("#mail-status").html("Something went wrong..Please try again!");

            }
        });//ajax

	});//2nd Function

      });//1st function

    </script>