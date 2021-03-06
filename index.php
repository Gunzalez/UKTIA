<!doctype html>
<html>
<head>
    <title>UK Tea &amp; Infusions Association - What is the UKTIA?</title>
    <?php include('includes/static-resources.php'); ?>
</head>
<body class="home">

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
                    <li class="first option-one has-dropdown"><a href="about.php">About UKTIA</a>
                        <ul>
                            <li class="first"><a href="benefits.php">Members Benefits</a></li>
                            <li><a href="register.php">Registration</a></li>
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

                    <div class="banner">
                        <h2>What is the UKTIA?</h2>
                        <p>The UK Tea &amp; Infusions Association (UKTIA) is an independent non-profit making body dedicated to promoting tea and herbal infusions and their unique story for the benefit of those who produce, sell and enjoy tea and infusions.</p>
                        <p>We represent the world's major tea producing and exporting countries, UK tea packers and brokers and UK companies providing services to the tea and infusions industry.</p>
                    </div>

                </div>
                <div class="narrow right fixed-267px">

                    <div class="listings news-feed">
                        <h3>Tea in the Press:</h3>
                        <ul>
                            <li>
                                <img src="uploaded/icon-guardian.png" alt="" width="45" height="45">
                                <p><strong>Nullam et nisla tristique mattis</strong> Curaur semti st iqutor vae odio tincunt egestas. <a href="log-in.php" title="Please log-in to view this article">Log-in to view</a></p>
                            </li>
                            <li>
                                <img src="uploaded/icon-bbc-news.png" alt="" width="45" height="45">
                                <p><strong>13/12/2014 Beats to the mix</strong> Nullam et nisl ut nulla tristique matti. <a href="log-in.php" title="Please log-in to view this article">Log-in to view</a></p>
                            </li>
                        </ul>
                    </div>

                    <div class="banner-register">
                        <h3>Register for membership</h3>
                        <a href="register.php" class="button">
                            <span>Register now</span>
                        </a>
                    </div>

                </div>
                <div class="cboth"></div>
            </div>

            <div class="section">
                <div class="form-login">
                    <h3>Members Area <span></span></h3>
                    <form id="login-form" name="login-form" action="pulse.php" method="post" class="form">
                        <h4>Please login to access Members info:</h4>
                        <label for="email">Email</label>
                        <input type="email" class="input" name="email" id="email" placeholder="Email" value="">
                        <label for="phrase">Password</label>
                        <input type="password" class="input" name="phrase" id="phrase" placeholder="Password" value="">
                        <label for="go">&nbsp;</label>
                        <input type="submit" id="go" value="submit" class="go-button">
                    </form>
                    <div class="cboth"></div>
                </div>
                <div class="cboth"></div>
            </div>

            <div class="section">

                <div class="wide right">

                    <div class="video-catchup">
                        <div class="details">
                            <h3>Video Catchup:</h3>
                            <p>Tea Advisory Panel (TAP) 2014 update</p>
                            <p>Please login to view the video and check back for updates.</p>
                        </div>
                        <div class="video">
                            <img src="http://i.vimeocdn.com/video/475065153_640.jpg" width="360">
                            <a href="log-in.php" title="Please log-in to view this article"><span>Log-in to view</span></a>
                        </div>
                        <div class="cboth"></div>
                    </div>

                </div>

                <div class="narrow left">

                    <div class="listings-adjustments">

                        <?php include('includes/member-updates.php'); ?>

                    </div>

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