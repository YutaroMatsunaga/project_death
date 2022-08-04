<html>
  <head>
    <title>Menu</title>
  </head>
  <body>
		<h1>社員一覧画面</h1>
		<table border="10">
			<tr><!-- 行1（見出し）-->
				<th>社員ID</th> <th>社員名</th> <th>所属セクション</th> <th>メールアドレス</th> <th>性別</th>
			</tr>

			@foreach ($employees as $item)
			<tr><!-- データ（繰り返し） -->
				<td>{{ $item -> employee_id }}</td>
				<td>{{ $item -> getFullName() }}</td>
				<td>{{ $item -> getSection() }}</td>
				<td>{{ $item -> mail }}</td>
				<td>{{ $item -> getGender() }}</td>
			</tr>
			@endforeach

		</table>
	</body>
</html>