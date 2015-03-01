<?php
/*
Template Name: TEST PAGE
*/
?>
		<style type="text/css" id="page-css">
			/* Styles specific to this particular page */
			.scroll-pane
			{
				width: 100%;
				height: 200px;
				overflow: auto;
			}
			.horizontal-only
			{
				height: auto;
				max-height: 200px;
			}
		</style>
<div id="page">
    <div id="pg_main" class="gu12">
        <div class="page-content"> 
            <h2>Vertical only</h2>
			<div class="scroll-pane">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ligula id sem tristique ultrices
					eget id neque. Duis enim turpis, tempus at accumsan vitae, lobortis id sapien. Pellentesque nec orci
					mi, in pharetra ligula. Nulla facilisi. Nulla facilisi. Mauris convallis venenatis massa, quis
					consectetur felis ornare quis. Sed aliquet nunc ac ante molestie ultricies. Nam pulvinar ultricies
					bibendum. Vivamus diam leo, faucibus et vehicula eu, molestie sit amet dui. Proin nec orci et elit
					semper ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
					mus. Sed quis urna mi, ac dignissim mauris. Quisque mollis ornare mauris, sed laoreet diam malesuada
					quis. Proin vel elementum ante. Donec hendrerit arcu ac odio tincidunt posuere. Vestibulum nec risus
					eu lacus semper viverra.
				</p>
				<p>
					Vestibulum dictum consectetur magna eu egestas. Praesent molestie dapibus erat, sit amet sodales
					lectus congue ut. Nam adipiscing, tortor ac blandit egestas, lorem ligula posuere ipsum, nec
					faucibus nisl enim eu purus. Quisque bibendum diam quis nunc eleifend at molestie libero tincidunt.
					Quisque tincidunt sapien a sapien pellentesque consequat. Mauris adipiscing venenatis augue ut
					tempor. Donec auctor mattis quam quis aliquam. Nullam ultrices erat in dolor pharetra bibendum.
					Suspendisse eget odio ut libero imperdiet rhoncus. Curabitur aliquet, ipsum sit amet aliquet varius,
					est urna ullamcorper magna, sed eleifend libero nunc non erat. Vivamus semper turpis ac turpis
					volutpat non cursus velit aliquam. Fusce id tortor id sapien porta egestas. Nulla venenatis luctus
					libero et suscipit. Sed sed purus risus. Donec auctor, leo nec eleifend vehicula, lacus felis
					sollicitudin est, vitae lacinia lectus urna nec libero. Aliquam pellentesque, arcu condimentum
					pharetra vestibulum, lectus felis malesuada felis, vel fringilla dolor dui tempus nisi. In hac
					habitasse platea dictumst. Ut imperdiet mauris vitae eros varius eget accumsan lectus adipiscing.
				</p>
				<p>
					Quisque et massa leo, sit amet adipiscing nisi. Mauris vel condimentum dolor. Duis quis ullamcorper
					eros. Proin metus dui, facilisis id bibendum sed, aliquet non ipsum. Aenean pulvinar risus eu nisi
					dictum eleifend. Maecenas mattis dolor eget lectus pretium eget molestie libero auctor. Praesent sit
					amet tellus sed nibh convallis semper. Curabitur nisl odio, feugiat non dapibus sed, tincidunt ut
					est. Nullam erat velit, suscipit aliquet commodo sit amet, mollis in mauris. Curabitur pharetra
					dictum interdum. In posuere pretium ultricies. Curabitur volutpat eros vehicula quam ultrices
					varius. Proin volutpat enim a massa tempor ornare. Sed ullamcorper fermentum nisl, ac hendrerit sem
					feugiat ac. Donec porttitor ullamcorper quam. Morbi pretium adipiscing quam, quis bibendum diam
					congue eget. Sed at lectus at est malesuada iaculis. Sed fermentum quam dui. Donec eget ipsum dolor,
					id mollis nisi. Donec fermentum vehicula porta.
				</p>
				<p>
					Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
					Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
					sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
					Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed,
					commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros
					ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis.
					Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna
					eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis
					luctus, metus
				</p>
				<p>
					Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
					Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit
					amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
				</p>
			</div>
        </div>
    </div><!--END PAGE MAIN-->
    <aside id="primary_sb" class="sidebar">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('page') ) ?>
    </aside>
</div><!--END PAGE-->

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/script/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/script/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" id="sourcecode">
	jQuery(document).ready(function($) {
		 $('.scroll-pane').jScrollPane();
	});
</script>
        

<?php /*?><script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	<script>!window.jQuery.ui && document.write(unescape('%3Cscript src="jquery/jquery-ui-1.8.21.custom.min.js"%3E%3C/script%3E'))</script>
	<!-- mousewheel plugin -->
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll/jquery.mousewheel.min.js"></script>
	<!-- custom scrollbars plugin -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll/jquery.mCustomScrollbar.js"></script>
	<script>
		(function($){
			$(window).load(function(){
				$(".bio").mCustomScrollbar({
					scrollButtons:{
						enable:true
					}
				});
			});
		})(jQuery);
	</script>
<?php */?>