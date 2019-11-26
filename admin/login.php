
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng nhập</title>	
  <!-- Import Bootstrap and JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>
  <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <script 
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">    
  </script>            
  <!-- My CSS and JQuery -->
  <link href="css/style.css" rel="stylesheet">
  <!-- <script type="text/javascript" src="jquery/index.js"></script>  -->
</head>
<body>
  <div class="container-fluid bg">
    <div class="row justify-content-center">
      <div class="col-md-4 col-sm-6 col-xs-12 row-container">
        <form method="POST">
          <h1 class="text-center">ĐĂNG NHẬP</h1>
          <div class="form-group">
            <label for="email">UserName</label>
            <input type="text" name="txt_user" class="form-control" id="email" placeholder="Enter user">
            <p class="emailError"></p>
          </div>
          <div class="form-group">
            <label for="password" class="label">Password</label>
            <input type="password" name="txt_pass" class="form-control" id="password" placeholder="Password">            
            <p class="passwordError"></p>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Check me out</label>
          </div>   
          <button type="submit" name="btn_login" class="btn btn-success btn-block my-3">Login</button>
          <?php 
        	require('xuly.php');
        	?>
        </form>
      </div>
    </div>
  </div>
</body>
</html>	











