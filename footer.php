        <?php $templateDirectory = get_template_directory_uri(); ?>
        <?php $siteURL = get_home_url(); ?>

        <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
        <?php if (strpos($url,'?site=resources') !== false) { ?>

        <?php } else { ?>

            <section id="resources-footer">
                <div class="container cf">
                    <h3>Resources</h3>
                    <div class="col">
                        <ul class="first-item">
                            <li class="list-title"><a href="<?php echo $siteURL; ?>/knowledge-base">Knowledge base</a></li>
                            <li><a href="<?php echo $siteURL; ?>/knowledge-base/telephone-answering">Telephone Answering</a></li>
                            <li><a href="<?php echo $siteURL; ?>/knowledge-base/live-chat">Live Chat</a></li>
                            <li><a href="<?php echo $siteURL; ?>/knowledge-base/pocket-phone-system">Pocket Phone System</a></li>
                        </ul>
                    </div>
                    <div class="col">
                    <ul class="first-item">
                            <li class="list-title"><a href="<?php echo $siteURL; ?>/articles/news">News</a></li>

                            <?php $news = array( 
                                'posts_per_page' => 3,
                                'orderby' => 'date', 
                                'order' => 'DESC', 
                                'post_type' => 'post', 
                                'post_status' => 'publish'
                            ); ?>

                            <?php $news_array = get_posts( $news ); ?>

                            <?php foreach ( $news_array as $post ) : setup_postdata( $post ); ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php endforeach; wp_reset_postdata(); ?>

                            <li><a href="<?php echo $siteURL; ?>/articles/news">More &hellip;</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="first-item">
                            <li class="list-title"><a href="<?php echo $siteURL; ?>/faqs">FAQs</a></li>

                            <?php $faqs = array( 
                                'posts_per_page' => 3,
                                'orderby' => 'date', 
                                'order' => 'DESC', 
                                'post_type' => 'faqs', 
                                'post_status' => 'publish'
                            ); ?>

                            <?php $faqs_array = get_posts( $faqs ); ?>

                            <?php foreach ( $faqs_array as $post ) : setup_postdata( $post ); ?>
                                <li>
                                    <?php $cat = get_the_category(); ?>
                                    <?php $catID = $cat[1]->cat_ID; ?>
                                    <?php $catLink = get_category_link($catID); ?>
                                    
                                    <a href="<?php echo esc_url( $catLink ); ?>/#product-faqs"><?php the_title(); ?></a>
                                </li>
                            <?php endforeach; wp_reset_postdata(); ?>

                            <li><a href="<?php echo $siteURL; ?>/faqs">More &hellip;</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="first-item">
                            <li class="list-title"><a href="<?php echo $siteURL; ?>/events">Events</a></li>

                            <?php $events = array( 
                                'posts_per_page' => 3,
                                'orderby' => 'date', 
                                'order' => 'DESC', 
                                'post_type' => 'events', 
                                'post_status' => 'publish'
                            ); ?>

                            <?php $events_array = get_posts( $events ); ?>

                            <?php foreach ( $events_array as $post ) : setup_postdata( $post ); ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php endforeach; wp_reset_postdata(); ?>
                            
                            <li><a href="<?php echo $siteURL; ?>/events">More &hellip;</a></li>
                        </ul>
                    </div>
                </div>
            </section>

        <?php } ?>

        <footer>
            <div class="container cf">
                <div class="col">
                    <h3>Solutions</h3>
                    <ul class="first-item">
                        <li class="list-title">Calls</li>
                        <li><a href="https://www.moneypenny.com/uk/telephone-answering-service/" target="_blank">Telephone Answering</a></li>
                        <li><a href="https://ma.moneypenny.com/uk/MobileAnswering" target="_blank">Mobile Answering</a></li>
                        <li><a href="https://www.moneypenny.com/uk/pocket-phone-system/" target="_blank">Pocket Phone System</a></li>
                        <li><a href="https://www.moneypenny.com/uk/outsourced-switchboard/" target="_blank">Switchboard</a></li>
                    </ul>
                    <ul>
                        <li class="list-title">Chats</li>
                        <li><a href="https://www.moneypenny.com/uk/live-chat/" target="_blank">Live Chat</a></li>
                    </ul>
                    <ul>
                        <li class="list-title">More</li>
                        <li><a href="https://www.moneypenny.com/uk/clever-numbers/" target="_blank">Clever Numbers</a></li>
                        <li><a href="https://www.moneypenny.com/uk/workhub/" target="_blank">Workhub</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="https://www.moneypenny.com/uk/affiliates/" target="_blank">Affiliate Scheme</a></li>
                        <li><a href="<?php echo get_home_url(); ?>" target="_blank">Resources</a></li>
                        <li><a href="https://www.moneypenny.com/uk/about-us/" target="_blank">About us</a></li>
                        <li><a href="https://www.moneypenny.com/uk/work-with-us/" target="_blank">Careers</a></li>
                        <li><a href="https://www.moneypenny.com/uk/online-portal/" target="_blank">Client Portal</a></li>
                        <li><a href="http://wemindthegap.org.uk/" target="_blank">Our Charity</a></li>
                        <li><a href="https://www.moneypenny.com/us/" target="_blank">USA</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Get in touch</h3>
                    <span class="footer-tel">0333 202 1005</span>
                    <a class="footer-email" href="mailto:hello@moneypenny.co.uk">hello@moneypenny.co.uk</a>
                    <div class="footer-social-links">
                        <a class="social-icon" href="https://www.facebook.com/HelloMoneypennyUK" target="_blank"><img src="<?php echo $templateDirectory; ?>/img/facebook.svg" alt="Facebook"/></a>
                        <a class="social-icon" href="https://twitter.com/Moneypenny" target="_blank"><img src="<?php echo $templateDirectory; ?>/img/twitter.svg" alt="Twitter"/></a>
                        <a class="social-icon" href="https://www.linkedin.com/company/83349" target="_blank"><img src="<?php echo $templateDirectory; ?>/img/linkedin.svg" alt="Linkedin"/></a>
                    </div>
                    <a href="https://www.moneypenny.com/uk/" target="_blank">
                        <img class="footer-logo" src="<?php echo $templateDirectory; ?>/img/logo.png" alt="Moneypenny"/>
                    </a>
                    <div class="accreditations">
		                <img src="https://res.cloudinary.com/moneypenny/image/upload/f_auto/v1/misc/bc-2017.png" alt="The Sunday Times 100 Best Companies to work for 2017">
		                <img src="https://res.cloudinary.com/moneypenny/image/upload/f_auto/v1/misc/cyber-logo.png" alt="Cyber Essentials Plus">
	                </div>
                </div>
            </div>
            <div class="footer-bottom-links">
                <ul>
                    <li><a href="https://www.moneypenny.com/uk/terms-and-conditions/" target="_blank">Terms of use</a></li>
                    <li><a href="https://www.moneypenny.com/uk/trademark/" target="_blank">Trademark</a></li>
                    <li><a href="https://www.moneypenny.com/uk/gender-pay-gap/" target="_blank">Gender Pay Gap</a></li>
                    <li><a href="https://www.moneypenny.com/uk/privacy/" target="_blank">Privacy Policy</a></li>
                    <li><a href="https://www.moneypenny.com/uk/cookies-policy/" target="_blank">Cookies Policy</a></li>
                    <li>&copy; Moneypenny <?php echo date('Y'); ?></li>
                </ul>
            </div>
        </footer>

        <?php wp_footer(); ?>

        <div id="backToTop"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="<?php echo $templateDirectory; ?>/js/main.min.js" defer></script>

    </body>
</html>