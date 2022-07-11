<!-- <div class="card w-70">
  <div class="card-body align-center">
    
    <form class="form-signin">
<div class="text-center mb-4">
    
    <h1 class="h3 mb-4 font-weight-normal">Sign In</h1>
    
</div>

  <div class="form-label-group">
    <input type="text" id="un" class="form-control" placeholder="Username" required autofocus>
    <label for="un">Username</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="pwd" class="form-control" placeholder="Password" required>
    <label for="pwd">Password</label>
  </div> 
  <button class="btn btn-lg btn-primary btn-block" type="submit" href="<?php echo base_url(); ?>VisitorformCtrl/index">Sign in</button>
</form>
  </div>
</div> -->
<!-- <form class="form-signin">
<div class="text-center mb-4">
    
    <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
    
</div>

  <div class="form-label-group">
    <input type="text" id="un" class="form-control" placeholder="Username" required autofocus>
    <label for="un">Username</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="pwd" class="form-control" placeholder="Password" required>
    <label for="pwd">Password</label>
  </div> 
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form> -->

<!-- <div class="m_container m_ms-6 m_px-5 m_mt-5 m_text m_col m_d-flex m_justify-content-center">
        <br><br>
        <div class="m_card" style="width:18rem">
            <div class="m_card-body">
                <form action="http://loginpg.php" class="form-signin" method="post" target="_blank">
                    <div class="form-label-group">
                      <input type="text" id="un" class="form-control" placeholder="Username" required autofocus>
                      <label for="un">Username</label>
                    </div>
                    <div class="form-label-group">
                      <input type="password" id="pwd" class="form-control" placeholder="Password" required>
                      <label for="pwd">Password</label> 
                    </div>
                    <div class="m_d-grid m_gap-2 m_d-md-flex m_justify-content-md-end m_mt-5">
                        <a href="https://www.google.com/url?q=http://dashboard.html&amp;source=gmail-html&amp;ust=1653729926878000&amp;usg=AOvVaw0e6sNQX6fAfqPCXT8hC8tZ" target="_blank" rel="noreferrer">
                            <button class="m_btn m_btn-primary m_me-md-2" type="button">Submit</button>
                        </a>
                    </div>
                </form>
            </div>
          </div>
        
    </div> -->
<html>

<head>
    <title>Login</title>

</head>

<body>
    <br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card w-65">
                    <div class="card-body align-center">
                        <form method="post" name="frmAdd"
                            action="<?php echo base_url('');?>SigninCtrl/login_validation">
                            <div class="text-center mb-4">
                                <h1 class="h3 mb-4 font-weight-normal">Login</h1>
                                <?php
                                   echo $this->session->flashdata("error");
                                ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" id="un" class="form-control" name="username" placeholder="Username"
                                    required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" id="pwd" class="form-control" name="password"
                                    placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" name="btnadd" class="btn btn-primary btn-lg">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>

</body>


</html>