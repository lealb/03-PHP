<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>费用分析</title>
    <script type="text/javascript" src="/Public/Home/js/echarts/echarts.js"></script>
</head>
<style>
    #chart1{
        width: 600px;
        height:400px;
        position: absolute;
        top: 650px;
        left:150px;
    }
    #chart2{
        width: 600px;
        height: 400px;
        position: absolute;
        top: 650px;
        left:1100px;
    }

    #chart3{
        width: 1200px;
        height: 500px;
        position: absolute;
        top: 150px;
        left: 350px;
    }
</style>
<body background="/Public/Home/images/hospital/bgv1.3.jpg">
    <div id="chart1"></div>
    <div id="chart2"></div>
    <!--圆环-->
    <div id="chart3"></div>
</body>
<script>
    option1 = {
        title: {
            text: '门诊费用组成（单位:元）',
        },
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            },
            formatter: function (params) {
                var tar = params[0];
                return tar.name + '<br/>' + tar.seriesName + ' : ' + tar.value;
            }
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
        xAxis : [
            {
                type : 'category',
                splitLine: {show:false},
                data : ['总费用','药','卫材费','诊查费','治疗费','其他']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'辅助',
                type:'bar',
                stack: '总量',
                itemStyle:{
                    normal:{
                        barBorderColor:'rgba(0,0,0,0)',
                        color:'rgba(0,0,0,0)'
                    },
                    emphasis:{
                        barBorderColor:'rgba(0,0,0,0)',
                        color:'rgba(0,0,0,0)'
                    }
                },
                data:[0, 150000000, 14000000, 20000000, 30000000,5000000]
            },
            {
               // name:'生活费',
                type:'bar',
                stack: '总量',
                itemStyle : { normal: {label : {show: true, position: 'inside'}}},
                data:[265916107, 105421677, 16587294, 3005595, 108865984, 3203555]
            }
        ]
    };

    var chart1=echarts.init(document.getElementById('chart1'));
    chart1.setOption(option1);

    //周报
    option2 = {
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        legend: {
            data:['直接访问','邮件营销','联盟广告','视频广告','搜索引擎','百度','谷歌','必应','其他']
        },
        toolbox: {
            show : true,
            orient: 'vertical',
            x: 'right',
            y: 'center',
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        xAxis : [
            {
                type : 'category',
                data : ['周一','周二','周三','周四','周五','周六','周日']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'直接访问',
                type:'bar',
                data:[320, 332, 301, 334, 390, 330, 320]
            },
            {
                name:'邮件营销',
                type:'bar',
                stack: '广告',
                data:[120, 132, 101, 134, 90, 230, 210]
            },
            {
                name:'联盟广告',
                type:'bar',
                stack: '广告',
                data:[220, 182, 191, 234, 290, 330, 310]
            },
            {
                name:'视频广告',
                type:'bar',
                stack: '广告',
                data:[150, 232, 201, 154, 190, 330, 410]
            },
            {
                name:'搜索引擎',
                type:'bar',
                data:[862, 1018, 964, 1026, 1679, 1600, 1570],
                markLine : {
                    itemStyle:{
                        normal:{
                            lineStyle:{
                                type: 'dashed'
                            }
                        }
                    },
                    data : [
                        [{type : 'min'}, {type : 'max'}]
                    ]
                }
            },
            {
                name:'百度',
                type:'bar',
                barWidth : 5,
                stack: '搜索引擎',
                data:[620, 732, 701, 734, 1090, 1130, 1120]
            },
            {
                name:'谷歌',
                type:'bar',
                stack: '搜索引擎',
                data:[120, 132, 101, 134, 290, 230, 220]
            },
            {
                name:'必应',
                type:'bar',
                stack: '搜索引擎',
                data:[60, 72, 71, 74, 190, 130, 110]
            },
            {
                name:'其他',
                type:'bar',
                stack: '搜索引擎',
                data:[62, 82, 91, 84, 109, 110, 120]
            }
        ]
    };
    var chart2=echarts.init(document.getElementById('chart2'));
    chart2.setOption(option2);

    //
    var labelTop = {
        normal : {
            label : {
                show : true,
                position : 'center',
                formatter : '{b}',
                textStyle: {
                    baseline : 'bottom',
                    fontSize:15,
                }
            },
            labelLine : {
                show : false
            }
        }
    };
    var labelFromatter = {
        normal : {
            label : {
                formatter : function (params){
                    return 100 - params.value + '%'
                },
                textStyle: {
                    baseline : 'top',
                    fontSize:15,
                }
            }
        },
    }
    var labelBottom = {
        normal : {
            color: '#ccc',
            label : {
                show : true,
                position : 'center'
            },
            labelLine : {
                show : false
            }
        },
        emphasis: {
            color: 'rgba(0,0,0,0)'
        }
    };
    var radius = [40, 55];
    option3 = {
        legend: {
            x : 'center',
            y : 'center',
//            data:[
//                '西药费','中成药费','治疗费','诊查费','卫材费',
//                '检查费', '检验费', '床位费', '手术费', '其它'
//            ]
        },
        title : {
            text: '费用类别占比',
            x: 'center'
        },
        toolbox: {
            show : true,
            feature : {
                dataView : {show: true, readOnly: false},
//                magicType : {
//                    show: true,
//                    type: ['pie', 'funnel'],
//                    option: {
//                        funnel: {
//                            width: '20%',
//                            height: '30%',
//                            itemStyle : {
//                                normal : {
//                                    label : {
//                                        formatter : function (params){
//                                            return 'other\n' + params.value + '%\n'
//                                        },
//                                        textStyle: {
//                                            baseline : 'middle'
//                                        }
//                                    }
//                                },
//                            }
//                        }
//                    }
//                },
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        series : [
            {
                type : 'pie',
                center : ['10%', '30%'],
                radius : radius,
                x: '0%', // for funnel
                itemStyle : labelFromatter,
                data : [
                    {name:'other', value:67.3, itemStyle : labelBottom},
                    {name:'西药费', value:32.7,itemStyle : labelTop}
                ]
            },
            {
                type : 'pie',
                center : ['30%', '30%'],
                radius : radius,
                x:'20%', // for funnel
                itemStyle : labelFromatter,
                data : [
                    {name:'other', value:93, itemStyle : labelBottom},
                    {name:'中成药费', value:7,itemStyle : labelTop}
                ]
            },
            {
                type : 'pie',
                center : ['50%', '30%'],
                radius : radius,
                x:'40%', // for funnel
                itemStyle : labelFromatter,
                data : [
                    {name:'other', value:59.07, itemStyle : labelBottom},
                    {name:'治疗费', value:40.93,itemStyle : labelTop}
                ]
            },
            {
                type : 'pie',
                center : ['70%', '30%'],
                radius : radius,
                x:'60%', // for funnel
                itemStyle : labelFromatter,
                data : [
                    {name:'other', value:98, itemStyle : labelBottom},
                    {name:'诊查费', value:2,itemStyle : labelTop}
                ]
            },
            {
                type : 'pie',
                center : ['90%', '30%'],
                radius : radius,
                x:'80%', // for funnel
                itemStyle : labelFromatter,
                data : [
                    {name:'other', value:94, itemStyle : labelBottom},
                    {name:'卫材费', value:6,itemStyle : labelTop}
                ]
            },
            {
                type : 'pie',
                center : ['10%', '70%'],
                radius : radius,
                y: '55%',   // for funnel
                x: '0%',    // for funnel
                itemStyle : labelFromatter,
                data : [
                    {name:'other', value:94, itemStyle : labelBottom},
                    {name:'检查费', value:6,itemStyle : labelTop}
                ]
            },
            {
                type : 'pie',
                center : ['30%', '70%'],
                radius : radius,
                y: '55%',   // for funnel
                x:'20%',    // for funnel
                itemStyle : labelFromatter,
                data : [
                    {name:'other', value:99.7, itemStyle : labelBottom},
                    {name:'检验费', value:0.3,itemStyle : labelTop}
                ]
            },
            {
                type : 'pie',
                center : ['50%', '70%'],
                radius : radius,
                y: '55%',   // for funnel
                x:'40%', // for funnel
                itemStyle : labelFromatter,
                data : [
                    {name:'other', value:99.6, itemStyle : labelBottom},
                    {name:'床位费', value:0.4,itemStyle : labelTop}
                ]
            },
            {
                type : 'pie',
                center : ['70%', '70%'],
                radius : radius,
                y: '55%',   // for funnel
                x:'60%', // for funnel
                itemStyle : labelFromatter,
                data : [
                    {name:'other', value:96, itemStyle : labelBottom},
                    {name:'手术费', value:4,itemStyle : labelTop}
                ]
            },
            {
                type : 'pie',
                center : ['90%', '70%'],
                radius : radius,
                y: '55%',   // for funnel
                x:'80%', // for funnel
                itemStyle : labelFromatter,
                data : [
                    {name:'other', value:99, itemStyle : labelBottom},
                    {name:'其他', value:1,itemStyle : labelTop}
                ]
            }
        ]
    };
    var chart3=echarts.init(document.getElementById('chart3'));
    chart3.setOption(option3);
</script>
</html>