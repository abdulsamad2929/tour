<?php
$this->load->view("FrontWeb/includes/head");
$this->load->view("FrontWeb/includes/header"); ?>
    <main>
        <section class="header-video">
            <div id="hero_video">
                <div class="wrapper">
                    <div class="container">
                        <h3>Book Pakistan Tours</h3>
                        <p>Expolore top rated tours Packages with the best Tours Standards of Pakistan</p>
                        <form>
                            <div class="row no-gutters custom-search-input-2">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="What are you looking for...">
                                        <i class="icon_search"></i>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Where">
                                        <i class="icon_pin_alt"></i>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <select class="wide">
                                        <option>All Categories</option>
                                        <option>Tours</option>
                                        <option>Hotels</option>
                                        <option>Restaurants</option>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" class="btn_search" value="Search">
                                </div>
                            </div>
                            <!-- /row -->
                        </form>
                    </div>
                </div>
            </div>
            <img src="<?= base_url(); ?>assets/img/video_fix.png" alt="" class="header-video--media" data-video-src="video/intro" data-teaser-source="video/intro" data-provider="" data-video-width="1920" data-video-height="960">
        </section>
        <!-- /header-video -->


        <div class="container-fluid margin_80_0">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Our Popular Tours</h2>
                <p>We have a unique way of meeting your adventurous expectations!</p>
            </div>
            <div id="reccomended" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="<?= base_url(); ?>assets/img/tour_1.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                            <small>KPK</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="tour-detail.html">Lack hunza</a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="price">From <strong>Rs.5400</strong> /per person</span>
                        </div>
                        <ul>
                            <li><i class="icon_clock_alt"></i> 1h 30min</li>
                            <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="<?= base_url(); ?>assets/img/tour_2.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                            <small>KPK</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="tour-detail.html">Capital Mosque</a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="price">From <strong>Rs.12400</strong> /per person</span>
                        </div>
                        <ul>
                            <li><i class="icon_clock_alt"></i> 1h 30min</li>
                            <li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="<?= base_url(); ?>assets/img/tour_3.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                            <small>Sindh</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="tour-detail.html">Lack Jam pir</a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="price">From <strong>Rs.2500</strong> /per person</span>
                        </div>
                        <ul>
                            <li><i class="icon_clock_alt"></i> 1h 30min</li>
                            <li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="<?= base_url(); ?>assets/img/tour_3.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                            <small>Historic</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="tour-detail.html">Karachi </a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="price">From <strong>Rs.2550</strong> /per person</span>
                        </div>
                        <ul>
                            <li><i class="icon_clock_alt"></i> 1h 30min</li>
                            <li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="<?= base_url(); ?>assets/img/tour_4.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                            <small>Museum</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="tour-detail.html">Pompidue Museum</a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="price">From <strong>$45</strong> /per person</span>
                        </div>
                        <ul>
                            <li><i class="icon_clock_alt"></i> 2h 30min</li>
                            <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.0</strong></div></li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="<?= base_url(); ?>assets/img/tour_5.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                            <small>KPK</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="tour-detail.html">Neran camping </a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="price">From <strong>Rs.6500</strong> /per person</span>
                        </div>
                        <ul>
                            <li><i class="icon_clock_alt"></i> 1h 30min</li>
                            <li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.5</strong></div></li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
            </div>
            <!-- /carousel -->
            <div class="container">
                <p class="btn_home_align"><a href="tours-grid-isotope.html" class="btn_1 rounded">View all Tours</a></p>
            </div>
            <!-- /container -->
            <hr class="large">
        </div>


        <div class="isotope-wrapper">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>TOP DESTINATIONS</h2>
                <p>Find the best places around the Pakistan!</p>
            </div>
            <div class="row">

                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="<?= base_url(); ?>assets/img/hotel_1.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                            <small>KPK</small>
                        </figure>
                        <div class="wrapper">
                            <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                            <h3><a href="tour-detail.html">Banjosa Toli Peer</a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="price">From <strong>Rs.54,000</strong> /per person</span>
                        </div>
                        <ul>
                            <li><i class="ti-eye"></i> 164 views</li>
                            <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
                        </ul>
                    </div>
                </div>
                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item latest">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="<?= base_url(); ?>assets/img/hotel_2.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                            <small>Gilgat</small>
                        </figure>
                        <div class="wrapper">
                            <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                            <h3><a href="tour-detail.html">Ratti Gali Lake</a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="price">From <strong>Rs.12,400</strong> /per person</span>
                        </div>
                        <ul>
                            <li><i class="ti-eye"></i> 164 views</li>
                            <li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
                        </ul>
                    </div>
                </div>
                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="<?= base_url(); ?>assets/img/hotel_6.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                            <small>Punjab</small>
                        </figure>
                        <div class="wrapper">
                            <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                            <h3><a href="tour-detail.html">Dam Qadrabad</a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="price">From <strong>Rs.25,000</strong> /per person</span>
                        </div>
                        <ul>
                            <li><i class="ti-eye"></i> 164 views</li>
                            <li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
                        </ul>
                    </div>
                </div>
                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="<?= base_url(); ?>assets/img/hotel_3.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                            <small>KPK</small>
                        </figure>
                        <div class="wrapper">
                            <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                            <h3><a href="tour-detail.html">Neelam vally</a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="price">From <strong>Rs.25,000</strong> /per person</span>
                        </div>
                        <ul>
                            <li><i class="ti-eye"></i> 164 views</li>
                            <li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
                        </ul>
                    </div>
                </div>
                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="<?= base_url(); ?>assets/img/hotel_7.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                            <small>Punjab</small>
                        </figure>
                        <div class="wrapper">
                            <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                            <h3><a href="tour-detail.html">Shahi Qilla </a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="price">From <strong>Rs.25,000</strong> /per person</span>
                        </div>
                        <ul>
                            <li><i class="ti-eye"></i> 164 views</li>
                            <li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
                        </ul>
                    </div>
                </div>
                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="<?= base_url(); ?>assets/img/hotel_8.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                            <small>Balochistan</small>
                        </figure>
                        <div class="wrapper">
                            <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                            <h3><a href="tour-detail.html">Pir Ghaib </a></h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <span class="price">From <strong>Rs.25,000</strong> /per person</span>
                        </div>
                        <ul>
                            <li><i class="ti-eye"></i> 164 views</li>
                            <li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->

        </div>
        <!-- /isotope-wrapper -->
        <div class="container">
            <p class="btn_home_align"><a href="tours-grid-isotope.html" class="btn_1 rounded">Load more</a></p>
        </div>


