<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>公安厅展示</title>
    <link type="text/css" rel="stylesheet" href="/Public/Home/css/bootstrap.min.css">
    <script type="text/javascript" src="/Public/Home/js/echarts/echarts.js"></script>
    <script type="text/javascript" src="/Public/Home/js/common/jquery-1.12.2.min.js"></script>
</head>
<style>
    body{
        background-image: url("/Public/Home/images/police/bgv1.0.jpg");
        background-repeat: no-repeat;
    }
    #chart1{
        width: 220px;
        height: 185px;
        left: 470px;
        top:570px;
        position: absolute;
        background: red;
    }
    #chart2{
        width: 220px;
        height: 185px;
        left: 690px;
        top:570px;
        position: absolute;
        background: red;
    }
    #chart3{
        width: 220px;
        height: 185px;
        left: 910px;
        top:570px;
        position: absolute;
        background: red;
    }
    #chart4{
        width: 220px;
        height: 185px;
        left: 1130px;
        top:570px;
        position: absolute;
        background: red;
    }

    #chart5{
        width: 620px;
        height: 260px;
        left: 720px;
        top:140px;
        position: absolute;
        background: red;
    }

    #chart6{
        width: 320px;
        height: 200px;
        left: 705px;
        top:390px;
        position: absolute;
        background: red;
    }

    #p1{width: 125px;height: 25px;left: 110px;top:140px;position: absolute;}
    #p2{width: 125px;height: 25px;left: 110px;top:165px;position: absolute;}

    #p3{width: 105px;height: 20px;left: 310px;top:155px;position: absolute;background: red}
</style>
<body>
<div class="container">
    <div class="row">
        <!--三个仪表表-->
        <div id="chart1"></div>
        <div id="chart2"></div>
        <div id="chart3"></div>
        <div id="chart4"></div>
        <!--折线图-->
        <div id="chart5"></div>
        <!--雷达图-->
        <div id="chart6"></div>
        <!--35个数字-->
        <div id="p1" style="font-size: 15px;color: #2aabd2">170</div>
        <div id="p2" style="font-size: 15px;color: #2aabd2">17,250,838,949</div>
        <div id="p3"></div>
        <div id="p4"></div>
        <div id="p5"></div>
        <div id="p6"></div>
        <div id="p7"></div>
        <div id="p8"></div>
        <div id="p9"></div>
        <div id="p10"></div>
        <div id="p11"></div>
        <div id="p12"></div>
        <div id="p13"></div>
        <div id="p14"></div>
        <div id="p15"></div>
        <div id="p16"></div>
        <div id="p17"></div>
        <div id="p18"></div>
        <div id="p19"></div>
        <div id="p20"></div>
        <div id="p21"></div>
        <div id="p22"></div>
        <div id="p23"></div>
        <div id="p24"></div>
        <div id="p25"></div>
        <div id="p26"></div>
        <div id="p27"></div>
        <div id="p28"></div>
        <div id="p29"></div>
        <div id="p30"></div>
        <div id="p31"></div>
        <div id="p32"></div>
        <div id="p33"></div>
        <div id="p34"></div>
        <div id="p35"></div>
    </div>
