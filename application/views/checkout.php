<!doctype html>
<html lang="en">

<!-- Mirrored from askbootstrap.com/preview/osahan-eat/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Dec 2021 06:31:56 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Askbootstrap">
<meta name="author" content="Askbootstrap">
<title>Osahan Eat - Online Food Ordering Website HTML Template</title>

<link rel="icon" type="image/png" href="img/favicon.png">

<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="<?php echo base_url();?>assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">

<link href="<?php echo base_url();?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">

<link href="<?php echo base_url();?>assets/vendor/select2/css/select2.min.css" rel="stylesheet">

<link href="<?php echo base_url();?>assets/css/osahan.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/owl-carousel/owl.theme.css">
</head>
<body>

<div class="modal fade" id="add-address-modal" tabindex="-1" role="dialog" aria-labelledby="add-address" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-address">Add Delivery Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputPassword4">Delivery Area</label>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Delivery Area">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="icofont-ui-pointer"></i></button>
                </div>
              </div>
            </div>
            <div class="form-group col-md-12">
              <label for="inputPassword4">Complete Address
              </label>
              <input type="text" class="form-control" placeholder="Complete Address e.g. house number, street name, landmark">
            </div>
            <div class="form-group col-md-12">
              <label for="inputPassword4">Delivery Instructions
              </label>
              <input type="text" class="form-control" placeholder="Delivery Instructions e.g. Opposite Gold Souk Mall">
            </div>
            <div class="form-group mb-0 col-md-12">
              <label for="inputPassword4">Nickname
              </label>
              <div class="btn-group btn-group-toggle d-flex justify-content-center" data-toggle="buttons">
                <label class="btn btn-info active">
                <input type="radio" name="options" id="option1" autocomplete="off" checked> Home
                </label>
                <label class="btn btn-info">
                <input type="radio" name="options" id="option2" autocomplete="off"> Work
                </label>
                <label class="btn btn-info">
                <input type="radio" name="options" id="option3" autocomplete="off"> Other
                </label>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn d-flex w-50 text-center justify-content-center btn-outline-primary" data-dismiss="modal">CANCEL
        </button><button type="button" class="btn d-flex w-50 text-center justify-content-center btn-primary">SUBMIT</button>
      </div>
    </div>
  </div>
</div>

<section class="offer-dedicated-body mt-4 mb-4 pt-2 pb-2">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="offer-dedicated-body-left">
<div class="bg-white rounded shadow-sm p-4 mb-4">
<h6 class="mb-3">You may also like</h6>
<div class="owl-carousel owl-theme owl-carousel-five offers-interested-carousel">
<div class="item">
<div class="mall-category-item position-relative">
<a class="btn btn-primary btn-sm position-absolute" href="#">ADD</a>
<img class="img-fluid" src="<?php echo base_url();?>assets/img/list/1.png">
<h6>Burgers</h6>
<small>$500</small>
</div>
</div>
<div class="item">
<div class="mall-category-item position-relative">
<a class="btn btn-primary btn-sm position-absolute" href="#">ADD</a>
<img class="img-fluid" src="<?php echo base_url();?>assets/img/list/2.png">
<h6>Sandwiches</h6>
<small>$260</small>
</div>
 </div>
<div class="item">
<div class="mall-category-item position-relative">
<a class="btn btn-primary btn-sm position-absolute" href="#">ADD</a>
<img class="img-fluid" src="<?php echo base_url();?>assets/img/list/3.png">
<h6>Soups</h6>
<small>$860</small>
</div>
</div>
<div class="item">
<div class="mall-category-item position-relative">
<a class="btn btn-primary btn-sm position-absolute" href="#">ADD</a>
<img class="img-fluid" src="<?php echo base_url();?>assets/img/list/4.png">
<h6>Pizzas</h6>
<small>$602</small>
</div>
</div>
<div class="item">
<div class="mall-category-item position-relative">
<a class="btn btn-primary btn-sm position-absolute" href="#">ADD</a>
<img class="img-fluid" src="<?php echo base_url();?>assets/img/list/5.png">
<h6>Pastas</h6>
<small>$360</small>
</div>
</div>
<div class="item">
<div class="mall-category-item position-relative">
<a class="btn btn-primary btn-sm position-absolute" href="#">ADD</a>
<img class="img-fluid" src="<?php echo base_url();?>assets/img/list/6.png">
<h6>Chinese</h6>
<small>$760</small>
</div>
</div>
</div>
</div>
<div class="pt-2"></div>
<div class="bg-white rounded shadow-sm p-4 mb-4">
<h4 class="mb-1">Choose a delivery address</h4>
<h6 class="mb-3 text-black-50">Multiple addresses in this location</h6>
<div class="row">
<div class="col-md-6">
<div class="bg-white card addresses-item mb-4 border border-success">
<div class="gold-members p-4">
<div class="media">
<div class="mr-3"><i class="icofont-ui-home icofont-3x"></i></div>
<div class="media-body">
<h6 class="mb-1 text-black">Home</h6>
<p class="text-black"><form method="post" action="<?php echo base_url('home_addr');?>"><textarea type="text"  class="form-control" row="2" id="home" name="home" placeholder="Address"> </textarea></form>