</div>
<!-- /container -->

<div class="container-fluid margin_30_95 pl-lg-5 pr-lg-5">
    <section class="add_bottom_45">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>DESTINATIONS</h2>
            <p>Trending destinations OF 2019 in the World!</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <a href="tour-detail.html" class="grid_item">
                    <figure>
                        <div class="score"><strong>8.9</strong></div>
                        <img src="<?= base_url(); ?>assets/img/hotel_1.jpg" class="img-fluid" alt="">
                        <div class="info">
                            <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                            <h3>Chitral </h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <a href="tour-detail.html" class="grid_item">
                    <figure>
                        <div class="score"><strong>7.9</strong></div>
                        <img src="<?= base_url(); ?>assets/img/hotel_2.jpg" class="img-fluid" alt="">
                        <div class="info">
                            <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                            <h3>Skardu Valley  </h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <a href="tour-detail.html" class="grid_item">
                    <figure>
                        <div class="score"><strong>7.0</strong></div>
                        <img src="<?= base_url(); ?>assets/img/hotel_3.jpg" class="img-fluid" alt="">
                        <div class="info">
                            <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                            <h3>Islamabad Sightseeing</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <a href="tour-detail.html" class="grid_item">
                    <figure>
                        <div class="score"><strong>8.9</strong></div>
                        <img src="<?= base_url(); ?>assets/img/hotel_7.jpg" class="img-fluid" alt="">
                        <div class="info">
                            <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                            <h3>Lahore City Tour</h3>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /row -->
        <a  href="hotels-grid-isotope.html"><strong>View all (157) <i class="arrow_carrot-right"></i></strong></a>
    </section>
    <!-- /section -->


</div>
<!-- /container -->

<div class="call_section">
    <div class="container clearfix">
        <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
            <div class="block-reveal">
                <div class="block-vertical"></div>
                <div class="box_1">
                    <h3>Enjoy a GREAT travel with us</h3>
                    <p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
                    <a href="#0" class="btn_1 rounded">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/call_section-->
</main>
<!-- /main -->

<footer>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-5 col-md-12 p-r-5">
                <p><img src="<?= base_url(); ?>assets/img/logo.png" width="150" height="36" data-retina="true" alt=""></p>
                <p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. Nihil facilisi indoctum an vix, ut delectus expetendis vis.</p>
                <div class="follow_us">
                    <ul>
                        <li>Follow us</li>
                        <li><a href="#0"><i class="ti-facebook"></i></a></li>
                        <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#0"><i class="ti-google"></i></a></li>
                        <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                        <li><a href="#0"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ml-lg-auto">
                <h5>Useful links</h5>
                <ul class="links">
                    <li><a href="about.html">About</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="blog.html">News &amp; Events</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Contact with Us</h5>
                <ul class="contacts">
                    <li><a href="tel://61280932400"><i class="ti-mobile"></i> + 61 23 8093 3400</a></li>
                    <li><a href="mailto:info@Panagea.com"><i class="ti-email"></i> info@Panagea.com</a></li>
                </ul>
                <div id="newsletter">
                    <h6>Newsletter</h6>
                    <div id="message-newsletter"></div>
                    <form method="post" action="<?= base_url(); ?>assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                        <div class="form-group">
                            <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                            <input type="submit" value="Submit" id="submit-newsletter">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--/row-->
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <ul id="footer-selector">
                    <li>
                        <div class="styled-select" id="lang-selector">
                            <select>
                                <option value="English" selected>English</option>
                                <option value="French">French</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Russian">Russian</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="styled-select" id="currency-selector">
                            <select>
                                <option value="US Dollars" selected>Pak Rupee</option>
                                <option value="Euro">Euro</option>
                            </select>
                        </div>
                    </li>
                    <li><img src="<?= base_url(); ?>assets/img/cards_all.svg" alt=""></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul id="additional_links">
                    <li><a href="#0">Terms and conditions</a></li>
                    <li><a href="#0">Privacy</a></li>
                    <li><span>© <?= date("Y");?>  Technoloies</span></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--/footer-->
</div>
<!-- page -->


<div id="toTop"></div><!-- Back to top button -->
<?php
check_flash_messages();
$this->load->view("FrontWeb/includes/footer"); ?>