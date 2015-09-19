<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="images/favicon.ico">

  <title>Online Registration System</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <div class="site-wrapper">

    <div class="site-wrapper-inner">

      <div class="cover-container">

        <div class="masthead clearfix">
          <div class="inner">
            <h3 class="masthead-brand">Online Registration Form</h3>
            <nav>
              <ul class="nav masthead-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Faq</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="inner cover">
          <div class="info show">
            <h1 class="cover-heading">Check Registration</h1>
          
            <div class="row">          
              <div class="col-lg-12">
                <div class="input-group">
                  <input type="text" class="form-control input-lg" placeholder="input your token">
                  <span class="input-group-btn">
                    <button class="btn btn-info btn-lg" type="button">Go!</button>
                  </span>
                </div><!-- /input-group -->
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->

            <br/>
            
            <p class="lead">If you want to enroll click below.</p>
            <p class="lead">
              <a href="javascript:void(0);" class="btn btn-lg btn-default btn-register">Register Now!</a>
            </p>
          </div>
        </div>

        <div class="well hide">
          <a href="javascript:void(0);" class="close btn-register">&times;</a>
          
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input type="file" id="exampleInputFile">
              <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Check me out
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        </div>

        <div class="mastfoot">
          <div class="inner">
            <p>Developed by <a href="http://smronju.com">smronju</a>, in 2015.</p>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>
