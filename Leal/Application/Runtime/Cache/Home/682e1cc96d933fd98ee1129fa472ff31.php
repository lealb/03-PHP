<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
    <title>云腾志远</title>
    <link rel="stylesheet" href="/Public/Home/css/bootstrap.min.css">
    <script src="http://webapi.amap.com/maps?v=1.3&key=7043a2d34a24f2543d6fa0aea210e073"></script>
    <script type="text/javascript" src="/Public/Home/js/gaodemap/heatmapData.js"></script>
    <script type="text/javascript" src="/Public/Home/js/common/jquery-1.12.2.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/common/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/gaodemap/heatmap-amap.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/gaodemap/addToolbar.js"></script>
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
    *{
        margin: 0;
        padding: 0;
    }
</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title text-center" >热力图</h3>
                </div>
                <div class="col-md-12 panel-body">
                    <div id="container" style="width: 800px;height: 600px"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    var point_x=106.732165;
    var point_y=26.575634;
    var map = new AMap.Map("container", {
        resizeEnable: true,
        center: [point_x, point_y],//26.6047055087,106.7243686963
        zoom: 12
    });

    if (!isSupportCanvas()) {
        alert('热力图仅对支持canvas的浏览器适用,您所使用的浏览器不能使用热力图功能,请换个浏览器试试~')
    }
    //详细的参数,可以查看heatmap.js的文档 http://www.patrick-wied.at/static/heatmapjs/docs.html
    //参数说明如下:
    /* visible 热力图是否显示,默认为true
     * opacity 热力图的透明度,分别对应heatmap.js的minOpacity和maxOpacity
     * radius 势力图的每个点的半径大小
     * gradient  {JSON} 热力图的渐变区间 . gradient如下所示
     *	{
     .2:'rgb(0, 255, 255)',
     .5:'rgb(0, 110, 255)',
     .8:'rgb(100, 0, 255)'
     }
     其中 key 表示插值的位置, 0-1
     value 为颜色值
     */

    //利用ajax查询热力图数据
    var heatmap;
    map.plugin(["AMap.Heatmap"], function() {
        //初始化heatmap对象
        heatmap = new AMap.Heatmap(map, {
            radius: 25, //给定半径
            opacity: [0, 0.8],
            gradient:{
                 0.5: 'blue',
                 0.65: 'rgb(117,211,248)',
                 0.7: 'rgb(0, 255, 0)',
                 0.9: '#ffea00',
                 1.0: 'red'
                }
        });
        heatmap.start();
        //设置数据集：
        heatmap.setDataSet({
            data: heatmapData,
            max: 100
        });
    });
    //判断浏览区是否支持canvas
    function isSupportCanvas() {
        var elem = document.createElement('canvas');
        return !!(elem.getContext && elem.getContext('2d'));
    }
</script>
</body>
</html>