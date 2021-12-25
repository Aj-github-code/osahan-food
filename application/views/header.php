<!doctype html>
<html lang="en">

<!-- Mirrored from askbootstrap.com/preview/osahan-eat/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Dec 2021 06:31:21 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Askbootstrap">
<meta name="author" content="Askbootstrap">
<title>Osahan Eat - Online Food Ordering Website HTML Template</title>

<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.png">

<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="<?php echo base_url();?>assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">

<link href="<?php echo base_url();?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">

<link href="<?php echo base_url();?>assets/vendor/select2/css/select2.min.css" rel="stylesheet">

<link href="<?php echo base_url();?>assets/css/osahan.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/owl-carousel/owl.theme.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light osahan-nav shadow-sm">
<div class="container">
<a class="navbar-brand" href="<?php echo base_url('home');?>"><img alt="logo" src="<?php echo base_url();?>assets/img/logo.png"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav ml-auto">
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('home');?>">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('offers');?>"><i class="icofont-sale-discount"></i>Offers<span class="badge badge-danger">New</span></a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Restaurants</a>
        <ul class="dropdown-menu dropdown-menu-right shadow-sm border-0">
            <li><a class="dropdown-item" href="<?php echo base_url('listing');?>">Listing</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('details');?>">Detail + Cart<a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('checkout');?>">Checkout</a></li>
        </ul>
    </li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Pages
</a>
<div class="dropdown-menu dropdown-menu-right shadow-sm border-0" aria-labelledby="navbarDropdownMenuLink">
<a class="dropdown-item" href="<?php echo base_url('track_order');?>">Track Order</a>
<a class="dropdown-item" href="<?php echo base_url('invoice');?>">Invoice</a>
<a class="dropdown-item" href="<?php echo base_url('login');?>">Login</a>
<a class="dropdown-item" href="<?php echo base_url('register');?>">Register</a>
<a class="dropdown-item" href="<?php echo base_url('error_404');?>">404</a>
<a class="dropdown-item" href="<?php echo base_url('extra');?>">Extra :)</a>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<img alt="Generic placeholder image" src="<?php echo base_url();?>assets/img/user/4.png" class="nav-osahan-pic rounded-pill"> My Account
</a>
<div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
<a class="dropdown-item" href="<?php echo base_url('orders');?>#orders"><i class="icofont-food-cart"></i>Orders</a>
<a class="dropdown-item" href="<?php echo base_url('orders');?>#offers"><i class="icofont-sale-discount"></i>Offers</a>
<a class="dropdown-item" href="<?php echo base_url('orders');?>#favourites"><i class="icofont-heart"></i>Favourites</a>
<a class="dropdown-item" href="<?php echo base_url('orders');?>#payments"><i class="icofont-credit-card"></i>Payments</a>
<a class="dropdown-item" href="<?php echo base_url('orders');?>#addresses"><i class="icofont-location-pin"></i>Addresses</a>
</div>
</li>
<li class="nav-item dropdown dropdown-cart">
<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-shopping-basket"></i> Cart
<span class="badge badge-success">5</span>
</a>
<div class="dropdown-menu dropdown-cart-top p-0 dropdown-menu-right shadow-sm border-0">
<div class="dropdown-cart-top-header p-4">
<img class="img-fluid mr-3" alt="osahan" src="<?php echo base_url();?>assets/img/cart.jpg">
<h6 class="mb-0">Gus's World Famous Chicken</h6>
<p class="text-secondary mb-0">310 S Front St, Memphis, USA</p>
<small><a class="text-primary font-weight-bold" href="#">View Full Menu</a></small>
</div>
<div class="dropdown-cart-top-body border-top p-4">
<?php if(!empty($lists)){ foreach($lists as $datas){ ?>
    <p class="mb-2"><i class="icofont-ui-press text-success food-item"></i> <?php echo $datas['pro_name'];?><span class="float-right text-secondary">$<?php echo $datas['pro_price'];?></span></p>
<?php }} ?>

<!-- <p class="mb-2"><i class="icofont-ui-press text-success food-item"></i> Veg Seekh Sub 6" (15 cm) x 1 <span class="float-right text-secondary">$133</span></p>
<p class="mb-2"><i class="icofont-ui-press text-danger food-item"></i> Chicken Tikka Sub 12" (30 cm) x 1 <span class="float-right text-secondary">$314</span></p>
<p class="mb-2"><i class="icofont-ui-press text-danger food-item"></i> Corn & Peas Salad x 1 <span class="float-right text-secondary">$209</span></p> -->
</div>
<div class="dropdown-cart-top-footer border-top p-4">
<p class="mb-0 font-weight-bold text-secondary">Sub Total <span class="float-right text-dark">$<?php  $sum = array_sum(array_column($lists,'pro_price')); echo $sum;?></span></p>
<small class="text-info">Extra charges may apply</small>
</div>
<div class="dropdown-cart-top-footer border-top p-2">
<a class="btn btn-success btn-block btn-lg" href="<?php echo base_url('checkout');?>">Checkout</a>
</div>
</div>
</li>
</ul>
</div>
</div>
</nav>
<script src="<?php echo base_url();?>assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="100e305e8877b269a0dd82ed-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b9378917aaf6e9a","version":"2021.11.0","r":1,"token":"dd471ab1978346bbb991feaa79e6ce5c","si":100}' crossorigin="anonymous"></script>


<script src="<?php echo base_url();?>assets/vendor/jquery/jquery-3.3.1.slim.min.js" type="100e305e8877b269a0dd82ed-text/javascript"></script>

<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js" type="100e305e8877b269a0dd82ed-text/javascript"></script>

<script src="<?php echo base_url();?>assets/vendor/select2/js/select2.min.js" type="100e305e8877b269a0dd82ed-text/javascript"></script>

<script src="<?php echo base_url();?>assets/vendor/owl-carousel/owl.carousel.js" type="100e305e8877b269a0dd82ed-text/javascript"></script>

<script src="<?php echo base_url();?>assets/js/custom.js" type="100e305e8877b269a0dd82ed-text/javascript"></script>
<script src="<?php echo base_url();?>assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="100e305e8877b269a0dd82ed-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b9378917aaf6e9a","version":"2021.11.0","r":1,"token":"dd471ab1978346bbb991feaa79e6ce5c","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from askbootstrap.com/preview/osahan-eat/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Dec 2021 06:31:38 GMT -->
</html>