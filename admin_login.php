<?php session_start();
include_once('includes/header.php'); 
      
?>
<section>
        <div class="container">
            <div class="container">    
                <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                    <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">Welcome to Admin Login</div>
                            </div>     

                            <div style="padding-top:30px" class="panel-body" >

                                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                    <form id="loginform" class="form-horizontal" method="post" action="signin.php">
                                      <?php if(isset($_SESSION['error'])) echo $_SESSION['error']; ?>
                                      <span class="help-block"></span>
                                        <div style="margin-bottom: 25px" class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input id="login-username" type="text" class="form-control" name="username" id="username" value="" placeholder="username" required>
                                                                                   
                                        </div>
                                         <span class="help-block"></span>
                                        <div style="margin-bottom: 25px" class="input-group">
                                             <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                             <input id="login-password" type="password" class="form-control" name="password" id="password" placeholder="password" required>
                                        </div>
                                  <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                      <button  type="submit" id="btn-login"  class="btn btn-success">Login  </button>
                                    </div>
                                </div>
                            </form>     
                        </div>                     
                    </div>  
        </div>
    </div>
    
</section>