<div class="our-team">
    <a id="team"></a>
    <h2>Our Team</h2>
    <div class="svgBlock3 svg-position" id="empty-block"></div>
    <h4>Meet our team</h4>
   
    <div class="our-team-photo">
        <?php foreach ($teamList as $teamItem ):?>
        <figure class="effect">
            <img src="<?php echo getImgUrl($teamItem['photo_url']);?>" alt="dev photo" />
            <figcaption>
                <div>
                    <p>
                        <?php echo $teamItem['name']; ?> <br>
                        <?php  echo $teamItem['job']; ?>
                    </p>
                </div>
            </figcaption>
        </figure>
        <?php  endforeach;?>
    </div>
    </div>
</div>
</div>
</section>