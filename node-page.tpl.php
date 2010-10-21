<!-- start node-page.tpl.php -->
<div id="node-<?php print $node->nid; ?>" class="node <?php print $node_classes; ?>">
  	
	<div class="content clearfix">
	
		<?php if($intro): ?>
		<p class="intro">
			<?php print $intro; ?>
		</p>
		<?php endif; ?>
		
		<?php print $content; ?>
		
		<?php if($link_package): ?>
		
			<?php foreach($link_package as $package): ?>
				<div class="linkPacketImage">
					<a href="<?php print $package['link']; ?>"><?php print $package['image']; ?></a>
				</div>
				
				<div class="linkPacketText">
					<h3><?php print $package['title']; ?></h3>
					
					<p><?php print $package['blurb']; ?></p>
					
					<a href="<?php print $package['link']; ?>"><?php print $package['link_title']; ?></a>
				</div>
			<?php endforeach; ?>
		
		<?php endif; ?>
	</div>

</div>