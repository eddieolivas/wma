<div class="sidebar-grey">
    <?php  ?>

    <h3>Join Our Social Media</h3>
    <div class="sidebar_icon">
        <div class="sidebar_icon_fb"><a href="http://www.facebook.com" target="_blank"></a></div>
              <div class="sidebar_icon_twt"><a href="https://www.twitter.com/" target="_blank"></a></div>
              <div class="sidebar_icon_youtube"><a href="https://www.youtube.com/" target="_blank"></a></div>
             <div class="clearfix"></div>
</div>
    <h3>Search Keyword</h3>
    <div class="search">
            <form name="user_search" method="post" action="<?php echo get_site_url().'/search-result'; ?>" >
            <input type="text" name="zipcode" placeholder="ZIP Code or Location" required="required" />
            <input type="hidden" name="sidebar_search" value="sidebar"  />                          
            <input type="submit" name="submit"  value="" />
            </form>
        </div>
    <div class="clearfix"></div>
</div>