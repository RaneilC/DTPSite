

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>DTP Site</title>
  <!-- Favicon -->
  <link rel="icon" href="../../assets/img/brand/dtpsitet.png" type="image/png">
  <link rel="icon" href="{{ url('img/dtpsitet.png') }}">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link href="{{ asset('/assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/vendor/nucleo/css/nucleo.css" type="text/css">

  <link href="{{ asset('/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet"> <!-- LARAVEL STYLESSSSSSSSSSSSSSSSSSSSSSSSSSSS-->
  <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link href="{{ asset('/assets/css/argon.css?v=1.2.0') }}" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/argon.css?v=1.2.0" type="text/css">

  <link href="{{ asset('/bootstrap-4.5.3-dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="../../bootstrap-4.5.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body class="bg-default bg-warning">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-white">
    <div class="container">
      <a class="navbar-brand" href="{{ url(' ') }}">
        <img src="{{ url('img/dtpsitet.png') }}">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="dashboard.php">
                <img src="../../assets/img/dtpsitet.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav mr-auto">
       
          <li class="nav-item">
            <a href="{{ url('login') }}" class="nav-link">
              <span class="nav-link-inner--text">Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('signup') }}" class="nav-link">
              <span class="nav-link-inner--text">Sign Up</span>
            </a>
          </li>
        </ul>
        <hr class="d-lg-none" />
     
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content bg-warning">
    <!-- Header -->
    <div class="header bg-danger py-7 py-lg-8 pt-lg-3">
      <div class="container">
        <div class="header-body text-center mb-5">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-lead text-white">This is our official DTP Website.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator ">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="0"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <style>
        .card-header{
            background-color: #ffff;
        }
    </style>
    <div class="container mt--9 pb-4">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7 ">
          <div class="card bg-secondary border-0 mb-0 ">
            <div class="card-header bg-white pb-5">
              <div class="text-muted text-center mt-2 mb-3"><long>ROUTING ONLY, ROUTING ONLY, ROUTING ONLY</long></div>
              <div class="btn-wrapper text-center ">
                
              </div>
            </div>
            <div class="card-body bg-white px-lg-5 py-lg-5 ">
              
              <form method="post" role="form" enctype="multipart/form-data" action="#">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-white"><i class="ni ni-email-83 "></i></span>
                    </div>
                    <input class="form-control" placeholder="Email or School ID" type="text" name="signemail" id="signemail" required>
                    
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-white"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="signpassword" id="signpassword" required>
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  
                </div>
                <div class="text-center">
                  <button name="Login" type="Submit" value="Login" class="btn bg-warning my-4 text-white" >Sign in</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-white"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-white"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5 bg-warning" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <!-- <div class="copyright text-center text-xl-left text-muted text-white">
          &copy; 2021 <a href="https://web.facebook.com/rms.nnz" class="font-weight-bold ml-1 text-white" target="_blank">DTP Site</a> and
              <a href="https://web.facebook.com/raneil.cobrado" class="font-weight-bold ml-1 text-white" target="_blank">Raneil Cobrado</a>
          </div> -->
        </div>
  
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>