
<?php include('header.php'); ?>
<?php include('background.php'); ?>
  <body id="login">
    <div class="container">
    <br><br><br><br><br>
   <form id="login_form" class="form-signin" method="post"><br>
        <h3 class="form-signin-heading"><i class="icon-lock">&nbsp;&nbsp;&nbsp;</i> Admin Login</h3><br><br>
        <input type="text" class="input-block-level" id="usernmae" name="username" placeholder="Username" required>
        <input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
        <center><button name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-"></i> Sign in</button></center>		
    </form>
<script>
    jQuery(document).ready(function(){
    jQuery("#login_form").submit(function(e){
	e.preventDefault();
        var formData = jQuery(this).serialize();
        $.ajax({
            type: "POST",
            url: "login.php",
            data: formData,
            success: function(html){
                if(html=='true')
                {
                    
        $.jGrowl("Welcome to Secure E-Learning System", { header: 'Access Granted' });
        var delay = 2000;
        setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
        }
        else
        {
            
        $.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
	}
	}
    });
    return false;
    });
    });
</script>

    </div> <!-- /container -->
<?php include('script.php'); ?>
  </body>
</html>