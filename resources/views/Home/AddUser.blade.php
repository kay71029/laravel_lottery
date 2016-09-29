<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <meta name = "description" content = "">
    <meta name = "author" content = "">
    <title>簡易的彩卷系統</title>
    <link href = "/assets/css/bootstrap.min.css" rel = "stylesheet">
</head>
<body>
    <div class = "container">
        <div class = "row">
            <div class = "col-md-4 col-md-offset-4">
                <div class = "login-panel panel panel-default">
                    <div class = "panel-heading">
                        <h3 class = "panel-title">創建帳號</h3>
                    </div>
                    <div class = "panel-body">
                        <form action = "DoAddUser.php" method = "post">
                            <fieldset>
                                <div class = "form-group">
                                    <input class = "form-control" placeholder = "Username" name = "ac_id" >
                                    <P align="center">帳號必須由數字及英文組成</P>
                                </div>
                                <div class = "form-group">
                                    <input class = "form-control" placeholder = "Password" name = "ac_pw" type = "password" >
                                    <P align="center">密碼必須為6-15位的數字和字母的组合</P>
                                </div>
                                <div class = "checkbox">
                                <br>
                                </div>
                                <button type = "submit" class = "btn btn-lg btn-success btn-block">確認</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src = "{{ URL::asset('assets/jquery/jquery.min.js') }}"></script>
</body>
</html>