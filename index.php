<?php
/**
 * @copyright	Copyright (C) 2009 - JoomSpirit. All rights reserved.
 */

defined('_JEXEC') or die('Restricted access');

$path = $this->baseurl.'/templates/'.$this->template;
$website_name = $this->params->get('website_name');
$color_website_name = $this->params->get('color_website_name');
$color_link = $this->params->get('color_link');
$border_content = $this->params->get('border_content');
$width_right = $this->params->get('width_right');
$width_left = $this->params->get('width_left');
$width = $this->params->get('width');
$user1_width = $this->params->get('user1_width');
$user3_width = $this->params->get('user3_width');
$user4_width = $this->params->get('user4_width');
$user6_width = $this->params->get('user6_width');
$font = $this->params->get('font');
$font_content = $this->params->get('font_content');
$show_tooltips = $this->params->get('show_tooltips');
$js='<div class="js" ><a id="jslink" target="_blank" href="http://www.joomspirit.com" title="template joomla">template joomla</a></div>';
if ($this->params->get('fontSize') == '') {
		$fontSize ='11px'; } 
	else {
		$fontSize = $this->params->get('fontSize'); }

JHTML::_('behavior.mootools');
include_once(JPATH_ROOT . "/templates/" . $this->template . '/lib/php/layout.php');

?>
<?php echo '<?xml version="1.0" encoding="utf-8"?'.'>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >

<head>

<jdoc:include type="head" />

<!--	Google fonts	-->
<?php if ($font != 'JosefinSansStdLight') : ?>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo $font ; ?>" />
<?php endif; ?>

<!-- style sheet links -->
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/main.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ddmenuh.css" type="text/css" />
<link rel="stylesheet" media="screen" title="dynamic" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/dynamic_css.php&#63;font=<?php echo $font ; ?>&amp;font_content=<?php echo $font_content ; ?>&amp;color_website_name=<?php echo substr($color_website_name, 1) ; ?>&amp;color_link=<?php echo substr($color_link, 1) ; ?>" />

<!--[if lte IE 8]> 
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie8.css" type="text/css" />
<![endif]-->
<!--[if lte IE 7]> 
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie7.css" type="text/css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie6.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/lib/js/iepngfix_tilebg.js"></script>
<style type="text/css">
* { behavior: url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/lib/js/iepngfix.htc) }
</style>
<![endif]-->

<!-- MOOMENU VERTICAL	-->
<?php if ($show_tooltips == '1') : ?>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/lib/js/tooltips.js"></script>
<?php endif; ?>

</head>

<body <?php echo ('style="font-size:'.$fontSize.';"');?>>

