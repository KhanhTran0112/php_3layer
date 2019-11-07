<!DOCTYPE html>
<html>
<head>
	<title>Add Comment</title>
</head>
<body>
	<form action="index.php?task=insert" method="POST">
		<table>
			<tr>
				<td>Title: </td>
				<td><input type="text" name="input-title"></td>
			</tr>
			<tr>
				<td>Full name: </td>
				<td><input type="text" name="input-fullname"></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="text" name="input-email"></td>
			</tr>
			<tr>
				<td>Content: </td>
				<td><textarea cols="30" rows="5" name="input-content"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btn-submit" value="Set content"></td>
			</tr>
		</table>
	</form>
</body>
</html>