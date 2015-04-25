<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>UK Tea &amp; Infusions Association - Pulse</title>
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
<body class="pulse">

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
                <li><a href="index.php" title="Log-out">Log-out</a></li>
                <li class="first"><a href="/site-map" title="Sitemap">Sitemap</a></li>
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
                    <li class="first option-one has-dropdown"><a href="/about">About UKTIA</a>
                        <ul>
                            <li class="first"><a href="/members-benefits">Members Benefits</a></li>
                            <li class="last"><a href="index.php">Members Log-out</a></li>
                        </ul>
                    </li>
                    <li class="option-two has-dropdown active"><a href="pulse.php">The Pulse</a>
                        <ul>
                            <li class="first"><a href="/essential-reading">Essential Reading</a></li>
                            <li><a href="/video-update">Video Update</a></li>
                            <li class="last"><a href="/press">Tea in the Press</a></li>
                        </ul>
                    </li>
                    <li class="option-three has-dropdown"><a href="/members-reference">Membership Reference Info</a>
                        <ul>
                            <li class="first"><a href="/fdf-access">Access to FDF Website</a></li>
                            <li><a href="/annual-reports">Annual reports</a></li>
                            <li><a href="/crisis-response">Crisis &amp; Response Procedures</a></li>
                            <li><a href="/faqs">FAQs</a></li>
                            <li><a href="/industry-partners">Industry Partners</a></li>
                            <li><a href="/key-contacts">Key Contact &amp; Profiles</a></li>
                            <li><a href="/members">Members Directory</a></li>
                            <li><a href="/rules-regulation">Member's Rules &amp; regulations</a></li>
                            <li class="last"><a href="/operating-groups">Operating Groups &amp; Mandates</a></li>
                        </ul>
                    </li>
                    <li class="last option-four"><a href="/circulars">Circulars</a></li>
                </ul>
            </div>

            <div class="cboth"></div>
        </div><!-- .header -->





        <div class="body">



            <div class="section" style="height: 600px;">
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
                <li><a href="/about">About UKTIA</a>
                    <ul>
                        <li><a href="/members-benefits">Members Benefits</a></li>
                        <li><a href="index.php">Members Log-out</a></li>
                    </ul>
                </li>
                <li><a href="pulse.php">The Pulse</a>
                    <ul>
                        <li><a href="/essential-reading">Essential Reading</a></li>
                        <li><a href="/video-update">Video Update</a></li>
                        <li><a href="/press">Tea in the Press</a></li>
                    </ul>
                </li>
                <li><a href="/members-reference">Membership Reference Info</a>
                    <ul>
                        <li><a href="/fdf-access">Access to FDF Website</a></li>
                        <li><a href="/annual-reports">Annual reports</a></li>
                        <li><a href="/crisis-response">Crisis &amp; Response Procedures</a></li>
                        <li><a href="/faqs">FAQs</a></li>
                        <li><a href="/industry-partners">Industry Partners</a></li>
                        <li><a href="/key-contacts">Key Contact &amp; Profiles</a></li>
                        <li><a href="/members">Members Directory</a></li>
                        <li><a href="/rules-regulation">Member's Rules &amp; regulations</a></li>
                        <li><a href="/operating-groups">Operating Groups &amp; Mandates</a></li>
                    </ul>
                </li>
                <li><a href="/circulars">Circulars</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </div>

    <script src="js/vendors/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/vendors/jquery.mmenu/jquery.mmenu.min.all.js"></script>
    <script src="js/uktia.js" type="text/javascript"></script>

</body>
</html>