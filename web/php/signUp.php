<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pocket Tutor</title>

    <!-- Bootstrap -->
    <!-- <link href="./bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="../css/signUp.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container-fluid text-center paddingBottom15">
      <div class="row content">
        <div class="col-sm-2">
          <div class="logo">
            <a href="landing.html">
              <img src="../images/logo1.png">
            </a>
          </div>
        </div>
        <div class="col-sm-10">
          <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li><a href="landing.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="active" id="signUp"><a href="#">Sign Up</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>  
      
    <!-- main section   -->
    <div class="container-fluid text-center paddingTop15">
      <div class="row content">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 rightSection paddingBottom15">
          <div class="form-container">
            <form class="form form-horizontal component-uff" data-step-method="sliding" action=" " method="post"  id="signUpForm" role="form">
              <h2 class="text-center">Sign Up</h2>

              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <div class="uff-form-sliding">
                    <div class="sliding-container">
                    <div data-step>
                      <!-- <h4 data-sb="fadeInLeft">Personal Information</h4> -->

                      <div class="form-group">
                        <label class="col-sm-2 control-label" data-sb="fadeInRight">First Name</label>
                        <div class="col-sm-10">
                          <input data-sb="fadeInLeft"
                                 type="text"
                                 class="form-control"
                                 name="first_name"
                                 required="required" 
                                 value="<?php if (isset($_POST['first_name'])) {
                                            echo $_POST['first_name'];
                                          }?>" 
                              >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label" data-sb="fadeInRight">Last Name</label>
                        <div class="col-sm-10">
                          <input  data-sb="fadeInLeft"
                                  type="text"
                                  class="form-control"
                                  name="last_name"
                                  required="required"
                                  value="<?php if (isset($_POST['last_name'])) {
                                            echo $_POST['last_name'];
                                          }?>"
                              >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label" data-sb="fadeInRight">College</label>
                        <div class="col-sm-10">
                          <select name="sex"  data-sb="fadeInLeft" class="form-control">
                            <option value="1">Select</option>
                            <option value="2">Cornell</option>
                            <option value="3">Ithaca</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label" data-sb="fadeInRight">College Year</label>
                        <div class="col-sm-10">
                          <select name="profession" class="form-control" data-sb="fadeInLeft">
                            <option value="1">Select</option>
                            <option value="2">Freshman</option>
                            <option value="3">Sophomore</option>
                            <option value="4">Junior</option>
                            <option value="3">Senior</option>
                            <option value="4">Post-Grad</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label" data-sb="rollIn">College Email</label>
                        <div class="col-sm-10">
                          <input  data-sb="bounceInLeft"
                                  type="email"
                                  class="form-control"
                                  name="email"
                                  required="required"
                                  placeholder="abc123@cornell.edu" 
                                  value="<?php if (isset($_POST['email'])) {
                                            echo $_POST['email'];
                                          }?>"
                              >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label" data-sb="rollIn">Phone</label>
                        <div class="col-sm-10">
                          <input  data-sb="bounceInLeft"
                                  type="email"
                                  class="form-control"
                                  name="phone"
                                  required="required"
                                  placeholder="abc123@cornell.edu" 
                                  value="<?php if (isset($_POST['phone'])) {
                                            echo $_POST['phone'];
                                          }?>"
                              >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label" data-sb="rollIn">Password</label>
                        <div class="col-sm-10">
                          <input data-sb="bounceInLeft"
                                 type="password"
                                 class="form-control"
                                 id="password"
                                 name="password"
                                 required="required"
                              >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label" data-sb="rollIn">Re-enter Password</label>
                        <div class="col-sm-10">
                          <input data-sb="bounceInLeft"
                                 type="password"
                                 class="form-control"
                                 id="passwordCopy"
                                 name="passwordCopy"
                                 required="required"
                              >
                        </div>
                      </div>

                      <ul class="pager">
                        <!-- <li class="left" data-sb="bounceInLeft"><a class="prev" data-step-previous="">&laquo; Previous</a></li> -->
                        <!-- <li class="right" data-sb="bounceInLeft"><a class="next" data-step-finish>Finish &raquo;</a></li> -->
                        <button type="submit" class="right" onclick="submitted()" data-sb="bounceInLeft">Submit &raquo;</button>
                      </ul>

                      <div class="clearfix"></div>
                    </div>
                  </div>
                  </div>
                </div>

                <div class="col-md-2">

                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-sm-2"></div>
      </div>
    </div>

    <footer class="container-fluid text-center footer">
      <p>PocketTutor © 2016 </p>
    </footer>

    <!-- div to cover everything when there's a pop-up -->
    <div class="darkBackground"></div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="../js/signUp.js"></script>
  </body>
</html>