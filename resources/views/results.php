
<!doctype html>

<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

		<title> Results </title>
	</head>

	<body>
		
		<p>
			You searched for <?php echo $song_title ?>
		</p>

		<table class="table table-striped">
			<thead>
				<tr>
					<th> Artist </th>
					<th> Title </th>
					<th> Genre </th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($songs as $song) :?>
					<tr>
						<td> <?php echo $song->artist_name ?> </td>
						<td> <?php echo $song->title ?> </td>
						<td> <?php echo $song->genre ?> </td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>

		<!--
		<?php foreach ($songs as $song) : ?>
			<div class="song">
				<?php echo $song->title ?>
			</div>
		<?php endforeach ?>
		-->

	</body>

</html>