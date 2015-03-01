<?php $key = get_post_meta($post->ID, '_my_user_email', true); if ($key != '') { ?>
<?php global $program_mb; $program_mb->the_meta(); ?>
<?php $i = 0; ?>
<div class="program_widget">
	<img src="<?php $program_mb->the_value('image_src');?>"/>
    <a class="fancycontact programContact" href="#form-<?php echo $i ?>"> <i class="icon-edit"></i><span>need more info? <br /> contact <?php $program_mb->the_value('contact_name');?></span> </a>
    <div id="form-<?php echo $i ?>" class="hide program_contact">
    <a class="customfancyclose" href="javascript:parent.$.fancybox.close();"><i class="icon-remove"></i></a>
	<?php $program_mb->the_value('shortcode');?>
    </div>
</div>    
<?php $i++; ?>
<?php } else  ?>