<?php
  //Template Name: Autions Listing
  get_header();
?>


<div class="auction-sec cmn-gap2">
    <div class="container">
      <div class="cmn-hd">
        <h1 class="sub-head">AUCTIONS</h1>
        <div class="sort-div">
          <span class="filtercls"><span><img src="images/srt.svg" alt=""></span>Filter</span>
          <ul class="sortng-uls">
            <li class="srtng-lis">Filter</li>
            <li class="srtng-lis">Auctions</li>
            <li class="srtng-lis">For Sale</li>
          </ul>
        </div>
      </div>
      <div class="auction-row aucpg">
        <div  id="ajax-posts"  class="row rowspan1">
          <?php
          $postsPerPage = 8;
           $loop = new WP_Query( array( 
            'post_type' => 'article',   
            'posts_per_page' => $postsPerPage,                     
          ) );

           if ( $loop->have_posts() ) {
               while ( $loop->have_posts() ) {
               $loop->the_post(); 
               $post_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
        ?>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="auction-bx">
              <div class="auction-fig">
             
                <a href="<?php the_permalink();?>">
                  <img src="<?php echo $post_image;?>" alt="">
                </a>
                <a href="#url" class="hrt-ic">
                  <img src="images/hrt.svg" alt="">
                </a>
                <div class="auction-fig-innr">
                  <div class="auction-fig-innr-lft">
                    <i><img src="images/clk.svg" alt=""></i>
                    <span>17:57:02</span>
                  </div>
                  <div class="auction-fig-innr-rit">
                    <span class="auct-lft-txt">Bid</span>
                    <span class="auct-rit-txt">$42,000</span>
                  </div>
                </div>
              </div>
              <div class="auction-item-bdy">
                <span class="spcl-txt">PAST AUCTION</span>
                <div class="item-sub-title2">
                  <a href="auction-details.html"><?php the_title();?></a>
                </div>
                <div class="dt-cls">Aug 17–sep 6 | 8:29 am asia</div>
              </div>
            </div>
          </div>                     
          <?php }};         
           wp_reset_postdata();  
           ?>     
        </div>
      </div>
      <div class="auc-btn-div text-center">
        <a class="cmn-btn" id="more_posts" href="#url">Load more <span><img src="images/arw.svg" alt=""></span></a>
      </div>
    </div>
  </div>
  <div class="sign-up-sec" style="background-image: url(images/signbg.jpg);">
    <div class="container cntnr">
      <div class="sign-blk">
        <h2>sign up for the daily e-mail</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur. Aliquam scelerisque imperdiet ornare commodo enim dignissim id. Duis
          leo diam consequat vitae quis sed commodo aenean.
        </p>
        <div class="sign-frm">
          <form>
            <input type="email" placeholder="Enter email address">
            <input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>


<?php
  get_footer();
?>