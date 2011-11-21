<!doctype html>
<html lang="pt-BR">
<head>
	<title><?php echo empty($title_for_layout) ?></title>

	<?php echo $this->Html->css('style') ?>

</head>
<body class="<?php if (isset($body_class)) echo $body_class ?>">
<div class="global">
	<!-- menu -->
	<?php echo $this->element('menu') ?>
   	<!-- /menu -->
    <!-- conteudo -->
     <div class="content">
	    <div class="wrapper">
			<?php echo $content_for_layout ?>
            		  
	    </div>
	  </div>
    <!-- /conteudo -->
			
	<!-- footer -->    
	<?php echo $this->element('footer') ?>
	<!-- /footer -->    
</div>
</body>
</html>