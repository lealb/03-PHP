<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>12319违章建筑地区分布</title>
    <link rel="stylesheet" href="/Public/Home/css/bootstrap.min.css">
    <script src="http://webapi.amap.com/maps?v=1.3&key=7043a2d34a24f2543d6fa0aea210e073"></script>
    <script type="text/javascript" src="/Public/Home/js/gaodemap/addToolbar.js"></script>
    <script type="text/javascript" src="/Public/Home/js/common/jquery-1.12.2.min.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/build/dist/echarts.js"></script>
</head>
<style>
    /*去除logo*/
    .amap-logo {
        right: 0 !important;
        left: auto !important;
        display: none;
    }
    .amap-copyright {
        right: 70px !important;
        left: auto !important;
    }
    .amap-copyright {
        display: none;
    }
</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin: 0;padding-left: 0">
            <div class="panel panel-info " >
                <!--<div class="panel-heading">-->
                    <!--<h3 class="panel-title text-center">分布区域图</h3>-->
                <!--</div>-->
                <div class="col-md-12 panel-body" style="margin: 0;padding-left: 0">
                    <div id="container"  style="width: 1000px;height: 600px"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    //初始化地图对象，加载地图
    var point_x=106.732165;
    var point_y=26.615634;
    var map = new AMap.Map("container", {
        resizeEnable: true,
        center: [point_x, point_y],//地图中心点
        zoom: 12 //地图显示的缩放级别
    });
    //alert(Math.random()/50.0);
    var lnglats = [
        [106.673832,26.591125],
        [106.672822+Math.random()/50.0,26.592225+Math.random()/50.0],
        [106.672822+Math.random()/50.0,26.592225+Math.random()/50.0],
        [106.672822+Math.random()/50.0,26.592225+Math.random()/50.0],
        [106.672822+Math.random()/50.0,26.592225+Math.random()/50.0],
        [106.672822+Math.random()/50.0,26.592225+Math.random()/50.0],
        [106.672822+Math.random()/50.0,26.592225+Math.random()/50.0],
        [106.672822+Math.random()/50.0,26.592225+Math.random()/50.0],
        [106.672822+Math.random()/50.0,26.592225+Math.random()/50.0],
        [106.672822+Math.random()/50.0,26.592225+Math.random()/50.0],
        [106.672822+Math.random()/50.0,26.592225+Math.random()/50.0],
        [106.672822+Math.random()/50.0,26.592225+Math.random()/50.0],
        [106.672822+Math.random()/50.0,26.592225+Math.random()/50.0],
        [106.672822+Math.random()/50.0,26.592225+Math.random()/50.0],
        [106.672822+Math.random()/50.0,26.592225+Math.random()/50.0],
        [106.722805, 26.604027],
        [106.766332+Math.random()/50.0,26.607097+Math.random()/50.0],
        [106.766332+Math.random()/50.0,26.607097+Math.random()/50.0],
        [106.766332+Math.random()/50.0,26.607097+Math.random()/50.0],
        [106.766332+Math.random()/50.0,26.607097+Math.random()/50.0],
        [106.766332+Math.random()/50.0,26.607097+Math.random()/50.0],
        [106.766332+Math.random()/50.0,26.607097+Math.random()/50.0],
        [106.766332+Math.random()/50.0,26.607097+Math.random()/50.0],
        [106.766332+Math.random()/50.0,26.607097+Math.random()/50.0],
        [106.766332+Math.random()/50.0,26.607097+Math.random()/50.0],
        [106.766332+Math.random()/50.0,26.607097+Math.random()/50.0],
        [106.766332+Math.random()/50.0,26.607097+Math.random()/50.0],
        [106.72063+Math.random()/50.0,26.590152+Math.random()/50.0],
        [106.72063+Math.random()/50.0,26.590152+Math.random()/50.0],
        [106.72063+Math.random()/50.0,26.590152+Math.random()/50.0],
        [106.72063+Math.random()/50.0,26.590152+Math.random()/50.0],
        [106.72063+Math.random()/50.0,26.590152+Math.random()/50.0],
        [106.72063+Math.random()/50.0,26.590152+Math.random()/50.0],
        [106.72063+Math.random()/50.0,26.590152+Math.random()/50.0],
        [106.72063+Math.random()/50.0,26.590152+Math.random()/50.0],
        [106.722136,26.593949],
        [106.722136+Math.random()/50.0,26.593949+Math.random()/50.0],
        [106.722136+Math.random()/50.0,26.593949+Math.random()/50.0],
        [106.722136+Math.random()/50.0,26.593949+Math.random()/50.0],
        [106.722136+Math.random()/50.0,26.593949+Math.random()/50.0],
        [106.722136+Math.random()/50.0,26.593949+Math.random()/50.0],
        [106.722136+Math.random()/50.0,26.593949+Math.random()/50.0],
        [106.722136+Math.random()/50.0,26.593949+Math.random()/50.0],
        [106.722136+Math.random()/50.0,26.593949+Math.random()/50.0],
        [106.739204,26.624829],
        [106.739204+Math.random()/50.0,26.624829+Math.random()/50.0],
        [106.739204+Math.random()/50.0,26.624829+Math.random()/50.0],
        [106.739204+Math.random()/50.0,26.624829+Math.random()/50.0],
        [106.739204+Math.random()/50.0,26.624829+Math.random()/50.0],
        [106.739204+Math.random()/50.0,26.624829+Math.random()/50.0],
        [106.739204+Math.random()/50.0,26.624829+Math.random()/50.0],

        [106.738557+Math.random()/50.0,26.588554+Math.random()/50.0],
        [106.738557+Math.random()/50.0,26.588554+Math.random()/50.0],
        [106.738557+Math.random()/50.0,26.588554+Math.random()/50.0],
        [106.738557+Math.random()/50.0,26.588554+Math.random()/50.0],
        [106.738557+Math.random()/50.0,26.588554+Math.random()/50.0],
        [106.738557+Math.random()/50.0,26.588554+Math.random()/50.0],
        [106.738557+Math.random()/50.0,26.588554+Math.random()/50.0],
        [106.738557+Math.random()/50.0,26.588554+Math.random()/50.0],
        [106.740677,26.591042],
        [106.740677+Math.random()/50.0,26.591042+Math.random()/50.0],
        [106.740677+Math.random()/50.0,26.591042+Math.random()/50.0],
        [106.740677+Math.random()/50.0,26.591042+Math.random()/50.0],
        [106.740677+Math.random()/50.0,26.591042+Math.random()/50.0],
        [106.740677+Math.random()/50.0,26.591042+Math.random()/50.0],
        [106.740677+Math.random()/50.0,26.591042+Math.random()/50.0],
        [106.728801,26.587391],
        [106.728801+Math.random()/50.0,26.587391+Math.random()/50.0],
        [106.728801+Math.random()/50.0,26.587391+Math.random()/50.0],
        [106.728801+Math.random()/50.0,26.587391+Math.random()/50.0],
        [106.728801+Math.random()/50.0,26.587391+Math.random()/50.0],
        [106.728801+Math.random()/50.0,26.587391+Math.random()/50.0],
        [106.728801+Math.random()/50.0,26.587391+Math.random()/50.0],
        [106.728801+Math.random()/50.0,26.587391+Math.random()/50.0],
        [106.728801+Math.random()/50.0,26.587391+Math.random()/50.0],
    ];
    //添加点标记，并使用自己的icon
    //map.clearMap();  // 清除地图覆盖物
    var marker;
    //var infoWindow = new AMap.InfoWindow({offset: new AMap.Pixel(0, -30)});
    for(var i=0;i<= lnglats.length-1;i++){
        marker= new AMap.Marker({
            map: map,
            position:  lnglats[i],
            icon: new AMap.Icon({
                size: new AMap.Size(16, 16),  //图标大小
                image: "/Public/Home/images/icon/home16.png",
                imageOffset: new AMap.Pixel(0, 0)
            })
        });
    }


</script>
</body>
</html>