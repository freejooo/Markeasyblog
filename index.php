<?php
	include('libs/Pressdown.php');
	$keypaths = get_paths();
	$date = "today";
	$author = "Doomlol";
?>
<?php include 'include/header.php'; ?>
<?php include 'main.php'; ?>
    <link rel="stylesheet" href="blog1.css">
<div style="   padding-left:40px; padding-rigth:40px  ">
		<div style="   padding:20px; border-left:5px solid gray; background-color:#e8e8e8; ">
		<?php foreach ($keypaths as $path => $id): ?>
			<?php $post = parse_file($path); ?>

			<div >
				<a href="post.php?id=<?= $id ?>">
				    <div class="blog">
					<?= $post['title'] ?>
					</div>

				</a>

				</div>
								<hr style="
width:50%;
height:2px;border-width:0;color:gray;background-color:gray">
		<?php endforeach; ?>
		</div>
</div>

<?php include 'include/footer.php'; 
?>