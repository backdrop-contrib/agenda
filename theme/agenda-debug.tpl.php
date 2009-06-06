<?php echo $form; ?>

<div id="agenda-debug">
  <?php if (!empty($output)): ?>
    <ul>
    <?php foreach ($output as $line): ?>
      <li><?php echo $line; ?></li>
    <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>