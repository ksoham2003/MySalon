<?php include_once("header.php");
include('hms/include/config.php');
?><!--Header-->


<!--Div of main,Start-->
<div class="main">
    <div class="container">
        <div class="row padd">
            <!-- Division/section of Heading -->
            <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 padd'>
                <center><h4 class="heading">Hair Care Products</h4></center>
            </div>
            <?php
                    $procat='hair';
                    $sql=mysqli_query($con,"select * from product where procat='$procat'");
                    if (!empty($sql)) {

                      while($row=mysqli_fetch_array($sql))
                      { 
                      ?>
            <!-- Division/section of haircare card1 ,start-->
            <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                <div class='product1'>
                  <div class="row product-padd">
                  <div class="card-deck">
                        <div class="card">
                            <img class='img-padd'src="hms/images/<?php echo $row['proimg'];?>" class="image-mar" height="200" width="100" alt="shampoo1">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $row['proname'];?></h5>
                            
                            <p class="card-text"><?php echo $row['prodesc'];?></p>
                            <span id='pricebox1'><b><?php echo $row['proprice'];?> &#8377 </b></span>
                            
                          </div>
                          <div class="card-footer">
                                    <form class="form-submit">
                                                <input type="hidden" class="pname" value="<?php echo $row['proname'];?>">
                                                  <input type="hidden" class="pprice" value="<?php echo $row['proprice'];?>">
                                                  <input type="hidden" class="pimage" value="<?php echo $row['proimg'];?>">
                                                  <input type="hidden" class="pcode" value="<?php echo $row['id'];?>">

                                                  <button id="addItem" class="btn-success btn button">Add To Cart</button>
                                      </form>
                                       <div class="alert-message"></div>
                          </div>
                        </div>
                        <br>
										                  
                    </div>
                  </div>
                </div>
            </div>
            <!-- Division/section of haircare card1 ,End-->
            <?php }}else{
                echo "No Records.";
              } ?>

            <!-- Division/section of haircare card2 ,start-->
            
            <!-- Division/section of haircare ,End-->
        </div>

        <!-- Division/section of Row3 ,start-->
        
            <!-- Division/section of haircare card3 ,End-->

            <!-- Division/section of haircare card4 ,start-->
            
            <!-- Division/section of haircare card4 ,End-->
        </div>
        <!-- Division/section of Row2 ,End-->
    </div>

</div>
<!--Div of main,End-->
<script>
  $(document).ready(function(){
 $(document).on('click','#addItem',function(e){
e.preventDefault();
var form=$(this).closest(".form-submit");
var pcode=form.find('.pcode').val();
var pname=form.find('.pname').val();
var pimage=form.find('.pimage').val();

var pprice=form.find('.pprice').val();

$.ajax({
url:'action.php',
method:'post',
data:{pcode:pcode,pname:pname,pimage:pimage,pprice:pprice},
success:function(response){
  console.log(response);
  $(".alert-message").html(response);
  //window.scrollto(0,0);
  load_cart_item_number();
}
});

 });

  load_cart_item_number();
function load_cart_item_number(){
  $.ajax({
url:'action.php',
method:'get',
data:{cartItem:"cart_item"},
success:function(response){

  $("#cart-item").html(response);
  
}
});
}

  });
 
</script>
 
</script>
<?php include_once("footer.php");?> <!--Footer-->