
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <!--this tag for the different devices -->

    <title>Pixel : Photo App</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>

    
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand em-text" href="main.php">Pixel</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="main.php">Home</a>
                    </li>
                    <li><a href="about.html">About</a>
                    </li>
                    <li ><a href="contact.html">Contact</a>
                    </li>
                    <li style="float:right;"><a href="#">LogIn</a></li>
                </ul>
            </div>
        </div>
    </nav><!-- /.navbar -->

   <div id="container">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/family.jpg" alt="family" width="460" height="345">
      </div>

      <div class="item">
        <img src="images/group.jpg" alt="group" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="images/photoapp1.jpg" alt="photo" width="460" height="345">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
 <!-- <div class="container nav">
    <input name="file" type="file" 
   class="cloudinary-fileupload" data-cloudinary-field="image_id" 
   data-form-data=" ... html-escaped JSON data ... " ></input>
   <input type="submit" name="upload" value="upload"></input>
 </div>
 -->
 <div class="container file">
 <form method="post" action="#" name="submit" enctype="multipart/form-data">
  <input type="file" name="fileField"><br /><br />
  <input type="submit" name="submit" value="Submit">
</form>
</div>
    <section id="middle">
        <div class="container">
            <h2 style="text-align:center;">Available for anyone, anywhere</h2>
            <div class="row">
                <div class="col-md-4">
                    <img class="demo" src="images/desktop.jpg" alt="">
                    <h2>Desktop App</h2>
                    <p>Available for anyone, anywhereOn the Web
                       Cluster is simple to access and use through a web browser.</p>
                    <a href="#" class="btn btn-default">Download</a>
                </div>
                <div class="col-md-4">
                    <img class="demo" src="images/iphone.jpg" alt="">
                    <h2>IPhone</h2>
                    <p>Pixel award winning iOS app gives you fast, mobile access and takes full use of iOS 7 and iOS 8.</p>
                    <a href="#" class="btn btn-default">Download</a>
                </div>                    
                <div class="col-md-4">
                    <img class="demo" src="images/Android.jpg" alt="">
                    <h2>Andriod</h2>
                    <p>Pixel for Android has been specially designed for the world's most popular mobile operating system.</p>
                    <a href="#" class="btn btn-default">Download</a>
                </div>                
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /middle -->

    <section id="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <h2>Pixel Features</h2>
                    <ul>
                        <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Different Things For Different People </li>
                        <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Apps for everyone</li>
                        <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Off the record</li>
                    </ul>
                </div>
                <div class="col-md-4 col-md-offset-2">
                    <img class="big-logo" src="images/logo.png" alt="">
                </div>                    
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /feature -->
    
    <footer>
        <div class="container"><!-- /container -->
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <ul>
                        <li><a href="main.php">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <p>Copyright &copy; 2016, All Rights Reserved</p>
                </div>                
            </div><!-- /row -->
        </div><!-- /container -->
    </footer><!-- /footer -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>