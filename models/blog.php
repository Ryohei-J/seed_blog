<?php

		// echo 'モデルblog.phpが呼び出されました<br />';

		class Blog {

			// プロパティ(db接続オブジェクト)
			private $dbconnect = '';

			// コンストラクタ
			function __construct(){
				// DB接続ファイルを読み込む
				require('dbconnect.php');

				// DB接続設定の値をプロパティに代入
				$this->dbconnect = $db;
			}

			// 一覧表示に必要なデータを取得
			function index(){
				// echo 'モデルのindex()が呼び出されました<br />';

				// SQLの記述(SELECT分)
				// delete_flag = 0のデータを取得
				$sql = 'SELECT * FROM `blogs` WHERE `detete_flag` = 0 ORDER BY `created` DESC';

				// SQLの実行
				$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

				// 実行結果を取得し、配列に格納
				$rtn = array();
				while ($result = mysqli_fetch_assoc($results)) {
					$rtn[] = $result;
				}

				// 取得結果を返す
				return $rtn;

			}

			function create($blog_data){
				// insert文の記述
				$sql = sprintf("INSERT INTO `blogs` (`id`, `title`, `body`, `detete_flag`, `created`, `modified`)
												VALUES (NULL, '%s', '%s', '0', now(), CURRENT_TIMESTAMP);", $blog_data['title'], $blog_data['body']);

				// SQLの実行
				$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

				// 実行結果を返す
				return $results;
			}

			function show($id){
				// select文の記述
				$sql = 'SELECT `title`, `body` FROM `blogs` WHERE `id` = 1';

				// SQLの実行
				$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

				// 実行結果を返す
				$rtn = array();
				while ($result = mysqli_fetch_assoc($results)) {
					$rtn[] = $result;
				}
				return $results;
			}
		}

?>