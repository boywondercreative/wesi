<?php global $wpalchemy_media_access; ?>

<div class="my_meta_control">
    <p id="soft_warning" style="display: none; color:red;"><?php _e('Sort order has been changed.  Remember to save the post to save these changes.');?></p>     
    <p class="instructions"><span>1)</span> Click the "Add link" button.</p>
    <p class="instructions"><span>2)</span> Choose a using the "Upload Image" button.The image should be at least 300px wide and 200px in height.</p> 
    <p class="instructions"><span>3)</span> Enter the necessary info into the corresponding boxes.</p> 
    <p class="instructions"><span>4)</span> In order to save the information you just entered, be sure to click the blue "Update" button.</p> 
    <p class="instructions"><span>Note:</span> Not ready to display a box? Just select the checkbox marked "Don't show".</p> 

    <div class="top_btn_grp"> 	
    <a href="#" class="add docopy-link button"><?php _e('Add link');?></a>   
    <a href="#" class="deleteall dodelete-link button"><?php _e('Remove All');?></a>
    </div>  
          
	<?php while($mb->have_fields_and_multi('link')): ?>
    <?php $mb->the_group_open(); ?>

<div class="skinny">		
                            
        <a href="#" class="dodelete icon close remove" title="<?php _e('Remove');?>">&#8722;</a>
        <h3 class="slide handle"><span class="count"><?php _e('link #')?><?php echo ($mb->get_the_index() +1 );?></span></h3>
 
		<div class="meta_inside clearfix">   
			
            <div class="slide_info"> 
                <p>
                <?php $mb->the_field('org'); ?>
                <label for="<?php $mb->the_name(); ?>">Name of organization</label>
                <input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
                </p>         
                
                <p>
                <?php $mb->the_field('addy'); ?>
                <label for="<?php $mb->the_name(); ?>">Organization's address</label>
                <input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
                </p>  
                
                <p>
                <?php $mb->the_field('phone'); ?>
                <label for="<?php $mb->the_name(); ?>">Organization's phone number</label>
                <input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
                </p> 
                
                <p>
                <?php $mb->the_field('days'); ?>
                <label for="<?php $mb->the_name(); ?>">Days of operation</label>
                <input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
                </p> 

                <p>
                <?php $mb->the_field('hours'); ?>
                <label for="<?php $mb->the_name(); ?>">Hours of operation</label>
                <input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
                </p> 
                
                <p>
                <label>Description of services</label>
                <?php $mb->the_field('services'); ?>
                <textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
                </p>                                
                
                <p>
                <?php $mb->the_field('site'); ?>
                <label for="<?php $mb->the_name(); ?>">Organization's website</label>
                <input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
                </p> 
             
                <p>
                <?php $metabox->the_field('nofollow'); ?>
                <input type="checkbox" name="<?php $metabox->the_name(); ?>" value="1"<?php if ($metabox->get_the_value()) echo ' checked="checked"'; ?>/>&ensp;Don't show just yet  
                </p>  
            </div><!-- end of slide info-->
        </div><!--.meta_inside-->
</div><!-- end of skinny -->
        <?php $mb->the_group_close(); ?>
        <?php endwhile; ?>
       
    <div class="btn_grp"> 
    <p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-link button"><?php _e('Add link');?></a></p>    
    <p class="meta-save"><button type="submit" class="button-primary" name="save"><?php _e('Update');?></button></p>
    </div> 
</div><!-- .my_meta_control -->
 
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