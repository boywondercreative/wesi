<div id="search_modal">
        <form role="search" method="get" id="modalsearchform" class="form-search" action="<?php echo home_url('/'); ?>">
            <label class="hide" for="s"><?php _e('Search for:', 'roots'); ?></label>
            <input type="text" value="" name="s" id="s" class="search-query" placeholder="Search IWESNOLA">
        </form>
    <?php /*?><button class="search-btn"><i class="icon-search icon-4x"></i></button><?php */?>
    <a class="search-btn" href="javascript:parent.$.fancybox.close();"><i class="icon-remove"></i></a>
</div>
