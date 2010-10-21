<!-- start block.tpl.php -->
      <div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?>">
      <?php if ($block->subject): ?>
      <h4 class="title block-title"><?php print $block->subject ?></h4>
      <?php endif;?>
      <div class="content">
        <?php print $block->content ?>
      </div>
      </div>
<!-- /end block.tpl.php -->