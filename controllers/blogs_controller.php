<?php

		echo 'blogsコントローラーが呼ばれました<br />';

		// モデルの呼び出し
		require('models/blog.php');

		// コントローラのクラスをインスタンス化
		$controller = new BlogsController();
		// $controller->index();
		// アクション名によって呼び出すメソッドを変える
		switch ($action) {
			case 'index':
				$controller->index();
				break;
			case 'add':
				$controller->add();
				break;

			default:
				# code...
				break;
		}

		class BlogsController {
			function index() {
				echo 'コントローラのindex()が呼び出されました<br />';
				// モデルを呼び出す
				$blog = new Blog();
				$blog->index();
			}

			function add() {
				echo 'add()が呼び出されました<br />';
			}
		}
?>