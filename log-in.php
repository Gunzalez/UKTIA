<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>UK Tea &amp; Infusions Association - Members Log-in</title>
    <meta name="keywords" content="Keywords go here" />
    <meta name="description" content="Description goes here" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link type="text/css" rel="stylesheet" href="css/uktia.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="js/vendors/jquery.mmenu/jquery.mmenu.all.css" rel="stylesheet">
    <script src="js/vendors/modernizr-2.6.1.min.js" type="text/javascript"></script>
</head>
<body class="log-in">

    <div class="page">

        <div class="header">

            <a href="#mobile-navigation" id="mobile-navigation-button" class="mobile-navigation-button"><i class="fa fa-bars"></i></a>

            <h1 class="logo">
                <span>
                    <span>
                        <a href="index.php">
                            <img src="images/logo.png" alt="" />
                        </a>
                    </span>
                </span>
            </h1>

            <ul class="aux-navigation">
                <li class="tw"><a href="https://twitter.com/ukteacouncil" title="Twitter" target="_blank">Twitter</a></li>
                <li class="first"><a href="log-in.php" title="Log-in">Log-in</a></li>
                <li><a href="/site-map" title="Sitemap">Sitemap</a></li>
                <li><a href="/terms-conditions" title="Terms &amp; Conditions">T&amp;Cs</a></li>
                <li class="last"><a href="/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
            </ul>

            <form id="search" class="search" method="post" action="/search-results">
                <div class="row">
                    <label class="label" for="term">Search:</label>
                    <input class="term" type="text" id="term" name="term" value="">
                    <input class="go-button" type="submit" value="submit">
                </div>
            </form>

            <div class="navigation">
                <ul id="navigation-list" class="list">
                    <li class="first option-one has-dropdown"><a href="about.php">About UKTIA</a>
                        <ul>
                            <li class="first"><a href="benefits.php">Members Benefits</a></li>
                            <li><a href="register.php">Registration</a></li>
                            <li class="last active"><a href="log-in.php">Members Log-in</a></li>
                        </ul>
                    </li>
                    <li class="option-two"><a href="log-in.php">The Pulse</a></li>
                    <li class="option-three"><a href="log-in.php">Membership Reference Info</a></li>
                    <li class="last option-four"><a href="log-in.php">Circulars</a></li>
                </ul>
            </div>

            <div class="cboth"></div>
        </div><!-- .header -->





        <div class="body">

            <div class="section">
                <div class="wide left">

                    <div class="copy-padding">


                        <h2>Members Log-in</h2>
                        <p>Log-in to the UK Tea &amp; Infusions Association Members Extranet to gain access to the information on this site. If you have not registered already, please <a href="register.php" title="Click here to register for access to the UK Tea Council Members Extranet website...">register here</a>.</p>
                        <p>If you have forgotten your login details, please <a href="/log-in/password-reminder" title="Click here to go to the password reminder page...">click here to retrieve your password</a>.</p>

                        <form id="login-form" name="login-form" action="pulse.php" method="post" class="form validator" novalidate="novalidate">
                            <h3>Please login to access Members info:</h3>
                            <div class="row">
                                <label for="email">Email</label>
                                <input type="email" class="input" name="email" id="email" placeholder="Email" value="" required="required">
                            </div>
                            <div class="row">
                                <label for="phrase">Password</label>
                                <input type="password" class="input" name="phrase" id="phrase" placeholder="Password" value="" required="required">
                            </div>
                            <div class="row last">
                                <input type="submit" id="go" value="submit" class="go-button">
                            </div>
                        </form>

                        <p><a href="/log-in/password-reminder">Forgot password?</a></p>


                        <div class="cboth"></div>
                    </div>

                </div>
                <div class="narrow right">

                    <?php include_once('includes/member-updates.php'); ?>

                    <?php include_once('includes/essential-reading.php'); ?>

                </div>
                <div class="cboth"></div>
            </div>

        </div><!-- .body -->




        <?php include_once('includes/footer.php'); ?>

    </div><!-- .page -->

    <div class="back-to-top"><a href="#"><i class="fa fa-chevron-up"></i></a></div>
    <div class="mobile-navigation">
        <nav id="mobile-navigation" class="mobile-navigation-list">
            <ul>
                <li>
                    <form id="search" class="search" method="post" action="/search-results">
                        <div class="row">
                            <label class="label" for="term">Search</label>
                            <input class="term" type="text" id="term" name="term" value="">
                            <input class="button" type="submit" value="submit">
                        </div>
                    </form>
                </li>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About UKTIA</a>
                    <ul>
                        <li><a href="benefits.php">Members Benefits</a></li>
                        <li><a href="register.php">Registration</a></li>
                        <li><a href="log-in.php">Members Log-in</a></li>
                    </ul>
                </li>
                <li><a href="log-in.php">The Pulse</a></li>
                <li><a href="log-in.php">Membership Reference Info</a></li>
                <li><a href="log-in.php">Circulars</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </div>

    <script src="js/vendors/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/vendors/jquery.mmenu/jquery.mmenu.min.all.js"></script>
    <script src="js/uktia.js" type="text/javascript"></script>

</body>
</html>