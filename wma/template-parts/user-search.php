<div class="head-form">
<!--<form name="user_search" method="post" action="<?php echo get_site_url().'/search-result'; ?>" >
<select name="user_type_dd" class="field">
    <option selected="selected" value="">Who You are looking for?</option>
    <option value="musician">Musician</option>
    <option value="band">Band</option>
    <option value="church">church</option>
</select>
<div class="search">
    <input id="zipcode" type="text" name="zipcode" required="required" placeholder="ZIP Code or Location" value="" />
    <input type="submit" value="" />
</div>
</form> -->
<?php echo do_shortcode('[gmw search_form="1"]'); ?>

<a style="display: block; float: right;" href="/demo/advanced-search">Advanced Search</a>
<div class="clearfix"></div>
               
