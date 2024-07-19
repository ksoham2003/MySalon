<?php 
	include('hms/include/config.php');
	//print_r($_POST);
        //includes and session  start here
        //validate that request parameters are set
        if ( isset($_POST)) 
        {
              //getters
            //$data = $_POST["data"];

              $email = $_POST['email'];
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $date= $_POST['date'];
                $time=$_POST['time'];
                $query=mysqli_query($con,"insert into appointment(name,phone,email,date,time) values('$name','$phone','$email','$date','$time')");
      if($query)
      {
        echo "<script>alert('data inserted successfully added');</script>";
      }
               
            $toEmail = 'mysalon@gmail.com';

                            // Sender
                            $from = $email;
                            $fromName = 'Enquiry Form';
                            
                            // Subject
                            $emailSubject =  $subject;
                             $htmlContent = '<h2>Enquiry Request</h2>
                                <p><b>Name:</b> '.$name.'</p>
                                <p><b>Email:</b> '.$email.'</p>
                                <p><b>Mobile Number:</b> '.$phone.'</p>
                                <p><b>Booking date:</b><br/>'.$date.'</p>';
                            
                            // Header for sender info
                            $headers = "From: $fromName"." <".$from.">";
                              // Set content-type header for sending HTML email
                                $headers .= "\r\n". "MIME-Version: 1.0";
                                $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";

                                  
            if (mail($toEmail, $emailSubject, $htmlContent, $headers)) 
            {
                echo json_encode(array('status' => 'success'));
            }
             else 
             {
              echo json_encode(array('status' => 'error'));
            }
                // database insert  here..
                //return a json object
           
        }	
?>
<?php 
    if(isset($_POST['btnsubmit']))
    {
      $name=$_POST['name'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $date=$_POST['date'];
     

      
    }  
?>