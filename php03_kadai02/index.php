<!-- 提出課題用 index.php idex.php送る側 -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザー管理画面</title>

    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">User一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <!-- insert.phpにPOSTで送る -->
    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>User情報</legend>
                <label>名前：       <input type="text" name="name"></label><br>
                <label>ログインID： <input type="text" name="lid"></label><br>
                <label>パスワード:  <input type="text" name="lpw"></label><br>
                         
                <!-- kanri_flg: int(1) ※0=管理者, 1=スーパー管理者 -->
                <!-- life_flg: int(1) ※0=退社, 1=入社 -->         
                <!-- ラジオボタン形式 -->

                <p>管理フラグ</p>
                <input type='radio' name='kanri_flg' value='管理者'> 管理者
                <input type='radio' name='kanri_flg' value='スーパー管理者'>スーパー管理者 

                <p>ライフFLG</p>
                <input type='radio' name='life_flg' value='退職済み'> 退職済み
                <input type='radio' name='life_flg' value='現職'> 現職
                <br>
                <input type="submit" value="送信">

                <!-- セレクトボックス形式か -->
                <!-- <select class="kanri_flg" name="kanri_flg" id="kanri_flg">
                    <option value="0">管理者</option>
                    <option value="1">スーパー管理者</option>
                </select><br>
                <select class="life_flg" name="life_flg" id="life_flg">
                    <option value="0">退職済み（もう会社に在籍してない人）</option>
                    <option value="1">現職</option>
                </select><br> -->

            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>
