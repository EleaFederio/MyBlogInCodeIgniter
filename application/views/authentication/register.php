<center style="margin-top: 5%">
  <div class="jumbotron" style="width: 70%">
    <form class="form-signin" action="<?php echo base_url(); ?>authentication/register" method="post">
      <i class="large material-icons">account_circle</i>
      <h1 class="h3 mb-3 font-weight-normal">Create an acount</h1>
      <?php
        if(!$pass_combi_error == ""){
          echo "<center><script>M.toast({html: '$pass_combi_error'} , 1000);</script></center>";
        }
      ?>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="">
      <label for="inputConfirmPassword" class="sr-only">Confirm Password</label>
      <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirm Password" name="confirm_password" required="">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      or<br>
      <a href="<?php echo base_url(); ?>authentication" >Login</a>
      <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
    </form>
  </div>
</center>
