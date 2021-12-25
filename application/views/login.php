<!doctype html>
<html lang="en">

<!-- Mirrored from askbootstrap.com/preview/osahan-eat/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Dec 2021 06:31:57 GMT -->
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
</head>
<body class="bg-white">
<div class="container-fluid">
<div class="row no-gutter">
<div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
<div class="col-md-8 col-lg-6">
<div class="login d-flex align-items-center py-5">
<div class="container">
<div class="row">
<div class="col-md-9 col-lg-8 mx-auto pl-5 pr-5">
<h3 class="login-heading mb-4">Welcome back!</h3>
<form method="post" action="<?php echo base_url('auth');?>">
<div class="form-label-group">
<input type="email"  class="form-control" id="email"  name="email" placeholder="Email address">
<label for="email">Email address</label>
<?php echo form_error('email');?>
</div>
<div class="form-label-group">
<input type="password"  class="form-control" id="pass" name="pass" placeholder="Password">
<label for="pass">Password</label>
<?php echo form_error('pass');?>
</div>
<div class="custom-control custom-checkbox mb-3">
<input type="checkbox" class="custom-control-input" id="customCheck1">
<label class="custom-control-label" for="customCheck1">Remember password</label>
</div>
<button type="submit" name="submit" class="btn btn-lg btn-outline-primary btn-block btn-login text-uppercase font-weight-bold mb-2">Sign in</button>
<div class="text-center pt-3">
Don’t have an account? <a class="font-weight-bold" href="<?php echo base_url('register');?>">Sign Up</a>
</div>
</form>
<hr class="my-4">
<p class="text-center">LOGIN WITH</p>
<div class="row">
<div class="col pr-2">
<button class="btn pl-1 pr-1 btn-lg btn-google font-weight-normal text-white btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Google</button>
</div>
<div class="col pl-2">
<button class="btn pl-1 pr-1 btn-lg btn-facebook font-weight-normal text-white btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Facebook</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="<?php echo base_url();?>assets/vendor/jquery/jquery-3.3.1.slim.min.js" type="3fa3c98660ae81068638c65f-text/javascript"></script>

<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js" type="3fa3c98660ae81068638c65f-text/javascript"></script>

<script src="<?php echo base_url();?>assets/vendor/select2/js/select2.min.js" type="3fa3c98660ae81068638c65f-text/javascript"></script>

<script src="<?php echo base_url();?>assets/js/custom.js" type="3fa3c98660ae81068638c65f-text/javascript"></script>
<script src="<?php echo base_url();?>assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="100e305e8877b269a0dd82ed-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b9378917aaf6e9a","version":"2021.11.0","r":1,"token":"dd471ab1978346bbb991feaa79e6ce5c","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from askbootstrap.com/preview/osahan-eat/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Dec 2021 06:31:57 GMT -->
</html>