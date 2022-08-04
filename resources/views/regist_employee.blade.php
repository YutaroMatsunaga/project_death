<html>
	<head>
		<title>Menu</title>
	</head>
	<body>
		<h1>社員登録画面</h1>
		<h2>以下を入力してください。</h2>
		<div>
			社員ID
			<input type="text" name="employee_id" placeholder="YZ12345678">

			<br><br>
			社員名
			<input type="text" name="first_name" placeholder="姓">
			<input type="text" name="last_name" placeholder="名">

			<br><br>
			所属セクション
			<select name="department">
				<option>シス開</option>
				<option>グロカル</option>
				<option>ビジソル</option>
			</select>

			<br><br>
			メールアドレス
			<input type="text" name="mail_address" placeholder="taro_yaz@yaz.co.jp">

			<br><br>
			性別
			<input type="radio" name="sex" value="男性" checked> 男性
			<input type="radio" name="sex" value="女性">女性
		</div>
		<div>
			<p><span style="color:red">*</span> 必須項目</p>
			<button type="regist_button">登録</button>
			<br>
			<a href="{{route('menu')}}">メニュー画面</a>
		</div>
	</body>
</html>