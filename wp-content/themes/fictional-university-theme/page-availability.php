<?php
get_header();
    while(have_posts()){        
        the_post();
        pageBanner(); ?>
        
        <div class="container container--narrow page-section">
            <div class="generic-content">
                <?php the_content(); ?>    
                <div id="newContentId"></div>    
                <div><input id="btnSubmitId" type="button" value="CLICK"></div>        
            </div>
        </div>      
    <?php }
get_footer();
?>