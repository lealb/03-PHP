<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>展示效果</title>
    <link rel="stylesheet" href="/Public/Home/css/dreamslider.min.css" type="text/css" media="screen"/>
    <script type="text/javascript" src="/Public/Home/js/common/jquery-1.12.2.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/common/dreamslider.min.js"></script>
</head>
<style>
    body{
        font-family:Arial, Helvetica, sans-serif;
        font-size:12px;
        color: #555;
    }
    h1{
        font-size:38px;
        margin:10px;
    }
    h1 span{
        font-size:20px;
        color : black;
    }


    span.reference{
        position:fixed;
        left:10px;
        bottom:10px;
        font-size:12px;
    }
    span.reference a{
        color:#888;
        text-transform:uppercase;
        text-decoration:none;
        padding-right:20px;
    }
    span.reference a:hover{
        color:#444;
    }

</style>
<body>
<div class="container">
    <div class="im_wrapper">
        <div ><img src="/Public/Home/images/test/1.jpg" alt="" /></div>
        <div ><img src="/Public/Home/images/test/2.jpg" alt="" /></div>
        <div ><img src="/Public/Home/images/test/3.jpg" alt="" /></div>
        <div ><img src="/Public/Home/images/test/4.jpg" alt="" /></div>
        <div ><img src="/Public/Home/images/test/5.jpg" alt="" /></div>
        <div ><img src="/Public/Home/images/test/6.jpg" alt="" /></div>
        <div ><img src="/Public/Home/images/test/7.jpg" alt="" /></div>
        <div ><img src="/Public/Home/images/test/8.jpg" alt="" /></div>
        <div ><img src="/Public/Home/images/test/9.jpg" alt="" /></div>
        <div ><img src="/Public/Home/images/test/10.jpg" alt="" /></div>
        <div ><img src="/Public/Home/images/test/11.jpg" alt="" /></div>
        <div ><img src="/Public/Home/images/test/12.jpg" alt="" /></div>
        <div ><img src="/Public/Home/images/test/13.jpg" alt="" /></div>
        <div ><img src="/Public/Home/images/test/14.jpg" alt="" /></div>
        <div ><img src="/Public/Home/images/test/15.jpg" alt="" /></div>
        <div ><img src="/Public/Home/images/test/16.jpg" alt="" /></div>
        <div ><img src="/Public/Home/images/test/17.jpg" alt="" /></div>
        <div ><img src="/Public/Home/images/test/18.jpg" alt="" /></div>
    </div>
</div>
</body>
<script type="text/javascript">
    $(function(){
        $('.container').dreamSlider({
            rowCount:6 //[limit 5 or 6] no of thumbs in a row
            //,easeEffect: 'bounce'
            //,easeEffect: 'standOut'
        });
    });
</script>
</html>