<?php
// default video to be shown
$videoToPlay = array(
    'id' => '125508172',
    'title' => 'Mandatory: Title of video needs to go in here',
    'description' => '<p>Optional: Some words for video description need to go into here, if available.</p>'
);

// list of archive videos
$fakeVideoArray = array(
    "AllowedVideoCode1" => array(
        'id' => '12622016',
        'title' => 'The Music Scene',
        'description' => '<p>Ipsum ltricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet es</p>'
    ),
    "AllowedVideoCode2" => array(
        'id' => '69467838',
        'title' => 'Moderat "Bad Kingdom" | Monkeytown Rec.',
        'description' => '<p>Quisqit amet est et sapiue sit amet est et sapien ullamcorper pharet</p>'

    ),
    "AllowedVideoCode3" => array(
        'id' => '85142183',
        'title' => 'Lorn - Until There Is No End (official video)',
        'description' => '<p>Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.</p>'
    ),
    "AllowedVideoCode4" => array(
    'id' => '55859709',
    'title' => 'Rone - Bye Bye Macadam (Official Video)',
    'description' => '<p>However you choose to approach content in your web work, the lowly lorem ipsum text has certainly inspired a myriad of similar versions.</p>'
)
);

// only replace if provided query string (aka code) exists
if(isset($_GET['video'])){
    if (array_key_exists($_GET['video'], $fakeVideoArray)) {
        $videoToPlay['id'] = $fakeVideoArray[$_GET['video']]['id'];
        $videoToPlay['title'] = $fakeVideoArray[$_GET['video']]['title'];
        $videoToPlay['description'] = $fakeVideoArray[$_GET['video']]['description'];
    }
}
?>

<!doctype html>
<html>
<head>
    <title>UK Tea &amp; Infusions Association - Video Update</title>
    <?php include('includes/static-resources.php'); ?>
</head>
<body class="video-update">

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
                    <li class="option-two has-dropdown active"><a href="pulse.php">The Pulse</a>
                        <ul>
                            <li class="first"><a href="essential-reading.php">Essential Reading</a></li>
                            <li class="active"><a href="video-update.php">Video Update</a></li>
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
                <div class="wide left">
                    <div class="copy-padding">

                        <h2>Video update</h2>

                        <div class="video-description">
                            <h3 class="title"><?php echo $videoToPlay['title']; ?></h3>
                            <div class="optional-detail">
                                <?php echo $videoToPlay['description']; ?>
                            </div>
                        </div>

                        <div class="archive-link">
                            <a href="#video-archives" class="big-cta">View archives &#187;</a>
                        </div>
                        <div class="cboth"></div>

                        <div class="video full-width">
                            <div class="video-responsive">
                                <iframe src="http://player.vimeo.com/video/<?php echo $videoToPlay['id']; ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="360" height="203" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                            </div>
                        </div>

                        <div id="video-archives" class="video-archives">
                            <h3>Video archives</h3>

                            <div class="entries">
                                <?php
                                foreach($fakeVideoArray as $key => $value) {
                                    ?>
                                    <div class="entry">
                                        <h4 class="title"><a href="video-update.php?video=<?php echo $key; ?>"><?php echo $value['title']; ?></a></h4>
                                        <div class="optional-detail">
                                            <?php echo $value['description']; ?>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="narrow right">

                    <div class="listings latest-updates">
                        <h3>Your latest updates:</h3>
                        <ul>
                            <li>
                                <img src="uploaded/icon-circular-10-large.png" alt="" width="45" height="45">
                                <p><strong>Positionus, nisi inttements updated:</strong> 13/11/12</p>
                                <p>Vestibuis urabitur semti stique m tincidunt egestas. <a href="article.php">More</a></p>
                            </li>
                        </ul>
                    </div>

                    <div class="listings essential-reading">
                        <h3>Essential Reading:</h3>
                        <ul>
                            <li>
                                <img src="uploaded/icon-circular-4-large.png" alt="" width="45" height="45">
                                <p><strong>15/05/2015 Muse totally rock!</strong> Nullam et nisl ut nulla tristique mattisnt egestas. <a href="article.php">More</a></p>
                            </li>
                            <li>
                                <img src="uploaded/icon-circular-3-large.png" alt="" width="45" height="45">
                                <p><strong>Nullam et nisl ut nulla tristique mattis</strong> Curabitur semti stique mator vitae odio tincidunt egestas. <a href="article.php">More</a></p>
                            </li>
                        </ul>
                    </div>

                    <div class="listings news-feed">
                        <h3>Tea in the Press:</h3>
                        <ul>
                            <li>
                                <img src="uploaded/icon-bbc-news.png" alt="" width="45" height="45">
                                <p><strong>13/12/2014 Beats to the mix</strong> Nullam et nisl ut nulla tristique mattisnt egestas. <a href="/press/">More</a></p>
                            </li>
                            <li>
                                <img src="uploaded/icon-mailonline-news.png" alt="" width="45" height="45">
                                <p><strong>UKTIA Executive Board Meeting</strong> - 09/12/2015 <a href="/press/">More</a></p>
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

    <?php include('includes/mobile-nav-logged-in.php'); ?>

    <script src="js/vendors/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/vendors/jquery.mmenu/jquery.mmenu.min.all.js"></script>
    <script src="js/uktia.js" type="text/javascript"></script>

</body>
</html>