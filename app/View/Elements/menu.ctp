  <div class="header">
    <div class="wrapper">
		
		<h1 class="logo"><?php echo $this->Html->image('logo.jpg', array('url' => '/'), array('class' => 'home')) ?></h1>

	    <ul class="nav">
	        <li><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'display', 'home'), array('class' => 'home')) ?></li>
	        <li><?php echo $this->Html->link('Quem Somos', array('controller' => 'pages', 'action' => 'display', 'quem-somos'), array('class' => 'quem-somos')) ?></li>
	        <li><?php echo $this->Html->link('Como Chegar', array('controller' => 'pages', 'action' => 'display', 'como-chegar'), array('class' => 'como-chegar'))?></li>
		</ul>
	     
     </div>
  </div>
    
     
	  
   
