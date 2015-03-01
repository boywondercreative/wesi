<div class="my_meta_control">
	<p id="soft_warning" style="display: none; color:red;"><?php _e('Sort order has been changed.  Remember to save the post to save these changes.');?></p>
    <p><?php _e('Should you need additional widgets other than the one above, use this box.');?></p>
    <p class="instructions"><span>1)</span> Click the "Add Widget" button.</p>
    <p class="instructions"><span>2)</span> Enter a header title and content.</p> 
    <p class="instructions"><span>3)</span> In order to save the information you just entered, be sure to click the blue "Update" button.</p> 
	
    <div class="top_btn_grp"> 	
    <a href="#" class="add docopy-repeating_textareas button"><?php _e('Add widget');?></a>   
    <a href="#" class="deleteall dodelete-repeating_textareas button"><?php _e('Remove All');?></a>
    </div>  
	
	<?php while($mb->have_fields_and_multi('repeating_textareas')): ?>
	<?php $mb->the_group_open(); ?>

    <div class="wide clearfix">	 
        <h3 class="handle"><?php _e('Textarea Content');?></h3>
        
        <a href="#" class="dodelete remove"><?php _e('&#8722;');?></a>
          
        <div class="inside">
            <p> 
            <label>Header</label>
            <input type="text" name="<?php $metabox->the_name('header'); ?>" value="<?php $metabox->the_value('header'); ?>"/>
            </p>
            
            <p>
            <?php $metabox->the_field('textarea'); ?>
            <label for="<?php $mb->the_name(); ?>">Enter content</label>
            <textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
            </p>
        </div>
    </div><!-- end of wide -->
	<?php $mb->the_group_close(); ?>
	<?php endwhile; ?>
    <div class="btn_grp"> 
        <p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-repeating_textareas button"><?php _e('Add Textarea');?></a></p>	
        <p class="meta-save"><button type="submit" class="button-primary" name="save"><?php _e('Update');?></button></p>
    </div>
</div>


<script type="text/javascript">
	jQuery(function($) 
	{
		$('.wpa_loop').sortable
		({ 
			change: function()
			{
				$('#soft_warning').show();
			}
		});	
	});
</script>