	
    <footer class="full-width" role="contentinfo">
	<div class="row">
		<div class="large-12 columns">
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
		</div>
	</div>
</footer>
    
    </div><!-- Row End -->
</div><!-- Container End -->


<?php wp_footer(); ?>


<script type='text/javascript' src='http://www.justynclark.com/js/jquery.dlmenu.js'></script>

<script>
	jQuery(function() {
		jQuery( '#header-menu' ).dlmenu({
			animationClasses : { classin : 'header-animate-in-1', classout : 'header-animate-out-1' }
		});
	});
</script>

<script>
    jQuery(function () {
        jQuery("[data-thumbgrid]").thumbGrid();

//    customize
        jQuery("#effect").on("change",function(){
            var x = $(this).val();
            jQuery("#thumbGrid").data("effect", x);
        });

        jQuery("#delay").on("change",function(){
            var x = parseFloat($(this).val());
            jQuery("#thumbGrid").data("delay", x);
        });

        jQuery("#timing").on("change",function(){
            var x = parseFloat($(this).val());
            jQuery("#thumbGrid").data("timing", x);
        });
    });

</script>


<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>



	
</body>
</html>