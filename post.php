<!--

css by :- https://github.com/sindresorhus/github-markdown-css

-->
<head>
        <link rel="stylesheet" href="blog1.css">
<link rel="stylesheet" href="static/mark-down.css">
<style>
	.markdown {
		box-sizing: border-box;
		margin: 0 auto;
		padding: 45px;
	}

	@media (max-width: 767px) {
		.markdown {
			padding: 15px;
		}
	}
</style>
</head>
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

<?php include 'include/header.php'; ?>

<?php include 'main.php'; ?>
<?php include 'include/menu.php'; ?>
<section>
	<article class="markdown">
		<?= $post['body'] ?>
	</article>
</section>

<?php include 'include/footer.php'; ?>
