<?php
// $Id: template.php,v 1.1.4.6 2008/11/22 00:53:22 stevek Exp $

//
//	from ZEN // Override or insert PHPTemplate variables into the page templates.
//	
//	 This function creates the body classes that are relative to each page
//	
//	@param $vars
//	  A sequential array of variables to pass to the theme template.
//	@param $hook
//	  The name of the theme function being called ("page" in this case.)
//

function studyabroad_preprocess_page(&$vars, $hook) {
	global $theme;
	
	//custom output for primary menu
	$studyabroad_primary_menu = menu_tree_page_data('primary-links');
	$vars['mainnav'] = studyabroad_print_nav($studyabroad_primary_menu, 'mainNav');
	
	/*custom output for events region on front page
	$vars['events'] = studyabroad_print_events(
		'<script src="http://event.uchicago.edu/widgets/list.php?key=40f1255c33c65ed53967c9c2acb3634c&id=407" type="text/javascript"></script>', 
		'http://event.uchicago.edu/widgets/rss.php?key=40f1255c33c65ed53967c9c2acb3634c&id=408'
	);*/
	
	// Build array of helpful body classes
	$body_classes = array();
	
	// Page user is logged in
	$body_classes[] = ($vars['logged_in']) ? 'logged-in' : 'not-logged-in';
	
	// Page is front page
	$body_classes[] = ($vars['is_front']) ? 'front' : 'not-front';
	
	if (isset($vars['node'])) {
		$body_classes[] = ($vars['node']) ? 'full-node' : '';                                               // Page is one full node
		$body_classes[] = (($vars['node']->type == 'forum') || (arg(0) == 'forum')) ? 'forum' : '';         // Page is Forum page
		$body_classes[] = ($vars['node']->type) ? 'node-type-'. $vars['node']->type : '';         			// Page has node-type-x, e.g., node-type-page
	}
	else {
		$body_classes[] = (arg(0) == 'forum') ? 'forum' : '';								// Page is Forum page
		$body_classes[] = ($vars['is_front']) ? '' : 'node-type-page';                      // Set same styling as page node types                     
	}
	
	//determine if sidebar regions in body class
	if($vars['leftsidebar'] || $vars['rightsidebar'] || $vars['takeaction'] || $vars['collegenow']) {
		$sidebar_regions = 'sidebar';
		$sidebar_regions .= ($vars['leftsidebar']) ? '-left' : '';
		$sidebar_regions .= ($vars['rightsidebar']) ? '-right' : '';
		$sidebar_regions .= ($vars['collegenow']) ? '-collegenow' : '';
		$body_classes[] = $sidebar_regions;
	}
	
	$body_classes = array_filter($body_classes);                                                            // Remove empty elements
	
		// Generate menu tree from source of primary links
	$vars['primary_links_tree'] = menu_tree(variable_get('menu_primary_links_source', 'primary-links'));
	
	//set gradient in rightSidebar & take action header
	//$vars['right_gradient'] = '<div id="rightSidebarTopGradient"></div>';

	/*is take action now block active?
	if(variable_get('uofc_sa_take_action', FALSE)) {
		$vars['take_action'] = '-takeaction';
		$vars['right_gradient'] = '';
		dpm('here');
		//add take action start and close div
		$theme_path = base_path() . drupal_get_path('theme', 'studyabroad');
		$start = '<div class="takeActionTop"><img src="' . $theme_path . '/img/takeActionTop.png" alt="Take Action" /><h2 class="hide">'. t('Take Action') .'</h2></div><!--top-->';
		$close = '<div class="takeActionBottom"><img src="' . $theme_path . '/img/takeActionBottom.png" alt="Take Action Bottom Background" /></div><!--bottom-->';
		$vars['rightsidebar'] = $start . $vars['rightsidebar'] . $close;
		
		variable_set('uofc_sa_take_action', FALSE);
	}*/

	if(stripos($vars['content'], 'class="expand_heading"')) {
		//dpm ($vars);
		//print_r(explode('<h3 class="expand_heading">',$vars['content'],2));
		//$vars['content'] = str_replace('<H3','<h3',$vars['content']);
		$c = preg_split('/(<[a-zA-Z0-9]+ class="expand_heading">)/',$vars['content'],2,PREG_SPLIT_DELIM_CAPTURE);
		//dpm($c);
		$vars['content'] = $c[0].'<p class="expand_all"><a href="#">Expand / Collapse All</a></p>'.$c[1].$c[2];
	}
	
	//custom actions for certain paths
	$path = drupal_get_path_alias(check_plain($_GET['q']));
	if($path == 'programs/map') {
		$vars['rightsidebar'] = NULL; // Kill the right sidebar if it exists
		$s = array_search('sidebar-left-right',$body_classes); // Restore the right body class
		$body_classes[$s] = 'sidebar-left';
	}
	
	if($path == 'programs' || strpos($path,'programs/byType')==0 || $path == 'programs/byTerm') {
		drupal_add_js(drupal_get_path('theme', 'studyabroad') . '/js/jquery.tablesorter.min.js');
	}
	//don't need uc_count since view is sorted to show first in list
	//$uc_count = (uniquely_chicago_count() >= 0) ? uniquely_chicago_count() : 0;
	/*pick uniquely chicago template
	if($path == 'uniquely-chicago') {
		$vars['template_files'][0] = 'page-uniquelychicago';
		$addthis = 'var addthis_config = { username: \'nsitwebservices\', services_compact:\'email, facebook, twitter, digg\' }';
		drupal_add_js($addthis, 'inline');
		jcarousel_add('#uniquecarousel', array('start' => 1));
		$vars['scripts'] = drupal_get_js();
		drupal_add_css(drupal_get_path('theme', 'alice') . '/css/jcarousel/skins/tango/skin.css', 'theme');
		$vars['styles'] = drupal_get_css();
		$body_classes[] = 'uniquely-chicago';
	}
	//add showhide functionality
	if(($path == 'academics-advising/majors-minors') 
		|| ($path == 'about-college/college-directory')
		|| ($path == 'academics-advising/tutoring-study-skills-mentoring/college-tutors/faq')) {
		drupal_add_js(drupal_get_path('theme', 'alice') . '/js/jquery.showhide.js');
		$vars['scripts'] = drupal_get_js();
	}
	//addthis functionality
	if(($vars['node']->type == 'video') || ($vars['node']->type == 'story') || ($vars['node']->type == 'slideshow')) {
		$addthis = 'var addthis_config = { username: \'nsitwebservices\', services_compact:\'email, facebook, twitter, digg\' }';
		drupal_add_js($addthis, 'inline');
		$vars['scripts'] = drupal_get_js();
	}
	//add highlight functionality
	if(($path == 'planning-your-future')) {
		drupal_add_js(drupal_get_path('theme', 'alice') . '/js/jquery.highlight.js');
		$vars['scripts'] = drupal_get_js();
	}
	//add Issuu SmartLook code - Avi
	if($path == 'about-college/college-publications') {
        	$vars['closure'] .= '
			<!-- smartlook includes -->
			<script type="text/javascript">
    				var issuuConfig = {
        				guid: "5d01cee5-965c-40ec-aaad-20f39b5d24c6",
        				domain: "*.froboy.org"
    				};
			</script>
			<script type="text/javascript">
    				document.write(unescape("%3Cscript src=\'http://static.issuu.com/smartlook/ISSUU.smartlook.js\' type=\'text/javascript\'%3E%3C/script%3E"));
			</script>
			<!-- end smartlook includes --> 
			';
    }
    //add speaker nomination form actions -Avi
	if(($path == 'spring-convocation-2010-speaker-nomination')) {
		drupal_add_js(drupal_get_path('theme', 'alice') . '/js/jquery.nominationform.js');
		$vars['scripts'] = drupal_get_js();
	}	*/

	$vars['body_classes'] = implode(' ', $body_classes);     // Create class list separated by spaces
}

