<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ant House</title>
    <link rel="shortcut icon" href="<?php echo getImgUrl('favicon.ico')?>" type="image/x-icon">
    <link rel="stylesheet" href= "<?php echo getCSSUrl('style') ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body translate="no">

        <?php include_once getViewPart('header/header.php'); ?>
        <main>
            <section class="portfolio">
                <a id="portfolio"></a>
                <div class="wrapper">
                    <img class="mobile-branch left" src="<?php echo getImgUrl('branch_left_mob.png')?>" />
                    <h2>Portfolio</h2>
                    <img class="mobile-branch right" src="<?php echo getImgUrl('branch_right_mob.png')?>" />
                    <div class="svgBlock svg-position" id="empty-block"></div>
                    <div class="item-slider">
                        <ul id="carusel">
                                      
                            <?php foreach ( $portfolioList as $portfolioItem):?>
                            <li id="<?php echo $portfolioItem['id'];?>">
                                <div>
                                    <a href="<?php echo $portfolioItem['site_url'];?>">
                            <img src="<?php echo getImgUrl($portfolioItem['image_url']);?>" alt="<?php echo $portfolioItem['description'] ;?>"/>
                            </a>
                                </div>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="description-slider">
                        <h3>Recent Work</h3>
                        <p>There are some examples of our works. If you want look more, please click on the button below.</p>
                        <a id="port-link" type="button" href="portfolio">Look more</a>
                        <a id="load-img" type="button" href="views/portfolio_page/portfolio.html">Load more</a>
                    </div>
                    <div class="loadPortfolio">
                        <div id="smartPortfolio">
                            <?php foreach ( $portfolioList as $portfolioItem):?>
                            <div class="ourWork">
                                <a href="<?php echo $portfolioItem['site_url'];?>">
                                <img src="<?php echo getImgUrl($portfolioItem['image_url']);?>" alt="<?php echo $portfolioItem['description'] ;?>"></a>
                            </div>
                            <?php endforeach;?>
                            <!--<div class="ourWork">
                            <a href="http://vk.com">
                                <img src="<?php echo getImgUrl('slide1.jpg')?>" alt="second site"></a>
                        </div>-->
                        </div>
                        <div id="moreButton" count_show="3" count_add="3">
                            <a type="button"> Show more...</a>
                        </div>
                        <div id="loadingDiv">
                            <span>Loading data...</span>
                        </div>
                    </div>
                </div>
            </section>
            <!--section about -->
            <?php include_once getViewPart('about_us/about.php');?>
            <!--our team section-->
            <?php include_once getViewPart('our_team/team.php'); ?>
            <div class="down-parallax">
                <img id="cave-parallax" src="<?php echo getImgUrl('cave/cave_1.png')?>" width="100%" />
                <ul id="scene">
                    <li class="layer " data-depth="0.10"> <img src="<?php echo getImgUrl('cave/bg-layer.png')?>" alt="parallax layer" /> </li>
                    <li class="layer " data-depth="0.80"> <img id="town_4" src="<?php echo getImgUrl('cave/town_4.png')?>" alt="parallax layer" /> </li>
                    <li class="layer " data-depth="0.70"> <img id="town_3" src="<?php echo getImgUrl('cave/town_3.png')?>" alt="parallax layer" /> </li>
                    <li class="layer " data-depth="0.60"> <img id="town_2" src="<?php echo getImgUrl('cave/town_2.png')?>" alt="parallax layer" /> </li>
                    <li class="layer " data-depth="0.45"> <img id="cave_4" src="<?php echo getImgUrl('cave/cave_4.png')?>" alt="parallax layer" /> </li>
                    <li class="layer " data-depth="0.30"> <img src="<?php echo getImgUrl('cave/cave_3.png')?>" alt="parallax layer" /> </li>
                    <li class="layer " data-depth="0.20"> <img src="<?php echo getImgUrl('cave/cave_2.png')?>" alt="parallax layer" /> </li>
                    <li class="layer " data-depth="0.00"> <img id="town_1" src="<?php echo getImgUrl('cave/town_1.png')?>" alt="parallax layer" /> </li>
                </ul>
            </div>
            <div class="contact-us">
                <a id="contact"></a>
                <div class="wrapper">
                    <img class="mobile-branch left" src="<?php echo getImgUrl('branch_left_mob.png')?>" />
                    <h2>Contact us</h2>
                    <img class="mobile-branch right" src="<?php echo getImgUrl('branch_right_mob.png')?>" />
                    <div class="svgBlock4 svg-position" id="empty-block"></div>
                    <h4>Get in touch</h4>
                    <form id="contact-form" method="post" action="javascript:void(null);" onsubmit="call()">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" placeholder="Your Name" />
                        <label for="email">Email </label>
                        <input id="email" name="email" type="email" placeholder="Your Email" required="required" />
                        <label for="subject">Subject</label>
                        <input id="subject" name="subject" type="text" placeholder="Subject" />
                        <label for="message">Message</label>
                        <textarea id="message" type="text" name="message" placeholder="Your Message" required="required"></textarea>
                        <button type="submit">Send</button>
                    </form>
                    <div class="contact-info">
                        <p>Please, contact us at anthill@gmail.com<br><br> or call us <br> +38(067)532-48-99</p>
                        <h6><span><a href="mailto:ask@htmlbook.ru">anthill@gmail.com</a></span><br>+38(067)532-48-99</h6>
                        <div class="social">
                            <div class="skype soc-icon">
                                <a href="https://www.skype"></a>
                            </div>
                            <div class="facebook soc-icon">
                                <a href="https://www.facebook.com"></a>
                            </div>
                            <div class="google soc-icon">
                                <a href="https://www.google.com"></a>
                            </div>
                            <div class="lin soc-icon">
                                <a href="https://www.linkedin.com"></a>
                            </div>
                            <div class="upwork soc-icon">
                                <a href="https://www.upwork.com"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include_once getViewPart('footer/footer.php'); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.4/SmoothScroll.js"></script>
        <script src="<?php echo getJSUrl('parallax')?>"></script>
        <script src="<?php echo getJSUrl('slider')?>"></script>
        <script src="<?php echo getJSUrl('down-parallax')?>"></script>
        <script src="<?php echo getJSUrl('svg')?>"></script>
        <script src="<?php echo getJSUrl('index')?>"></script>
        <script src="<?php echo getJSUrl('mobileNav')?>"></script>
        <!--<script src="<?php echo getJSUrl('lazyload')?>"></script>-->
        <script src="<?php echo getJSUrl('test-load')?>"></script>

</html>