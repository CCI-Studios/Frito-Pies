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

	<div id="mainmenu"><div>
		<jdoc:include type="modules" name="main_menu" style="xhtml" />
		<div class="clear"></div>
	</div></div>	
	
	<div id="header">
		<div id="canopy">
			<img src="templates/fritopies/images/canopy.png" alt=""/>
		</div>
		
		<div id="logo">	
			<a href="http://www.fritopies.ca/">
				<img src="templates/fritopies/images/frito_logo.png" alt="Frito Pies &amp; More Logo"/>
			</a>
		</div>
		
		<div id="napkins">
			<img src="templates/fritopies/images/napkins.png" alt=""/>
		</div>
		
		<div id="tray">
			<img src="templates/fritopies/images/frito_pies_tray.png" alt=""/>
		</div>
		
		<div id="socialmedia">
				<jdoc:include type="modules" name="socialmedia" style="xhtml" />
		</div>
		
		<div id="people">
			<img src="templates/fritopies/images/people.png" alt=""/>
		</div>
		
		<div id="pot">
			<img src="templates/fritopies/images/chili_pot.png" alt=""/>
		</div>
	
		<div id="tablestand"><div><div>
			<jdoc:include type="modules" name="tablestand" style="xhtml" />
		</div></div></div>
		
		<div id="heading">
			<jdoc:include type="modules" name="pagetitle" style="xhtml" />
		</div>
	</div>
	
	<div id="body"><div><div>
		<div id="content">
			<div id="component"><div>
				<jdoc:include type="component" />
			</div></div>
		
			<?php if ($this->countModules('sidebar')): ?>
			<div id="sidebar">
				<jdoc:include type="modules" name="sidebar" style="xhtml" />
			</div>
			<?php endif; ?>
		
			<div class="clear"></div>
		</div>
		
		<div id="bottom">
			<jdoc:include type="modules" name="bottom" style="xhtml" />
			<div class="clear"></div>
			<jdoc:include type="modules" name="bottom_menu" style="xhtml" />
		</div><div class="clear"></div>
	</div></div></div>
	
	<div id="footer"><div>
		<div class="left">&copy; <?php echo date ('Y')?> Frito Pies & More. All Rights Reserved.</div>
		<div class="right">Site by <a href="http://www.ccistudios.com" target="_blank">CCI Studios</a></div>
		<div class="clear"></div>
		<div class="logo">
			<a href="http://www.ontario.ca/" target="_blank">
				<img src="templates/fritopies/images/Ministry_Logo.png" alt="Ministry of Ontario Logo" />
			</a>
		
			<a href="http://www.theunitedway.on.ca" target="_blank">
				<img src="templates/fritopies/images/united_way.png" alt="United Way" />
			</a>
		</div>
	</div></div>	
	
	
	<div class="hidden">
		<jdoc:include type="modules" name="hidden" style="xhtml" />
		<div class="clear"></div>
	</div>
	
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-24254952-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>	
</body>
</html>	