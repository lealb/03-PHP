<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cloud</title>
</head>
<link rel="stylesheet" href="/Public/Home/css/bootstrap.min.css">
<script type="text/javascript" src="/Public/Home/js/common/jquery-1.12.2.min.js"></script>
<!--3.0-->
<script type="text/javascript" src="/Public/Home/js/echarts/echarts.js"></script>
<body>
<div class="container">
    <div class="row">
        <!--社区前后三名折线图-->
        <div class="col-md-6">
            <div id="chart1" style="width: 600px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart2" style="width: 600px;height: 400px"></div>
        </div>
        <!--28个社区排名-->
        <div class="col-md-6">
            <div id="chart3" style="width: 600px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart4" style="width: 600px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart5" style="width: 600px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart6" style="width: 600px;height: 400px"></div>
        </div>
        <div class="col-md-12">
            <div id="chart7" style="width: 1200px;height: 400px"></div>
        </div>
        <div class="col-md-12">
            <div id="chart8" style="width: 1200px;height: 400px"></div>
        </div>
    </div>
</div>

</body>
<script>

    //前三名社区分析
    var chart1=echarts.init(document.getElementById('chart1'));
    option = {
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            //orient : 'vertical',
            x : 'left',
            data:['威清社区','北京路社区','延中社区']
        },
        toolbox: {
            show : true,
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
                boundaryGap : false,
                data : ['环境卫生','居民院落','公厕','农贸市场','群众满意度']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [

            {
                name:'威清社区',
                type:'line',
                stack: '总量',
                data:[47, 8.5, 9.5, 8.5, 16.2],
//                itemStyle: {
//                    normal: {
//                        label:{
//                            show:true,
//                            position:'top',
//                            color:'rgba(0,0,0,1)',
//                            formatter: ' {c}'
//                        }
//                    }
//                }
            },
            {
                name:'北京路社区',
                type:'line',
                stack: '总量',
                data:[49, 8.5, 10, 8.5, 12.5]
            },
            {
                name:'延中社区',
                type:'line',
                stack: '总量',
                data:[46.5, 9, 9.5, 7.5, 15.1]
            }
        ]
    };
    chart1.setOption(option);

    //后三名社区分析
    var chart2=echarts.init(document.getElementById('chart2'));
    option = {
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            //orient : 'vertical',
            x : 'left',
            data:['圣泉社区','金关社区','蔡关社区']
        },
        toolbox: {
            show : true,
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
                boundaryGap : false,
                data : ['环境卫生','居民院落','公厕','农贸市场','群众满意度']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'圣泉社区',
                type:'line',
                stack: '总量',
                data:[40, 8.5, 8, 0 , 8.6]
            },
            {
                name:'金关社区',
                type:'line',
                stack: '总量',
                data:[41, 9, 9, 8, 7.9]
            },
            {
                name:'蔡关社区',
                type:'line',
                stack: '总量',
                data:[40.5, 7, 9, 5, 8.2]
            }
        ]
    };
    chart2.setOption(option);

    //28个社区排名
    //1-7
    var chart3=echarts.init(document.getElementById('chart3'));
    option = {
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        legend: {
            data : ['环境卫生','居民院落','公厕','农贸市场','群众满意度']

        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis:  {
            type: 'value'
        },
        yAxis: {
            type: 'category',
            inverse:'true',
            data: ['威清社区', '北京路社区','延中社区','中东社区'
                ,'中天社区','水东社区','黔东社区']
        },
        series: [
            {
                name: '环境卫生',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [47,
                    49,
                    46.5,
                    47.5,
                    45,
                    48,
                    48
                ]
            },
            {
                name: '居民院落',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [8.5,
                    8.5,
                    9,
                    7.5,
                    8,
                    9,
                    9
                ]
            },
            {
                name: '公厕',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [9.5,
                    10,
                    9.5,
                    10,
                    0,
                    0,
                    9.5
                ]
            },
            {
                name: '农贸市场',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [8.5,
                    8.5,
                    7.5,
                    8,
                    0,
                    10,
                    7.5
                ]
            },
            {
                name: '群众满意度',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [16.2,
                    12.5,
                    15.1,
                    14.2,
                    14.1,
                    9.8,
                    12.4
                ]
            }
        ]
    };
    chart3.setOption(option);

    //8-14
    var chart4=echarts.init(document.getElementById('chart4'));
    option = {
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        legend: {
            data : ['环境卫生','居民院落','公厕','农贸市场','群众满意度']

        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis:  {
            type: 'value'
        },
        yAxis: {
            type: 'category',
            inverse:'true',
            data: ['中华社区',
                '宅吉社区',
                '东山社区',
                '省府社区',
                '市西社区',
                '普陀社区',
                '头桥社区'
            ]
        },
        series: [
            {
                name: '环境卫生',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [44.5,
                    48,
                    47,
                    46.5,
                    47.5,
                    45.5,
                    47

                ]
            },
            {
                name: '居民院落',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [8.5,
                    9,
                    7.5,
                    8,
                    7.5,
                    8,
                    8.5
                ]
            },
            {
                name: '公厕',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [10,
                    9,
                    0,
                    9.5,
                    9,
                    9,
                    9
                ]
            },
            {
                name: '农贸市场',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [10,
                    7.5,
                    8,
                    8,
                    8.5,
                    4.5,
                    7

                ]
            },
            {
                name: '群众满意度',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [12.4,
                    10.7,
                    10.7,
                    11.1,
                    10.3,
                    15.5,
                    10
                ]
            }
        ]
    };
    chart4.setOption(option);

    //15-21
    var chart5=echarts.init(document.getElementById('chart5'));
    option = {
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        legend: {
            data : ['环境卫生','居民院落','公厕','农贸市场','群众满意度']

        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis:  {
            type: 'value'
        },
        yAxis: {
            type: 'category',
            inverse:'true',
            data: ['贵乌社区',
                '栖霞社区',
                '中环社区',
                '金狮社区',
                '荷塘社区',
                '金惠社区',
                '金龙社区'
            ]
        },
        series: [
            {
                name: '环境卫生',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [46.5,
                    46.5,
                    46.5,
                    41.5,
                    47,
                    39,
                    43
                ]
            },
            {
                name: '居民院落',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [8,
                    10,
                    8,
                    9.5,
                    7.5,
                    9.5,
                    9
                ]
            },
            {
                name: '公厕',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [9.5,
                    8,
                    7.5,
                    0,
                    9,
                    0,
                    8.5

                ]
            },
            {
                name: '农贸市场',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [2.5,
                    5,
                    7,
                    6,
                    6.5,
                    0,
                    7.5
                ]
            },
            {
                name: '群众满意度',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [14.7,
                    11.5,
                    11.3,
                    13.1,
                    9.5,
                    9.7,
                    9

                ]
            }
        ]
    };
    chart5.setOption(option);

    //22-28
    var chart6=echarts.init(document.getElementById('chart6'));
    option = {
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        legend: {
            data : ['环境卫生','居民院落','公厕','农贸市场','群众满意度']

        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis:  {
            type: 'value'
        },
        yAxis: {
            type: 'category',
            inverse:'true',
            data: ['黔灵镇',
                '普天社区',
                '三桥社区',
                '金鸭社区',
                '圣泉社区',
                '金关社区',
                '蔡关社区'
            ]
        },
        series: [
            {
                name: '环境卫生',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [40.5,
                    46,
                    45,
                    42.5,
                    40,
                    41,
                    40.5

                ]
            },
            {
                name: '居民院落',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [9.5,
                    7.5,
                    9,
                    6.5,
                    8.5,
                    9,
                    7
                ]
            },
            {
                name: '公厕',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [0,
                    8,
                    9,
                    9,
                    8,
                    9,
                    9
                ]
            },
            {
                name: '农贸市场',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [5.5,
                    8,
                    5,
                    0,
                    0,
                    8,
                    5

                ]
            },
            {
                name: '群众满意度',
                type: 'bar',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'insideRight'
                    }
                },
                data: [11,
                    6.3,
                    7.3,
                    7.3,
                    8.6,
                    7.9,
                    8.2

                ]
            }
        ]
    };
    chart6.setOption(option);

    //28个社区对比柱状
    var chart7=echarts.init(document.getElementById('chart7'));
    option = {
        title : {
            text: '社区总分整体排名',
          //  subtext: '纯属虚构'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:['总分']
        },
        toolbox: {
            show : true,
            feature : {
                dataView : {show: true, readOnly: false},
                magicType : {show: true, type: ['line', 'bar']},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        xAxis : [
            {
                axisLabel:{
                    interval:0,  //类目全显
                    rotate:30
                },
                type : 'category',
                data : ['威清社区',
                    '北京路社区',
                    '延中社区',
                    '中东社区',
                    '中天社区',
                    '水东社区',
                    '黔东社区',
                    '中华社区',
                    '宅吉社区',
                    '东山社区',
                    '省府社区',
                    '市西社区',
                    '普陀社区',
                    '头桥社区',
                    '贵乌社区',
                    '栖霞社区',
                    '中环社区',
                    '金狮社区',
                    '荷塘社区',
                    '金惠社区',
                    '金龙社区',
                    '黔灵镇',
                    '普天社区',
                    '三桥社区',
                    '金鸭社区',
                    '圣泉社区',
                    '金关社区',
                    '蔡关社区'
                ]
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
//                        color: function(params) {
//                            // build a color map as your need.
//                            var colorList = [
//                                '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
//                                '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
//                                '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0',
//                                '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
//                                '#D7504B','#C6E579','#F4E001','#F0805A','#F0805A','#26C0C0'
//                            ];
//                            return colorList[params.dataIndex]
//                        },
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
                            color:'rgba(0,0,0,1)',
                            formatter: '{c}'
                        }
                    }
                },
                name:'总分',
                type:'bar',
                data:[89.7,
                    88.5,
                    87.6,
                    87.2,
                    87.1,
                    86.8,
                    86.4,
                    85.4,
                    84.2,
                    83.2,
                    83.1,
                    82.8,
                    82.5,
                    81.5,
                    81.2,
                    81,
                    80.3,
                    80.1,
                    79.5,
                    78.2,
                    77,
                    76.5,
                    75.8,
                    75.3,
                    75.3,
                    75.1,
                    74.9,
                    69.7
                ],
                markPoint : {
                    data : [
                        {type : 'max', name: '最大值'},
                        {type : 'min', name: '最小值'}
                    ]
                }
            }
        ]
    };
    chart7.setOption(option);

    //28个社区对比柱状
    var chart8=echarts.init(document.getElementById('chart8'));
    option = {
        title : {
            text: '社区群众满意度整体排名',
            //  subtext: '纯属虚构'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:['群众满意度']
        },
        toolbox: {
            show : true,
            feature : {
                dataView : {show: true, readOnly: false},
                magicType : {show: true, type: ['line', 'bar']},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        xAxis : [
            {
                axisLabel:{
                    interval:0,  //类目全显
                    rotate:30
                },
                type : 'category',
                data : [
                    '威清社区',
                    '普陀社区',
                    '延中社区',
                    '贵乌社区',
                    '中东社区',
                    '中天社区',
                    '金狮社区',
                    '北京路社区',
                    '黔东社区',
                    '中华社区',
                    '栖霞社区',
                    '中环社区',
                    '省府社区',
                    '黔灵镇',
                    '宅吉社区',
                    '东山社区',
                    '市西社区',
                    '头桥社区',
                    '水东社区',
                    '金惠社区',
                    '荷塘社区',
                    '金龙社区',
                    '圣泉社区',
                    '蔡关社区',
                    '金关社区',
                    '三桥社区',
                    '金鸭社区',
                    '普天社区'
                ]
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
                            color:'rgba(0,0,0,1)',
                            formatter: '{c}'
                        }
                    }
                },
                name:'群众满意度',
                type:'bar',
                data:[
                    80.75,
                    77.55,
                    75.65,
                    73.5,
                    71.4,
                    70.6,
                    65.7,
                    62.85,
                    62.05,
                    61.8,
                    57.6,
                    56.55,
                    55.7,
                    55.05,
                    53.65,
                    53.5,
                    51.65,
                    50,
                    48.85,
                    48.55,
                    47.55,
                    44.8,
                    43.2,
                    41.1,
                    39.25,
                    36.7,
                    36.25,
                    31.35

                ],
                markPoint : {
                    data : [
                        {type : 'max', name: '最大值'},
                        {type : 'min', name: '最小值'}
                    ]
                }
            }
        ]
    };
    chart8.setOption(option);
</script>
</html>