<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>fun times php</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="container">

	<div class="page-header">
		<h1 class="text-muted">fun times php</h1>
	</div>

	<?php

		require 'fun_stuff.php';
		$all_comments = 0;

	?>

	<div class="row">

		<?php foreach ( $adventure as $dude ) : ?>

			<article>
				<h4>
					<?php make_a_sweet_link_for_me( $dude ) ?>
				</h4>

				<p>
					<?php echo $dude['wat'] ?>
				</p>

				<footer class="comments">
					<?php echo $dude['comments'] ?>
				</footer>
			</article>

			<?php $all_comments = $all_comments + $dude['comments'] ?>
		<?php endforeach ?>

	</div>

	<div class="row">
		<p>
			number of dudes: <strong><?php echo count($adventure) ?></strong><br>
			number of comments: <strong><?php echo $all_comments ?></strong>
		</p>
	</div>

</body>
</html>