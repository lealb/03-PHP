<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>公安厅v2.0</title>
    <link rel="stylesheet" href="/Public/Home/css/bootstrap.min.css">
    <script type="text/javascript" src="/Public/Home/js/echarts/echarts.js"></script>
    <script type="text/javascript" src="/Public/Home/js/common/jquery-1.12.2.min.js"></script>

</head>
<style>
    body{
        background-image: url("/Public/Home/images/bg3.jpg");
        background-repeat: no-repeat;

    }
    #chart1{
        padding: 200px 0px 0px 200px;
        width: 1100px;
        height: 600px;
    }
</style>
<body>
<div style="width:100%;">
    <div id="main" style="width:1366px; height:768px; position: absolute;"></div>
    <div class="container">
        <div class="row">
            <div id="chart1" class="col-md-6" ></div> </div>

        </div>
    </div>
<div id="chart2" style="width: 322px;height: 300px; position: absolute; right:-10px; top:50px;"></div>
<div id="chart3" style="width: 322px;height: 300px; position: absolute; right:-10px; top:340px;"></div>
</body>
<script>

    //chart1
    var chart1=echarts.init(document.getElementById('chart1'));
    $.get('../Public/Home/data/energy.json', function (data) {
        chart1.setOption(option = {
            tooltip: {
                trigger: 'item',
                triggerOn: 'mousemove'
            },
            series: [
                {
                    type: 'sankey',
                    layout: 'left',
                    data: data.nodes,
                    links: data.links,
                    itemStyle: {
                        normal: {
                            borderWidth: 1,
                            borderColor: '#fff',
                            label:{
                                show:true,
                                position: "inside",
                                textStyle:{
                                    fontSize:13,
                                    color:'#fff'
                                }
                               // formatter: data.links[0].source+':'+data.links[0].value
                            }
                        }
                    },
                    lineStyle: {
                        normal: {
                            color: 'source',
                            curveness: 0.5
                        }
                    }
                }
            ]
        });
    });

</script>
<script>
    //chart2
    var chart2=echarts.init(document.getElementById('chart2'));
    $.get('../Public/Home/data/life-expectancy.json', function (data) {

        var itemStyle = {
            normal: {
                opacity: 0.8,
                shadowBlur: 10,
                shadowOffsetX: 0,
                shadowOffsetY: 0,
                // shadowColor: 'rgba(0, 0, 0, 0.5)'
            }
        };

        var sizeFunction = function (x) {
            var y = Math.sqrt(x / 5e8) + 0.1;
            return y * 80;
        };
        // Schema:
        var schema = [
            {name: 'Income', index: 0, text: '系统数', unit: '个'},
            {name: 'LifeExpectancy', index: 1, text: '月增长量', unit: '条'},
            {name: 'Population', index: 2, text: '数据量', unit: ''},
            {name: 'Country', index: 3, text: '类型', unit: ''}
        ];

        option2 = {
            baseOption: {
                timeline: {
                    axisType: 'category',
                    orient: 'vertical',
                    autoPlay: true,
                    inverse: true,
                    playInterval: 1000,
                    left: null,
                    right: 0,
                    top: 20,
                    bottom: 20,
                    width: 55,
                    height: null,
                    label: {
                        normal: {
                            show:true,
                            textStyle: {
                                color: '#999'

                            }
                        },
                        emphasis: {
                            textStyle: {
                                color: '#fff'
                            }
                        }
                    },
                    symbol: 'none',
                    lineStyle: {
                        color: '#555'
                    },
                    checkpointStyle: {
                        color: '#bbb',
                        borderColor: '#777',
                        borderWidth: 2
                    },
                    controlStyle: {
                        showNextBtn: false,
                        showPrevBtn: false,
                        normal: {
                            color: '#666',
                            borderColor: '#666'
                        },
                        emphasis: {
                            color: '#aaa',
                            borderColor: '#aaa'
                        }
                    },
                    data: []
                },
                //  backgroundColor: '#404a59',
                title: [{
                    'text': data.timeline[0],
                    textAlign: 'center',
                    left: '63%',
                    top: '55%',
                    textStyle: {
                        fontSize: 36,
                        color: 'rgba(255, 255, 255, 0.7)'
                    }
                }],
                tooltip: {
                    padding: 5,
                    backgroundColor: '#222',
                    borderColor: '#777',
                    borderWidth: 1,
                    formatter: function (obj) {
                        var value = obj.value;
                        return schema[3].text + '：' + value[3] + '<br>'
                                + schema[1].text + '：' + value[1] + schema[1].unit + '<br>'
                                + schema[0].text + '：' + value[0] + schema[0].unit + '<br>'
                                + schema[2].text + '：' + value[2] + '<br>';
                    }
                },
                grid: {
                    left: '12%',
                    right: '110'
                },
                xAxis: {
                    type: 'log',
                    name: '资源库数量',
                    max: 500,
                   // min: 300,
                    nameGap: 5,
                    nameLocation: 'middle',
                    nameTextStyle: {
                        fontSize: 13
                    },
                    splitLine: {
                        show: false
                    },
                    axisLine: {
                        lineStyle: {
                            color: '#ccc'
                        }
                    },
                    axisLabel: {
                        formatter: '{value}'
                    }
                },
                yAxis: {
                    type: 'value',
                    name: '月增长量（百万）',
                    max: 100,
                    nameTextStyle: {
                        color: '#ccc',
                        fontSize: 13
                    },
                    axisLine: {
                        lineStyle: {
                            color: '#ccc'
                        }
                    },
                    splitLine: {
                        show: false
                    },
                    axisLabel: {
                        formatter: '{value} '
                    }
                },
                visualMap: [
                    {
                        show: false,
                        dimension: 3,
                        categories: data.counties,
                        calculable: true,
                        precision: 0.1,
                        textGap: 30,
                        textStyle: {
                            color: '#ccc'
                        },
                        inRange: {
                            color: (function () {
                                var colors = ['#bcd3bb', '#e88f70', '#edc1a5', '#9dc5c8',
                                    '#e1e8c8', '#7b7c68', '#e5b5b5', '#f0b489', '#928ea8', '#bda29a'];
                                return colors.concat(colors);
                            })()
                        }
                    }
                ],
                series: [
                    {
                        type: 'scatter',
                        itemStyle: itemStyle,
                        data: data.series[0],
                        symbolSize: function(val) {
                            return sizeFunction(val[2]);
                        }
                    }
                ],
                animationDurationUpdate: 1000,
                animationEasingUpdate: 'quinticInOut'
            },
            options: []
        };
        for (var n = 0; n < data.timeline.length; n++) {
            option2.baseOption.timeline.data.push(data.timeline[n]);
            option2.options.push({
                title: {
                    show: true,
                    'text': data.timeline[n] + ''
                },
                series: {
                    name: data.timeline[n],
                    type: 'scatter',
                    itemStyle: itemStyle,
                    data: data.series[n],
//                    symbolSize: function(val) {
//                        return sizeFunction(val[2]);
//                    }
                }
            });
        }
        chart2.setOption(option2);
    });
