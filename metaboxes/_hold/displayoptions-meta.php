<div class="my_meta_control">
<?php /*?> 
	<label>Price</label>
	<p><input type="text" name="<?php $metabox->the_name('price'); ?>" value="<?php $metabox->the_value('price'); ?>"/></p>

	<label>Address (the address needs to be provided if you want a Google map to appear)</label>
	<p><input type="text" name="<?php $metabox->the_name('geocodeme'); ?>" value="<?php $metabox->the_value('geocodeme'); ?>"/></p>
    
	<label>Address</label>
	<p><input type="text" name="<?php $metabox->the_name('address'); ?>" value="<?php $metabox->the_value('address'); ?>"/></p>
     
	<label>Square Footage</label>
	<p><input type="text" name="<?php $metabox->the_name('footage'); ?>" value="<?php $metabox->the_value('footage'); ?>"/></p>

	<label>Bedrooms</label>
	<p><input type="text" name="<?php $metabox->the_name('bedrooms'); ?>" value="<?php $metabox->the_value('bedrooms'); ?>"/></p>

	<label>Bathrooms</label>
	<p><input type="text" name="<?php $metabox->the_name('bathrooms'); ?>" value="<?php $metabox->the_value('bathrooms'); ?>"/></p>    
        
    <label>Additional Info</label>        
	<p>
	<?php $metabox->the_field('additional-info'); ?>
	<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
	</p>
<?php */?>

   <label>Model (Type of house)</label>
 	<?php $mb->the_field('model'); ?>
    <input type="radio" name="<?php $mb->the_name(); ?>" value="The St Andrews"<?php $mb->the_radio_state('The St Andrews')?' checked="checked"':''; ?>/> The St. Andrews
    <input type="radio" name="<?php $mb->the_name(); ?>" value="The Bolivar"<?php $mb->the_radio_state('The Bolivar')?' checked="checked"':''; ?>/> The Bolivar
    <input type="radio" name="<?php $mb->the_name(); ?>" value="The Levelle"<?php $mb->the_radio_state('The Levelle')?' checked="checked"':''; ?> /> The Levelle
    <input type="radio" name="<?php $mb->the_name(); ?>" value="The Shakespeare"<?php $mb->the_radio_state('The Shakespeare')?' checked="checked"':''; ?> /> The Shakespeare
    <input type="radio" name="<?php $mb->the_name(); ?>" value="The Terpsichore"<?php $mb->the_radio_state('The Terpsichore')?' checked="checked"':''; ?> /> The Terpsichore
    <input type="radio" name="<?php $mb->the_name(); ?>" value="Other"<?php $mb->the_radio_state('Other')?' checked="checked"':''; ?> /> Other
    </p>

 	<label>Purchase Status (for sale or sold)</label>
	<p>
		<?php $selected = ' selected="selected"'; ?>
		<br/><?php $metabox->the_field('status'); ?>
		<select name="<?php $metabox->the_name(); ?>">
		<option value=""> Status</option>
		<option value="Sold"<?php if ($metabox->get_the_value() == 'Sold') echo $selected; ?>> Sold</option>
		<option value="Available"<?php if ($metabox->get_the_value() == 'Available') echo $selected; ?>> Available</option>
		</select>
	</p>
	
<?php /*?> 	
	<?php */?>

</div>