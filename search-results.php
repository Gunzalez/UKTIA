<?php
$term = '';
if(isset($_POST['term'])){
   $term = $_POST['term'];
}
?>

<!doctype html>
<html>
<head>
    <title>UK Tea &amp; Infusions Association - Search results</title>
    <?php include('includes/static-resources.php'); ?>
</head>
<body class="search-results">

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
                    <li class="last option-four"><a href="circulars.php">Circulars</a></li>
                </ul>
            </div>

            <div class="cboth"></div>
        </div><!-- .header -->

        <div class="body">

            <div class="section">
                <div class="wide left">
                    <div class="copy-padding">

                        <h2>Search results</h2>

                        <form id="search-filter" name="search-filter" action="search-results.php" method="post" class="form">
                            <h4>Showing results for: <span class="search-term">"<?php echo $term; ?>"</span></h4>
                            <div class="row">
                                <label for="email">Filter by</label>
                                <input type="text" id="term" name="term" class="input" placeholder="Search term" value="<?php echo $term; ?>" />
                            </div>
                            <div class="row">
                                <label for="section">Search in</label>
                                <select id="section" name="section" class="select">
                                    <option value="pages"> Pages </option>
                                    <option value="essential"> Essential reading </option>
                                    <option value="press"> Tea in the Press </option>
                                    <option value="members"> UKTIA Members </option>
                                    <option value="faqs"> FAQ's </option>
                                </select>
                            </div>
                            <div class="row last">
                                <input type="submit" id="go" value="submit" class="go-button">
                            </div>
                        </form>

                        <div class="entries">

                            <div class="entry">
                                <h3>Contact</h3>
                                <p>The United Kingdom Tea &amp; Infusions Association Ltd.
                                Suite 10, Fourth Floor,
                                Crown House,
                                One Crown Square,
                                Wokin
                                GU21 6HR
                                &nbsp;
                                T:&nbsp;01483...<br><a href="#" class="big-cta">Read more &#187;</a></p>
                            </div>

                            <div class="entry">
                                <h3>Operating Groups &amp; Mandates</h3>
                                <p>UKTIA Executive Board Operating Mandate Members of the Executive Board are formally registered with Companies House as UKTIA Directors.
                                    <br>The Directors are responsible for keeping...
                                    <br><a href="#" class="big-cta">Read more &#187;</a></p>
                            </div>

                            <div class="entry">
                                <p>There are not results to display.</p>
                            </div>

                        </div>

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
    <div class="mobile-navigation">
        <nav id="mobile-navigation" class="mobile-navigation-list">
            <ul>
                <li>
                    <form id="search" class="search" method="post" action="search-results.php">
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