<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>检查分析</title>
    <script type="text/javascript" src="/Public/Home/js/echarts-2.2.7/build/dist/echarts-all.js"></script>
</head>
<style>
    #chart2{
        width:600px;
        height: 400px;
        position: absolute;
        top:200px;
        left:700px

    }
    #chart1{
        width:600px;
        height: 400px;
        position: absolute;
        top:200px;
        left: 1200px;
    }

    #chart3{
        width:600px;
        height: 400px;
        position: absolute;
        left: 50px;
        top:200px;
    }

    #chart4{
        width:600px;
        height: 400px;
        position: absolute;
        left: 600px;
        top:500px;
    }
    #chart5{
        width:600px;
        height: 400px;
        position: absolute;
        left: 1200px;
        top:500px;
    }
</style>
<body background="/Public/Home/images/hospital/bgv1.2.jpg">
    <div id="chart2"></div>
    <div id="chart1"></div>
    <div id="chart3"></div>
    <!--<div id="chart4"></div>-->
    <!--<div id="chart5"></div>-->
</body>
<script>
    option = {
        title : {
            text: '病人检查类型Top',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            orient : 'vertical',
            x : 'left',
                data:['超声常规检查','X线检查','CT检查','心电图','脑电图']
        },
        calculable : true,
        series : [
            {
               // name:'访问来源',
                type:'pie',
                radius : '55%',
                center: ['50%', 225],
                data:[
                    {value:5042, name:'超声常规检查'},
                    {value:2717, name:'X线检查'},
                    {value:2588, name:'CT检查'},
                    {value:2245, name:'心电图'},
                    {value:579, name:'脑电图'}
                ]
            }
        ]
    };
    var myChart = echarts.init(document.getElementById('chart2'));
    myChart.setOption(option);
    option2 = {
        tooltip : {
            trigger: 'axis',
            axisPointer : {
                type: 'shadow'
            }
        },
        legend: {
            data:['超声常规检查','X线检查','CT检查','心电图','脑电图']
        },
        toolbox: {
            show : true,
            orient : 'vertical',
            y : 'center',
            feature : {
                mark : {show: true},
                magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        xAxis : [
            {
                type : 'category',
                data : ['内科','外科','妇产科','儿科','耳鼻咽喉科','精神科(急诊)','精神科(专家)']
            }
        ],
        yAxis : [
            {
                type : 'value',
                splitArea : {show : true}
            }
        ],
        grid: {
            x2:40
        },
        series : [
            {
                name:'超声常规检查',
                type:'bar',
                stack: '总量',
                data:[479, 513,3377,143 , 3, 4,14]
            },
            {
                name:'X线检查',
                type:'bar',
                stack: '总量',
                data:[414, 382, 13, 238, 21, 10, 7]
            },
            {
                name:'CT检查',
                type:'bar',
                stack: '总量',
                data:[515, 434, 5, 40, 142, 169, 225]
            },
            {
                name:'心电图',
                type:'bar',
                stack: '总量',
                data:[382, 24, 474, 41, 122, 91, 145]
            },
            {
                name:'脑电图',
                type:'bar',
                stack: '总量',
                data:[24, 2, '-', 23, '-', 83, 188]
            }
        ]
    };

    myChart2 = echarts.init(document.getElementById('chart1'));
    myChart2.setOption(option2);
   // myChart = echarts.init(document.getElementById('chart2'));
    myChart.connect(myChart2);
    myChart2.connect(myChart);

    setTimeout(function (){
        window.onresize = function () {
            myChart.resize();
            myChart2.resize();
        }
    },200)

    //
    option3 = {
        title:{
            text:'2016年检查类型分析对比图'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data : ['一季度','二季度','三季度','四季度']

        },
//        toolbox: {
//            show : true,
//            feature : {
//                mark : {show: true},
//                dataView : {show: true, readOnly: false},
//                magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
//                restore : {show: true},
//                saveAsImage : {show: true}
//            }
//        },
        calculable : true,
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                data:['CT检查','MRI检查','X线检查','超声常规检查','电子内镜','肺功能检查',
                    '经颅多普勒','脑电图','心电图','心理测验','Hp检查']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'一季度',
                type:'line',
                stack: '总量',
                data:[259, 20, 229, 477, 24, 6, 23,89,257,135,39]
            },
            {
                name:'二季度',
                type:'line',
                stack: '总量',
                data:['-', '-', '-', '-', '-', '-', '-','-', '-', '-', '-']
            },
            {
                name:'三季度',
                type:'line',
                stack: '总量',
                data:[695, 52, 799, 989, 25, '-', 29,70,404,'-','-']
            },
            {
                name:'四季度',
                type:'line',
                stack: '总量',
                data:[1634, 150, 1689, 3576, 189, 4, 158,420,1584,323,147]
            }
        ]
    };
    var myChart3 = echarts.init(document.getElementById('chart3'));
    myChart3.setOption(option3);

    //
    option4 = {
        title : {
            text: '病人检验类型Top10'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:['2016年']
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                magicType: {show: true, type: ['line', 'bar']},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        xAxis : [
            {
                type : 'value',
                boundaryGap : [0, 0.01]
            }
        ],
        yAxis : [
            {
                type : 'category',
                data : ['其他','精液','分泌物','粪便','白带','末梢血','静脉血浆','尿液','静脉全血','静脉血清']
            }
        ],
        series : [
            {
                name:'2016年',
                type:'bar',
                data:[48, 58, 193, 465, 961, 1203,1256,2891,7444,16885]
            }
        ]
    };
    var myChart4 = echarts.init(document.getElementById('chart4'));
    myChart4.setOption(option4);

    //雷达图

    option5 = {
        title : {
            text: '2016年检验项目对比图'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            orient : 'vertical',
            x : 'right',
            y : 'bottom',
            data:['一季度','二季度','三季度','四季度']
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        polar : [
            {
                indicator : [
                    { text: '血常规五分类', max: 3200},
                    { text: '肝功能', max: 1700},
                    { text: '尿常规检查', max: 1400},
                    { text: '肾功能', max: 1200},
                    { text: '葡萄糖测定', max: 1100},
                    { text: '凝血功能四项', max: 700},
                    { text: '血脂', max: 600}
                ]
            }
        ],
        calculable : true,
        series : [
            {
                name: '',
                type: 'radar',
                data : [
                    {
                        value : [116, 47, 50, 44, 42, 16,24],
                        name : '一季度'
                    },
                    {
                        value : [15, 7, 7, 6, 7, 1,2],
                        name : '二季度'
                    },
                    {
                        value : [3061, 1646, 1106, 988, 866, 687,464],
                        name : '三季度'
                    },
                    {
                        value : [3173, 1506, 1347, 1179, 1009, 453,594],
                        name : '四季度'
                    }
                ]
            }
        ]
    };
    var myChart5 = echarts.init(document.getElementById('chart5'));
    myChart5.setOption(option5);
</script>
</html>