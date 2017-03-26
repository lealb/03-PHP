<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>公安厅展示v3.0</title>
    <link type="text/css" rel="stylesheet" href="/Public/Home/css/bootstrap.min.css">
    <script type="text/javascript" src="/Public/Home/js/echarts/echarts.js"></script>
    <script type="text/javascript" src="/Public/Home/js/common/jquery-1.12.2.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div id="chart1" class="col-md-6" style="width: 550px;height: 400px"></div>
        <div id="chart2" class="col-md-6" style="width: 550px;height: 400px"></div>
        <div id="chart3" class="col-md-6" style="width: 550px;height: 400px"></div>
        <div id="chart4" class="col-md-6" style="width: 550px;height: 400px"></div>
        <div id="chart5" class="col-md-6" style="width: 550px;height: 400px"></div>
        <div id="chart6" class="col-md-6" style="width: 550px;height: 400px"></div>
        <div id="chart7" class="col-md-6" style="width: 550px;height: 400px"></div>
        <div id="chart8" class="col-md-6" style="width: 550px;height: 400px"></div>
        <div id="chart9" class="col-md-6" style="width: 550px;height: 400px"></div>
        <div id="chart10" class="col-md-6" style="width: 550px;height: 400px"></div>
        <div id="chart11" class="col-md-6" style="width: 550px;height: 400px"></div>
        <div id="chart12" class="col-md-6" style="width: 550px;height: 400px"></div>
    </div>
