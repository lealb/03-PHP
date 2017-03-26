<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>资源库分类展示</title>
</head>
<link type="text/css" rel="stylesheet" href="/Public/Home/css/bootstrap.min.css">
<link rel="stylesheet" href="/Public/Home/css/jquery.gridster.min.css"/>
<script type="text/javascript" src="/Public/Home/js/echarts/echarts.js"></script>
<script type="text/javascript" src="/Public/Home/js/common/jquery-1.12.2.min.js"></script>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <!--资源情况统计-->
            <div id="chart1" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart2" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart3" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart4" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart5" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart6" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart7" style="width: 550px;height: 400px"></div>
        </div>
    </div>
</div>

</body>
<script>
    var chart1=echarts.init(document.getElementById('chart1'));
    option = {
        title:{
            text:'资源库类型'
        },
        color: ['#3398DB'],
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis : [
            {
                type : 'category',
                data : ['生产库', '缓冲库', '基础资源库', '服务资源库'],
                axisTick: {
                    alignWithLabel: true
                }
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                itemStyle: {
                    normal: {
                        color: function(params) {
                            // build a color map as your need.
                            var colorList = [
                                '#C1232B','#B5C334','#FCCE10','#E87C25','#E87C25',
                                '#E87C25','#E87C25','#E87C25','#E87C25','#E87C25',
                                '#E87C25','#E87C25','#E87C25','#E87C25','#E87C25',
                                '#E87C25','#E87C25','#E87C25','#E87C25','#E87C25',
                                '#E87C25','#E87C25','#E87C25','#E87C25','#E87C25',
                                '#27727B','#F0805A','#26C0C0'
                            ];
                            return colorList[params.dataIndex]
                        },
                        label:{
                            show:true,
                            position: "top",
                            color:'#fff',
                            formatter: '{c}'
                        }
                    }
                },
                name:'数据量',
                type:'bar',
                barWidth: '60%',
                data:[17250838949, 9674976955, 4121166829, 16671756816]
            }
        ]
    };
    chart1.setOption(option);

    //chart2
    var chart2=echarts.init(document.getElementById('chart2'));
    option = {
        title:{
            text:'资源来源'
        },
        color: ['#3398DB'],
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis : [
            {
                type : 'category',
                data : ['公安资源数据', '政府部门管理数据', '公共服务数据', '社会数据'],
                axisTick: {
                    alignWithLabel: true
                }
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                itemStyle: {
                    normal: {
                        color: function(params) {
                            // build a color map as your need.
                            var colorList = ['#E87C25',
                                '#27727B','#F0805A','#26C0C0'
                            ];
                            return colorList[params.dataIndex]
                        },
                        label:{
                            show:true,
                            position: "top",
                            color:'#fff',
                            formatter: '{c}'
                        }
                    }
                },
                name:'数据量',
                type:'bar',
                barWidth: '60%',
                data:[7965573488, 154361396, 512579344, 1043362727]
            }
        ]
    };
    chart2.setOption(option);

    //chart3
    var chart3=echarts.init(document.getElementById('chart3'));
    option = {
        title : {
            text: '服务量统计',
            subtext:'数据服务：621',
        },
        tooltip : {
            trigger: 'axis'
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
                dataView : {show: false, readOnly: false},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        //calculable : true,
        polar : [
            {
                name:{
                    textStyle: {
                        color:'#000',
                        fontSize:12
                    }
                },
                axisLabel:{
                    show:false,
                },
                show: true,

                indicator : [
                    {text : '查询', max  : 500},
                    {text : '统计', max  : 10},
                    {text : '分析', max  : 20},
                    {text : '核查', max  : 20},
                    {text : '比对', max  : 10},
                    {text : '推送', max  : 20},
                    {text : '订阅', max  : 40},
                    {text : '下载', max  : 70}
                ],
                radius : 130
            }
        ],
        series : [
            {
                type: 'radar',
                itemStyle: {
                    normal: {
                        areaStyle: {
                            type: 'default'
                        }
                    }
                },
                data : [
                    {
                        value : [452, 5, 14, 10, 9, 10, 32, 69],
                        itemStyle: {
                            normal: {
                                label:{
                                    show:true,
                                    formatter: ' {c}',
                                    textStyle:{
                                        color:'rgba(0,0,0,1)',
                                    }
                                },
                                areaStyle: {
                                    type: 'default'
                                }
                            }
                        },
                        name : '数量'
                    }
                ]
            }
        ]
    };
    chart3.setOption(option);

    //chart4
    var chart4=echarts.init(document.getElementById('chart4'));
    option = {
        title:{
            text:'消息情况统计'
        },
        color: ['#3398DB'],
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis : [
            {
                type : 'category',
                data : ['代办任务', '代办事项', '通知公告', '消息提醒','录比反'],
                axisTick: {
                    alignWithLabel: true
                }
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                itemStyle: {
                    normal: {
                        color: function(params) {
                            // build a color map as your need.
                            var colorList = ['#E87C25',
                                '#27727B','#F0805A','#26C0C0'
                            ];
                            return colorList[params.dataIndex]
                        },
                        label:{
                            show:true,
                            position: "top",
                            color:'#fff',
                            formatter: '{c}'
                        }
                    }
                },
                name:'数据量',
                type:'bar',
                barWidth: '60%',
                data:[4178906, 2854953, 2716124, 56709, 3237001]
            }
        ]
    };
    chart4.setOption(option);

    //chart5
    var chart5=echarts.init(document.getElementById('chart5'));
    option = {
        title: {
            text: '服务调用情况日统计',
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                magicType : {
                    show: true,
                    type: ['pie', 'funnel'],
                    option: {
                        funnel: {
                            x: '25%',
                            width: '50%',
                            funnelAlign: 'center',
                            max: 1548
                        }
                    }
                },
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        series : [
            {
                name:'服务调用情况日统计',
                type:'pie',
                radius : ['50%', '70%'],
                itemStyle : {
                    normal : {
                        label : {
                            formatter: "{b} \n{c}({d}%)",
                            show : true
                        },
                        labelLine : {
                            show : true
                        }
                    },
                    emphasis : {
                        label : {
                            show : true,
                            position : 'center',
                            textStyle : {
                                fontSize : '30',
                                fontWeight : 'bold'
                            }
                        }
                    }
                },
                data:[
                    {value:107451, name:'查询服务'},
                    {value:97651, name:'推送服务'},
                    {value:78909, name:'比对服务'},
                    {value:8691, name:'订阅服务'},
                    {value:4799, name:'下载服务'}

                ]
            }
        ]
    };
    chart5.setOption(option);
</script>
</html>