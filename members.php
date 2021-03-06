<!doctype html>
<html>
<head>
    <title>UK Tea &amp; Infusions Association - Members Directory</title>
    <?php include('includes/static-resources.php'); ?>
</head>
<body class="members-directory">

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
                <li><a href="index.php" title="Log-out">Log-out</a></li>
                <li class="first"><a href="site-map.php" title="Sitemap">Sitemap</a></li>
                <li><a href="terms-conditions.php" title="Terms &amp; Conditions">T&amp;Cs</a></li>
                <li class="last"><a href="privacy-policy.php" title="Privacy Policy">Privacy Policy</a></li>
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
                    <li class="option-three has-dropdown active"><a href="members-reference.php">Membership Reference Info</a>
                        <ul>
                            <li class="first"><a href="fdf-access.php">Access to FDF Website</a></li>
                            <li><a href="annual-reports.php">Annual reports</a></li>
                            <li><a href="crisis-response.php">Crisis &amp; Response Procedures</a></li>
                            <li><a href="faqs.php">FAQs</a></li>
                            <li><a href="industry-partners.php">Industry Partners</a></li>
                            <li><a href="key-contacts.php">Key Contact &amp; Profiles</a></li>
                            <li class="active"><a href="members-directory.php">Members Directory</a></li>
                            <li><a href="rules-regulations.php">Member's Rules &amp; regulations</a></li>
                            <li class="last"><a href="operating-groups.php">Operating Groups &amp; Mandates</a></li>
                        </ul>
                    </li>
                    <li class="last option-four"><a href="circulars.php">Circulars</a></li>
                </ul>
            </div>

            <div class="cboth"></div>
        </div><!-- .header -->

        <div class="body">

            <div class="section">
                <div class="wide left">
                    <div class="copy-padding">


                        <h2>Members Directory</h2>
                        <h3>Bettys &amp; Taylors of Harrogate</h3>

                        <div class="directory">

                            <div class="member-detail">
                                <p>Bettys and Taylors of Harrogate is an independent family business based in the heart of Yorkshire. Taylors of Harrogate blends and packs more than 50 different speciality teas, including Yorkshire Tea.</p>
                                <p>We even blend a tea to suit your water, so that you get the same Yorkshire Tea taste whether your water is soft or hard. You can also enjoy many of our teas in the traditional elegant surroundings of our six Bettys Cafe Tea Rooms based in Yorkshire. A real treat.</p>
                            </div>

                            <div class="member-logo">
                                <img src="http://www.tea.co.uk/assets/uploads/tea_directory/logos/bettyslogo.jpg" alt="Bettys &amp; Taylors of Harrogate">
                            </div>

                            <div class="member-address">
                                <h4>Address</h4>
                                <p>Plumpton Park<br />
                                    Harrogate<br />
                                    North Yorkshire<br />
                                    <a href="http://maps.google.co.uk/maps?q=HG2 7LD" title="" target="_blank">HG2 7LD</a></p>

                                <h4>Katy Squire</h4>
                                <p><strong>Phone:</strong> 01423 814 000<br />
                                    <strong>Web:</strong> <a href="http://www.bettys.co.uk" target="_blank">www.bettys.co.uk</a></p>
                            </div>

                            <p><a href="members-directory.php" class="big-cta">&#171; Back to Members Directory</a></p>

                        </div>



                        <div class="cboth"></div>
                    </div>
                </div>

                <div class="narrow right">

                    <?php include('includes/essential-reading-logged-in.php'); ?>

                    <?php include('includes/member-updates-logged-in.php'); ?>


                </div>
                <div class="cboth"></div>
            </div>
        </div><!-- .body -->


        <?php include('includes/footer.php'); ?>

    </div><!-- .page -->

    <div class="back-to-top"><a href="#"><i class="fa fa-chevron-up"></i></a></div>

    <?php include('includes/mobile-nav-logged-in.php'); ?>

    <script src="js/vendors/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/vendors/jquery.mmenu/jquery.mmenu.min.all.js"></script>
    <script src="js/uktia.js" type="text/javascript"></script>

</body>
</html>