function studyabroad_print_nav($primary_menu, $id = NULL) {
	$output = ($id) ? '<ul id="' . $id . '">' : '<ul>';
	
	foreach ($primary_menu as $menu_data) {
 
		$item = $menu_data['link'];
	    $alias = drupal_get_path_alias($item['link_path']);
	    $class = '';
	    
	    //skip hidden items
	    if($item['hidden']) {
	    	continue;
	    }
	    
	    //set class for menu items
	    switch ($alias) {
	    	case 'programs':
	    		$class = 'programsNav';
	    		break;
	    	case 'apply':
	    		$class = 'howToApplyNav';
	    		break;
	    	case 'health-safety':
	    		$class = 'healthNav';
	    		break;
	    	case 'tuition':
	    		$class = 'tuitionNav';
	    		break;
	    	case 'about':
	    		$class = 'aboutNav';
	    		break;
	      	case 'beyond-basics':
	    		$class = 'beyondNav';
	    		break;
	    	default:
	    		$class = $alias;
	    }

	    //build html
	    $output .= '<li class="' . $class . '"><a href="'. base_path() . $alias . '" title="' . $item['title'] . '" class="' . $class . '"><span class="hide">' . $item['title'] . '"</span></a>';
	    
	    if ($item['has_children']) {
	    	$output .= '<ul>';
	    	
	    	foreach ($menu_data['below'] as $child_menu_data) {
		      	$child_item = $child_menu_data['link'];
		      	$child_alias = ($child_item['external'] == 1) ? $child_item['href'] : base_path() . drupal_get_path_alias($child_item['link_path']);
		      	
		        $output .= '<li><a href="' . $child_alias . '">' . $child_item['title'] . '</a></li>';
	      	}
	      	
	      	$output .= '</ul>';	      	
	    }
	    
	    $output .= '</li>';
  	}
	$output .= '</ul>';
	
	return $output; 
}