</p>
<p class="mb-0 text-black font-weight-bold"><a class="btn btn-sm btn-success mr-2" href=""> DELIVER HERE</a>
<!-- <span>30MIN</span> -->
</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="bg-white card addresses-item mb-4">
<div class="gold-members p-4">
<div class="media">
<div class="mr-3"><i class="icofont-briefcase icofont-3x"></i></div>
<div class="media-body">
<h6 class="mb-1 text-secondary">Work</h6>
<p>NCC, Model Town Rd Town, Ludhiana, Punjab 141002, India
</p>
 <p class="mb-0 text-black font-weight-bold"><a class="btn btn-sm btn-secondary mr-2" href="#"> DELIVER HERE</a>
<!-- <span>40MIN</span> -->
</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- <div class="row">
<div class="col-md-6">
<div class="bg-white card addresses-item">
<div class="gold-members p-4">
<div class="media">
<div class="mr-3"><i class="icofont-location-pin icofont-3x"></i></div>
<div class="media-body">
<h6 class="mb-1 text-secondary">Other</h6>
<p>Delhi Bypass Rd, Jawaddi Taksal, Ludhiana, Punjab 141002, India
</p>
<p class="mb-0 text-black font-weight-bold"><a class="btn btn-sm btn-secondary mr-2" href="#"> DELIVER HERE</a>
<span>45MIN</span>
</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="bg-white card addresses-item">
<div class="gold-members p-4">
<div class="media">
<div class="mr-3"><i class="icofont-location-pin icofont-3x"></i></div>
<div class="media-body">
<h6 class="mb-1 text-secondary">Other</h6>
<p>Pritm Nagar, Model Town, Ludhiana, Punjab 141002, India
</p>
<p class="mb-0 text-black font-weight-bold"><a data-toggle="modal" data-target="#add-address-modal" class="btn btn-sm btn-primary mr-2" href="#"> ADD NEW ADDRESS</a>
</p>
</div>
</div>
</div>
</div>
</div>
</div> -->
</div>
<div class="pt-2"></div>
<div class="bg-white rounded shadow-sm p-4 osahan-payment">
<h4 class="mb-1">Choose payment method</h4>
<h6 class="mb-3 text-black-50">Credit/Debit Cards</h6>
<div class="row">
<div class="col-sm-4 pr-0">
<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
<!-- <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="icofont-credit-card"></i> Credit/Debit Cards</a>
<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="icofont-id-card"></i> Food Cards</a>
<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="icofont-card"></i> Credit</a> -->
<a class="nav-link active" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="true"><i class="icofont-bank-alt"></i> Netbanking</a>
<a class="nav-link" id="v-pills-cash-tab" data-toggle="pill" href="#v-pills-cash" role="tab" aria-controls="v-pills-cash" aria-selected="false"><i class="icofont-money"></i> Pay on Delivery</a>
</div>
</div>


<div class="col-sm-8 pl-0">
<div class="tab-content h-100" id="v-pills-tabContent">
<!-- <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
<h6 class="mb-3 mt-0 mb-3">Add new card</h6>
<p>WE ACCEPT <span class="osahan-card">
<i class="icofont-visa-alt"></i> <i class="icofont-mastercard-alt"></i> <i class="icofont-american-express-alt"></i> <i class="icofont-payoneer-alt"></i> <i class="icofont-apple-pay-alt"></i> <i class="icofont-bank-transfer-alt"></i> <i class="icofont-discover-alt"></i> <i class="icofont-jcb-alt"></i>
</span>
</p>
<form>
<div class="form-row">
<div class="form-group col-md-12">
<label for="inputPassword4">Card number</label>
<div class="input-group">
<input type="number" class="form-control" placeholder="Card number">
<div class="input-group-append">
<button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="icofont-card"></i></button>
</div>
</div>
</div>
<div class="form-group col-md-8">
<label>Valid through(MM/YY)
</label>
<input type="number" class="form-control" placeholder="Enter Valid through(MM/YY)">
</div>
<div class="form-group col-md-4">
<label>CVV
</label>
<input type="number" class="form-control" placeholder="Enter CVV Number">
</div>
<div class="form-group col-md-12">
<label>Name on card
</label>
<input type="text" class="form-control" placeholder="Enter Card number">
</div>
<div class="form-group col-md-12">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck1">
<label class="custom-control-label" for="customCheck1">Securely save this card for a faster checkout next time.</label>
</div>
</div>
<div class="form-group col-md-12 mb-0">
<a href="<?php echo base_url('thanks');?>" class="btn btn-success btn-block btn-lg">PAY $1329
<i class="icofont-long-arrow-right"></i></a>
</div>
</div>
</form>
</div> -->

