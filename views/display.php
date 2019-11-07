<!DOCTYPE html>
<html>
<head>
	<title>List Comment</title>
</head>
<body>
	<h1>List Comment</h1>
	<a href="index.php?task=add">Add Comment</a>
	<div class="main">
		<?php if ($listComments) {
			foreach ($listComments as $key => $comment) {?>
		<div class="item">
			<p><?php echo $comment->getTitle(); ?></p>
			<p><?php echo $comment->getFullname(); ?></p>
			<p><?php echo $comment->getEmail(); ?></p>
			<p><?php echo $comment->getContent(); ?></p>
			<p><a href="index.php?task=edit&id=<?php echo $comment->getCommentId(); ?>">Edit</a>|<a href="index.php?task=delete&id=<?php echo $comment->getCommentId(); ?>">Delete</a></p>
		</div>
	<?php }} else echo "No data!"; ?>
	</div>
</body>
</html>