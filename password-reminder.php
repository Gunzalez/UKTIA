<!doctype html>
<html>
<head>
    <title>UK Tea &amp; Infusions Association - Password reminder</title>
    <?php include('includes/static-resources.php'); ?>
</head>
<body class="password-reminder">

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
                <li><a href="site-map.php" title="Sitemap">Sitemap</a></li>
                <li><a href="terms-conditions.php" title="Terms &amp; Conditions">T&amp;Cs</a></li>
                <li class="last"><a href="privacy-policy.php" title="Privacy Policy">Privacy Policy</a></li>
            </ul>

            <form id="search" class="search" method="post" action="log-in.php">
                <div class="row">
                    <label class="label" for="term">Search:</label>
                    <input class="term" type="text" id="term" name="term" value="">
                    <input class="go-button" type="submit" value="submit">
                </div>
            </form>

            <div class="navigation">
                <ul id="navigation-list" class="list">
                    <li class="first option-one has-dropdown active"><a href="about.php">About UKTIA</a>
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


                        <h2>Password reminder</h2>
                        <p>Please provide your registered email address, and we will email your password.</p>

                        <form id="login-form" name="login-form" action="#" method="post" class="form">
                            <h3>Password will be sent to the entered email address.</h3>
                            <div class="row">
                                <label for="email">Email</label>
                                <input type="email" class="input" name="email" id="email" placeholder="Email" value="">
                            </div>
                            <div class="row last">
                                <input type="submit" id="go" value="submit" class="go-button">
                            </div>
                        </form>


                        <div class="cboth"></div>
                    </div>

                </div>
                <div class="narrow right">

                    <?php include('includes/member-updates.php'); ?>

                    <?php include('includes/essential-reading.php'); ?>

                </div>
                <div class="cboth"></div>
            </div>

        </div><!-- .body -->




        <?php include('includes/footer.php'); ?>

    </div><!-- .page -->

    <div class="back-to-top"><a href="#"><i class="fa fa-chevron-up"></i></a></div>

    <?php include('includes/mobile-nav.php'); ?>

    <script src="js/vendors/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/vendors/jquery.mmenu/jquery.mmenu.min.all.js"></script>
    <script src="js/uktia.js" type="text/javascript"></script>

</body>
</html>