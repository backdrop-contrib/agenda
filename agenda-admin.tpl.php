<?php

/**
 * @file
 * Template file for administrative page
 */
?>
<?php if ($table): ?>
  <?php echo $table; ?>
<?php else: ?>
  <p>You have not created any blocks yet.</p>
<?php endif; ?>
<p>&raquo; <?php echo l('Create a new block', 'admin/config/services/agenda/0/configure'); ?>.</p>
<p>&raquo; <?php echo l('Set Google API Key', 'admin/config/services/agenda/googleapi'); ?>.</p>