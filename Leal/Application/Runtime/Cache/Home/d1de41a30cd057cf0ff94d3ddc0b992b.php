<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>公安厅v2.1展示</title>
    <link rel="stylesheet" href="/Public/Home/css/bootstrap.min.css">
    <script type="text/javascript" src="/Public/Home/js/echarts/echarts.js"></script>
    <script type="text/javascript" src="/Public/Home/js/common/jquery-1.12.2.min.js"></script>

</head>
<style>
    body{
        background-image: url("/Public/Home/images/police/bgv1.2.jpg");
        background-repeat: no-repeat;
        width:100%;

    }
    #chart1{
        padding: 180px 430px 0 0;
        width: auto;
        height: 610px;
    }
</style>
<body>
<div id="chart1" ></div>
<div id="chart2" style="width: 400px;height: 300px; position: absolute; left: 950px; top:130px;"></div>
<div id="chart3" style="width: 400px;height: 300px; position: absolute; left: 950px; top:460px;"></div>
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
//            color : [ '#FF6666', '#FFFF99', '#666699','#FF9900','#FFFF00','#0099CC',
//                '#99CC33','#FFCC33','#339933'],
            series: [
                {
                    type: 'sankey',
                    layout: 'none',
                    data: data.nodes,
                    links: data.links,
                    top: '5%',
                    right: 0,
                    bottom: 100,
                    //width: 1000,
                    height: 380,
                    nodeWidth:100,
                    nodeGap:10,
                    layoutIterations: 50,
                    itemStyle: {
                        normal: {
                            borderWidth: 0,
                            borderColor: '#fff',
                           // borderType:'dashed',
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
                            curveness: 0.5,
                            shadowColor: 'rgba(0, 0, 0, 0.5)',
                            shadowBlur: 10
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
                    name: '数量',
                    max: 1550,
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
                    name: '月增长量/百万',
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
                name: '数据量/千万',
                position:'left',
                axisLabel: {
                    formatter: '{value}'
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
                name:'生产库',
                type:'line',
                smooth:true,
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                data:[29.8547529,
                    60.8742167,
                    119.0467829,
                    149.0589365,
                    170.2765892,
                    189.6772557,
                    211.3833698,
                    239.3828299,
                    359.1587306
                ]
            },
            {
                name:'缓冲库',
                type:'line',
                smooth:true,
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                data:[
                    89.4792378,
                    112.4536781,
                    149.8011582,
                    160.1323789,
                    199.4729922,
                    226.7911991,
                    243.4893725,
                    260.1917365,
                    287.8962272
                ]
            },
            {
                name:'资源库',
                type:'line',
                smooth:true,
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                data:[49.3748271,
                    55.6517389,
                    60.1273478,
                    65.8273838,
                    70.0283633,
                    75.1363748,
                    81.8718191,
                    87.0137457,
                    140.1312515
                ]
            },
            {
                name:'服务库',
                type:'line',
                smooth:true,
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                data:[
                        68.8263578,
                    80.9473522,
                    91.0237474,
                    129.3081321,
                    151.3644893,
                    200.2327485,
                    270.0438486,
                    297.8432925,
                    329.3243582

                ]
            }
        ]
    };
    chart3.setOption(option3);
</script>
</html>