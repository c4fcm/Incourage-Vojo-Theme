<?php
/**
 * @file views-view-list.tpl.php
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<?php print $wrapper_prefix; ?>
  <?php if (!empty($title)) : ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>
  <?php print $list_type_prefix; ?>
    <?php foreach ($rows as $id => $row): ?>
      <li class="slide <?php print $classes[$id]; ?>"><?php print $row; ?></li>
    <?php endforeach; ?>
    <li style="visibility: hidden"><img src="<?php print base_path() . drupal_get_path('theme', 'vojo_generic') . '/images/front-slideshow-responsive-spacer.png'; ?>" alt="" /></li>
  <?php print $list_type_suffix; ?>
<?php print $wrapper_suffix; ?>