<div id="wrapper" <?php echo ('style="width:'.$width.';"');?>>

	<?php if ($this->countModules( 'logo' )) : ?>
	<div id="logo">
		<jdoc:include type="modules" name="logo" style="xhtml" />
	</div>
	<?php else : ?>
	<div id="logo">
		<a href="index.php">
			<?php echo$website_name; ?>
		</a>
	</div>
	<?php endif; ?>
		
	<div class="pointille"></div>
				
	<?php if ($this->countModules( 'menu' )) : ?>
	<div id="nav_main">
		<jdoc:include type="modules" name="menu" style="xhtml" />
	</div>
	<?php endif; ?>

	<?php if($this->countModules('breadcrumb') ) : ?>
	<div class="breadcrumb">
		<jdoc:include type="modules" name="breadcrumb" style="xhtml" />
	</div>
	<?php endif; ?>

	<?php if($this->countModules('image') ) : ?>
	<div class="image">
		<jdoc:include type="modules" name="image" style="joomspirit" />
	</div>
	<?php endif; ?>	
	
	<div id="middle-website" class="<?php echo $border_content ; ?>" >
	
		<?php if($this->countModules('left')) : ?>
		<div class="left" style="width:<?php echo $width_left ; ?>;">
			<jdoc:include type="modules" name="left" style="joomspirit" />
		</div>
		<?php endif; ?>	
	
		<div id="content">
		
			<!--  USER 1, 2, 3 -->
			<?php if($this->countModules('user1') || $this->countModules('user2') || $this->countModules('user3')) : ?>
			<div id="users_top">
														
				<?php if($this->countModules('user1')) : ?>
				<div class="user1" <?php echo ('style="width:'.$user1_width.';"');?>>
					<jdoc:include type="modules" name="user1" style="joomspirit" />
				</div>
				<?php endif; ?>
									
				<?php if($this->countModules('user3')) : ?>
				<div class="user3" <?php echo ('style="width:'.$user3_width.';"');?>>
					<jdoc:include type="modules" name="user3" style="joomspirit" />
				</div>
				<?php endif; ?>
			
				<?php if($this->countModules('user2')) : ?>
				<div class="user2">
					<jdoc:include type="modules" name="user2" style="joomspirit" />
				</div>
				<?php endif; ?>
			
				<div class="clr"></div>
									
			</div>
			<?php endif; ?>  <!--	END OF USERS TOP	-->
			
			<div id="main_component" >
			
				<?php if($this->countModules('right')) : ?>
				<div class="right" style="width:<?php echo $width_right ; ?>;">
					<jdoc:include type="modules" name="right" style="joomspirit" />
				</div>
				<?php endif; ?>				
			
				<div class="main-content">
					<!--  MAIN COMPONENT -->
					<jdoc:include type="message" />
					<jdoc:include type="component" />
					<?php echo $copy ; ?>
				</div>	
					
			</div>
			
			<!--  USER 4, 5, 6 -->
			<?php if($this->countModules('user4') || $this->countModules('user5') || $this->countModules('user6')) : ?>
			<div id="users_bottom">
														
				<?php if($this->countModules('user4')) : ?>
				<div class="user4" <?php echo ('style="width:'.$user4_width.';"');?>>
					<jdoc:include type="modules" name="user4" style="joomspirit" />
				</div>
				<?php endif; ?>
									
				<?php if($this->countModules('user6')) : ?>
				<div class="user6" <?php echo ('style="width:'.$user6_width.';"');?>>
					<jdoc:include type="modules" name="user6" style="joomspirit" />
				</div>
				<?php endif; ?>
			
				<?php if($this->countModules('user5')) : ?>
				<div class="user5">
					<jdoc:include type="modules" name="user5" style="joomspirit" />
				</div>
				<?php endif; ?>
			
				<div class="clr"></div>
									
			</div>
			<?php endif; ?>  <!--	END OF USERS BOTTOM	-->
	
		</div>	<!-- END OF CONTENT	-->
		
		<div class="clr"></div>
		
	</div>		<!-- END OF MIDDLE WEBSITE	-->

	
	<div id="footer">
		
		<!--	SOCIAL LINKS	-->
		<?php if( ($this->params->get('twitter') != '') || ($this->params->get('blogger') != '') || ($this->params->get('facebook') != '') || ($this->params->get('rss') != '') || ($this->params->get('linkedin') != '') || ($this->params->get('myspace') != '') ) : ?>
		<div id="social-links">
		<ul>
			<?php if ($this->params->get('twitter') != '') : ?>
			<li><a target="_blank" id="twitter" title="Twitter" href="<?php echo $this->params->get('twitter') ?>">Twitter</a></li>
			<?php endif; ?>		
			<?php if ($this->params->get('blogger') != '') : ?>
			<li><a target="_blank" id="blogger" title="Blogger" href="<?php echo $this->params->get('blogger') ?>">Blogger</a></li>
			<?php endif; ?>
	
			<?php if ($this->params->get('delicious') != '') : ?>
			<li><a target="_blank" id="delicious" title="Delicious" href="<?php echo $this->params->get('delicious') ?>">Delicious</a></li>
			<?php endif; ?>
			<?php if ($this->params->get('facebook') != '') : ?>
			<li><a target="_blank" id="facebook" title="Facebook" href="<?php echo $this->params->get('facebook') ?>">Facebook</a></li>
			<?php endif; ?>
			<?php if ($this->params->get('rss') != '') : ?>
			<li><a target="_blank" id="rss" title="RSS" href="<?php echo $this->params->get('rss') ?>">RSS</a></li>
			<?php endif; ?>
			<?php if ($this->params->get('linkedin') != '') : ?>
			<li><a target="_blank" id="linkedin" title="Linkedin" href="<?php echo $this->params->get('linkedin') ?>">Linkedin</a></li>
			<?php endif; ?>
			<?php if ($this->params->get('myspace') != '') : ?>
			<li><a target="_blank" id="myspace" title="Myspace" href="<?php echo $this->params->get('myspace') ?>">Myspace</a></li>
			<?php endif; ?>
	
			<?php if ($this->params->get('flickr') != '') : ?>
			<li><a target="_blank" id="flickr" title="Flickr" href="<?php echo $this->params->get('flickr') ?>">Flickr</a></li>
			<?php endif; ?>
			<?php if ($this->params->get('youtube') != '') : ?>
			<li><a target="_blank" id="youtube" title="Youtube" href="<?php echo $this->params->get('youtube') ?>">Youtube</a></li>
			<?php endif; ?>
			<?php if ($this->params->get('vimeo') != '') : ?>
			<li><a target="_blank" id="vimeo" title="Vimeo" href="<?php echo $this->params->get('vimeo') ?>">Vimeo</a></li>
			<?php endif; ?>		
			
		</ul>
		</div>
		<?php endif; ?>
		
		<?php if($this->countModules('search')) : ?>
		<div id="search">
			<jdoc:include type="modules" name="search" style="xhtml" />
		</div>
		<?php endif; ?>
		
		<?php if($this->countModules('bottom_menu')) : ?>
		<div id="bottom_menu">
			<jdoc:include type="modules" name="bottom_menu" style="xhtml" />
		</div>
		<?php endif; ?>

		<?php if($this->countModules('adress')) : ?>
		<div id="adress">
			<jdoc:include type="modules" name="adress" style="xhtml" />
		</div>
		<?php endif; ?>
		
		
	</div>		<!-- end of footer	-->
	<div id="tmpl">
    <a id="tmpllink" href="http://www.oscohk.org" target="_blank">Template created by Wai Wong. &copy; 2012 Wai Wong. All right reserved.</a>
	</div>	
	
</div>	<!-- end of site	-->

</body>

</html>