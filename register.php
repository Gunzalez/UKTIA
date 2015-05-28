<!doctype html>
<html>
<head>
    <title>UK Tea &amp; Infusions Association - Register</title>
    <?php include('includes/static-resources.php'); ?>
</head>
<body class="register">

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

            <?php include('includes/search-box.php'); ?>

            <div class="navigation">
                <ul id="navigation-list" class="list">
                    <li class="first option-one has-dropdown active"><a href="about.php">About UKTIA</a>
                        <ul>
                            <li class="first"><a href="benefits.php">Members Benefits</a></li>
                            <li class="active"><a href="register.php">Registration</a></li>
                            <li class="last"><a href="log-in.php">Members Log-in</a></li>
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

                        <h2>Registration</h2>
                        <p>Register with the UK Tea &amp; Infusions Association to gain access to the restricted members information on this site.</p>
                        <p>Find out more about UK Tea &amp; Infusions Association <a href="benefits.php">Membership Benefits and Membership Criteria.</a></p>

                        <form id="register-form" name="register-form" action="#" method="post" class="form">
                            <h3>Register to access members info:</h3>
                            <div class="row">
                                <label for="firstname">Firstname *</label>
                                <input type="text" class="input" name="firstname" id="firstname" placeholder="Firstname" value="">
                            </div>
                            <div class="row">
                                <label for="Lastname">Lastname *</label>
                                <input type="text" class="input" name="lastname" id="lastname" placeholder="Lastname" value="">
                            </div>
                            <div class="row">
                                <label for="companyName">Company name *</label>
                                <input type="text" class="input" name="companyName" id="companyName" placeholder="Company name" value="">
                            </div>
                            <div class="row">
                                <label for="email">Email *</label>
                                <input type="email" class="input" name="email" id="email" placeholder="Email" value="">
                            </div>
                            <div class="row">
                                <label for="phrase">Password *</label>
                                <input type="password" class="input" name="phrase" id="phrase" placeholder="Password" value="">
                            </div>
                            <div class="row checkbox">
                                <input type="checkbox" id="notifications" name="notifications" value="1">
                                <label for="notifications">Receive Notifications from the Members Extranet</label>
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