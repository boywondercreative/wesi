<div class="my_meta_control">

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
            
	<label>Contact person's name</label>
	<p><input type="text" name="<?php $metabox->the_name('contact'); ?>" value="<?php $metabox->the_value('contact_name'); ?>"/></p>
    
	<label>Contact person's e-mail address</label>
	<p><input type="text" name="<?php $metabox->the_name('user_email'); ?>" value="<?php $metabox->the_value('user_email'); ?>"/></p>       
     
	<label>Contact form shortcode</label>
	<p><input type="text" name="<?php $metabox->the_name('shortcode'); ?>" value="<?php $metabox->the_value('shortcode'); ?>"/></p>   

 
</div>
