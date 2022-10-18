<?php global $wesoftpress; ?>
<form style="width:100%;" role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
    <div class="form-inner">
        <label class="screen-reader-text" for="s">Search For:</label>
        <input type="text" value="" name="s" id="s" required placeholder="<?php echo $wesoftpress['search_heading']; ?>" />
        <button type="submit" id="seachsubmit"><i class="fa fa-search"></i></button>
    </div>
</form>