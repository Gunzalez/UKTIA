<!doctype html>
<html>
<head>
    <title>UK Tea &amp; Infusions Association - Circulars aka Actions &amp; Updates</title>
    <?php include('includes/static-resources.php'); ?>
</head>
<body class="circulars">

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

            <?php include('includes/search-box.php'); ?>

            <div class="navigation">
                <ul id="navigation-list" class="list">
                    <li class="first option-one has-dropdown"><a href="about.php">About UKTIA</a>
                        <ul>
                            <li class="first"><a href="benefits.php">Members Benefits</a></li>
                            <li class="last"><a href="index.php">Members Log-out</a></li>
                        </ul>
                    </li>
                    <li class="option-two has-dropdown"><a href="pulse.php">The Pulse</a>
                        <ul>
                            <li class="first"><a href="essential-reading.php">Essential Reading</a></li>
                            <li><a href="video-update.php">Video Update</a></li>
                            <li class="last"><a href="press.php">Tea in the Press</a></li>
                        </ul>
                    </li>
                    <li class="option-three has-dropdown"><a href="members-reference.php">Membership Reference Info</a>
                        <ul>
                            <li class="first"><a href="fdf-access.php">Access to FDF Website</a></li>
                            <li><a href="annual-reports.php">Annual reports</a></li>
                            <li><a href="crisis-response.php">Crisis &amp; Response Procedures</a></li>
                            <li><a href="faqs.php">FAQs</a></li>
                            <li><a href="industry-partners.php">Industry Partners</a></li>
                            <li><a href="key-contacts.php">Key Contact &amp; Profiles</a></li>
                            <li><a href="members-directory.php">Members Directory</a></li>
                            <li><a href="rules-regulations.php">Member's Rules &amp; regulations</a></li>
                            <li class="last"><a href="operating-groups.php">Operating Groups &amp; Mandates</a></li>
                        </ul>
                    </li>
                    <li class="last option-four active"><a href="circulars.php">Circulars</a></li>
                </ul>
            </div>

            <div class="cboth"></div>
        </div><!-- .header -->

        <div class="body">

            <div class="section">
                <div class="copy-padding">

                    <h2>Search for documents</h2>





                </div>




                <div class="cboth"></div>
            </div>
        </div><!-- .body -->


        <?php include('includes/footer.php'); ?>

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
                        <li><a href="index.php">Members Log-out</a></li>
                    </ul>
                </li>
                <li><a href="pulse.php">The Pulse</a>
                    <ul>
                        <li><a href="essential-reading.php">Essential Reading</a></li>
                        <li><a href="video-update.php">Video Update</a></li>
                        <li><a href="press.php">Tea in the Press</a></li>
                    </ul>
                </li>
                <li><a href="members-reference.php">Membership Reference Info</a>
                    <ul>
                        <li><a href="fdf-access.php">Access to FDF Website</a></li>
                        <li><a href="annual-reports.php">Annual reports</a></li>
                        <li><a href="crisis-response.php">Crisis &amp; Response Procedures</a></li>
                        <li><a href="faqs.php">FAQs</a></li>
                        <li><a href="industry-partners.php">Industry Partners</a></li>
                        <li><a href="key-contacts.php">Key Contact &amp; Profiles</a></li>
                        <li><a href="members-directory.php">Members Directory</a></li>
                        <li><a href="rules-regulations.php">Member's Rules &amp; regulations</a></li>
                        <li><a href="operating-groups.php">Operating Groups &amp; Mandates</a></li>
                    </ul>
                </li>
                <li><a href="circulars.php">Circulars</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>

    <script src="js/vendors/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/vendors/jquery.mmenu/jquery.mmenu.min.all.js"></script>
    <script src="js/uktia.js" type="text/javascript"></script>

</body>
</html>