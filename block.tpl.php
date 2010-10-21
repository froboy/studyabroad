<!-- start block.tpl.php -->
<div class="block-wrapper <?php print $block_zebra; ?>">
  <div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?>">
    <div class="block-inner">
      <?php if ($block->subject): ?>
      <h4 class="title block-title"><?php print $block->subject ?></h4>
      <?php endif; ?>
      <div class="content">
        <?php print $block->content ?>
      </div>
    </div><!-- /block-inner -->
  </div>
  <?php echo $edit_links; ?>
</div>
<!-- /end block.tpl.php -->