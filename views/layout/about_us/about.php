   <section class="about"><a id="about"></a>
            <img id="root-img" src="<?php echo getImgUrl('koren.png')?>" width="100%" alt="root" />
            <div class="wrapper">
                 <img class="mobile-branch left" src = "<?php echo getImgUrl('branch_left_black_mob.png')?>"/><h2>About us</h2>
                <img class="mobile-branch right" src = "<?php echo getImgUrl('branch_right_black_mob.png')?>"/>
                <div class="svgBlock2 svg-position" id="empty-block"></div>
                <?php foreach ( $textList as $textItem):?>
                <h4><?php echo $textItem['title'];?></h4>
                <p><?php echo $textItem['text'];?><span class="full"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum.</span></p>
                    <?php endforeach;?>
                <div class="svgBlock5 svg-position-long" id="empty-block-long"></div>
                <img class="mobile-branch-long" src = "<?php echo getImgUrl('long_branch_mob.png')?>"/>
                <h4>What we offer?</h4>
                <div class="offer-block">
                    <div class="item">
                        <img class="web-icon" src="<?php echo getImgUrl('svg_icons/Web_design.svg')?>" alt="svg icon" />
                        <h5>Web Design</h5>
                        <p>Lorem ipsum dolor sit <br>amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                    <div class="item">
                        <img class="dev-icon" src="<?php echo getImgUrl('svg_icons/Development.svg')?>" alt="svg icon" />
                        <h5>Development</h5>
                        <p>Lorem ipsum dolor sit <br>amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                    <div class="item">
                        <img class="app-icon" src="<?php echo getImgUrl('svg_icons/App_design.svg')?>" alt="svg icon" />
                        <h5>App Design</h5>
                        <p>Lorem ipsum dolor sit <br>amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                    <div class="item">
                        <img class="logodes-icon" src="<?php echo getImgUrl('svg_icons/Logo_design.svg')?>" alt="svg icon" />
                        <h5>Logo Design</h5>
                        <p>Lorem ipsum dolor sit <br>amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="offer-block">
                    <div class="item">
                        <img class="seo-icon" src="<?php echo getImgUrl('svg_icons/Seo_help.svg')?>" alt="svg icon" />
                        <h5>Seo Help</h5>
                        <p>Lorem ipsum dolor sit <br>amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                    <div class="item">
                        <img class="media-icon" src="<?php echo getImgUrl('svg_icons/Social_media.svg')?>" alt="svg icon" />
                        <h5>Social Media</h5>
                        <p>Lorem ipsum dolor sit <br>amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                    <div class="item">
                        <img class="host-icon" src="<?php echo getImgUrl('svg_icons/Hosting.svg')?>" alt="svg icon" />
                        <h5>Hosting</h5>
                        <p>Lorem ipsum dolor sit <br>amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                    <div class="item">
                        <img class="support-icon" src="<?php echo getImgUrl('svg_icons/Support.svg')?>" alt="svg icon" />
                        <h5>Support</h5>
                        <p>Lorem ipsum dolor sit <br>amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>