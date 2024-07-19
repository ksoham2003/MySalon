<?php
session_start();
include_once('css/temp_files.php');
include('hms/include/config.php');

if(isset($_POST['pcode']) && isset($_POST['pname']) && isset($_POST['pimage']) && isset($_POST['pprice'])){
	$code=$_POST['pcode'];
	$name=$_POST['pname'];
	$image=$_POST['pimage'];
	$price=$_POST['pprice'];
	$qty=1;

	$ret=mysqli_query($con,"SELECT product_code FROM cart WHERE product_code='".$code."'");
	
$num=mysqli_fetch_array($ret);

if (isset($num['product_code'])){
$check_code=$num['product_code'];}else{
	$check_code='';
}
if(!$check_code){
	$query=mysqli_query($con,"insert into cart(proname,proprice,proimg,quantity,total_price,product_code) values('$name','$price','$image','$qty','$price','$code')");
	if($query)
	{
			echo "Item added to your cart";

		
		

	}else{
		echo "Item already added to your cart";
				

	}

}
}
if(isset($_GET['cartItem']) && (isset($_GET['cartItem']) =='cart_item')){
$ret1=mysqli_query($con,"SELECT * FROM cart");
$num1=mysqli_num_rows($ret1);
echo json_encode($num1);
}

if(isset($_GET['remove'])){
	$id=$_GET['remove'];
$ret2=mysqli_query($con,"DELETE FROM cart WHERE cart_id='$id'");
$_SESSION["showAlert"] ="block";
$_SESSION["message"] ="Item removed from cart";
header("location:cart.php");
}

if(isset($_GET['clear'])){
	$id2=$_GET['clear'];
$ret2=mysqli_query($con,"DELETE FROM cart");
$_SESSION["showAlert"] ="block";
$_SESSION["message"] ="All item removed from the cart";
header("location:cart.php");
}

if(isset($_POST['pqty'])){

	$qty1=$_POST['pqty'];
	$id3=$_POST['pid'];
	
	$price1=$_POST['pprice'];
	$total_price=$qty1*$price1;
	
	$ret3=mysqli_query($con,"UPDATE cart SET quantity='$qty1', total_price='$total_price' WHERE cart_id='".$id3."'");

}

/*if(isset($_POST['action']) && (isset($_POST['action']) == 'order' )){
	$name1=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$pmode = $_POST['pmode'];
	$products = $_POST['products'];
	$grand_total = $_POST['grand_total'];
	$testid=$_POST['testid'];
	$data='';

	$ret4=mysqli_query($con,"insert into orders(username,email,phone,address,payment_mode,products,paid_amount) values ('$name1','$email','$phone','$address','$pmode','$products','$grand_total')");
	if($ret4){
	$ret6=mysqli_query($con,"DELETE FROM cart WHERE cart_id IN ($testid)");
	
	$sel=mysqli_query($con,"SELECT order_id FROM order WHERE username = $name1");
	}
	
	$data .='<div class="text-center">
             <h1>Thank You!</h1>
             <h2>Your order is placed!</h2>
             <h4 class="text-center">Item Purchased:'.$products.'</h4>
             <h4>Your name:'.$name1.'</h4>
             <h4>Your email:'.$email.'</h4>
             <h4>Your Phone:'.$phone.'</h4>
             <h4>Total Amount Paid:'.number_format($grand_total,2).'</h4>
             <h4>Payment mode:'.$pmode.'<h4></div>';
             echo $data;
			 '<div class="container">
			 <div class="col-md-12">   
			 <div class="row">
			 
			 <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
				 <div class="row">
					 <div class="receipt-header">
						 <div class="col-xs-6 col-sm-6 col-md-6">
							 <div class="receipt-left">
								 <img class="img-responsive" alt="iamgurdeeposahan" src="images/logo.jpg" style="width: 71px; border-radius: 43px;">
							 </div>
						 </div>
						 <div class="col-xs-6 col-sm-6 col-md-6 text-right">
							 <div class="receipt-right">
								 <h5>OUR SALON</h5>
								 <p>+1 3649-6589 <i class="fa fa-phone"></i></p>
								 <p>OURSALON@gmail.com <i class="fa fa-envelope-o"></i></p>
								 <p>INDIA<i class="fa fa-location-arrow"></i></p>
							 </div>
						 </div>
					 </div>
				 </div>
				 
				 <div class="row">
					 <div class="receipt-header receipt-header-mid">
						 <div class="col-xs-8 col-sm-8 col-md-8 text-left">
							 <div class="receipt-right">
								 <h5>Customer Name:  </h5>
								 <b>'.$name1.'</b><br>
								 <p><b>Mobile :</b> '.$phone.'</p>
								 <p><b>Email :</b> '.$email.'</p>
								 <p><b>Address :</b>'.$address.'</p>
								 <p><b>Mode of Payment :</b>'.$pmode.'</p>

							 </div>
						 </div>
						 <div class="col-xs-4 col-sm-4 col-md-4">
							 <div class="receipt-left">
								 <h3>INVOICE '.$sel.'</h3>
							 </div>
						 </div>
					 </div>
				 </div>
				 
				 <div>
					 <table class="table table-bordered">
						 <thead>
							 <tr>
								 <th>Description</th>
								 <th>Amount</th>
							 </tr>
						 </thead>
						 <tbody>
							 <tr>
								 <td class="col-md-9">Item Purchased:<br>'.$products.'</td>
								 <td class="col-md-3"><i class="fa fa-inr"></i></td>
							 </tr>
							 <tr>
								
							 <td class="text-right"><h2><strong>Total: </strong></h2></td>
							 <td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i>'.number_format($grand_total,2).'</strong></h2></td>
							 </tr>
							 
						 </tbody>
					 </table>
				 </div>
				 
				 <div class="row">
					 <div class="receipt-header receipt-header-mid receipt-footer">
						 <div class="col-xs-8 col-sm-8 col-md-8 text-left">
							 <div class="receipt-right">
								 <p><b>Date :</b> 15 Aug 2016</p>
								 <h5 style="color: rgb(140, 140, 140);">Thanks for shopping.!</h5>
							 </div>
						 </div>
						 <div class="col-xs-4 col-sm-4 col-md-4">
							 <div class="receipt-left">
								 <h1>Stamp</h1>
							 </div>
						 </div>
					 </div>
				 </div>
				 
			 </div>    
		 </div>
	 </div>
			 </div>';
echo $data;

}*/




?>