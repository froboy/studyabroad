<!-- start node-program.tpl.php -->
<div id="node-<?php print $node->nid; ?>" class="node <?php print $node_classes; ?>">
  
  <?php print $picture ?>
  
  <div class="content clearfix">
    <?php print $content ?>
  </div>
  
  <?php if ($links): ?>
  <div class="links">
    <?php print $links; ?>
  </div>
  <?php endif; ?>

</div>
<!-- /#node-<?php print $node->nid; ?> -->