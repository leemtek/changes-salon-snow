<?php
/*
    Template Name: Home Page
*/

get_header(); ?>

<!-- Required Styles -->
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/homepage.css" rel="stylesheet" />

<!-- Carousel -->
<section id="index-carousel">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div id="carousel-example-generic" class="carousel slide img-responsive" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a href="/diablo-magazine-best-east-bay/"><img src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/img/promos/20180303_vote.jpg" alt="Vote Best for Best Salon and Day Spa" /></a>
                        </div>
                      
                        <div class="item">
                            <img src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/2016/images/walnut-creek-salon-spa.jpg" alt="Walnut Creek Salon Spa">
                        </div>
                        <div class="item">
                            <img src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/2016/images/changes-salon-lounge-spa.jpg" alt="Changes Salon Lounge Spa">
                        </div>
                        <div class="item">
                            <img src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/2016/images/spa-relaxation.jpg" alt="Spa Relaxation">
                        </div>
                        <div class="item">
                            <img src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/2016/images/changes-salon-garden.jpg" alt="Changes Salon Garden">
                        </div>
                        <div class="item">
                            <img src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/2016/images/salon-treatment-waxing.jpg" alt="Salon Treatment Waxing">
                        </div>
                        <div class="item">
                            <img src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/2016/images/changes-salon-massage.jpg" alt="Changse Salon Massage">
                        </div>
                        <div class="item">
                            <img src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/2016/images/changes-waxing-facial.jpg" alt="Changes Waxing Facial">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Intro -->
<section id="wcpremiere">
    <div class="container">
        <div class="row">
            <!-- welcome message -->
            <div class="col-lg-12">
                <h1 class="font-30 text-center">WALNUT CREEK'S PREMIERE SALON &amp; DAY SPA</h1>
                <p>Changes Salon and Day Spa is a unique venue to relax, de-stress and get gorgeous.  At Changes, we are dedicated to providing the most innovative beauty and wellness services in a beautiful and relaxing environment. With 18 hair stations, 11 treatment rooms, a semi-private pedicure room with a 16 foot water wall, Aqua Terra relaxation room, men’s and women’s locker rooms with steam lounges and 60 talented team members we will meet all your salon and spa needs.   Centrally located at the corner of Lincoln and N. Broadway in Downtown Walnut Creek, visit us and find out why Changes has been voted The Best of The East Bay over 50 times.</p>
            </div><!-- /col -->
            
            <!-- Sugar & Spice -->
            <!--
                <div class="col-lg-6">
                    <div class="panel panel-default">
                      <div class="panel-heading text-bold text-center" style="background-color: #A20505; border-color: #780505;"><h2 class="text-bold" style="font-size: 20px; margin: 0px; color: #fff;">Sugar &amp; Spice Holiday Party</h2></div>
                      <div class="panel-body">
                          <div class="text-center">A benefit for:</div>  
                          <img src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/img/promos/2017-logo-stand.png" class="img-responsive center-block space-bottom-20" style="width: 200px;" />
                          <div class="space-bottom-20 text-center text-bold">One-Night-Only Gift Card Specials!</div>
                          <div class="space-bottom-20">Your ticket includes:</div>
                          <ul class="space-bottom-20">
                              <li>Light bites, cheerful beverages and delicious desserts from Walnut Creek’s hottest eateries.</li>
                              <li>One Mini Salon or Spa Treatment.</li>
                              <li>One Entry to win prizes valued at over $2,000 including a Mini Getaway Spa Package for two at Changes Salon &amp; Day Spa, a 2-night stay at the Westin St Francis, S.F. and more.</li>
                          </ul>

                          <div>December 1</div>
                          <div class="space-bottom-20">4:30 p.m. to 7:30 p.m.</div>

                          <div class="row space-bottom-20">
                              <div class="col-lg-6">
                                  <h3 class="text-bold" style="font-size: 16px;">Location:</h3>
                                  <div>1475 N. Broadway</div>
                                  <div>Walnut Creek, CA 94596</div>
                                  <div class="space-bottom-40">(925) 947-1814</div>
                              </div>

                              <div class="col-lg-6">
                                  <h3 class="text-bold" style="font-size: 16px;">TICKETS $25</h3>
                                  <div>Available at Changes or online by clicking the button below.</div>
                                  <div>Net proceeds of ticket sales go to STAND!</div>
                              </div>
                          </div>

                          <div class="space-bottom-20 text-center"><a href="http://saas.shopsite.com/chan13/page2.html" target="_blank" class="btn btn-primary">Purchase Today!</a></div>

                          <img src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/img/promos/2017-sugarandspice-sponsors.png" class="img-responsive center-block" alt="Sugar & Spice Sponsors" />
                      </div>
                    </div>
                </div>
            -->
        </div><!-- /row -->
    </div><!-- /container -->
</section>

