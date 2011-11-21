			<div class="slider-wrapper theme-default">
    	        <div class="ribbon"></div>
			    <div id="sliderTurismo" class="nivoSlider" style="position: relative; width: 299px; height: 185px; margin-bottom:50px;"> 
	        	  <?php echo $this->Html->image('slide/foto1.jpg') ?>
		             <?php echo $this->Html->image('slide/foto2.jpg') ?>
	    		</div>
            </div>
		
        <?php echo $this->Html->css('nivo-slider') ?>
        <?php echo $this->Html->css('default/default') ?>


		<?php echo $this->Html->script('jquery-1.6.4.min.js') ?>
		<?php echo $this->Html->script('jquery.nivo.slider.pack.js') ?>
		<script type="text/javascript">
		$(window).load(function() {
		$('#sliderTurismo').nivoSlider();
		
		});
				
		</script>
