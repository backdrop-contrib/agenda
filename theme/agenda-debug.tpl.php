<style type="text/css">
#agenda-debug ul li pre {
  max-height: 150px;
  border: 1px solid #ccc;
  overflow: auto;
  font-size: 80%;
  line-height: 100%;
  font-family: monospace;
}

#agenda-debug em {
  background-color: #f1f1f1;
  }

#agenda-debug {
  border: 1px solid #ccc;
  padding-right: 1em;
  font-size: 95%;
  line-height: 130%;
  font-family: monospace;
}
</style>

<?php echo $form; ?>

<?php if (!empty($output)): ?>
<div id="agenda-debug">
  <ul>
  <?php foreach ($output as $line): ?>
    <li><?php echo $line; ?></li>
  <?php endforeach; ?>
  </ul>
</div>
<?php endif; ?>