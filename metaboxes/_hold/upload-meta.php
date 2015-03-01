
<?php global $wpalchemy_media_access; ?>
<div class="my_meta_control">
 
    <p><a href="#" class="dodelete-docs button">Remove All</a></p>
 
    <?php while($mb->have_fields_and_multi('docs')): ?>
    <?php $mb->the_group_open(); ?>
 
        <a href="#" class="dodelete button">Remove</a>
        <a href="#" class="dodelete icon close" title="<?php _e('Remove');?>"><?php _e('Remove');?></a>
 
        <h3 class="slide handle"><?php _e('Artwork #')?><span class="count"><?php echo ($mb->get_the_index() +1 );?></span></h3>        

<div class="meta_inside clearfix">   
<div class="slide_preview wide">
<div class="preview_wrap">
                 
        <?php $mb->the_field('imgurl'); ?>
		<img class="preview" src="<?php if($mb->get_the_value()){$mb->the_value();}else { echo WPALCHEMY . '/images/default_preview.png';}?>" alt="<?php $mb->the_name();?> Preview" />
</div>
        
        <?php $wpalchemy_media_access->setGroupName('img-n'. $mb->get_the_index())->setInsertButtonLabel('Insert'); ?>
 
        <p>
            <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
            <?php echo $wpalchemy_media_access->getButton(); ?>
        </p>
 
        <?php $mb->the_field('title'); ?>
        <label for="<?php $mb->the_name(); ?>">Title</label>
        <p><input type="text" id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>
</div>
</div> 
    <?php $mb->the_group_close(); ?>
    <?php endwhile; ?>
 
    <p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-docs button">Add</a></p>
 
</div>