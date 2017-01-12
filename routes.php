<?php

		// echo 'routes.phpを通りました';
		// echo '<br />';

		// 1.GETパラメータを取得
		// explode関数：第2引数の文字列を、第1引数の文字で分割し配列で返す関数。
		// echo $_GET['url'];
		$params = explode('/', $_GET['url']);
		// var_dump($params);

		// 2.パラメータの分解(リソース名、アクション名、オプションを取得)
		$resource = $params[0];
		$action = $params[1];
		$id = 0;
		if (isset($params[2])) {
			$id = $params[2];
		}

		// 3.コントローラの呼び出し
		require('controllers/'. $resource .'_controller.php');

?>