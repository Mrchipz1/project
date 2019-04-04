
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
    require_once('connect.php');
    $db = new dbConnect();
    $conn = $db->connect();
    function clean_input($in) {
        // $res = mysqli_escape_string($in);
        $res = stripslashes($in);
        $res = trim($res);
        return $res;
    }
    function get_cat_name($cat_id) {
        $db = new dbConnect();
        $conn = $db->connect();
        try {
            $stmt = $conn->prepare("SELECT * FROM category WHERE _id = :category_id");
            $stmt->execute(array(':category_id' => $cat_id));
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt->rowCount() > 0){
                return $res['cat_name'];
            }else{
                header('location:cat.php');
            }
        } catch(PDOException $ex) {
            return NULL;
        }
    }
        
    function getcount($constId, $catId){
        $db = new dbConnect();
        $conn = $db->connect();
        try {
            require_once('enc.php');
            $enc = new enchandler();
            $stmt = $conn->prepare("SELECT * FROM contestant WHERE contestantid=:contestant_id");
            $stmt->execute(array(':contestant_id' => $constId));
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            $newcount = $enc->decryptIt($res['votes']);
            return $newcount;
        } catch(PDOException $ex) {
            return NULL;
        }
    }
    
   

    //clean get data
    if(!isset($_GET['cat'])) {echo 'GGG';   
        $_SESSION['message'] = "Stop trying to mess around";
        $_SESSION['messageType'] = "alert alert-danger";
        header('location:cat.php');
    }else{
        $cat_id = clean_input($_GET['cat']);
        try{
            $stmt = $conn->prepare("SELECT * FROM contestant WHERE category_id=:category_id");
            $res = $stmt->execute(array(':category_id' => $cat_id));
            if($res) {
                if($stmt->rowCount() > 0){
                    $cont = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
            }
        }catch(PDOException $ex) {
            return NULL;
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
        <nav class="navbar navbar-default" style="background:#000;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">LOGO</a>
                    <button class="btn-header" onclick="window.location.href = 'cat.php';">Return</button>
                </div>
                <!-- /.navbar-header -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- /.navbar -->
    </header>
    <!-- Page Header -->


    <!-- ==============================================
     Banner Login Section
     =============================================== -->
    <section>
        <div class="container">
            <?php                        
                foreach ($cont as $row) {
                    $numVote = getcount($row['_id'], $cat_id);
            ?>
                <div class="row">
                    <div class="box">
                        <div class="img-box">
                        <img src="images/m-user.png" class="img"/> 
                        </div>
                        <p class="box-text"> <b>Name:</b> <?php echo $row['contestant_name']; ?> </p> 
                        <p class="box-text-party"> <b>Party:</b> <?php echo $row['contestant_dept']; ?></p>
                        <a href="voteprocess.php?cat=<?php echo($_GET['cat'])?>&contestantid=<?php echo($row['_id']) ?>" />
                            <button class="btn">Vote (<?php echo $numVote; ?>)</button>
                        </a>
                    </div>
                </div>
            <?php
                }
            ?>
        <!-- /.container -->
    </section>
    
    <!-- /section -->
    <style type="text/css">
        
        .img {
            position: relative;
            height: 88px;
            display: block;
            margin: 0px auto;
            margin-top: 29px;     
            float: center;
            width: 70%;

        }

        .box{
            float: center;
            height: 150px;
            width: 80%;
            margin: auto;
            margin-top: 40px;
            border: solid;
            border-radius: 4px;
            background:;
        }

        .img-box{
            float: left;
            height: auto;
            width: 20%;
            margin-right: auto;
            border-right: solid;
            border-radius: 0px;
            background:;
            padding:15px;
        }
        .box-text{
            text-align: left;
            padding: 10px;
            padding-left: 220px;
            font-size: 20px;
            
        }
        .box-text-party{
            text-align: left;
            padding:-10px;
            padding-left: 220px;
            font-size:20px;
        }
        .btn{
            height: 36px;
            weight: 258px;
            background-color: transparent;
            border: 1px;
            border: solid;
            color: black;   
            display: inline-block;
            font-size: 16px;
            margin: 4px 35px;
        }
        .btn:hover{
            background: black;
            color:white;
        }
        .btn-header{
            margin-left: 800px; 
            margin-top:5px; 
            height:37px; 
            width:214px; 
            border-radius:2px; 
            background: transparent; 
            color:white;
        }
        .btn-header:hover{
            background: white;
            color: black;
        }
    </style>

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