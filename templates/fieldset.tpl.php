<fieldset <?php if (!empty($attributes)) print drupal_attributes($attributes) ?>>
  <?php if (!empty($title)): ?>
    <legend><span<?php if(!empty($title_attributes)) print $title_attributes; ?>><?php print $title ?></span></legend>
  <?php endif; ?>
  <?php if (!empty($content)): ?>
    <div<?php if(!empty($content_attributes)) print $content_attributes; ?>><?php print $content ?></div>
  <?php endif; ?>
</fieldset>
