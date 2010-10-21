<!-- start node-story.tpl.php -->
<div id="node-<?php print $node->nid; ?>" class="node <?php print $node_classes; ?>">
  
	<!--h2 class="title"><?php //print $title ?></h2-->
	<?php //dpm($node);?>
	<div class="content clearfix">
		<?php /*<div class="storyImage">
			<?php print $node->field_feature_image[0][view]; ?>
		</div>

		<div class="storyDetail">
			<p class="bottom">
			<?php print $intro; ?><br />
			<span class="byline">Submitted by <?php print $byline_name . $byline; ?><br />Photo by <?php print $photo_credit; ?></span>
			</p>
		</div>
	
		<hr />
		
		<div class="pullQuoteBackground"></div>
		<div class="pullQuote">
			<?php print $pullquote; ?>
		</div>
		
		<div class="storyContent">
			<?php print $content; ?>
		</div>*/?>
		
		<div class="imgrt">
			<?php print $node->field_feature_image[0][view]; ?>
		</div>
			<?php print $content; ?>
	</div>

</div>