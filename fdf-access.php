<!doctype html>
<html>
<head>
    <title>UK Tea &amp; Infusions Association - Access to FDF website</title>
    <?php include('includes/static-resources.php'); ?>
</head>
<body class="fdf-access">

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
                            <li class="first active"><a href="fdf-access.php">Access to FDF Website</a></li>
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
                    <li class="last option-four"><a href="circulars.php">Circulars</a></li>
                </ul>
            </div>

            <div class="cboth"></div>
        </div><!-- .header -->

        <div class="body">

            <div class="section">
                <div class="wide left">
                    <div class="copy-padding">

                        <h2>Access to FDF website</h2>

                        <h3>How to access the FDF Members area website:</h3>
                        <p>As all UKTIA members (except producer country tea boards or associations) have a requirement to be full members of the Food and Drink Federation, either through individual company corporate membership or through the UKTIA consolidated FDF membership, they have the right to access the FDF Members area website.</p>
                        <p>The FDF member&rsquo;s area gives you access to a large range of industry information such as FDF committee papers, position papers, legislation tracker and updated food and drink news.&nbsp; See below the three easy steps on how to register:</p>

                        <h3>How to register for the members&rsquo; area:</h3>
                        <p>Here are details of how to register for access - please follow the three steps below:</p>
                        <p><strong>STEP ONE</strong><br />
                            Go to: <a href="http://www.fdf.org.uk/register" target="_blank">http://www.fdf.org.uk/register</a><br />
                            <br />
                            <strong>STEP TWO</strong><br />Fill in your details as requested and press submit. Your username and password can contain up to 20 characters, be in upper or lower case and include numbers and/or spaces.</p>
                        <p><strong>STEP THREE</strong><br />FDF will process these details and email you to inform you when your account is active and you can access the members&rsquo; only area.</p>
                        <p>If you have any problems please contact FDF&rsquo;s web manager on 020 7420 7184 or <a href="mailto:ctidnam@fdf.org.uk">webmaster@fdf.org.uk</a></p>


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