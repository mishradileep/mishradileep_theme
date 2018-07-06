<?php

/**
 * @file
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $caption: The caption for this table. May be empty.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $classes: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 * @ingroup views_templates
 */
?>
<?php foreach ($rows as $row_count => $row): ?>
<div class="article mishra">
  <?php print $row['field_image']; ?>
  <h2><a href="<?php print drupal_get_path_alias('node/' . $row['nid']); ?>"><?php print $row['title']; ?></a></h2>
  <div class="date"><?php print $row['created']; ?></div>
  <div class="body">
    <?php print $row['body']; ?>
  </div>
  <div class="article-footer">
    <?php print $row['field_tags']; ?>
  </div>
</div>
<?php endforeach; ?>
