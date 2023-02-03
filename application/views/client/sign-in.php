<?php include 'include/header.php'?>
  <body>


  <div class="row signin-panel">
      <!-- <svg-to-inline path="http://themepixels.me/cassie/assets/svg/citywalk.svg" class-Name="svg-bg"></svg-to-inline> -->

      <div class="col-md-6 col-12 signin-sidebar" style="width: 28vw ;">
        <div class="signin-sidebar-body">
          <!-- <a href="dashboard-one.html" class="sidebar-logo mg-b-40"><span>Sprout Seven</span></a> -->
          <h4 class="signin-title">Welcome back!</h4>
          <h5 class="signin-subtitle">Please enter your details.</h5>

          <form action="<?php echo base_url();?>index.php/Client/userLogin" method="post">
            <div class="signin-form">
              <div class="form-group">
                <!-- <label>Email address</label> -->
                
                <input type="email" class="form-control" name = "email" placeholder="Enter your email address" value="">

              </div>

            <div class="form-group mg-t-15">
              <label class="d-flex justify-content-between">
                <!-- <span>Password</span> -->
                
              </label>
              <input type="password" class="form-control" name="password" placeholder="Enter your password" value="">
            </div>
            <a href="#" class="tx-13 text-dark forgotline" >Forgot password?</a>
            <div class="form-group d-flex mg-b-0">
              <button class="btn btn-brand-01 btn-uppercase flex-fill">Sign In</button>
              <!-- <a href="page-signup.html" class="btn btn-white btn-uppercase flex-fill mg-l-10">Sign Up</a> -->
            </div>

            <div class="divider-text mg-y-30">Or</div>
            <p class="mg-t-auto mg-b-0 tx-sm tx-color-03 do">Don't have an account ? <a href="<?php echo base_url();?>index.php/Client/signUp" class="text-dark " style="font-weight:500 ;">Sign up for free</a><a href="" class="text-dark"></a></p>
            <!-- <a href="dashboard-one.html" class="btn btn-facebook btn-uppercase btn-block">Login with Facebook</a> -->
          </div>
          
          <!-- <p class="mg-t-auto mg-b-0 tx-sm tx-color-03">By signing in, you agree to our <a href="">Terms of Use</a> and <a href="">Privacy Policy</a></p> -->
        </div><!-- signin-sidebar-body -->
      </div><!-- signin-sidebar -->

      <div class="col-md-6 col-12">
        <img class="signBImg" src="<?php echo base_url();?>/assets/img/logBack.png" >
       
      </div>
    </div><!-- signin-panel -->
 

  


  
   

	<?php include 'include/footer.php'?>
