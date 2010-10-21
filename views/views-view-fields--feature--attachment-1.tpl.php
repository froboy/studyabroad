<?php
// $Id: views-view-fields.tpl.php,v 1.6 2008/09/24 22:48:21 merlinofchaos Exp $
/**
 * @file views-view-fields.tpl.php
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->separator: an optional separator that may appear before a field.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
	<?php /*$i = $fields[counter]->content; $img = $fields[field_feature_image_fid_1]->content; ?>
		<style type="text/css">
		#navfeat<?php print $i;?>{background-image: url("<?php print $img; ?>");}
	</style>
<?php $style = 'style="background-image:url("'.$img.'");"'; ?>
	<?php print '<li id="navfeat'.$i.'" '.(($i==1) ? 'class="on"' : '').'>Homepage Feature '.$i.'</li>';*/?>
<?php 
	$b = $fields['body']->content;
	$l = $fields['field_link_url']->content;
	//dpm($b);
	
	if ($b == '<br />' || $b == ''){
		if ($l != ''){
			$fields['path']->content = $l;
			//dpm($fields);
		}
		else{
			//$fields['title']->content = $fields['title']->raw;
		}
	} 
	
	$link = $fields['path']->content;
	$img = $fields['field_feature_image_fid_1']->content;
	$t = $fields['title']->content;
	
	?>
	
<?php print l('<span class="featNavTitle">'.$t.'</span>'.$img,$link,array('attributes'=> array('title'=>$t, 'alt'=>$t), 'html'=>TRUE)); ?>

