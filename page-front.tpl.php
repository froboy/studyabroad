<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">

<head>
	<title><?php print $head_title; ?></title>
	<?php print $head; ?>
	<?php print $styles; ?>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en-us" />
	<meta http-equiv="content-style-type" content="text/css" />
	<meta http-equiv="content-script-type" content="text/javascript" />
	<meta http-equiv="imagetoolbar" content="false" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	<meta name="language" content="en" />
	<meta name="copyright" content="Copyright (c) <?php print date('Y'); ?> The University of Chicago, All Rights Reserved." />
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
				<?php //dsm($mainnav); ?>
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
			<div id="content">
				
				<!--div id="map">
				<?php //print $home_map; ?>
				</div--><!--feature-->
				
				<div class="indexLeft">			
	      			<div class="eventsTopGradient"></div>
	      			
					<div class="events">
		              	<img style="" src="<?php print base_path() . path_to_theme(); ?>/img/weTakeUChicagoAbroad-index-lt-trans.png">
						<?php print '<p class="first">Faculty-taught '.l('civilization courses','programs/byType/civilization').', intense '.l('language immersion','programs/byType/intensive-language').', and '.l('year-long exchanges','programs/byType/year-long').' are just a few ways UChicago Abroad promotes '.l('dynamic engagement beyond the classroom','programs/our-mission').'.</p>
						<p>From the '.l('Center in Paris','http://centerinparis.uchicago.edu').' to the Center in Beijing to '.l('sites worldwide','programs/map').', Chicago students live the life of the mind abroad, '.l('one great city at a time','programs').'.</p>'; ?>	
					</div><!--events-->	
						<div class="subnav">
									<a href="<?php print base_path(); ?>programs/byType/civilization" class="civPrograms">Journey to a brand new <br>(or ancient) civilization</a>
									<a href="https://sitg.uchicago.edu/" class="sitg">Get funded to study abroad</a>
									<a href="http://centerinparis.uchicago.edu" class="centerInParis">Explore European thought and culture</a>
									<a href="<?php print base_path(); ?>beyond-basics" class="tips">Tips for travel abroad</a>
									<a href="<?php print base_path(); ?>contests" class="contests">Enter our photo, video, or writing contests</a>
						</div>		
						
					</div><!--indexLeft-->
					<div id="feature">
					<?php print $feature; ?>
					</div>
					<?php if ($rightsidebar): ?>
					<div id="indexRight"><div class="indexBox3"><div class="indexBox3Top"><img alt="Abroad Now" src="<?php print base_path() . path_to_theme(); ?>/img/abroadNow.png"><span class="hide">College Now</span></div><?php print $rightsidebar; ?></div></div><!--/rightSidebar-->
					<div id="testimonial"><?php print $testimonial ?></div>
				<?php endif; ?>
					<br class="clr" />
				
			</div><!--content-->
			
		</div><!--container-->	
		
		<div id="backgroundMainFooter">
		
			<div id="mainFooter">
			
				<div id="wordmark">
					<img src="<?php print base_path() . path_to_theme(); ?>/img/wordmark.png" width="286" height="60" alt="The University of Chicago Wordmark" />
				</div>
				
				<div id="footerNav">
					 <a href="<?php print base_path() ?>about">Contact Us</a> | <a href="http://centerinparis.uchicago.edu">Center in Paris</a> | <a href="http://sitg.uchicago.edu">SITG</a> | <a href="http://college.uchicago.edu">The College</a> | <a href="<?php print base_path() ?>contests">Contests</a> | <a href="/contact">Website Feedback</a> 
					
					<br />
					<br />
					
					&copy; 2010 The University of Chicago<br />
					Study Abroad Office, Harper 203<br/>
					1116 E 59th St, Chicago, IL 60637 | 773.702.9442
				</div>
				
				<?php print $footer; ?>
				
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
$('.mainfeature .view-content').cycle({ 
    fx:     'cover',
    direction: 'down', 
    speed:  'slow', 
    timeout: 0, 
    after: onAfter,
    pause:	1,
    pauseOnPagerHover: 1,
    pager:  '.featnav .item-list ul',
    pagerAnchorBuilder: function(idx, slide) { 
        // return selector string for existing anchor 
        return '.featnav .item-list ul li:eq(' + idx + ') a'; 
    } 
});
function onAfter(){
sIFR.replace(studyabroadsitesajsuchicagoedustudyabroadfilesrendergothamswf, { "font": "/study-abroad/sites/ajs.uchicago.edu.study-abroad/files/render/gotham.swf", "selector": ".mainfeature h2.title", "css": { ".sIFR-root": { "display": "inline", "font-size": "25px", "font-weight": "normal", "font-style": "normal", "color": "#c97a3f", "background-color": "#f7f6f1", "margin-left": 0, "margin-right": 0, "text-align": "left", "text-indent": 0, "text-transform": "none", "text-decoration": "none", "letter-spacing": 0, "opacity": "100", "leading": 0, "kerning": "false", "cursor": "arrow" }, "a": { "text-decoration": "none" }, "a:link": { "color": "#000000" }, "a:hover": { "color": "#666666", "text-decoration": "none" } }, "wmode": "opaque", "fontname": "studyabroadsitesajsuchicagoedustudyabroadfilesrendergothamswf" });
};
//Creating homepage qTips
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
$('.featureInfo').qtip({
	content: '<h3>About our Features\<\/h3>The videos, slideshows, and stories featured here are created by College students. <a href="<?php print base_path(); ?>about-our-features">Find out more &raquo;</a>',
	position: {corner: {target: 'topMiddle',tooltip: 'bottomRight'}},
	hide: { when: 'mouseout', fixed: true, delay: 500 },
	style: {name: 'standard', tip: {color: '#767676'}}
})
$('.featureArchive').qtip({
	content: '<h3>Feature Archives<\/h3>The features in this space change weekly. Relive the drama, excitement, and glory: <a href="<?php print base_path(); ?>archives">Peruse the archives &raquo;</a>',
	position: {corner: {target:'topMiddle',tooltip: 'bottomRight'}},
	hide: { when: 'mouseout', fixed: true, delay: 500 },
	style: {name: 'standard', tip: {color: '#767676'}}
})
$('.featureSubmit').qtip({
	content: '<h3>Submit a Feature<\/h3>Got an amazing story to tell in video, photos, or prose? We\'d love to consider it for inclusion here.<br /><a href="#">Submit a feature &raquo;</a>',
	position: {corner: {target:'topMiddle',tooltip: 'bottomRight'}},
	hide: { when: 'mouseout', fixed: true, delay: 500 },
	style: {name: 'standard', tip: {color: '#767676'}}
})
$('.currentNavToolTip').qtip({
	content: '<h3>myUChicago:<br /> Launching Late Fall 2009<\/h3>Check your schedule. Review your account. Search the Library. See the weather. Read the news. Do it all at myUChicago.',
	position: {corner: {target:'topMiddle',tooltip: 'bottomRight'}, adjust: { x: -75, y: 20 }},
	hide: { when: 'mouseout', fixed: true, delay: 500 },
	style: {name: 'standard', tip: {color: '#767676'}}
})
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
</script>
</body>
</html>