<link type="text/css" rel="stylesheet" href="css.css" />

<?php
	include('libs/Pressdown.php');
	$keypaths = get_paths();
	$date = "today";
	$author = "Doomlol";
?>
<?php include 'include/header.php'; ?>
<?php include 'testss.html'; ?>
<br>
<div >
		<div class="blog" >
		<?php foreach ($keypaths as $path => $id): ?>
			<?php $post = parse_file($path); ?>

			<div >
			    		
				<a href="post.php?id=<?= $id ?>"  >
					<div class="date">
					<?= $post['date'] ?>
					</div>

				    
					<?= $post['title'] ?>
					

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