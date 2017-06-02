<div class="hello">


	<h1><?php echo $welcome ?></h1>

	<h2>$item</h2>
	<?php if ($items): ?>
		<ul>
			<?php foreach ($items as $item): ?>
				<li><?php echo $item ?></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>


	<br> <h2>$item2</h2>
	<?php if ($items2): ?>
		<ul>
		<?php foreach ($items2 as $key => $val): ?>
			<li><?= $key . ': ' . $val ?></li>
		<?php endforeach; ?>
		</ul>
	<?php endif; ?>


</div>
