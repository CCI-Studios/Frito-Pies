<!DOCTYPE html>
<?php
$menu = JSite::getMenu();
if ($menu)
    $menu = $menu->getActive();
if ($menu)
    $menu = $menu->alias;
?>
<html>
<head>
	<jdoc:include type="head" />
	<link rel="shortcut icon" href="/templates/fritopies/images/favicon.ico" />
	<link rel="stylesheet" href="/templates/fritopies/css/template.css" />
</head>

<body>
	<div id="top"><div>
		<jdoc:include type="modules" name="mainmenu" style="xhtml">
		<div class="clear"></div>
	</div></div>
	
	<div id="content">
		<div id="component">
			
		</div>	
		<div id="bottom">
		
		</div>
	</div>
		
</body>
	
	<div id="footer"><div>
		<div class="left">&copy; <?php echo date ('Y')?> Frito Pies & More. All Rights Reserved.</div>
		<div class="right">Site by <a href="http://www.ccistudios.com" target="_blank">CCI Studios</a></div>
	</div></div>		

	<div class="hidden">
		<jdoc:include type="modules" name="hidden" style="xhtml" />
		<div class="clear"></div>
	</div>
	

</html>	