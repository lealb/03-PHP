<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>贵阳电视台1027展示</title>
    <link rel="stylesheet" href="/Public/Home/css/bootstrap.min.css">
    <script type="text/javascript" src="/Public/Home/js/common/jquery-1.12.2.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/common/bootstrap.min.js"></script>
</head>
<body background="/Public/Home/images/1027-2.jpg">
<form id="form1" runat="server">
    <!--视频按钮图片-->
    <img src="/Public/Home/images/icon/32.png" id="icon32" style="display: none" />
    <img src="/Public/Home/images/icon/Flag48.png" id="flag" style="display: none" />
    <video id="video1" autoplay="autoplay" loop="loop" style="display: none">
        <source src="/Public/Home/video/traffic2.mp4" type="video/mp4" />
        <source src="/Public/Home/video/traffic2.webm" type="video/webm" />
    </video>

    <canvas id="myCanvas" width="1320" height="678" style="border:1px solid #c3c3c3;">

    </canvas>
    <!--搜索框-->
    <label class="sr-only" for="keyword">关键字查询</label>
    <input type="text" id="keyword" name="keyword" style="float: right" placeholder="关键字">
    <button type="submit" class="btn btn-default" style="float: right">确定</button>
    <!--绑定回返的经纬度值-->
    <input type="hidden" id="find" value="<?php echo ($list['scoords']); ?>">
</form>
</body>
<script>
    // $('#example').popover();
    //测试数据库连接
    //获取信息（123,23;）
   // var coords = document.getElementById('<%=LCoords.ClientID %>').innerHTML;
    //处理坐标点
    var point = new Array();
    //point = coords.split(";");
    var pointx = new Array();
    for (var i = 0; i < point.length; i++) {
        pointx[i]= point[i].split(",");
    }
    
    //处理颜色值
    //var cloor = document.getElementById('<%=LColor.ClientID %>').innerHTML;
    var rgb = new Array();
    //rgb = cloor.split(";");
    //alert(rgb[0]);
    var px = new Array(135, 345, 555, 925, 1270);
    var py = new Array(95,235);

    //  var crgb = new Array("255,255,0", "255,0,0", "0,255,0", "0,255,0");
    //绘制像素点
    var c = document.getElementById("myCanvas");
    var cxt = c.getContext("2d");
    for (var i = 0; i < px.length - 1; i++) {
        for (var j = 0; j < py.length; j++) {
            //arrow2(px[i], py[j], px[i + 1], py[j], rgb[i]);
        }
    }
    var crgb = new Array("255,0,0", "255,0,0", "255,255,0", "0,255,0");
    var py2 = new Array(60, 205);
    for (var i = px.length-1; i >0; i--) {
        for (var j = 0; j <= py.length - 1; j++) {
            //arrow2(px[i], py2[j], px[i - 1], py2[j], crgb[i]);
        }
    }
    //////////////////////////////////
    function arrow2( x1, y1, x2, y2,rgb) {
        //参数说明 canvas的 id ，原点坐标  第一个端点的坐标，第二个端点的坐标
        var sta = new Array(x1, y1);
        var end = new Array(x2, y2);
        //画线
        cxt.beginPath();
        cxt.moveTo(sta[0], sta[1]);
        cxt.lineTo(end[0], end[1]);
        cxt.strokeStyle = "rgb(" + rgb + ")";
        cxt.lineWidth = 3;
        cxt.fill();
        cxt.stroke();
        cxt.save();

        //画箭头
        cxt.translate(end[0], end[1]);
        //我的箭头本垂直向下，算出直线偏离Y的角，然后旋转 ,rotate是顺时针旋转的，所以加个负号
        var ang = (end[0] - sta[0]) / (end[1] - sta[1]);
        ang = Math.atan(ang);
        if (end[1] - sta[1] >= 0) {
            cxt.rotate(-ang);
        } else {
            cxt.rotate(Math.PI - ang);//加个180度，反过来
        }
        cxt.lineTo(-5, -10);
        cxt.lineTo(0, -5);
        cxt.lineTo(5, -10);
        cxt.lineTo(0, 0);
        cxt.fill(); //箭头是个封闭图形
        cxt.restore();   //恢复到堆的上一个状态，其实这里没什么用。
        cxt.closePath();
    }
    //////////////////////////////////
    //cxt.fillStyle = 'rgb(74,165,34)';
    //for (var i = 0; i < rgb.length; i++) {
    //        cxt.beginPath();
    //        //cxt.fillStyle = "rgb(" + rgb[i] + ")";
    //        //cxt.arc(pointx[i][0], pointx[i][1]-30, 5, 0, Math.PI * 2);
    //        cxt.moveTo(pointx[i][0], pointx[i][1] - 20);
    //        cxt.lineTo(pointx[i+1][0], pointx[i+1][1] - 20);
    //        cxt.strokeStyle = "rgb(" + rgb[i] + ")";
    //        cxt.lineWidth = 3;
    //        cxt.stroke();
    //        cxt.fill();
    //        cxt.closePath();
    //}


    //绑定事件
    function getEventPosition(ev) {
        var x, y;
        if (ev.layerX || ev.layerX == 0) {
            x = ev.layerX;
            y = ev.layerY;
        } else if (ev.offsetX || ev.offsetX == 0) { // Opera
            x = ev.offsetX;
            y = ev.offsetY;
        }
        return { x: x, y: y };
    }

    //添加视频图像点击信息
    var img = document.getElementById("icon32");
    var img_x = new Array(105, 123, 234, 678, 1023), img_y = new Array(130, 234, 564, 345, 523);
    for (var i = 0; i <= img_x.length - 1; i++) {
        cxt.drawImage(img, img_x[i], img_y[i]);

    }
    cxt.rect(0, 0, 8, 8);
    cxt.stroke();
    cxt.isPointInPath(10, 10);
    var v = document.getElementById("video1");

    c.addEventListener('click', function(e) {
        p = getEventPosition(e);
        if (cxt.isPointInPath(p.x, p.y)) {
            //点击了矩形
            window.setInterval(function () {
                cxt.drawImage(v, 20, 105, 270, 135);
            }, 20);
           // alert(112);
        }
    }, false);

    var find = document.getElementById('find').value;
    alert(find);
    var img = document.getElementById("flag");
    var findpoint = new Array();
    if (find) {
        findpoint = find.split(",");
        cxt.drawImage(img, findpoint[0] - 10, findpoint[1] - 50);
    } else {
        alert("在当前区域未找到!");
    }
</script>
</html>