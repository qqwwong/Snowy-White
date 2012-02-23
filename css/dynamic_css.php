<?php
header("Content-type: text/css");
if (isset($_GET['color_link'])) 
{ $color_link = $_GET['color_link'];}
else { $color_link = 'ff0000'; }
if (isset($_GET['color_website_name'])) 
{ $color_website_name = $_GET['color_website_name'];}
else { $color_website_name = 'ff0000'; }
if (isset($_GET['font'])) 
{ $font = $_GET['font'];}
else { $font = 'arial'; }
if (isset($_GET['font_content'])) 
{ $font_content = $_GET['font_content'];}
else { $font_content = 'arial'; }
?>

/**		COLOR  WEBSITE NAME		**/

#logo a {
color : #<?php echo $color_website_name ; ?>;
}

/**		COLOR LINK	**/

.moduletable > h3 span {
color : #<?php echo $color_link ; ?>;
}

a:hover {
color : #<?php echo $color_link ; ?>;
}

#breadcrumb a:hover {
color : #<?php echo $color_link ; ?>;
}

a.readon:hover {
color : #<?php echo $color_link ; ?>;
}


/* 
*	left menu
*/

.submenu li a:hover, .submenu li#current a, .submenu li.active a,
.submenu li#current.parent a, .submenu li.active a {
color : #<?php echo $color_link ; ?>;
}

.submenu li a:hover li a, .submenu li#current li a, .submenu li.active li a {
color : #<?php echo $color_link ; ?>;
}

.submenu li li a:hover, .submenu li li#current a, .submenu li li.active a, .submenu li li#current.parent a,
.submenu li#current li a:hover, .submenu li.active li a:hover, .submenu li.parent li a:hover {
color : #<?php echo $color_link ; ?>;
}

.submenu ul li li li a:hover, .submenu ul li li li#current a, .submenu ul li li li.active a,
.submenu li.active li#current li a:hover {
color : #<?php echo $color_link ; ?>;
}

.submenu li li li a:hover, .submenu li li li#current a, .submenu li li li.active a, .submenu li li li#current.parent a,
.submenu li li#current li a:hover, .submenu li li.active li a:hover, .submenu li li.parent li a:hover {
color : #<?php echo $color_link ; ?>;
}

/**		BOTTOM MENU	**/

#bottom_menu a:hover, #bottom_menu a#active_menu-nav, #bottom_menu li#current a {
color : #<?php echo $color_link ; ?>;
}


/**		MAIN MENU	**/

/** si est actif **/
#main_menu .active a {
color : #<?php echo $color_link ; ?>;
}

/** si est actif 2+	**/
#main_menu ul .active a {
color : #<?php echo $color_link ; ?>;
}

/** si parent actif et enfant actif **/
#main_menu li.active li a:hover, #main_menu li li.active li a:hover, #main_menu li li li.active li a:hover,
#main_menu li.active li.sfhover a, #main_menu li li.active li.sfhover a, #main_menu li li li.active li.sfhover a,
#main_menu li.active li.sfhover span.separator, #main_menu li li.active li.sfhover span.separator {
color : #<?php echo $color_link ; ?>;
}

/** si est parent actif **/
#main_menu li.active a {
color : #<?php echo $color_link ; ?>;
}

/** si est survolÈ**/
#main_menu li a:hover, #main_menu li a:hover, #main_menu li span.separator:hover, #main_menu li span.separator:hover,
#main_menu li.sfhover a, #main_menu li.sfhover span.separator {
color : #<?php echo $color_link ; ?>;
}

/** si est survolÈ 2+	**/
#main_menu li li a:hover, #main_menu li li li a:hover, #main_menu li li a:hover, #main_menu li li li a:hover, #main_menu li li a:hover, #main_menu li li li a:hover,
#main_menu li.active li a:hover, #main_menu li li.active li a:hover, #main_menu li li li.active li a:hover,
#main_menu li.active li.active a:hover, #main_menu li li.active li.active a:hover, #main_menu li li li.active li.active a:hover,
#main_menu li li span.separator:hover, #main_menu li li.sfhover a, #main_menu li li.sfhover span.separator, #main_menu li li a:hover, #main_menu li li span.separator:hover,
#main_menu li li.sfhover a, #main_menu li li.sfhover span.separator, #main_menu li li li a:hover, #main_menu li li li a:hover,
#main_menu li li li.sfhover a, #main_menu li li li.sfhover span.separator {
color : #<?php echo $color_link ; ?>;
}

/** si courant survolÈ **/
#main_menu li.active li a:hover, #main_menu li.active li.sfhover a {
color : #<?php echo $color_link ; ?>;
}

#main_menu li a:hover, #main_menu li span.separator:hover, #main_menu li.sfhover span.separator, #main_menu li.sfhover a {
color : #<?php echo $color_link ; ?>;
}

#main_menu li.active a, #main_menu li.active li.active a, #main_menu li.active li.active li.active a,
#main_menu li.active span.separator, #main_menu li.active li.active span.separator, #main_menu li.active li.active li.active span.separator {
color : #<?php echo $color_link ; ?>;
}


/**		FONT	**/

h1, .componentheading, h2, h3, h4 {
font-family: '<?php echo $font ; ?>', 'Yanone Kaffeesatz';
}

#main_menu li a, #main_menu li span.separator {
font-family: '<?php echo $font ; ?>', 'Yanone Kaffeesatz';
}

.left h3, .right h3, .user1 h3, .user2 h3, .user3 h3, 
.user4 h3, .user5 h3, .user6 h3 {
font-family: '<?php echo $font ; ?>', 'Yanone Kaffeesatz';
}

body {
font-family: '<?php echo $font_content ; ?>';
}