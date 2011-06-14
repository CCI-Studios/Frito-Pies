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

<body class="<?php echo $menu; ?>">
	<div id="top"><div>
		<div id="mainmenu">
			<jdoc:include type="modules" name="main_menu" style="xhtml" />
			<div class="clear"></div>
		</div>
	</div></div>
	
	<div id="content">
		<div id="component"><div>
			<jdoc:include type="component">
			<jdoc:include type="modules" name="bottom" style="xhtml" />
			<div class="clear"></div>
		</div></div>
		
		<div id="bottom"><div>
			<jdoc:include type="modules" name="bottom_menu" style="xhtml" />
		</div></div>	

		<div class="clear"></div>
		<div id="footer"><div>
			<div class="left">&copy; <?php echo date ('Y')?> Frito Pies & More. All Rights Reserved.</div>
			<div class="right">Site by <a href="http://www.ccistudios.com" target="_blank">CCI Studios</a></div>
		</div></div>		
	</div>
	
	<div class="hidden">
		<jdoc:include type="modules" name="hidden" style="xhtml" />
		<div class="clear"></div>
	</div>	
</body>
</html>	