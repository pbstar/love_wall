<?php
$link = @mysqli_connect('localhost', 'root', 'root', 'bbq') or
die('连接失败：' . mysqli_connect_error());
mysqli_set_charset($link, 'utf8');
$sql = "select * from qiang";
$res = mysqli_query($link, $sql);
if (!$res) {
    die('查询失败');
}
$news = mysqli_fetch_all($res, MYSQLI_ASSOC);
mysqli_close($link);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>表白墙管理后台</title>
    <link rel="stylesheet" type="text/css" href="./css/admin.css"/>
    <style>
        .but1 {
            position: absolute;
            top: 17px;
            left: 900px;
            background-color: #ff7200;
            font-size: 14px;
            width: 80px;
            height: 25px;
            text-align: center;
            line-height: 25px;
            color: white;
            cursor: pointer;
        }
        .but2 {
            position: absolute;
            top: 17px;
            left: 800px;
            background-color: #ff7200;
            font-size: 14px;
            width: 80px;
            height: 25px;
            text-align: center;
            line-height: 25px;
            color: white;
            border:none;
            cursor: pointer;
            outline: none;
        }
        .left a{
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="top">
    <div class="topbox">
        <span>表白墙后台管理系统</span>
    </div>
</div>
<div class="under">
    <form action="./com/plsc.php" method="post" style="display: inline-block;float: right">
        <div class="right">
            <span class="topspan">表白信息展示表</span>
            <span class="but1">反向选择</span>
            <input type="submit" value="批量删除" class="but2"/>
            <table>
                <thead>
                    <tr class="tr1">
                        <th><input id="ckall" type="checkbox" /></th>
                        <th>编号</th>
                        <th>被表白人</th>
                        <th>表白人</th>
                        <th>表白人手机号</th>
                        <th>表白时间</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($news as $key => $value) {?>
                        <tr>
                            <td><input type="checkbox" name="checkbox[]" value="<?php echo $value['id'] ?>"/></td>
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['name1'] ?></td>
                            <td><?php echo $value['name2'] ?></td>
                            <td><?php echo $value['tel'] ?></td>
                            <td><?php echo date('Y-m-d H:i', $value['btime']) ?></td>
                            <td>
                                <a class="gs" href="./com/shanchu.php?id=<?php echo $value['id'] ?>">删除</a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </form>
    <div class="left">
        <ul>
            <li>表白信息-></li>
            <a href="./com/admin2.php"><li>人员管理-></li></a>
        </ul>
    </div>
</div>
<script src="./js/admin.js" charset="utf-8"></script>
</body>
</html>