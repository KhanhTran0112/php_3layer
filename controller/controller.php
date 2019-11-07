<?php 
	require_once 'models/database.php';
	/**
	 * 
	 */
	class Controller
	{
		private $database;
		function __construct()
		{
			$this->database = new Database();
		}

		public function getListComments()
		{
			return $this->database->getListComments();
		}

		public function getCommentById($commentId)
		{
			return $this->database->getCommentByCommentId($commentId);
		}

		public function insertComment($title, $fullName, $email, $content)
		{
			$comment = new Comment(null, $title, $fullName, $email, $content);
			$this->database->insertComment($comment);
			header('location:index.php');
		}

		public function updateComment($commentId, $title, $fullName, $email, $content)
		{
			$comment = new Comment($commentId, $title, $fullName, $email, $content);
			$this->database->updateComment($comment);
			header('location:index.php');
		}

		public function deleteCommentById($commentId)
		{
			$this->database->deleteCommentById($commentId);
			header('location:index.php');
		}
	}
 ?>