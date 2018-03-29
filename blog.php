<?php 
/*
Template Name: Blog Template
*/

get_header(); ?>
<!--==================================================
    2.*ALL_page banner area start
===================================================-->      
    <section class="normal_serviceslider_area slider_bg all_page_slider_height">
        <div class="container">
            <div class="row">
                <div class="all_page_slider">
                    <div class="all_page_slider_table">
                        <div class="all_page_slider_table_cell">
                            <div class="col-xs-12">
                                <div class="normal_service_text all_page_slider_text">
                                    <h2><?php wp_title();?></h2>
                                    <ol class="breadcrumb">
                                      <li><a href="#">Home</a><span></span></li>
                                      <li><a href="#">blog</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
<!--==================================================
        .*Latest_news_area start
===================================================-->
<section id="latest_news" class="latest_news_area section_padding">
    <div class="container">
        <div class="row">
		
		
             <?php while( have_posts() ) : the_post(); ?>

                          <div class="col-sm-4">
                <article class="single_post">
                    <div class="post_thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/blog1.jpg" alt="blog">
                    </div>
                    <div class="post_title">
                        <h3>Digital Marketing App Your Cycle</h3>
                        <h4>By <?php the_author(); ?> at <?php the_time ('d F Y I g:i a');?></h4>
                    </div>
                    <div class="post_text">
					   <p>dghsfghdfg</p>
                        <?php the_content();?>
                        <a href="<?php the_permalink();?>">Read more</a>
                    </div>
                </article>
            </div>

              
            <?php endwhile; ?>
			   
           
        </div>
    </div>
</section>

 <?php get_footer();?>