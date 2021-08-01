<link type="text/css" rel="stylesheet" href="css.css" />
<?php
	include('libs/Pressdown.php');
	$keypaths = get_paths();
	$paths = array_flip($keypaths);
	$id = isset($_GET['id']) ? $_GET['id'] : 0;
	$post = parse_file($paths[$id]);
	$title = $post['title'];
	$date = $post['date'];
	$category = $post['category'];
	$author = $post['author'];
?>



	<article class="markdown">
	    <?php include 'include/menu.php'; ?>
		<?= $post['body'] ?>
	</article>