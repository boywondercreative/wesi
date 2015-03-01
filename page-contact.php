<?php
/*
Template Name: Contact Page
*/
?>

<div id="page">
<?php get_template_part('templates/page', 'custom-header'); ?>
    <div id="contact-body" class="gu16 shadow">

    <div class="contact-padding clearfix">
        <div class="contact-left"><?php get_template_part('templates/content', 'page'); ?></div>
        <div class="contact-right">
		<?php
        global $contact_mb; 
        $contact_mb->the_meta(); 
        ?>		
        <dl>
            <dt>Phone</dt>
                <dd><?php $contact_mb->the_value('phone');?></dd>
            <dt>Fax</dt>
                <dd><?php $contact_mb->the_value('fax');?></dd>
            <dt>Location</dt>
                <dd>
                    <address class="office">
                        <?php $contact_mb->the_value('org-name');?><br>
                        <?php $contact_mb->the_value('addy1');?><br>
                        <?php $contact_mb->the_value('addy2');?><br>
                        <?php $contact_mb->the_value('addy3');?>
                    </address>
                </dd>
        </dl>		
		
		<div class="contact-map">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('contact') ) ?>
            <p class="directions">Click map for directions</p>
        </div>
        </div>
    </div>
    </div>
</div>