</script>
<script type="text/javascript">
    var myChart1 = echarts.init(document.getElementById('main'));
    // 指定图表的配置项和数据
    option1 = {
        tooltip : {
            formatter: "{a} <br/>{b} : {c}%"
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        series : [
            {
                name:'转化率',
                type:'gauge',
                radius : '20%',
                center : ['10%', '45%'],
                splitNumber: 10,       // 分割段数，默认为5
                axisLine: {            // 坐标轴线
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: [[0.29, 'lime'],[0.86, '#1e90ff'],[1, '#ff4500']],
                        width: 2,
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
                axisTick: {            // 坐标轴小标记
                    length :12,        // 属性length控制线长
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: 'auto',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                splitLine: {           // 分隔线
                    length :20,         // 属性length控制线长
                    lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
                        width:3,
                        color: '#fff',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                pointer: {
                    width:5,
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 5
                },
                title : {
                    offsetCenter: [0, '75%'],       // x, y，单位px
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        fontWeight: 'bolder',
                        fontStyle: 'italic',
                        color: '#fff',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                detail : {
                    formatter:'{value}%',
                    borderColor: '#fff',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 5,
                    width: 80,
                    height:30,
                    offsetCenter: [0, '100%'],       // x, y，单位px
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        fontWeight: 'bolder',
                        fontSize:18,
                        color: 'red '
                    }
                },
                data:[{value: 39.61, name: '转化率'}]
            },
            {
                name:'转移率',
                type:'gauge',
                center : ['10%', '20%'],    // 默认全局居中
                radius : '20%',
                max:200,
                axisLine: {            // 坐标轴线
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: [[0.29, 'lime'],[0.86, '#1e90ff'],[1, '#ff4500']],
                        width: 2,
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
                axisTick: {            // 坐标轴小标记
                    length :12,        // 属性length控制线长
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: 'auto',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                splitLine: {           // 分隔线
                    length :20,         // 属性length控制线长
                    lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
                        width:3,
                        color: '#fff',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                pointer: {
                    width:5,
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 5
                },
                title : {
                    offsetCenter: [0, '75%'],       // x, y，单位px
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        fontWeight: 'bolder',
                        fontStyle: 'italic',
                        color: '#fff',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                detail : {
                    //backgroundColor: 'rgba(30,144,255,0.8)',
                    // borderWidth: 1,
                    formatter:'{value}%',
                    borderColor: '#fff',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 5,
                    width: 80,
                    height:30,
                    offsetCenter: [0, '100%'],       // x, y，单位px
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        fontWeight: 'bolder',
                        fontSize:18,
                        color: 'red '
                    }
                },
                data:[{value: 113.15, name: '转移率'}]
            },
            {
                name:'服务率',
                type:'gauge',
                max:300,
                center : ['10%', '70%'],    // 默认全局居中
                radius : '20%',
                axisLine: {            // 坐标轴线
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: [[0.29, 'lime'],[0.86, '#1e90ff'],[1, '#ff4500']],
                        width: 2,
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
                axisTick: {            // 坐标轴小标记
                    length :12,        // 属性length控制线长
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: 'auto',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                splitLine: {           // 分隔线
                    length :20,         // 属性length控制线长
                    lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
                        width:3,
                        color: '#fff',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                pointer: {
                    width:5,
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 5
                },
                title : {
                    offsetCenter: [0, '75%'],       // x, y，单位px
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        fontWeight: 'bolder',
                        fontStyle: 'italic',
                        color: '#fff',
                        shadowColor : '#fff', //默认透明
                        shadowBlur: 10
                    }
                },
                detail : {
                    //backgroundColor: 'rgba(30,144,255,0.8)',
                    // borderWidth: 1,
                    formatter:'{value}%',
                    borderColor: '#fff',
                    shadowColor : '#fff', //默认透明
                    shadowBlur: 5,
                    width: 80,
                    height:30,
                    offsetCenter: [0, '100%'],       // x, y，单位px
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        fontWeight: 'bolder',
                        color: 'red',
                        fontSize:18
                    }
                },
                data:[{value: 268.28, name: '服务率'}]
            }
        ]
    };

    //clearInterval(timeTicket);
    var v1=39.61;
    var v2=113.15;
    var v3=268.28;
    //var timeTicket = setInterval(function (){
        //option1.series[0].data[0].value = (v1=v1+Math.random()).toFixed(2) - 0;
        //option1.series[1].data[0].value = (v2=v2+Math.random()).toFixed(2) - 0;
        //option1.series[2].data[0].value = (v3=v3+Math.random()).toFixed(2) - 0;
        myChart1.setOption(option1,true);
    //},2000)
</script>

<script>
    //chart3
    var chart3=echarts.init(document.getElementById('chart3'));
    option3 = {
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:['生产库','缓冲库','资源库','服务库'],
            textStyle:{
                color:'#fff'
            }

        },
        toolbox: {
            show : true,
//            feature : {
//                mark : {show: true},
//                dataView : {show: true, readOnly: false},
//                magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
//                restore : {show: true},
//                saveAsImage : {show: true}
//            }
        },
        calculable : true,
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                data : ['一月','二月','三月','四月','五月','六月','七月','八月','九月'],
                axisLine:{
                    lineStyle:{
                        color:'#fff',
                    }
                }
            }
        ],
        yAxis : [
            {
                type : 'value',
                position:'bottom',
                axisLine:{
                    lineStyle:{
                        color:'#fff',
                    }
                }
            }
        ],
        series : [
            {
                name:'生产库',
                type:'line',
                smooth:true,
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                data:[298547529,
                    608742167,
                    1190467829,
                    1490589365,
                    1702765892,
                    1896772557,
                    2113833698,
                    2393828299,
                    3591587306
                ]
            },
            {
                name:'缓冲库',
                type:'line',
                smooth:true,
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                data:[894792378,
                    1124536781,
                    1498011582,
                    1601323789,
                    1994729922,
                    2267911991,
                    2434893725,
                    2601917365,
                    2878962272
                ]
            },
            {
                name:'资源库',
                type:'line',
                smooth:true,
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                data:[493748271,
                    556517389,
                    601273478,
                    658273838,
                    700283633,
                    751363748,
                    818718191,
                    870137457,
                    1401312515
                ]
            },
            {
                name:'服务库',
                type:'line',
                smooth:true,
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                data:[688263578,
                    809473522,
                    910237474,
                    1293081321,
                    1513644893,
                    2002327485,
                    2700438486,
                    2978432925,
                    3293243582

                ]
            }
        ]
    };
    chart3.setOption(option3);
</script>
</html>