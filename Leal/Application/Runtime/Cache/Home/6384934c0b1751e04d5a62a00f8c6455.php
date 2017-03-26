<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>重点人员20161009</title>
</head>
    <link type="text/css" rel="stylesheet" href="/Public/Home/css/bootstrap.min.css">
    <script type="text/javascript" src="/Public/Home/js/echarts/echarts.js"></script>
<body>
<div class="container">
    <div class="row">
        <div class="row-md-6">
            <div id="chart1" style="width: 550px;height: 400px"></div>
        </div>
        <div class="row-md-6"></div>
        <div class="row-md-6"></div>
        <div class="row-md-6"></div>
        <div class="row-md-6"></div>
        <div class="row-md-6"></div>
    </div>
</div>
</body>
<script>

    //沿河重点人员出入分布
    var chart1 = echarts.init(document.getElementById('chart1'));
    option = {
        title:{
            text:'沿河重点人员出入分布'
        },
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b}: {c} ({d}%)"
        },
        legend: {
            orient: 'vertical',
            x: 'right',
            data:['直达','营销广告','搜索引擎','邮件营销','联盟广告','视频广告','百度','谷歌','必应','其他']
        },
        series: [
            {
                name:'到达地区',
                type:'pie',
                selectedMode: 'single',
                radius: [0, '30%'],

                label: {
                    normal: {
                        show: true,
                        formatter: "{b}: {c} ({d}%)",
                        position: 'inner'
                    }
                },
                labelLine: {
                    normal: {
                        show: true,
                        formatter: "{a} <br/>{b}: {c} ({d}%)"
                    }
                },
                data:[
                    {value:335, name:'直达', selected:true},
                    {value:679, name:'营销广告'},
                    {value:1548, name:'搜索引擎'}
                ]
            },
            {
                name:'出发地区',
                type:'pie',
                radius: ['40%', '55%'],

                data:[
                    {value:335, name:'直达'},
                    {value:310, name:'邮件营销'},
                    {value:234, name:'联盟广告'},
                    {value:135, name:'视频广告'},
                    {value:1048, name:'百度'},
                    {value:251, name:'谷歌'},
                    {value:147, name:'必应'},
                    {value:102, name:'其他'}
                ]
            }
        ]
    };
    chart1.setOption(option);
</script>
</html>