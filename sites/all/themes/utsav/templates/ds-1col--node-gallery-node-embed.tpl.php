<?php

/**
 * @file
 * Display Suite 1 column template.
 */
?>

<?php
drupal_add_js(path_to_theme().'/js/iframegallery.js',
    array('type' => 'file', 'scope' => 'footer', 'weight' => 999)
  );
?> 
<div id="" class="story_phototable clearfix node-<?php print $node->nid; ?>"> 
<<?php print $ds_content_wrapper; print $layout_attributes; ?> class="ds-1col <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php print $ds_content; ?>
</<?php print $ds_content_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
<div class="clear"></div>
</div>