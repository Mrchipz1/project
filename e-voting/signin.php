<?php 
/* Main page with two forms: sign up and log in */
// require 'config.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
?>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Voting Platform</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Online Voting Platform">
    <meta name="keywords" content="Online Voting Platform, voting ">
    <meta name="author" content="index.html">

    <!-- ==============================================
		Favicons
		=============================================== -->
    <link rel="apple-touch-icon" sizes="57x57" href="source/assets/img/favicons/apple-touch-icon-57x57.html">
    <link rel="apple-touch-icon" sizes="114x114" href="source/assets/img/favicons/apple-touch-icon-114x114.html">
    <link rel="apple-touch-icon" sizes="72x72" href="source/assets/img/favicons/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="144x144" href="source/assets/img/favicons/apple-touch-icon-144x144.html">
    <link rel="apple-touch-icon" sizes="60x60" href="source/assets/img/favicons/apple-touch-icon-60x60.html">
    <link rel="apple-touch-icon" sizes="120x120" href="source/assets/img/favicons/apple-touch-icon-120x120.html">
    <link rel="apple-touch-icon" sizes="76x76" href="source/assets/img/favicons/apple-touch-icon-76x76.html">
    <link rel="apple-touch-icon" sizes="152x152" href="source/assets/img/favicons/apple-touch-icon-152x152.html">
    <link rel="apple-touch-icon" sizes="180x180" href="source/assets/img/favicons/apple-touch-icon-180x180.html">
    <link rel="icon" type="image/png" href="source/assets/img/favicons/favicon-96x96.html" sizes="96x96">
    <link rel="icon" type="image/png" href="source/assets/img/favicons/favicon-16x16.html" sizes="16x16">
    <link rel="icon" type="image/png" href="source/assets/img/favicons/favicon-32x32.html" sizes="32x32">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-TileImage" content="source/assets/img/favicons/mstile-144x144.html">

    <!-- ==============================================
		CSS
		=============================================== -->
    <!-- Style-->
    <link type="text/css" href="source/assets/css/style.css" rel="stylesheet" />

    <!-- ==============================================
		Feauture Detection
		=============================================== -->
    <script src="source/assets/js/modernizr-custom.html"></script>

    <script async src="../../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-4921714320142871",
            enable_page_level_ads: true
        });
    </script>

    <link type="text/css" href="source/assets/css/login.css" rel="stylesheet" />

</head>

<body>

    <!-- Include navigation.php. Contains navigation content. -->

    <!-- ==============================================
     Navigation Section
     =============================================== -->
    <header class="tr-header">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">LOGO</a>
                </div>
                <!-- /.navbar-header -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- /.navbar -->
    </header>
    <!-- Page Header -->

    <!-- ==============================================
	 Header
	 =============================================== -->
    <header class="header-login top-page" style="

  background-color:black;
  background-size: cover;
  background-position: center center;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  color: #fff;
  height: 30vh;
  width: 100%;

  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;">
        <div class="container">
            <div class="content">
                <div class="row">
                    <h1 class="revealOnScroll" data-animation="fadeInDown"> Transparent voting system (LOGIN)</h1>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.container -->
    </header>
    <!-- /header -->

    <!-- ==============================================
     Banner Login Section
     =============================================== -->
    <section class="banner-login">
        <div class="container">

            <div class="row">

                <main class="main main-signup col-lg-12">
                    <div class="col-lg-6 col-lg-offset-3 text-center">

                        <div class="form-sign">
                            <form action ="<?Php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                <div class="form-head">
                                    <h3>Login</h3>
                                </div>
                                <!-- /.form-head -->
                                <div class="form-body">

                                    <!-- List group -->

                                    <div class="form-row">
                                        <div class="form-controls">
                                            <input name="email" placeholder="Email" class="field" type="text">
                                        </div>
                                        <!-- /.form-controls -->
                                    </div>
                                    <!-- /.form-row -->

                                    <div class="form-row">
                                        <div class="form-controls">
                                            <input name="password" placeholder="Password" class="field" type="password">
                                        </div>
                                        <!-- /.form-controls -->
                                    </div>
                                    <!-- /.form-row -->

                                    <div class="form-row">
                                        <div class="material-switch pull-left">
                                            <input id="someSwitchOptionSuccess" name="remember" type="checkbox" />
                                            <label for="someSwitchOptionSuccess" class="label-success"></label>
                                            <span style="color: black;">Admin</span>
                                        </div>
                                    </div>
                                    <!-- /.form-row -->

                                </div>
                                <!-- /.form-body -->

                                <div class="form-foot">
                                    <div class="form-actions">
                                        <!-- <input type="hidden" name="token" value="" /> -->
                                        <input value="Login" name="login" class="kafe-btn kafe-btn-danger full-width" type="submit">
                                        <br></br>

                                    </div>
                                    <!-- /.form-actions -->
                                    <!-- <div class="form-head">
                                        <a href="forgot.html" class="more-link">Forgot Password?</a>
                                    </div> -->
                                </div>
                                <!-- /.form-foot -->
                            </form>

                        </div>
                        <!-- /.form-sign -->
                    </div>
                    <!-- /.col-lg-6 -->
                </main>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <!-- Include footer.php. Contains footer content. -->

    <!-- ==============================================
	 Footer Section
	 =============================================== -->
    <footer class="footerWhite">

        <!-- COPY RIGHT -->
        <div class="clearfix copyRight">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12">
                        <div class="copyRightWrapper">
                            <div class="row">

                                <!-- /col-sm-5 -->

                                <div class="col-sm-7 col-sm-pull-5 col-xs-12">
                                    <div class="copyRightText">
                                        <p>Copyright © Voting&nbsp; 2019. All Rights Reserved</p>
                                    </div>
                                </div>
                                <!-- /col-sm-7 -->

                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /copyRightWrapper -->
                    </div>
                    <!-- /col-xs-2 -->

                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /copyRight -->

    </footer>

    <a id="scrollup">Scroll</a>

    <!-- ==============================================
	 Scripts
	 =============================================== -->
    <script src="source/assets/js/jquery-3.2.1.min.js"></script>
    <script src="source/assets/js/bootstrap.min.js"></script>
    <script src="source/assets/js/waypoints.min.js"></script>
    <script src="source/assets/js/jquery.easypiechart.min.js"></script>
    <script src="source/assets/js/debunk.js"></script>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-79656468-4', 'auto');
        ga('send', 'pageview');
    </script>

</body>

</html>