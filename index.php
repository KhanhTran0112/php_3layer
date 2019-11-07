<?php
	$task = 'display';
	if (isset($_GET['task'])) {
		$task = $_GET['task'];
	}

	require_once 'controller/controller.php';

	$control = new Controller();

	switch ($task) {
		case 'display':
			$listComments = $control->getListComments();
			include 'views/display.php';
			break;
		case 'add':
			include 'views/add.php';
			break;
		case 'insert':
			if (isset($_POST['btn-submit'])) {
				$title = $_POST['input-title'];
				$fullName = $_POST['input-fullname'];
				$email = $_POST['input-email'];
				$content = $_POST['input-content'];
				$control->insertComment($title, $fullName, $email, $content);
			}
			break;
		case 'delete':
			if (isset($_GET['id'])) {
				$commentId = $_GET['id'];
				$control->deleteCommentById($commentId);
			}
			break;
		case 'edit':
			if (isset($_GET['id'])) {
				$commentId = $_GET['id'];
				$comment = $control->getCommentById($commentId);
				include 'views/edit.php';
			}
			break;
		case 'update':
			if (isset($_POST['btn-submit'])) {
				$id = $_POST['input-id'];
				$title = $_POST['input-title'];
				$fullName = $_POST['input-fullname'];
				$email = $_POST['input-email'];
				$content = $_POST['input-content'];
				$control->updateComment($id, $title, $fullName, $email, $content);
			}
			break;
		default:
			# code...
			break;
	}
 ?>