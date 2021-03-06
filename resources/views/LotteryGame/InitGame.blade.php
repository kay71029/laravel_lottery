
<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>簡易的彩卷系統</title>
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <link href = "/assets/css/bootstrap.min.css" rel = "stylesheet">
</head>
<body>
    <nav class = "navbar navbar-inverse" align = right>
    <div class = "container-fluid">
        <div class = "navbar-header">
            <button type = "button" class = "navbar-toggle collapsed" data-toggle="collapse" data-target = "#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class = "sr-only">Toggle navigation</span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
            </button>
            <a class = "navbar-brand" href="Main">首頁</a>
        </div>
        <div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-1">
            <ul class = "nav navbar-nav">
                <li class = "active"><a href = "Deposit">入款<span class = "sr-only">(current)</span></a></li>
                <li class = "active"><a href = "Withdrawal">出款<span class = "sr-only">(current)</span></a></li>
                <li class = "active"><a href = "AccountDetail">查詢明細<span class = "sr-only">(current)</span></a></li>
                <li class = "active"><a href = "GameInformation">開獎資訊<span class = "sr-only">(current)</span></a></li>
                <li class = "active"><a href = "UserRecord">下注紀錄<span class = "sr-only">(current)</span></a></li>

                <li class = "active"><a href = "InitGame">開獎設定<span class = "sr-only">(current)</span></a></li>
               
            </ul>
            <form action = "Logout">
                <button class = "btn btn-default navbar-btn">登出</button>
            </form>
        </div>
    </div>
    </nav>
    <div class = "panel panel-default">
        <div class = "panel-heading">
            設定開獎期數
        </div>
        <div class = "panel-body">
            <div class = "dataTable_wrapper">
                <form method = "post" action = "DoInitGame.php">
                    <div class = "form-group row">
                        <label for = "init-game-times" class = "col-xs-2 col-form-label">開獎期數</label>
                        <div class = "col-xs-10">
                            <input type = "number" class = "form-control" name = "init-game-times" placeholder = "請輸入要開啟的期數" pattern = "[0-9]">
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "init-game-start-time" class = "col-xs-2 col-form-label">開始時間</label>
                        <div class = "col-xs-10">
                            <input class = "form-control" type = "time" value = "now" name = "init-game-start-time">
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "init-game-open_time" class = "col-xs-2 col-form-label">開始至封牌的時間(單位:分鐘)</label>
                        <div class = "col-xs-10">
                            <input type = "number" value = '5' class = "form-control" name = "init-game-open_time" placeholder = "請輸入開始至封牌的時間" pattern = "[0-9]" title = "請輸入數字" required="required" min = "0">
                        </div>
                    </div>
                    <div class = "form-group row" style="display:none">
                        <label for = "init-game-fold_time" class = "col-xs-2 col-form-label">封牌至開獎時間(單位:分鐘)</label>
                        <div class = "col-xs-10">
                            <input type = "number" value = '0' class = "form-control" name = "init-game-fold_time" placeholder = "請輸入封牌至開獎時間" pattern = "[0-9]" title = "請輸入數字" required="required" min = "0">
                        </div>
                    </div>
                     <div class = "form-group row">
                        <label for = "init-game-stop_time" class = "col-xs-2 col-form-label">停止時間(單位:分鐘)</label>
                        <div class = "col-xs-10">
                            <input type = "number" value = '1' class = "form-control" name = "init-game-stop_time" placeholder = "停止時間" pattern = "[0-9]" title = "請輸入數字" required="required" min = "0">
                        </div>
                    </div>
                    <button type = "submit" class = "btn btn-primary">產生開獎期數</button>
                </form>
                <br>
                <form method = "post" action = "DoExcGameCheck.php">
                    <button type = "submit" class = "btn btn-primary" name ="excGame">執行開獎</button>
                    <button type = "submit" class = "btn btn-primary" name ="excCheck">執行兌獎</button>
                </form>
                
            </div>
        </div>
    </div>
    <script src = "/assets/js/jquery.js"></script>
    <script src = "/assets/js/bootstrap.min.js"></script>
</body>
</html>