</div>
</body>
<script type="text/javascript">
    //图1 瀑布图 内部数据
    var chart1=echarts.init(document.getElementById('chart1'));
    option = {
        tooltip : {
            trigger: 'axis'
        },
        toolbox: {
            show : true,
            y: 'bottom',
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        legend: {
            data:['直接访问','邮件营销','联盟广告','视频广告','搜索引擎','百度','谷歌','必应','其他']
        },
        xAxis : [
            {
                type : 'category',
                splitLine : {show : false},
                data : ['周一','周二','周三','周四','周五','周六','周日']
            }
        ],
        yAxis : [
            {
                type : 'value',
                position: 'right'
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
                tooltip : {trigger: 'item'},
                stack: '广告',
                data:[120, 132, 101, 134, 90, 230, 210]
            },
            {
                name:'联盟广告',
                type:'bar',
                tooltip : {trigger: 'item'},
                stack: '广告',
                data:[220, 182, 191, 234, 290, 330, 310]
            },
            {
                name:'视频广告',
                type:'bar',
                tooltip : {trigger: 'item'},
                stack: '广告',
                data:[150, 232, 201, 154, 190, 330, 410]
            },
            {
                name:'搜索引擎',
                type:'line',
                data:[862, 1018, 964, 1026, 1679, 1600, 1570]
            },

            {
                name:'搜索引擎细分',
                type:'pie',
                tooltip : {
                    trigger: 'item',
                    formatter: '{a} <br/>{b} : {c} ({d}%)'
                },
                center: [160,130],
                radius : [0, 50],
                itemStyle :　{
                    normal : {
                        labelLine : {
                            length : 20
                        }
                    }
                },
                data:[
                    {value:1048, name:'百度'},
                    {value:251, name:'谷歌'},
                    {value:147, name:'必应'},
                    {value:102, name:'其他'}
                ]
            }
        ]
    };
    chart1.setOption(option);

    //图2 多维
    var chart2=echarts.init(document.getElementById('chart2'));
    var placeHoledStyle = {
        normal:{
            barBorderColor:'rgba(0,0,0,0)',
            color:'rgba(0,0,0,0)'
        },
        emphasis:{
            barBorderColor:'rgba(0,0,0,0)',
            color:'rgba(0,0,0,0)'
        }
    };
    var dataStyle = {
        normal: {
            label : {
                show: true,
                position: 'insideLeft',
                formatter: '{c}'
            }
        }
    };
    option = {
        title: {
            text: '多维条形图',
            subtext: 'From ExcelHome',
        },
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            },
            formatter : '{b}<br/>{a0}:{c0}<br/>{a2}:{c2}'
        },
        legend: {
            y: 55,
            itemGap : document.getElementById('chart2').offsetWidth / 8,
            data:['上报系统数', '汇聚数据表数','数据量']
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
        grid: {
            y: 80,
            y2: 30
        },
        xAxis : [
            {
                type : 'value',
                position: 'top',
                splitLine: {show: false},
                axisLabel: {show: false}
            }
        ],
        yAxis : [
            {
                type : 'category',
                splitLine: {show: false},
                data : ['省厅内部数据', '公安外部数据', '地市公安数据']
            }
        ],
        series : [
            {
                name:'上报系统数',
                type:'bar',
                stack: '总量',
                itemStyle : dataStyle,
                data:[53, 9, 7]
            },
            {
                name:'上报系统数',
                type:'bar',
                stack: '总量',
                itemStyle : placeHoledStyle,
                data:[47, 91, 93]
            },
            {
                name:'汇聚数据表数',
                type:'bar',
                stack: '总量',
                itemStyle: dataStyle,
                data:[232.7, 153, 133]
            },{
                name:'汇聚数据表数',
                type:'bar',
                stack: '总量',
                itemStyle: placeHoledStyle,
                data:[50, 50, 50]
            },
            {
                name:'数据量',
                type:'bar',
                stack: '总量',
                itemStyle : dataStyle,
                //data:[2327, 153, 133]
                data:[111.03108048, 14.51452287, 0.25526869]
            }
        ]
    };
    chart2.setOption(option);

    //图3 饼图
    var chart3=echarts.init(document.getElementById('chart3'));
    option = {
        title : {
            text: '数据源系统数占比',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['警种','地州','其他']
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
                            funnelAlign: 'left',
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
                name:'数据来源',
                itemStyle: {
                   normal: {
                       color: function(params) {
                           // build a color map as your need.
                           var colorList = [
                               '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                               '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                               '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0',
                               '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                               '#D7504B','#C6E579','#F4E001','#F0805A','#F0805A','#26C0C0'
                           ];
                           return colorList[params.dataIndex]
                       },
                        label:{
                            show:true,
                            position:'top',
                            color:'rgba(0,0,0,1)',
                            formatter: '{b}: {c}个'
                        }
                    }
                },
                type:'pie',
                radius : '55%',
                center: ['50%', '60%'],
                data:[
                    {value:148, name:'警种'},
                    {value:13, name:'地州'},
                    {value:9, name:'其他'}
                ]
            }
        ]
    };
    chart3.setOption(option);

    // 图4
    var chart4=echarts.init(document.getElementById('chart4'));
    option = {
        title : {
            text: '数据源平均日增量',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['警种','地州','其他']
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
                            funnelAlign: 'left',
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
                name:'数据来源',
                itemStyle: {
                    normal: {
                        label:{
                            show:true,
                            position:'top',
                            color:'rgba(0,0,0,1)',
                            formatter: '{b}: {c}个'
                        }
                    }
                },
                type:'pie',
                radius : '55%',
                center: ['50%', '60%'],
                data:[
                    {value:46942877, name:'警种'},
                    {value:4123361, name:'地州'},
                    {value:2854635, name:'其他'}
                ]
            }
        ]
    };
    chart4.setOption(option);

    //图5
    var chart5=echarts.init(document.getElementById('chart5'));
    option = {
        title : {
            text: '数据类别占比',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['警种','地州','其他']
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
                            funnelAlign: 'left',
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
                name:'数据来源',
                itemStyle: {
                    normal: {
                        label:{
                            show:true,
                            position:'top',
                            color:'rgba(0,0,0,1)',
                            formatter: '{b}: {c}个'
                        }
                    }
                },
                type:'pie',
                radius : '55%',
                center: ['50%', '60%'],
                data:[
                    {value:13308799571, name:'警种'},
                    {value:1169016178, name:'地州'},
                    {value:809318894, name:'其他'}
                ]
            }
        ]
    };
    chart5.setOption(option);

    //图6
    var chart6=echarts.init(document.getElementById('chart6'));
    option = {
        tooltip: {
            trigger: 'axis'
        },
        toolbox: {
            feature: {
                dataView: {show: true, readOnly: false},
                magicType: {show: true, type: ['line', 'bar']},
                restore: {show: true},
                saveAsImage: {show: true}
            }
        },
        legend: {
            data:['蒸发量','降水量','平均温度']
        },
        xAxis: [
            {
                type: 'category',
                data: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月']
            }
        ],
        yAxis: [
            {
                type: 'value',
                name: '水量',
                min: 0,
                max: 250,
                interval: 50,
                axisLabel: {
                    formatter: '{value} ml'
                }
            },
            {
                type: 'value',
                name: '温度',
                min: 0,
                max: 25,
                interval: 5,
                axisLabel: {
                    formatter: '{value} °C'
                }
            }
        ],
        series: [
            {
                name:'蒸发量',
                type:'bar',
                data:[2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3]
            },
            {
                name:'降水量',
                type:'bar',
                data:[2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3]
            },
            {
                name:'平均温度',
                type:'line',
                yAxisIndex: 1,
                data:[2.0, 2.2, 3.3, 4.5, 6.3, 10.2, 20.3, 23.4, 23.0, 16.5, 12.0, 6.2]
            }
        ]
    };
    chart6.setOption(option);

    //图7 折线图
    var chart7=echarts.init(document.getElementById('chart7'));
    option = {
        title:{
          text:'服务月访问量'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:['一键通','社区警务','案事件']
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
//                restore : {show: true},
//                saveAsImage : {show: true}
            }
        },
        calculable : true,
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                data : ['一月','二月','三月','四月','五月','六月','七月','八月','九月']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'一键通',
                type:'line',
                stack: '总量',
                data:[14, 60326, 416196, 870604, 659414, 481026, 530554,116365,318362]
            },
            {
                name:'社区警务',
                type:'line',
                stack: '总量',
                data:[285391, 214570, 482204, 432133, 491251, 525269, 394702,467387,449760]
            },
            {
                name:'案事件',
                type:'line',
                stack: '总量',
                data:[1251780, 874723, 1519211, 1239224, 1367445, 1358738, 1337328,1495201,1461321]
            }
        ]
    };
    chart7.setOption(option);

    var chart8=echarts.init(document.getElementById('chart8'));
    option = {
        title:{
            text:'服务月访问人数'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:['一键通','社区警务','案事件']
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
//                restore : {show: true},
//                saveAsImage : {show: true}
            }
        },
        calculable : true,
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                data : ['一月','二月','三月','四月','五月','六月','七月','八月','九月']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'一键通',
                type:'line',
                stack: '总量',
                data:[1, 6472, 11232, 11264, 11736, 12035, 12481,8715,11320]
            },
            {
                name:'社区警务',
                type:'line',
                stack: '总量',
                data:[6394, 6570, 7464, 7397, 7399, 7552, 7430,7669,7555]
            },
            {
                name:'案事件',
                type:'line',
                stack: '总量',
                data:[21159, 19890, 21453, 20751, 21028, 21084, 21078,21280,20894]
            }
        ]
    };
    chart8.setOption(option);

    //利用率
    var chart9=echarts.init(document.getElementById('chart9'));
    option = {
        title:{
            text:'服务库数据利用率'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:['利用率']
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
//                restore : {show: true},
//                saveAsImage : {show: true}
            }
        },
        calculable : true,
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                data : ['一月','二月','三月','四月','五月','六月','七月','八月','九月']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'利用率',
                type:'line',
                stack: '总量',
                data:[20, 35, 30, 43, 56, 64, 76,80,82]
            }
        ]
    };
    chart9.setOption(option);

    //雷达图
    var chart10=echarts.init(document.getElementById('chart10'));
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
                    {text : '查询服务', max  : 50},
                    {text : '下载服务', max  : 50},
                    {text : '订阅服务', max  : 50},
                    {text : '核查服务', max  : 50},
                    {text : '比对服务', max  : 50},
                    {text : '分析服务', max  : 50},
                    {text : '一键通', max  : 50}
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
                        value : [27, 14, 13, 12, 8, 10, 15],
                        itemStyle: {
                            normal: {
                                label:{
                                    show:true,
                                    formatter: ' {c}%',
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
    chart10.setOption(option);

    //仪表盘
    var chart11=echarts.init(document.getElementById('chart11'));
    option = {
        title:{
            text:'未汇聚的数据量占比',
            x:'center'
        },
        tooltip : {
            formatter: "{a} <br/>{b} : {c}%"
        },
        toolbox: {
            feature: {
                restore: {},
                saveAsImage: {}
            }
        },
        series: [
            {
               // name: '在全市的占比',
                type: 'gauge',
                detail: {formatter:'{value}%'},
                data: [{value: 17.71, name: '未汇聚的数据量占比'}]
            }
        ]
    };
    chart11.setOption(option);

    var chart12=echarts.init(document.getElementById('chart12'));
    option = {
        title:{
            text:'已汇聚的数据量占比',
            x:'center'
        },
        tooltip : {
            formatter: "{a} <br/>{b} : {c}%"
        },
        toolbox: {
            feature: {
                restore: {},
                saveAsImage: {}
            }
        },
        series: [
        {
            name:'业务指标',
            type:'gauge',
            splitNumber: 10,       // 分割段数，默认为5
            axisLine: {            // 坐标轴线
                lineStyle: {       // 属性lineStyle控制线条样式
                    color: [[0.2, '#228b22'],[0.8, '#48b'],[1, '#ff4500']],
                    width: 8
                         }
                },
            axisTick: {            // 坐标轴小标记
                splitNumber: 10,   // 每份split细分多少段
                        length :12,        // 属性length控制线长
                        lineStyle: {       // 属性lineStyle控制线条样式
                    color: 'auto'
                }
            },
            axisLabel: {           // 坐标轴文本标签，详见axis.axisLabel
                textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                    color: 'auto'
                }
            },
            splitLine: {           // 分隔线
                show: true,        // 默认显示，属性show控制显示与否
                        length :30,         // 属性length控制线长
                        lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
                    color: 'auto'
                }
            },
            pointer : {
                width : 5
            },
            title : {
                show : true,
                        offsetCenter: [0, '-40%'],       // x, y，单位px
                        textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                    fontWeight: 'bolder'
                }
            },
            detail : {
                formatter:'{value}%',
                        textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                    color: 'auto',
                            fontWeight: 'bolder'
                }
            },
            data: [{value: 82.29, name: '已汇聚的数据量占比'}]
        }
    ]
};
    chart12.setOption(option);

</script>
</html>