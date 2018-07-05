    <center style="margin-top: 5%">
      <div class="jumbotron" style="width: 70%">
        <form class="form-signin" action="<?php echo base_url(); ?>authentication/login" method="post">
          <i class="large material-icons">account_circle</i>
          <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required="" autofocus="">
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="">
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          or<br>
          <a href="<?php echo base_url(); ?>authentication/register" >Register</a>
          <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
        </form>
      </div>
    </center>
