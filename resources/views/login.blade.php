<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="templatelogin1/login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="templatelogin1/login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="templatelogin1/login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="templatelogin1/login/css/style.css">

    <title>Login #5</title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('templatelogin1/login/images/daun.jpg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
                <h3 class="text-uppercase">Login to <strong>Teman Berkebun</strong></h3>
              </div>
              <br>
                <br>
               
              <form action="#" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" id="password">
                </div>
                
                <br>
               
               <!-- Single Hero Post  <input href="{{ route('homemasuk') }}" type="submit" value="Log In" class="btn btn-block py-2 btn-primary" >  -->  
                <a href="{{ route('homemasuk') }}" type="submit" class="btn btn-block py-2 btn-primary">Log In</a>     
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
    
    

    <script src="templatelogin1/login/js/jquery-3.3.1.min.js"></script>
    <script src="templatelogin1/login/js/popper.min.js"></script>
    <script src="templatelogin1/login/js/bootstrap.min.js"></script>
    <script src="templatelogin1/login/js/main.js"></script>
  </body>
</html>