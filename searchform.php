<?php

/**
 * Template for displaying search forms
 *
 * @package  yellow_news
 * @since    1.0
 */
?>
<form style="width:100%;" role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
    <label class="screen-reader-text" for="s">Search For:</label>
    <input autocomplete='off' type="text" value="" name="s" id="s" required placeholder="Search Here..." />
</form>