<!-- <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
<h6 class="mb-3 mt-0 mb-3">Add new food card</h6>
<p>WE ACCEPT <span class="osahan-card">
<i class="icofont-sage-alt"></i> <i class="icofont-stripe-alt"></i> <i class="icofont-google-wallet-alt-1"></i>
</span>
</p>
<form>
<div class="form-row">
<div class="form-group col-md-12">
<label for="inputPassword4">Card number</label>
<div class="input-group">
<input type="number" class="form-control" placeholder="Card number">
<div class="input-group-append">
<button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="icofont-card"></i></button>
</div>
</div>
</div>
<div class="form-group col-md-8">
<label>Valid through(MM/YY)
</label>
<input type="number" class="form-control" placeholder="Enter Valid through(MM/YY)">
</div>
<div class="form-group col-md-4">
<label>CVV
</label>
<input type="number" class="form-control" placeholder="Enter CVV Number">
</div>
<div class="form-group col-md-12">
<label>Name on card
</label>
<input type="text" class="form-control" placeholder="Enter Card number">
</div>
<div class="form-group col-md-12">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck1">
<label class="custom-control-label" for="customCheck1">Securely save this card for a faster checkout next time.</label>
</div>
</div>
<div class="form-group col-md-12 mb-0">
<a href="<?php echo base_url('thanks');?>" class="btn btn-success btn-block btn-lg">PAY $1329
<i class="icofont-long-arrow-right"></i></a>
</div>
</div>
</form>
</div> -->

<!-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
  <div class="border shadow-sm-sm p-4 d-flex align-items-center bg-white mb-3">
    <i class="icofont-apple-pay-alt mr-3 icofont-3x"></i>
    <div class="d-flex flex-column">
      <h5 class="card-title">Apple Pay</h5>
      <p class="card-text">Apple Pay lets you order now & pay later at no extra cost.</p>
      <a href="#" class="card-link font-weight-bold">LINK ACCOUNT <i class="icofont-link-alt"></i></a>
    </div>
  </div>
  <div class="border shadow-sm-sm p-4 d-flex bg-white align-items-center mb-3">
    <i class="icofont-paypal-alt mr-3 icofont-3x"></i>
    <div class="d-flex flex-column">
      <h5 class="card-title">Paypal</h5>
      <p class="card-text">Paypal lets you order now & pay later at no extra cost.</p>
      <a href="#" class="card-link font-weight-bold">LINK ACCOUNT <i class="icofont-link-alt"></i></a>
    </div>
  </div>
  <div class="border shadow-sm-sm p-4 d-flex bg-white align-items-center">
    <i class="icofont-diners-club mr-3 icofont-3x"></i>
    <div class="d-flex flex-column">
      <h5 class="card-title">Diners Club</h5>
      <p class="card-text">Diners Club lets you order now & pay later at no extra cost.</p>
      <a href="#" class="card-link font-weight-bold">LINK ACCOUNT <i class="icofont-link-alt"></i></a>
    </div>
  </div>
</div> -->

<div class="tab-pane fade show active" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
  <h6 class="mb-3 mt-0 mb-3">UPI</h6>
  <form>

    
    <div class="form-row">
      <div class="form-group col-md-12">
        <label>Enter Upi ID
        </label>
        <input type="text" name="upi" class="form-control" id="upi" placeholder="e.g: 1234567890@bank" >
      </div>
      <div class="form-group col-md-12 mb-0">
        <a href="<?php echo base_url('order_place');?>" class="btn btn-success btn-block btn-lg">PAY $<?php  $sum = array_sum(array_column($lists,'total_price')); echo $sum;?>
        <i class="icofont-long-arrow-right"></i></a>
      </div>
      
    </div>
  </form>
</div>
<div class="tab-pane fade" id="v-pills-cash" role="tabpanel" aria-labelledby="v-pills-cash-tab">
  <h6 class="mb-3 mt-0 mb-3">Cash</h6>
  <p>Please keep exact change handy to help us serve you better</p>
  <hr>
  <form>
  <a href="<?php echo base_url('order_place');?>" class="btn btn-success btn-block btn-lg">PAY $<?php  $sum = array_sum(array_column($lists,'total_price')); echo $sum;?>
  <i class="icofont-long-arrow-right"></i></a>
  
  </form>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="generator-bg rounded shadow-sm mb-4 p-4 osahan-cart-item">
