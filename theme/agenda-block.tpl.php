<div id="agenda-block">
<?php foreach($events as $day): ?>
    <?php
    $date = $day[0]['when'];
    if ($date == strtotime('today')) {
        $date_nice = 'Today';
    } elseif ($date == strtotime('yesterday')) {
        $date_nice = 'Yesterday';
    } elseif ($date == strtotime('tomorrow')) {
        $date_nice = 'Tomorrow';
    } else {
        $date_nice = date('l, F jS', $date);
    }
    ?>
    <p><?php echo $date_nice; ?></p>
    <ol>
    <?php foreach ($day as $event): ?>
        <li class="cal_<?php echo $event['index']; ?>">
            <?php echo $event['title']; ?>
            <ul class="moreinfo">
                <li><em>Calendar</em>: <?php echo $event['calendar']; ?></li>
                <?php if (!empty($event['where'])): ?>
                    <li><em>Where</em>: <?php echo $event['where']; ?></li>
                <?php endif; ?>
                <?php if (!empty($event['event description'])): ?>
                    <li><?php echo $event['event description']; ?></li>
                <?php endif; ?>
            </ul>
        </li>
    <?php endforeach; ?>
    </ol>
<?php endforeach; ?>
</div>