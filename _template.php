<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>UK Tea &amp; Infusions Association - _template</title>
    <?php include('includes/static-resources.php'); ?>
</head>
<body class="_template">

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
                    <li class="option-three has-dropdown active"><a href="members-reference.php">Membership Reference Info</a>
                        <ul>
                            <li class="first"><a href="fdf-access.php">Access to FDF Website</a></li>
                            <li><a href="annual-reports.php">Annual reports</a></li>
                            <li><a href="crisis-response.php">Crisis &amp; Response Procedures</a></li>
                            <li><a href="faqs.php">FAQs</a></li>
                            <li><a href="industry-partners.php">Industry Partners</a></li>
                            <li><a href="key-contacts.php">Key Contact &amp; Profiles</a></li>
                            <li><a href="members-directory.php">Members Directory</a></li>
                            <li><a href="/rules-regulation">Member's Rules &amp; regulations</a></li>
                            <li class="last"><a href="/operating-groups">Operating Groups &amp; Mandates</a></li>
                        </ul>
                    </li>
                    <li class="last option-fours"><a href="/circulars">Circulars</a></li>
                </ul>
            </div>

            <div class="cboth"></div>
        </div><!-- .header -->

        <div class="body">

            <div class="section">
                <div class="wide left">
                    <div class="copy-padding">

                        <h2>Page title</h2>



                        <a href="#" class="download">
                            <span class="text">Download</span><span class="arrow"></span>
                        </a>

                        <?php include('includes/member-updates-logged-in.php'); ?>

                        <?php include('includes/tea-in-the-press.php'); ?>

                        <?php include('includes/essential-reading-logged-in.php'); ?>

                    </div>
                </div>

                <div class="narrow right">

                    <?php include('includes/member-updates-logged-in.php'); ?>

                    <?php include('includes/tea-in-the-press.php'); ?>

                    <?php include('includes/essential-reading-logged-in.php'); ?>

                    <?php include('includes/member-updates.php'); ?>

                    <?php include('includes/essential-reading.php'); ?>

                    <div class="listings latest-updates">
                        <h3>Your latest updates:</h3>
                        <ul>
                            <li>
                                <img src="uploaded/icon-circular-10-large.png" alt="" width="45" height="45">
                                <p><strong>Positionus, nisi inttements updated:</strong> 13/11/12</p>
                                <p>Vestibuis urabitur semti stique m tincidunt egestas. <a href="article.php">More</a></p>
                            </li>
                            <li>
                                <img src="uploaded/icon-circular-12-large.png" alt="" width="45" height="45">
                                <p><strong>Tus Minus, nisi intgs Minutes updated:</strong> 04/09/14</p>
                                <p>Pocahuntis Beats to the mixNullanulla trtisnt egestas. <a href="article.php">More</a></p>
                            </li>
                            <li>
                                <img src="uploaded/icon-circular-13-large.png" alt="" width="45" height="45">
                                <p><strong>Fusce rhoncus, nisi interdum efficitur posuere</strong> 04/09/14</p>
                                <p>Duis enim lectus, ullamcorper ac ultricieectus, ullam. <a href="article.php">More</a></p>
                            </li>
                        </ul>
                    </div>



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