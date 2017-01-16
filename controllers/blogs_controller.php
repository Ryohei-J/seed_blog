<?php

		// echo 'blogsコントローラーが呼ばれました<br />';

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
			case 'show':
				$controller->show($id);
				break;
			case 'create':
				// var_dump($_POST);
				$controller->create($_POST);
				break;
			case 'edit':
				$controller->edit($id);
				break;
			case 'update':
				$controller->update($id,$_POST);
				break;
			case 'delete':
				$controller->delete($id);
				break;

			default:

				break;
		}

		class BlogsController {
			function index() {
				// echo 'コントローラのindex()が呼び出されました<br />';
				// モデルを呼び出す
				$blog = new Blog();
				$viewOptinons = $blog->index();
				$action = 'index';
				// var_dump($viewOptinons);
				require('views/layout/application.php');
			}

			function add() {
				// echo 'add()が呼び出されました<br />';
				// モデルを呼び出す
				$action = 'add';
				// var_dump($viewOptinons);
				require('views/layout/application.php');
			}

			function create($blog_data){
				// echo 'createメソッドが呼ばれました';
				// モデルを呼び出す
				$blog = new Blog();
				// モデルのcreateメソッドを実行する(モデルのcreateメソッドは、insert文を実行してブログを保存する)
				$return = $blog->create($blog_data);
				header('Location: /seed_blog/blogs/index');
			}

			function show($id) {
				// モデルを呼び出す
				$blog = new Blog();
				// モデルのshowメソッドを実行する(モデルのshowメソッドは、select文を実行してidで指定したブログデータを取得する)
				$viewOptinons = $blog->show($id);
				$action = 'show';
				require('views/layout/application.php');
			}

			function edit($id){
				// モデルを呼び出す
				$blog = new Blog();
				// モデルのeditメソッドを実行する
				$viewOptinons = $blog->edit($id);
				$action = 'edit';
				require('views/layout/application.php');
			}

			function update($id,$blog_data){
				$blog = new Blog();
				$return = $blog->update($id,$blog_data);
				header('Location: /seed_blog/blogs/index');
			}

			function delete($id){
				$blog = new Blog();
				$return = $blog->delete($id);
				header('Location: /seed_blog/blogs/index');
			}
		}
?>