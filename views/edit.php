<!DOCTYPE html>
<html>
<head>
	<title>Edit Comment</title>
</head>
<body>
	<form action="index.php?task=update" method="POST">
		<table>
			<tr>
				<td>Title: </td>
				<td><input type="text" name="input-title" value="<?php echo $comment->getTitle();?>"></td>
			</tr>
			<tr>
				<td>Full name: </td>
				<td><input type="text" name="input-fullname" value="<?php echo $comment->getFullname();?>"></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="text" name="input-email" value="<?php echo $comment->getEmail();?>"></td>
			</tr>
			<tr>
				<td>Content: </td>
				<td><textarea cols="30" rows="5" name="input-content"><?php echo $comment->getContent();?></textarea></td>
			</tr>
			<tr>
				<td><input type="text" name="input-id" hidden="true" value="<?php echo $comment->getCommentId();?>"></td>
				<td><input type="submit" name="btn-submit" value="Edit"></td>
			</tr>
		</table>
	</form>
</body>
</html>