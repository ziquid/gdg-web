<?php
/**
 * @file views-view-table.tpl.php
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
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
        <?php foreach ($row as $field => $content): ?>
            <?php //print $content;
			if($field == 'title')
				$title = $content;
			if($field == 'body')
				$body = $content;
			if($field == 'field_portfolio_image')
				$img = $content;
				
			?>
        <?php endforeach;?>
        <div class="main-port">
        	<div class="img"><?php print $img;?></div>
            <div class="body-wrap">
            	<div class="title"><?php print $title;?></div>
                <div class="body"><?php print $body?></div>
            </div>
        </div>
    <?php endforeach; ?>
