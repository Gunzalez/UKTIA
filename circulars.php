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
                    <li class="last option-four active"><a href="circulars.php">Circulars</a></li>
                </ul>
            </div>

            <div class="cboth"></div>
        </div><!-- .header -->

        <div class="body">

            <div class="section">
                <div class="copy-padding full-width">
                    <form id="filter-form" name="filter-form" class="filter-form" action="#" method="post">
                        <h2>Search for documents</h2>
                        <p class="instructions">Please select which filters you require below. Note the more filters you select, the more accurate your results will be.</p>

                        <div class="fields">
                            <div class="container">

                                <div class="legend topics">
                                    <label for="topic">Select user group:</label>
                                    <select id="group" name="group">
                                        <option value="">View all</option>
                                        <option value="6"> Some group </option>
                                        <option value="14"> Some other group </option>
                                    </select>
                                    <label for="topic">Select topic:</label>
                                    <select id="topic" name="topic" class="select">
                                        <option value="">View all</option>
                                        <option value="21"> Crisis Management </option>
                                        <option value="5"> Codes Of Practice </option>
                                        <option value="11"> Contaminants </option>
                                        <option value="10"> Food Info Regulation </option>
                                        <option value="2"> Geo Indicators </option>
                                        <option value="4"> Guidance Documents </option>
                                        <option value="6"> Industry Data / NDS </option>
                                        <option value="8"> Labeling </option>
                                        <option value="14"> Media &amp; Marcomms </option>
                                        <option value="13"> Meetings &amp; Admin </option>
                                        <option value="7"> Nutrition &amp; Health Claims </option>
                                        <option value="12"> Pesticides </option>
                                        <option value="3"> Positioning Statements </option>
                                        <option value="9"> RSWG </option>
                                        <option value="1"> Uncategorized </option>
                                    </select>
                                    <div class="sub-topic hidden">
                                        <label for="subtopic">Select sub-topic:</label>
                                        <select id="subtopic" name="subtopic" class="select"></select>
                                    </div>
                                </div>

                                <div class="legend sort">
                                    <label for="order-by">Order results by:</label>
                                    <select id="order-by" name="order-by" class="select">
                                        <option value="desc">Date - newest first</option>
                                        <option value="asc">Date - oldest first</option>
                                    </select>
                                    <label for="year">Filter by year:</label>
                                    <select id="year" name="year" class="select">
                                        <option value=""> All</option>
                                        <option value="2015"> 2015 </option>
                                        <option value="2014"> 2014 </option>
                                        <option value="2013"> 2013 </option>
                                        <option value="2012"> 2012 </option>
                                        <option value="2011"> 2011 </option>
                                        <option value="2010"> 2010 </option>
                                        <option value="2009"> 2009 </option>
                                        <option value="2008"> 2008 </option>
                                        <option value="2007"> 2007 </option>
                                    </select>
                                </div>

                                <div class="advanced-fields">
                                    <div class="container">

                                        <div class="legend keyword">
                                            <label for="keyword">Keyword search:</label>
                                            <input id="keyword" name="keyword" type="text" value="" class="text">
                                            <div class="row">
                                                <input type="checkbox" class="checkbox" name="archived" id="archived" value="1">
                                                <label for="archived">Archived documents</label>
                                            </div>
                                        </div>

                                        <div class="legend checkboxes">
                                            <h5>Search for:</h5>
                                            <div class="row">
                                                <input type="checkbox" class="checkbox" name="titles-only" id="titles-only" value="1">
                                                <label for="titles-only">Titles only</label>
                                            </div>
                                            <div class="row">
                                                <input type="checkbox" class="checkbox" name="feedback-required" id="feedback-required" value="1">
                                                <label for="feedback-required">Documents that UKTIA requires me to respond to</label>
                                            </div>
                                            <h5>Only display:</h5>
                                            <div class="row">
                                                <input type="checkbox" class="checkbox" name="not-read" id="not-read" value="1">
                                                <label for="not-read">Content I have not read</label>
                                            </div>
                                            <div class="row">
                                                <input type="checkbox" class="checkbox" name="read-before" id="read-before" value="1">
                                                <label for="read-before">Content I have read before</label>
                                            </div>
                                            <div class="row">
                                                <input type="checkbox" class="checkbox" name="since-last-visit" id="since-last-visit" value="1">
                                                <label for="since-last-visit">Updates posted since my last visit</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="show-hide-buttons">
                                <a href="#" class="show-button">Advanced search</a>
                                <a href="#" class="hide-button">Less</a>
                            </div>

                        </div>

                        <div class="submit">
                            <button type="submit" id="get-updates" class="submit-search button">Search</button>
                        </div>

                        <div class="cboth"></div>
                    </form>
                </div>
                <div class="cboth"></div>
            </div>

            <div class="section">
                <?php include('includes/circulars-explained.php'); ?>
            </div>


            <div class="section">

                <div id="searching">
                    <div class="spinner"></div>
                </div>

                <div id="search-results" class="entries circulars">
                    <h3 class="title">Search results</h3>

                    <div class="entry">
                        <div class="category">
                            <img src="uploaded/icon-update.png" width="45" height="45" alt="Meetings">
                        </div>
                        <div class="details">
                            <h4><a href="/actions-updates/article/uktia-executive-board-meeting">UKTIA Executive Board Meeting</a></h4>
                            <dl>
                                <dt>Categories:</dt>
                                <dd>Meeting dates &amp; agendas / Meetings &amp; Admin <span class="separator">/</span> Meeting dates &amp; agendas</dd>
                                <dt>Abstract:</dt>
                                <dd>UKTIA Executive Board Meeting Wednesday 9th December 2015 at the FDF offices.</dd>
                            </dl>
                        </div>
                        <div class="meta-data">
                            <dl>
                                <dt>Article Date:</dt>
                                <dd>09/12/2015</dd>
                                <dt>Added By:</dt>
                                <dd>FDF Admin</dd>
                                <dt>Attached Document:</dt>
                                <dd>NO</dd>
                            </dl>
                        </div>
                        <a href="#" class="read-document"><span>View document</span></a>
                        <div class="cboth"></div>
                    </div>

                    <div class="entry">
                        <div class="category">
                            <img src="uploaded/icon-update.png" width="45" height="45" alt="Meetings">
                        </div>
                        <div class="details">
                            <h4><a href="/actions-updates/article/uktia-technical-operating-group-rswg-meetings">UKTIA Technical Operating Group &amp; RSWG Meetings</a></h4>
                            <dl>
                                <dt>Categories:</dt>
                                <dd>Meeting dates &amp; agendas / Meetings &amp; Admin <span class="separator">/</span> Meeting dates &amp; agendas</dd>
                                <dt>Abstract:</dt>
                                <dd>UKTIA Executive Board Meeting Wednesday 9th December 2015 at the FDF offices.</dd>
                            </dl>
                        </div>
                        <div class="meta-data">
                            <dl>
                                <dt>Article Date:</dt>
                                <dd>09/12/2015</dd>
                                <dt>Added By:</dt>
                                <dd>FDF Admin</dd>
                                <dt>Attached Document:</dt>
                                <dd>NO</dd>
                            </dl>
                        </div>
                        <a href="#" class="read-document"><span>View document</span></a>
                        <div class="cboth"></div>
                    </div>

                    <div class="pagination">
                        <ul class="paged-nav">
                            <li><a href="#" data-page="1">First</a></li>
                            <li class="selected"><a href="#" class="selected" data-page="1">1</a></li>
                            <li><a href="#" data-page="2">2</a></li>
                            <li><a href="#" data-page="3">3</a></li>
                            <li><a href="#" data-page="4">4</a></li>
                            <li><a href="#" data-page="5">5</a></li>
                            <li><a href="#" data-page="6">6</a></li>
                            <li><a href="#" data-page="7">7</a></li>
                            <li><a href="#" data-page="7">Last</a></li>
                        </ul>
                    </div>

                </div>

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