//
//	from ZEN // Override or insert PHPTemplate variables into the node templates.
//	
//	 This function creates the NODES classes, like 'node-unpublished' for nodes
//	 that are not published, or 'node-mine' for node posted by the connected user...
//	
//	@param $vars
//	  A sequential array of variables to pass to the theme template.
//	@param $hook
//	  The name of the theme function being called ("node" in this case.)
//

function studyabroad_preprocess_node(&$vars, $hook) {
	global $user;
	
	// Special classes for nodes
	$node_classes = array();
	if ($vars['sticky']) {
		$node_classes[] = 'sticky';
	}
	
	if (!$vars['node']->status) {
		$node_classes[] = 'node-unpublished';
		$vars['unpublished'] = TRUE;
	}
	else {
		$vars['unpublished'] = FALSE;
	}
	
	if ($vars['node']->uid && $vars['node']->uid == $user->uid) {
		// Node is authored by current user
		$node_classes[] = 'node-mine';
	}
	
	if ($vars['teaser']) {
		// Node is displayed as teaser
		$node_classes[] = 'node-teaser';
	}
	
	// Class for node type: "node-type-page", "node-type-story", "node-type-my-custom-type", etc.
	$node_classes[] = 'node-type-'. $vars['node']->type;
	$vars['node_classes'] = implode(' ', $node_classes); // Concatenate with spaces
	
	//make content only what is in the body field
	//exclude webforms
	$vars['content'] = ($vars['type'] != 'webform') ? $vars['node']->content['body']['#value'] : $vars['content'];
	
	if($vars['node']->type == 'page') {
		/** PAGES **/
		$vars['intro'] = $vars['field_intro'][0]['value'];
	}
	//if($vars['node']->type == 'program') {
		/** PROGRAMS **/
		//dsm($vars);
		//$vars['tuition'] = $vars['field_tuition'][0]['view'];
		

	//}

}