<!-- Call to Action Buttons -->
<section id="serviceimg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 image first">
                <a href="/salon-services"><h2>Salon<br>Services</h2></a>
            </div>
            <div class="col-md-4 image second">
                <a href="/spa-services"><h2>Spa<br>Services</h2></a>
            </div>
            <div class="col-md-4 image third">
                <a href="http://saas.shopsite.com/chan13/" target="_blank"><h2>Shop /<br>Gift Cards</h2></a>
            </div>
        </div>
    </div>
</section>

<!-- Google Maps | Inside Store -->
<section class="space-bottom-40">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>360 View of Changes Salon</h2>
            </div>
            <div class="col-xs-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sus!4v1455494383746!6m8!1m7!1sqAceqRwv9EwAAAQvOfp7Wg!2m2!1d37.90057447706362!2d-122.0604884418538!3f144.56623210909416!4f2.171666262307525!5f0.7820865974627469" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen></iframe>
            </div>
        </div><!-- /row -->
    </div>
</section>

<!-- Blog Snippet -->
<section id="fromourblog">
    <div class="container">
        <div class="row">
            <div class="firstcol col-md-9">
                <div class="row">
                  <div class="col-lg-12">
                    <h2 class="blog-heading">From Our Blog</h2>
                  </div>
                </div>
              
                <div id="blog-posts-row" class="row">
                  <style>
                    /* On screens that are 1200px or more, set the background color to blue */
                    @media screen and (min-width: 1200px) {
                      #blog-posts-row img { padding: 0px 0px 20px 0px; }
                      #blog-posts-row > article h2 { font-size: 16px; }

                      .section-blog-img {
                            position: absolute;
                            clip: rect(0px,262px,200px,0px);
                            width:262px;
                      }

                      #blog-posts-row div.panel.panel-default { padding-top: 180px; }
                    }
                    
                    
                  </style>
                  
                  <article class="col-md-4">
                    <div>
                      <img class="img-responsive section-blog-img" src="https://changessalon.files.wordpress.com/2018/03/29196473_10155231365647882_909327353467895808_n.jpg" alt="28782651_10155216638067882_6060512473167953920_o" />
                    </div>
                    <div class="panel panel-default" style="padding-top: 170px;">
                      <div class="panel-body">
                        <h2>Finding Balance</h2>
                        
                        <p>Can you believe it’s Mid March?? Was one of your goals this year to find balance in your life?</p>
                      </div>
                      
                      <div class="panel-footer">
                        <div class="row">
                          <div class="col-lg-6">
                            <small>March 14, 2018</small>
                          </div>
                          
                          <div class="col-lg-6 text-right">
                            <a class="btn btn-default btn-xs" href="https://changessalon.wordpress.com/" target="_blank">View Post</a>
                          </div>
                        </div>
                      </div><!-- /panel-footer -->
                    </div>
                  </article><!-- /col -->
                  
                  <article class="col-md-4">
                    <img class="img-responsive section-blog-img" src="https://changessalon.files.wordpress.com/2018/03/28782651_10155216638067882_6060512473167953920_o.jpg" alt="28782651_10155216638067882_6060512473167953920_o" />
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h2>Finding Balance</h2>
                        
                        <p>Changes is seeking Massage Therapists and an office Admin to join our team!</p>
                      </div>
                      
                      <div class="panel-footer">
                        <div class="row">
                          <div class="col-lg-6">
                            <small>March 14, 2018</small>
                          </div>
                          
                          <div class="col-lg-6 text-right">
                            <a class="btn btn-default btn-xs" href="https://changessalon.wordpress.com/" target="_blank">View Post</a>
                          </div>
                        </div>
                    </div>
                  </article><!-- /col -->
                  
                  <article class="col-md-4">
                    <img class="img-responsive section-blog-img" src="https://changessalon.files.wordpress.com/2018/03/28516787_10155304013703093_3335181281871551079_o.jpg?w=423&h=423&crop=1&zoom=2" alt="28782651_10155216638067882_6060512473167953920_o" />
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h2>Finding Balance</h2>
                        
                        <p>A few members of our hair team headed to New York earlier this month to attend Bumble And Bumble’s backstage class and...</p>
                      </div>
                      
                      <div class="panel-footer">
                        <div class="row">
                          <div class="col-lg-6">
                            <small>March 14, 2018</small>
                          </div>
                          
                          <div class="col-lg-6 text-right">
                            <a class="btn btn-default btn-xs" href="https://changessalon.wordpress.com/" target="_blank">View Post</a>
                          </div>
                        </div>
                    </div>
                  </article><!-- /col -->
                </div>
            </div>
            <div class="secondcol col-md-3">
                <div>
                    <h3>Latest on Instagram</h3>
                    <!-- SnapWidget -->
                    <iframe src="https://snapwidget.com/embed/187200" class="snapwidget-widget snapwidget-iframe" allowTransparency="true" frameborder="0" scrolling="no"></iframe>
                    <button><a href="https://instagram.com/changeswc/">View All Instagram</a></button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>