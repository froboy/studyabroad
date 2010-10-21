<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">

<head>
	<title><?php print $head_title; ?></title>
	<?php print $head; ?>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en-us" />
	<meta http-equiv="content-style-type" content="text/css" />
	<meta http-equiv="content-script-type" content="text/javascript" />
	<meta http-equiv="imagetoolbar" content="false" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	<meta name="language" content="en" />
	<meta name="copyright" content="Copyright (c) <?php print date('Y'); ?> The University of Chicago, All Rights Reserved." />
	<?php print $styles; ?>
	<?php print $scripts; ?>
	<!--[if lte IE 6]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE7.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php print base_path() . path_to_theme(); ?>/css/ie6.css" type="text/css" media="screen, projection" />
	<![endif]-->
	<!--[if IE 7]>
	<link rel="stylesheet" href="<?php print base_path() . path_to_theme(); ?>/css/ie7.css" type="text/css" media="screen, projection" />
	<![endif]-->
	<!--[if IE 8]>
	<link rel="stylesheet" href="<?php print base_path() . path_to_theme(); ?>/css/ie8.css" type="text/css" media="screen, projection" />
	<![endif]-->
</head>

<body class="<?php print $body_classes; ?>">

	<div id="backgroundHome">
	
		<div id="container">
		
				<h1><?php print $site_name; ?></h1>
				
				<div id="headerImg">
					<a href="<?php print $base_path; ?>" title="<?php print $site_name; ?>"><img src="<?php print base_path() . path_to_theme(); ?>/img/headerTitle.png" width="560" height="25" alt="<?php print $site_name; ?>" border="0" /></a>
				</div>
				
				<div id="headerUofC">
					<a href="http://www.uchicago.edu" title="UChicago Main Page"><img src="<?php print base_path() . path_to_theme(); ?>/img/headerUofC.png" width="332" height="15" alt="The University of Chicago" border="0" /></a>
				</div>
				
				<br class="clr" />
				
				<?php print $mainnav; ?>
				
				<div id="search">
					<form method="get" id="mainSearch" action="http://search.uchicago.edu/search">
						<input type="text" name="q" class="searchText" value="Search&#8230;" onfocus="if(this.value=='Search&#8230;')value=''" onblur="if(this.value=='')value='';" />
						<input id="searchButton" type="image" name="btnG" class="btn_search" value="Search" alt="Search" src="<?php print base_path() . path_to_theme(); ?>/img/searchIcon.png" onclick="document.mainSearch.submit()"/>
						<input type="hidden" name="site" value="default_collection" />
						<input type="hidden" name="client" value="default_frontend" />
						<input type="hidden" name="output" value="xml_no_dtd" />
						<input type="hidden" name="proxystylesheet" value="default_frontend" />
						<input type="hidden" name="oe" value="utf8" />
						<input type="hidden" name="ie" value="utf8" />
						<label for="local"><input id="local" type="radio" name="sitesearch" value="study-abroad.uchicago.edu" checked="checked" /> Study Abroad</label>
						&nbsp;&nbsp;
						<label for="all">
						<input id="all" type="radio" name="sitesearch" value="" /> UChicago</label>
					</form>
				</div><!--search-->
				
				<br class="clr" />
			
			<div id="containerPage">
				<?php /* if ($leftsidebar): ?>
					<?php print '<div id="leftSidebarTopGradient"></div>
					<div id="leftSidebar">' . $tuition.$leftsidebar . '</div><!--leftSidebar-->'; ?>
				<?php endif; */?>
				<div id="leftSidebarTopGradient"></div>
					<div id="leftSidebar"><?php print $group_finances_rendered ?></div><!--leftSidebar-->
				
				<div id="contentPage">
				
			        <?php if ($breadcrumb || $title || $tabs || $help || $messages): ?>
			          <div id="content-header">
			            <?php if ($title): ?>
			              <h2 class="title"><?php print $title; ?></h2>
			            <?php endif; ?>
			            <?php print $messages; ?>
			            <?php if ($tabs): ?>
			              <div class="tabs"><?php print $tabs; ?></div>
			            <?php endif; ?>
			            <?php print $help; ?>
			          </div> <!-- /#content-header -->
			        <?php endif; ?>
			        hi
			        <?php print $content; ?>
					
				</div><!--contentPage-->
				
				<?php if ($rightsidebar): ?>
					<?php print $right_gradient; ?>
					<div id="rightSidebar<?php if($take_action) { print '-takeaction'; } ?>"><?php print $rightsidebar; ?></div><!--/rightSidebar-->
				<?php endif; ?>
						
			</div><!--containerPage-->
			
			<br class="clr" />
			
		</div><!--container-->
		
		<div id="backgroundMainFooter">
		
			<?php print $footer; ?>
		
			<div id="mainFooter">
			
				<div id="wordmark">
					<img src="<?php print base_path() . path_to_theme(); ?>/img/wordmark.png" width="286" height="60" alt="The University of Chicago Wordmark" />
				</div>
				
				<div id="footerNav">
					<a href="<?php print base_path() ?>about-college/college-directory">College Directory</a> | <a href="http://directory.uchicago.edu">University Directory</a> | <a href="http://maps.uchicago.edu">Maps</a> | <a href="http://webmail.uchicago.edu">Webmail</a> | <a href="http://alumniandfriends.uchicago.edu/site/c.mjJXJ7MLIsE/b.4464735/k.B7E4/Give.htm">Make a Gift</a> | <a href="/contact">Contact Us</a> | <a href="/contact">Website Feedback</a>
					<br />
					<br />
					
					&copy; 2009 The University of Chicago<br />
					5801 South Ellis Ave. Chicago, IL 60637 | 773.702.1234
				</div>
				
			</div><!--mainFooter-->
			
		</div><!--backgroundMainFooter-->
		
		<div id="backgroundFooterImgs">
		
			<div id="containerFooterImgs">
			
				<div class="footerImgs">
					<img src="<?php print base_path() . path_to_theme(); ?>/img/footerImg1.png" height="145" width="179" alt="Footer Image 1" />
					<img src="<?php print base_path() . path_to_theme(); ?>/img/footerImg2.png" height="145" width="120" alt="Footer Image 2" />
					<img src="<?php print base_path() . path_to_theme(); ?>/img/footerImg3.png" height="145" width="105" alt="Footer Image 3" />
					<img src="<?php print base_path() . path_to_theme(); ?>/img/footerImg4.png" height="145" width="148" alt="Footer Image 4" />
					<img src="<?php print base_path() . path_to_theme(); ?>/img/footerImg5.png" height="145" width="122" alt="Footer Image 5" />
					<img src="<?php print base_path() . path_to_theme(); ?>/img/footerImg6.png" height="145" width="132" alt="Footer Image 6" />
					<img src="<?php print base_path() . path_to_theme(); ?>/img/footerImg7.png" height="145" width="154" alt="Footer Image 7" class="borderRight" />
				</div>
				
			</div><!--containerFooterImgs-->
			
		</div><!--backgroundFooterImgs-->
		
		<?php print $closure; ?>
		
<script type="text/javascript">
//Creating qTips
$.fn.qtip.styles.standard = {
	tip: 'bottomRight',
	padding: 10,
	background: '#767676',
	color: '#FFFFFF',
	fontSize: '1.05em',
	lineHeight: '1.4em',
	border: {
		width: 1,
		radius: 6,
		color: '#767676'
	}
}
$('.studVoice').qtip({
	content: '',
	position: { adjust: { x: -16, y: 1 } },
	style: {
		height: 16,
		width: 88,
		padding: 0,
		backgroundImage: 'url(<?php print path_to_theme(); ?>/img/studVoiceTip.png)',
		backgroundColor: 'transparent',
		color: '#FFFFFF',
		fontSize: '0.85em',
		border: 0
	}
})
$('a[href][title].toolTip').qtip({
	content: {
		text: false // Use each elements title attribute
	},
	style: { 
 	tip: 'leftTop',
	border: {
		width: 4,
		radius: 4,
		color: '#767676'
	},
	background: '#767676',
	color: '#fff',
	name: 'standard'
   }
})
</script>


</body>
</html>