//
// from ZEN // Override or insert PHPTemplate variables into the block templates.
//
//	This function create the EDIT LINKS for blocks and menus blocks.
//	When overing a block (except in IE6), some links appear to edit
//	or configure the block. You can then edit the block, and once you are
//	done, brought back to the first page.
//
// @param $vars
//   A sequential array of variables to pass to the theme template.
// @param $hook
//   The name of the theme function being called ("block" in this case.)
/* 

function studyabroad_preprocess_block(&$vars, $hook) {
  $block = $vars['block'];

  if (user_access('administer blocks')) {
    // Display 'edit block' for custom blocks
    if ($block->module == 'block') {
      $edit_links[] = l( t('edit block'), 'admin/build/block/configure/'. $block->module .'/'. $block->delta, array('title' => t('edit the content of this block'), 'class' => 'block-edit'), drupal_get_destination(), NULL, FALSE, TRUE);
    }
    // Display 'configure' for other blocks
    else {
      $edit_links[] = l(t('configure'), 'admin/build/block/configure/'. $block->module .'/'. $block->delta, array('title' => t('configure this block'), 'class' => 'block-config'), drupal_get_destination(), NULL, FALSE, TRUE);
    }

    // Display 'edit menu' for menu blocks
    if (($block->module == 'menu' || ($block->module == 'user' && $block->delta == 1)) && user_access('administer menu')) {
      $edit_links[] = l(t('edit menu'), 'admin/build/menu', array('title' => t('edit the menu that defines this block'), 'class' => 'block-edit-menu'), drupal_get_destination(), NULL, FALSE, TRUE);
    }
    $vars['edit_links_array'] = $edit_links;
    $vars['edit_links'] = '<div class="edit">'. implode(' ', $edit_links) .'</div>';
  }
  
  //set take action html to print
  $takeaction = explode('_', $block->delta);
  if($takeaction[0] == 'takeaction') {
  	variable_set('uofc_sa_take_action', TRUE);
  }
}*/

function studyabroad_preprocess_user_profile(&$vars, $hook) {
	$account = $vars['account'];
	$profile = $vars['profile'];
	
	// Reorder the userreference program list to alpha
	
	// Read the array, sort, then rewrite to $vars
	$program = $vars['account']->userreference['program'];
	if($program){
		asort($program);
		unset($vars['account']->userreference['program']);
		$vars['account']->userreference['program'] = $program;
	
		// Clear and rebuild userreference array
		unset($vars['account']->content['userreference']);
		// From userreference.module
		  if (!empty($account->userreference)) {
		    $node_types = content_types();
		    $additions = array();
		    $values = array();
		    foreach ($account->userreference as $node_type => $nodes) {
		      foreach ($nodes as $nid => $title) {
		        $values[$node_type][] = l($title, 'node/'. $nid);
		      }
		      if (isset($values[$node_type])) {
		        $additions[] = array(
		          '#type' => 'user_profile_item',
		          '#title' => check_plain($node_types[$node_type]['name']),
		          '#value' => theme('item_list', $values[$node_type]),
		        );
		      }
		    }
		    if ($additions) {
		      $account->content['userreference'] = $additions + array(
		        '#type' => 'user_profile_category',
		        '#attributes' => array('class' => 'user-member'),
		        '#title' => t('Related content'),
		        '#weight' => 10,
		      );
		    }
		  }
		//End userreference.module code
	}
		
	// Make me some nice variables
	$vars['profile']['programs'] = $account->content['userreference'][0]['#value'];
	$vars['profile']['info'] = $account->content['Personal Information']['#children'];
}

function studyabroad_date_all_day_label() {
  return '';
}

function studyabroad_preprocess_views_view_fields__abroad_now(&$variables){
	$variables['foo'] = 'bar';
	dsm('hello');
}

function studyabroad_preprocess_views_view_fields__feature__block_1(&$vars) {
	//$vars['foo'] = 'bar';
	//dsm($vars);

}
