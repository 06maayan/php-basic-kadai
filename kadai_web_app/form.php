<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>社員情報入力フォーム</title>
 </head>
 
<body>
    <h2>社員情報入力フォーム</h2>
    <form action="confirm.php" method="post">
    <label>社員名</label>
    <input type="text" name="employee_name">
<br>
    <label>年齢</label>
    <input type="text" name="employee_age">
<br>
    <label>所属部署</label>
    <select name="employee_department"> 
        <option>開発部</option>
        <option>営業部</option>
        <option>人事部</option>
</select>
<br>
    <input type="submit" value="送信">
    </form>
</body>
 
</html>