<?php 
	/**
	 * 
	 */
	require_once 'comment.php';
	class Database
	{
		
		function __construct()
		{

		}

		public function execute($sql)
		{
			$connect = new mysqli('localhost', 'root', '', 'db_comment');
			mysqli_set_charset($connect, 'utf8');
			$result = $connect->query($sql);
			$connect->close();
			return $result;
		}

		public function getListComments()
		{
			$sql = "select * from comments";
			$response = $this->execute($sql);
			$listComments = array();
			while ($row = $response->fetch_assoc()) {
				$comment = new Comment(
					$row['id'],	
					$row['title'],	
					$row['full_name'],	
					$row['email'],	
					$row['content']	
				);
				array_push($listComments, $comment);
			}
			return $listComments;
		}

		public function getCommentByCommentId($commentId)
		{
			$sql = "select * from comments where id = '$commentId'";
			$response = $this->execute($sql);
			while ($row = $response->fetch_assoc()) {
				$comment = new Comment(
					$row['id'],	
					$row['title'],	
					$row['full_name'],	
					$row['email'],	
					$row['content']	
				);
				return $comment;
			}
			return null;
		}

		public function insertComment($comment)
		{
			$title = $comment->getTitle();
			$fullName = $comment->getFullname();
			$email = $comment->getEmail();
			$content = $comment->getContent();
			$sql = "insert into comments(title, full_name, email, content) values ('$title', '$fullName', '$email', '$content')";
			$response = $this->execute($sql);
		}

		public function updateComment($comment)
		{
			$id = $comment->getCommentId();
			$title = $comment->getTitle();
			$fullName = $comment->getFullname();
			$email = $comment->getEmail();
			$content = $comment->getContent();
			$sql = "update comments set title = '$title', full_name = '$fullName', email = '$email', content = '$content' where id = '$id'";
			$response = $this->execute($sql);
		}

		public function deleteCommentById($commentId)
		{
			$sql = "delete from comments where id = '$commentId'";
			$response = $this->execute($sql);
		}

	}
 ?>
