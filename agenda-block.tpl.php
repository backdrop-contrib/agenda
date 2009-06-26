<div id="agenda-block">
<?php
$today = mktime(0,0,0,date('m'), date('d'), date('Y'));
$dates[$today] = t('Today');
$dates[$today - 86400] = t('Yesterday');
$dates[$today + 86400] = t('Tomorrow');
?>
<?php foreach($events as $day): ?>
  <?php
  $date = format_date($day[0]['when'], variable_get('agenda_dateformat', 'custom'), variable_get('agenda_customdate', 'l, F jS'));
  if (isset($dates[$day[0]['when']])) {
    $date = $dates[$day[0]['when']];
  }
  ?>
  <p><?php echo $date; ?></p>
  <ol>
  <?php foreach ($day as $event): ?>
    <li class="cal_<?php echo $event['index']; ?>">
      <?php echo $event['title']; ?>
      <ul class="moreinfo">
        
        <?php $keys = array_map('trim', explode(',', variable_get('agenda_display_keys', 'calendar, start time'))); ?>
        <?php foreach ($keys as $key): ?>
          <?php if (!empty($event[$key])): ?>
            <li><em><?php echo t(ucfirst($key)); ?></em>: <?php echo $event[$key]; ?></li>
          <?php endif; ?>
        <?php endforeach; ?>
        
        <?php if (!empty($event['event description'])): ?>
          <li><?php echo $event['event description']; ?></li>
        <?php endif; ?>
      
      </ul>
    </li>
  <?php endforeach; ?>
  </ol>
<?php endforeach; ?>
</div>