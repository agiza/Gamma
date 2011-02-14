<?php
// $Id: node.tpl.php,v 1.1 2011/01/07 16:10:59 himerus Exp $

/**
 * @file
 * Default theme implementation to display a node.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>
<article<?php print $attributes; ?>>
  
  <?php if (!$page && $title): ?>
  <header>
    <?php print render($title_prefix); ?>
    <h2 <?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
    <?php print render($title_suffix); ?>
  </header>
  <?php endif; ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      //hide($content['field_node_terms']);
      print render($content);
    ?>
  </div>
  <?php if (!empty($content['links'])): ?>
    <nav class="links"><?php print render($content['links']); ?></nav>
  <?php endif; ?>
  <?php if($user_picture || $display_submitted || $terms): ?>
  <footer class="clearfix node-info">
    <?php print $user_picture; ?>
    <?php if ($display_submitted):?>
    <div class="submitted"><?php print $submitted; ?></div>
    <?php endif; ?>
    <?php if (!empty($terms)): ?>
      <div class="terms"><?php print $terms; ?></div>
    <?php endif; ?>
  </footer>
  <?php endif; ?>
  <div class="clearfix">
    <?php print render($content['comments']); ?>
  </div>
</article>