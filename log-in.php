<!doctype html>
<html>
<head>
    <title>UK Tea &amp; Infusions Association - Members Log-in</title>
    <?php include('includes/static-resources.php'); ?>
</head>
<body class="log-in">

    <div class="page">

        <div class="header">

            <a href="#mobile-navigation" id="mobile-navigation-button" class="mobile-navigation-button"><i class="fa fa-bars"></i></a>

            <div class="logo">
                <span>
                    <span>
                        <h1>
                            <a href="index.php">UKTIA members</a>
                        </h1>
                    </span>
                </span>
            </div>

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


                        <h2>Members Log-in</h2>
                        <p>Log-in to the UK Tea &amp; Infusions Association Members Extranet to gain access to the information on this site. If you have not registered already, please <a href="register.php" title="Click here to register for access to the UK Tea Council Members Extranet website...">register here</a>.</p>
                        <p>If you have forgotten your login details, please <a href="password-reminder.php" title="Click here to go to the password reminder page...">click here to retrieve your password</a>.</p>

                        <form id="login-form" name="login-form" action="pulse.php" method="post" class="form">
                            <h3>Please login to access members info:</h3>
                            <div class="row">
                                <label for="email">Email</label>
                                <input type="email" class="input" name="email" id="email" placeholder="Email" value="">
                            </div>
                            <div class="row">
                                <label for="phrase">Password</label>
                                <input type="password" class="input" name="phrase" id="phrase" placeholder="Password" value="">
                            </div>
                            <div class="row last">
                                <input type="submit" id="go" value="submit" class="go-button">
                            </div>
                        </form>

                        <p><a href="password-reminder.php" class="big-cta">Forgot password?</a></p>


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