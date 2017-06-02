<div class="task">


<h2>$task</h2>
<?php if ($task) :  ?>
	<ul>
	<?php foreach ($task as $title => $val) : ?>
		<li><?= $title . ': ' . $val ?></li>
	<?php endforeach; ?>
	<li><strong>Completed: </strong><span><?= $task['completed'] ? 'Okayyyyyy': 'Not yeeett' ?></span></li>
	</ul>
<?php endif; ?>


</div>
