<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP Practice</title>
		<style media="screen">
			ul {
			 background: lightgray;
		 }
			pre {
				background: #2d2d2d;
				color: #fdfdfd;
			}
			pre code {
				padding: 20px;
				display: block;
			}
		</style>
	</head>
	<body>

		<h1><?php echo $welcome ?></h1>
		<?php if ($items) : ?>
			<ul>
				<?php foreach ($items as $item): ?>
					<li><?php echo $item ?></li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

<pre>
<code>
// index.php

&lt;?php

  $welcome = 'hello php';
  $items = ['yo', 'cool', 'hey'];

  require 'index.tmpl.php';

?&gt;
</code>
</pre>

<pre>
<code>
// index.tmpl.php

&lt;h1&gt;&lt;?php echo $welcome ?&gt;&lt;/h1&gt;

&lt;?php if ($items) : ?&gt;

  &lt;ul&gt;

    &lt;?php foreach ($items as $item): ?&gt;

      &lt;li&gt;&lt;?php echo $item ?&gt;&lt;/li&gt;

    &lt;?php endforeach; ?&gt;

  &lt;/ul&gt;

&lt;?php endif; ?&gt;
</code>
</pre>

<pre>
<code>
php --help
php -v
php -S localhost:8877
</code>
</pre>
	</body>
</html>
