<?php global $wpalchemy_media_access; ?>

<div class="my_meta_control">
    <p id="soft_warning" style="display: none; color:red;"><?php _e('Sort order has been changed.  Remember to save the post to save these changes.');?></p>
    <p class="instructions"><span>1)</span> Click the "Add newsletter" button.</p>
    <p class="instructions"><span>2)</span> Choose an image using the "Upload Image" button.</p> 
    <p class="instructions"><span>3)</span> Enter the necessary info into the corresponding boxes.</p> 
    <p class="instructions"><span>4)</span> In order to save the information you just entered, be sure to click the blue "Update" button.</p> 
    <p class="instructions"><span>Note:</span> Not ready to display a box? Just select the checkbox marked "Don't show".</p> 

    <div class="top_btn_grp"> 	
    <a href="#" class="add docopy-newsletter button"><?php _e('Add newsletter');?></a>   
    <a href="#" class="deleteall dodelete-newsletter button"><?php _e('Remove All');?></a>
    </div>  
          
        <?php while($mb->have_fields_and_multi('newsletter')): ?>
        <?php $mb->the_group_open(); ?>
        
<div class="skinny">             
        <a href="#" class="dodelete icon close remove" title="<?php _e('Remove');?>">&#8722;</a>
 
        <h3 class="slide handle"><span class="count"><?php _e('Archived newsletter #')?><?php echo ($mb->get_the_index() +1 );?></span></h3>
 
          <div class="meta_inside clearfix">   
          	
          <div class="slide_preview wide">
                <div class="preview_wrap">
               
                <?php $mb->the_field('image_src'); ?>
               
                <img class="preview_img" src="<?php if($mb->get_the_value()){$mb->the_value();}else { echo get_template_directory_uri().'/metaboxes/css/img/image.png';}?>" alt="<?php $mb->the_name();?> Preview" />
                </div>
               
                <input type="hidden" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="image_src" />
                <?php $mb->the_field('image_id'); ?>
                <input type="hidden" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="image_id" />
                <?php $mb->the_field('image_alt'); ?>
                <input type="hidden" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="image_alt" />
               
                <?php if($mb->get_the_value('image_src') != "") {$icon = "change"; $button_text = __('Change Image'); $hide = '';} else { $icon = "upload"; $button_text = __('Upload Image'); $hide='hide';} ?>
       
                <button class="upload_image_button button" type="button"><span class="icon <?php echo $icon;?>"></span><?php echo $button_text;?></button>
                <button class="delete_image_button button <?php echo $hide;?>" type="button"><span class="icon delete"></span><?php _e('Remove Image')?></button>
               
          </div>
		<div class="slide_info"> 
            <p>
            <?php $mb->the_field('month'); ?>
            <label for="<?php $mb->the_name(); ?>">Enter month</label>
            <input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
            </p>         
            <p>
            <?php $mb->the_field('year'); ?>
            <label for="<?php $mb->the_name(); ?>">Enter year</label>
            <input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
            </p>                    			
            <p>
			<?php $mb->the_field('url'); ?>
            <label for="<?php $mb->the_name(); ?>">Campaign url </label>
            <input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
            </p>
            
            <p>
            <?php $metabox->the_field('nofollow'); ?>
            <input type="checkbox" name="<?php $metabox->the_name(); ?>" value="1"<?php if ($metabox->get_the_value()) echo ' checked="checked"'; ?>/>&ensp;Don't show just yet  
            </p>                       
        </div>  
    </div><!--.meta_inside-->
</div><!-- end of skinny --> 
 
        <?php $mb->the_group_close(); ?>
        <?php endwhile; ?>
       
    <div class="btn_grp">  
    <p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-newsletter button"><span class="icon add"></span><?php _e('Add archived newsletter');?></a></p>    
    <p class="meta-save"><button type="submit" class="button-primary" name="save"><?php _e('Update');?></button></p>
    </div>
 
</div><!-- .my_meta_control -->
 
<script type="text/javascript">
	jQuery(function($) 
	{
		$('.wpa_loop-artworks').sortable
		({ 
			change: function()
			{
				$('#soft_warning').show();
			}
		});	
	});
</script>
 