<div class="d-flex mb-4 osahan-cart-item-profile">
<img class="img-fluid mr-3 rounded-pill" alt="osahan" src="<?php echo base_url();?>assets/img/2.jpg">
<div class="d-flex flex-column">
<h6 class="mb-1 text-white">Spice Hut Indian Restaurant
</h6>
<p class="mb-0 text-white"><i class="icofont-location-pin"></i> 2036 2ND AVE, NEW YORK, NY 10029</p>
</div>
</div>
<div class="bg-white rounded shadow-sm mb-2">
<?php if(!empty($lists)){ foreach($lists as $datas){ ?>
  <div class="gold-members p-2 border-bottom">
    <p class="text-gray mb-0 float-right ml-2">$<?php echo $datas['total_price'];?></p>
    <span class="count-number float-right">
      <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
      <input class="count-number-input" type="text" value="<?php echo $datas['quantity'];?>" readonly="">
      <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
    </span>
    <div class="media">
      <div class="mr-2"><i class="icofont-ui-press text-danger food-item"></i></div>
      <div class="media-body">
        <p class="mt-1 mb-0 text-black"><?php echo $datas['pro_name'];?></p>
        
      </div>
    </div>
  </div>
<?php }} ?>

</div>
<div class="mb-2 bg-white rounded p-2 clearfix">
<div class="input-group input-group-sm mb-2">
<input type="text" class="form-control" placeholder="Enter promo code">
<div class="input-group-append">
<button class="btn btn-primary" type="button" id="button-addon2"><i class="icofont-sale-discount"></i> APPLY</button>
</div>
</div>
<div class="input-group mb-0">
<div class="input-group-prepend">
<span class="input-group-text"><i class="icofont-comment"></i></span>
</div>
<textarea class="form-control" placeholder="Any suggestions? We will pass it on..." aria-label="With textarea"></textarea>
</div>
</div>
<div class="mb-2 bg-white rounded p-2 clearfix">
<p class="mb-1">Item Total <span class="float-right text-dark">$3140</span></p>
<p class="mb-1">Restaurant Charges <span class="float-right text-dark">$62.8</span></p>
<p class="mb-1">Delivery Fee <span class="text-info" data-toggle="tooltip" data-placement="top" title="Total discount breakup">
<i class="icofont-info-circle"></i>
</span> <span class="float-right text-dark">$10</span>
</p>
<p class="mb-1 text-success">Total Discount
<span class="float-right text-success">$1884</span>
</p>
<hr />
<h6 class="font-weight-bold mb-0">TO PAY <span class="float-right">$<?php  $sum = array_sum(array_column($lists,'total_price')); echo $sum;?></span></h6>
</div>
<a href="<?php echo base_url('order_place');?>" class="btn btn-success btn-block btn-lg">PAY $<?php  $sum = array_sum(array_column($lists,'total_price')); echo $sum;?>
<i class="icofont-long-arrow-right"></i></a>
</div>
<div class="pt-2"></div>
<div class="alert alert-success" role="alert">
You have saved <strong>$1,884</strong> on the bill
</div>
<div class="pt-2"></div>
<div class="text-center pt-2">
<img class="img-fluid" src="https://dummyimage.com/352x504/ccc/ffffff.png&amp;text=Google+ads">
</div>
</div>
</div>
</div>
</section>


<script src="<?php echo base_url();?>assets/vendor/jquery/jquery-3.3.1.slim.min.js" type="8ef9db4cf0b5a0d1a3de03f9-text/javascript"></script>

<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js" type="8ef9db4cf0b5a0d1a3de03f9-text/javascript"></script>

<script src="<?php echo base_url();?>assets/vendor/select2/js/select2.min.js" type="8ef9db4cf0b5a0d1a3de03f9-text/javascript"></script>

<script src="<?php echo base_url();?>assets/vendor/owl-carousel/owl.carousel.js" type="8ef9db4cf0b5a0d1a3de03f9-text/javascript"></script>

<script src="<?php echo base_url();?>assets/js/custom.js" type="8ef9db4cf0b5a0d1a3de03f9-text/javascript"></script>
<script src="<?php echo base_url();?>assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="100e305e8877b269a0dd82ed-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b9378917aaf6e9a","version":"2021.11.0","r":1,"token":"dd471ab1978346bbb991feaa79e6ce5c","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from askbootstrap.com/preview/osahan-eat/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Dec 2021 06:31:57 GMT -->
</html>