<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>测试拖拽</title>
    <script type="text/javascript" src="/Public/Home/js/common/jquery-1.12.2.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/gridster/jquery.gridster.min.js"></script>
    <link rel="stylesheet" href="/Public/Home/css/jquery.gridster.min.css"/>
</head>
<style>
    .small img{
        height:83px;
        width:97px;
    }
    li {
        background-color: white;
        width: 150px;
        height: 300px;
        border: solid 1px black;
    }
</style>
<body background="/Public/Home/images/star.jpg">
<div class="gridster">
    <ul>
        <!--
        data-row:数据行，元素所存在的行数。
        data-col:数据列，元素所存在的列数。
        data-sizex:元素块的宽（以个为单位，每个元素块的宽度为widget_base_dimensions所设定的值）
        data-sizey:元素块的高（以个为单位，每个元素块的高度为widget_base_dimensions所设定的值）
        -->
        <li data-row="1" data-col="1" data-sizex="2" data-sizey="1">
            <!--<img src="/Public/Home/images/114.jpg" width="144px" height="144px">-->
        </li>
        <li data-row="1" data-col="2" data-sizex="4" data-sizey="3"></li>
        <li data-row="1" data-col="3" data-sizex="2" data-sizey="1"></li>
        <li data-row="2" data-col="1" data-sizex="2" data-sizey="1"></li>
        <li data-row="2" data-col="3" data-sizex="2" data-sizey="1"></li>
        <li data-row="3" data-col="1" data-sizex="2" data-sizey="1"></li>
        <li data-row="3" data-col="3" data-sizex="2" data-sizey="1"></li>
        <li data-row="4" data-col="1" data-sizex="1" data-sizey="1"></li>
        <li data-row="4" data-col="2" data-sizex="1" data-sizey="1"></li>
        <li data-row="4" data-col="3" data-sizex="1" data-sizey="1"></li>
        <li data-row="4" data-col="4" data-sizex="1" data-sizey="1"></li>
        <li data-row="4" data-col="5" data-sizex="1" data-sizey="1"></li>
        <li data-row="4" data-col="6" data-sizex="1" data-sizey="1"></li>
        <li data-row="4" data-col="7" data-sizex="1" data-sizey="1"></li>
        <li data-row="4" data-col="8" data-sizex="1" data-sizey="1"></li>
    </ul>
</div>
</body>
<script>
    $(function(){
        $(".gridster ul").gridster(
                {
                    widget_margins: [0, 0],
                    widget_base_dimensions: [167, 167]
                });
    });
</script>
</html>