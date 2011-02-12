<?php
// $Id: page.tpl.php,v 1.1 2011/01/07 16:10:59 himerus Exp $

/**
 * @file
 * Theme implementation to display a single Drupal page.
 */
?>
<div id="page" class="clearfix">
  <?php if (isset($page['zones_above'])): ?>
  <div id="zones-above" class="clearfix"><?php print render($page['zones_above']); ?></div>
  <?php endif; ?>
  
  <div id="zones-content">
    <div id="zones-content-inner" class="clearfix">
      <div id="zones-content-background" class="clearfix">
        <?php if (isset($messages)): ?>
        <div id="message-container" class="container-<?php print $default_container_width; ?> clearfix">
          <div class="grid-<?php print $default_container_width; ?>">
            <?php print $messages; ?>
          </div>
        </div><!-- /.container-xx -->
        <?php endif; ?>
        <?php if (isset($page['content_zone'])): ?>
          <?php print render($page['content_zone']); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  
  <?php if (isset($page['zones_below'])): ?>
  <div id="zones-below" class="clearfix"><?php print render($page['zones_below']); ?></div>
  <?php endif; ?>
</div><!-- /#page -->
