<?php 
	/**
	 * 
	 */
	class Comment
	{
		private $id, $title, $fullName, $email, $content;
		function __construct($id, $title, $fullName, $email, $content)
		{
			$this->id = $id;
			$this->title = $title;
			$this->fullName = $fullName;
			$this->email = $email;
			$this->content = $content;
		}

		public function getCommentId()
		{
			return $this->id;
		}
		public function getTitle()
		{
			return $this->title;
		}
		public function getFullname()
		{
			return $this->fullName;
		}
		public function getEmail()
		{
			return $this->email;
		}
		public function getContent()
		{
			return $this->content;
		}
	}
 ?>