</div>
</body>
<script>
    //图1 仪表盘 生产库 数据总量
    var chart1=echarts.init(document.getElementById('chart1'));
    option = {
        title:{
            text:'数据总量(亿)',
            textStyle:{
                color:'#67a5fc',
                fontSize:14
            },
            x:'center',
            y:'85%'
        },
        tooltip : {
            formatter: "{c}亿"
        },
        series: [
            {
                type:'gauge',
                splitNumber: 5,       // 分割段数，默认为5
                max:600,
                axisLine: {            // 坐标轴线
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: [[0.2, '#228b22'],[0.8, '#48b'],[1, '#ff4500']],
                        //color: [[0.2, '#508de6'],[0.8, '#1d66c4'],[1, '#083a81']],
                        width: 4,
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                axisTick: {            // 坐标轴小标记
                    splitNumber: 5,   // 每份split细分多少段
                    length :6,        // 属性length控制线长
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: 'auto',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                axisLabel: {            // 坐标轴小标记
                    textStyle: {       // 属性lineStyle控制线条样式
                        fontWeight: 'bolder',
                        color: '#fff',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                splitLine: {           // 分隔线
                    show: true,        // 默认显示，属性show控制显示与否
                    length :15,         // 属性length控制线长
                    lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
                        color: 'auto',
                        color: '#fff',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                pointer : {
                    width : 5,
                    // color:'#508de8'
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 5
                },
                title : {
                    show : true,
                    offsetCenter: [0, 10],       // x, y，单位px
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        fontWeight: 'bolder'
                    }
                },
                detail : {
                    formatter:'{value}亿',
                    borderColor: '#fff',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 5,
                    width: 80,
                    height:30,
                    offsetCenter: [2, 50],       // x, y，单位px
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        color: 'auto',
                        fontSize: 15,
                        fontWeight: 'bolder'
                    }
                },
                data: [{value: 556.2, name: ''}]
            }
        ]
    };
    chart1.setOption(option);

    //图2 仪表盘 生产库 数据成品率
    var chart2=echarts.init(document.getElementById('chart2'));
    option = {
        title:{
            text:'数据成品率(%)',
            textStyle:{
                color:'#67a5fc',
                fontSize:14
            },
            x:'center',
            y:'85%'
        },
        tooltip : {
            formatter: "{c}%"
        },
        series: [
            {
                type:'gauge',
                splitNumber: 5,       // 分割段数，默认为5
                // max:600,
                axisLine: {            // 坐标轴线
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: [[0.2, '#228b22'],[0.8, '#48b'],[1, '#ff4500']],
                        //color: [[0.2, '#508de6'],[0.8, '#1d66c4'],[1, '#083a81']],
                        width: 4,
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                axisTick: {            // 坐标轴小标记
                    splitNumber: 5,   // 每份split细分多少段
                    length :6,        // 属性length控制线长
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: 'auto',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                axisLabel: {            // 坐标轴小标记
                    textStyle: {       // 属性lineStyle控制线条样式
                        fontWeight: 'bolder',
                        color: '#fff',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                splitLine: {           // 分隔线
                    show: true,        // 默认显示，属性show控制显示与否
                    length :15,         // 属性length控制线长
                    lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
                        color: 'auto',
                        color: '#fff',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                pointer : {
                    width : 5,
                    // color:'#508de8'
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 5
                },
                title : {
                    show : true,
                    offsetCenter: [0, 10],       // x, y，单位px
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        fontWeight: 'bolder'
                    }
                },
                detail : {
                    formatter:'{value}%',
                    borderColor: '#fff',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 5,
                    width: 80,
                    height:30,
                    offsetCenter: [2, 50],       // x, y，单位px
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        color: 'auto',
                        fontSize: 15,
                        fontWeight: 'bolder'
                    }
                },
                data: [{value: 72.51, name: ''}]
            }
        ]
    };
    chart2.setOption(option);

    //图3 仪表盘 生产库 日均使用频率
    var chart3=echarts.init(document.getElementById('chart3'));
    option = {
        title:{
            text:'日均使用频率(次)',
            textStyle:{
                color:'#67a5fc',
                fontSize:14
            },
            x:'center',
            y:'85%'
        },
        tooltip : {
            formatter: "{c}次"
        },
        series: [
            {
                type:'gauge',
                splitNumber: 5,       // 分割段数，默认为5
                max:8000,
                axisLine: {            // 坐标轴线
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: [[0.2, '#228b22'],[0.8, '#48b'],[1, '#ff4500']],
                        //color: [[0.2, '#508de6'],[0.8, '#1d66c4'],[1, '#083a81']],
                        width: 4,
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                axisTick: {            // 坐标轴小标记
                    splitNumber: 5,   // 每份split细分多少段
                    length :6,        // 属性length控制线长
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: 'auto',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                axisLabel: {            // 坐标轴小标记
                    textStyle: {       // 属性lineStyle控制线条样式
                        fontWeight: 'bolder',
                        color: '#fff',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                splitLine: {           // 分隔线
                    show: true,        // 默认显示，属性show控制显示与否
                    length :15,         // 属性length控制线长
                    lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
                        color: 'auto',
                        color: '#fff',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                pointer : {
                    width : 5,
                    // color:'#508de8'
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 5
                },
                title : {
                    show : true,
                    offsetCenter: [0, 10],       // x, y，单位px
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        fontWeight: 'bolder'
                    }
                },
                detail : {
                    formatter:'{value}次',
                    borderColor: '#fff',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 5,
                    width: 80,
                    height:30,
                    offsetCenter: [2, 50],       // x, y，单位px
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        color: 'auto',
                        fontSize: 15,
                        fontWeight: 'bolder'
                    }
                },
                data: [{value: 6494, name: ''}]
            }
        ]
    };
    chart3.setOption(option);

    //图4 仪表盘 生产库 数据日均使用量
    var chart4=echarts.init(document.getElementById('chart4'));
    option = {
        title:{
            text:'数据日均使用量(亿次)',
            textStyle:{
                color:'#67a5fc',
                fontSize:14
            },
            x:'center',
            y:'85%'
        },
        tooltip : {
            formatter: "{c}亿次"
        },
        series: [
            {
                type:'gauge',
                splitNumber: 5,       // 分割段数，默认为5
                max:1,
                axisLine: {            // 坐标轴线
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: [[0.2, '#228b22'],[0.8, '#48b'],[1, '#ff4500']],
                        //color: [[0.2, '#508de6'],[0.8, '#1d66c4'],[1, '#083a81']],
                        width: 4,
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                axisTick: {            // 坐标轴小标记
                    splitNumber: 5,   // 每份split细分多少段
                    length :6,        // 属性length控制线长
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: 'auto',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                axisLabel: {            // 坐标轴小标记
                    textStyle: {       // 属性lineStyle控制线条样式
                        fontWeight: 'bolder',
                        color: '#fff',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                splitLine: {           // 分隔线
                    show: true,        // 默认显示，属性show控制显示与否
                    length :15,         // 属性length控制线长
                    lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
                        color: 'auto',
                        color: '#fff',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                pointer : {
                    width : 5,
                    // color:'#508de8'
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 5
                },
                title : {
                    show : true,
                    offsetCenter: [0, 10],       // x, y，单位px
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        fontWeight: 'bolder'
                    }
                },
                detail : {
                    formatter:'{value}亿',
                    borderColor: '#fff',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 5,
                    width: 80,
                    height:30,
                    offsetCenter: [2, 50],       // x, y，单位px
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        color: 'auto',
                        fontSize: 15,
                        fontWeight: 'bolder'
                    }
                },
                data: [{value: 0.599, name: ''}]
            }
        ]
    };
    chart4.setOption(option);

    //图5 折线图
    var chart5=echarts.init(document.getElementById('chart5'));
    option = {
        title:{
            text:'应用服务使用趋势图',
            x:'center',
            textStyle:{
                color:'#fff'
            }
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            orient : 'vertical',
            x : '80%',
            data:['案事件','社区警务','一键通'],
            textStyle:{
                color:'#fff'
            }
        },
        calculable : true,
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                axisLine:{
                    lineStyle:{
                        color:'#fff',
                    }
                },

                data: ['一月','二月','三月','四月','五月','六月','七月','八月','九月']
            }
        ],
        yAxis : [
            {
                type : 'value',
                splitLine:{
                    lineStyle:{
                        color:'#66CCCC'    //背景网格颜色
                    }
                },
                axisLine:{
                    lineStyle:{
                        color:'#fff',
                    }
                }

            }
        ],
        series : [
            {

                name:'一键通',
                type:'line',
                itemStyle:{
                    color:'#fff',   //节点颜色
                    normal:{
                        color: "#FFFF00" //图标颜色
                    }
                },
                lineStyle:{
                    normal:{
                      //  width:10,  //连线粗细
                        color: "#FFFF00"  //连线颜色
                    }
                },
                data:[14
                    ,60326
                    ,416196
                    ,870604
                    ,659414
                    ,481026
                    ,530554
                    ,116365
                    ,318362]
            },
            {
                name:'社区警务',
                type:'line',
                itemStyle:{
                    color:'#fff',   //节点颜色
                    normal:{
                        color: "#00FF00" //图标颜色
                    }
                },
                lineStyle:{
                    normal:{
                        //  width:10,  //连线粗细
                        color: "#00FF00"  //连线颜色
                    }
                },
                data:[285391
                    ,214570
                    ,482204
                    ,432133
                    ,491251
                    ,525269
                    ,394702
                    ,467387
                    ,449760]
            },
            {
                name:'案事件',
                type:'line',
                itemStyle:{
                    color:'#fff',   //节点颜色
                    normal:{
                        color: "#FF00FF" //图标颜色
                    }
                },
                lineStyle:{
                    normal:{
                        //  width:10,  //连线粗细
                        color: "#FF00FF"  //连线颜色
                    }
                },
                data:[1251780
                    ,874723
                    ,1519211
                    ,1239224
                    ,1367445
                    ,1358738
                    ,1337328
                    ,1495301
                    ,1461321]
            }
        ]
    };
    chart5.setOption(option);

    //图6 雷达图
    var chart6=echarts.init(document.getElementById('chart6'));
    option = {
        title : {
            text: '组件排名Top5',
            textStyle:{
                color:'#fff',
                fontSize:15
            },
            x:'left'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['热点问题']
        },
        calculable : true,
        polar : [
            {
                color:'#000',
                name:{
                    textStyle: {
                        color:'#fff',
                        fontSize:12
                    }
                },
                axisLabel:{
                    show:false,
                },
                show: true,
                indicator : [
                    {text : '物品管理', max  : 600},//285
                    {text : '刑侦应用', max  : 600},//801
                    {text : '立案监督', max  : 600},//184
                    {text : '巡逻盘查', max  : 600},//850
                    {text : '治安管理', max  : 600}//574

                ],
                radius : 70
            }
        ],
        series : [
            {
                type: 'radar',
                itemStyle: {
                    normal: {
                        areaStyle: {
                            //color:'#000',
                            //type: 'default'
                        }
                    }
                },
                data : [
                    {
                        value : [519,
                            498,
                            365,
                            182,
                            101
                        ],
                        itemStyle: {
                            normal: {
                                label:{
                                    show:true,
                                    formatter: ' {c}',
                                    textStyle:{
                                        color:'#fff',
                                        position:'inside',
                                    }
                                },
                                areaStyle: {
                                    type: 'default'
                                }
                            }
                        },
                    }
                ]
            }
        ]
    };
    chart6.setOption(option);
</script>
</html>