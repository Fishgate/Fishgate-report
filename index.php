<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <style>
        canvas{}
    </style>
    
  </head>
  <body>
      
      <header class='header'>
          <div id='logo' class='clearfix'>
              <div class='left bar bg-blue'>&nbsp;</div>
              <div class='left bar bg-green'>&nbsp;</div>
              <div class='left bar bg-pink'>&nbsp;</div>
              <div class='left bar bg-yellow'>&nbsp;</div>
              <div class='left bar bg-orange'>&nbsp;</div>
              <img src="img/logo.png" alt="Fishgate logo" />
          </div>
      </header>
      <div class='contentwrap'>
            <div class="container">
                <div class="row">
                  <div class="col-md-2">
                      <ul class="nav nav-pills">
                          <li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                  Choose Campaign<span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                  <li class="active"><a href="#">Brights</a></li>
                                  <li><a href="#">Ctrack</a></li>
                                  <li><a href="#">Bosal</a></li>
                              </ul>
                          </li>
                      </ul>
                  </div>
                  <div class="col-md-6 pos-rel">
                      <canvas id="canvas" height="450" width="450"></canvas>
                      <div class="title">
                          <h4>Brights 2013 Nov campaign</h4>
                          <p>1032</p>
                      </div>
                  </div>
                    
                 <div class="col-md-4">
                     <ul class="nav nav-pills nav-stacked">
                        <li>
                          <a href="#">
                            <span class="badge pull-right bg-green">200</span>
                            Opened
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="badge pull-right bg-yellow">800</span>
                            Unopened
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="badge pull-right bg-orange">24</span>
                            Bounced
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="badge pull-right bg-red">8</span>
                            Invalid Emails
                          </a>
                        </li>
                        <li class="active">
                          <a href="#">
                            <span class="badge pull-right bg-green">1032</span>
                            Total
                          </a>
                        </li>
                      </ul>
                 </div>
              </div>
        </div>
      </div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <!--  CHART JS -->
    <script src="js/Chart.js"></script>
    
    <!--  SCRIPTS JS -->
    <script src="js/scripts.js"></script>
  </body>
</html>