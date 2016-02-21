<?php
/**
 * @file
 * Template for outputting the default block styling within a Layout.
 *
 * Variables available:
 * - $classes: Array of classes that should be displayed on the block's wrapper.
 * - $title: The title of the block.
 * - $title_prefix/$title_suffix: A prefix and suffix for the title tag. This
 *   is important to print out as administrative links to edit this block are
 *   printed in these variables.
 * - $content: The actual content of the block.
 */
?>
<div class="<?php print implode(' ', $classes); ?>">
  <?php
  // @todo this is a stupid way to add this div, but things that should work, aren't
  if ($theme_hook_original == 'block__system__powered-by'): ?>
    <div class="drop-lounging"></div>
  <?php endif; ?>
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h2 class="block-title"><?php print $title; ?></h2>
  <?php endif;?>
  <?php print render($title_suffix); ?>

  <?php if ($title): ?>
    <div class="block-content">
  <?php endif;?>

      <?php print render($content); ?>

  <?php if ($title): ?>
    </div>
  <?php endif;?>
</div>
