<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>病人分析</title>
    <script type="text/javascript" src="/Public/Home/js/echarts-2.2.7/build/dist/echarts-all.js"></script>
    <script type="text/javascript" src="/Public/Home/js/map/china.js"></script>
</head>
<style>

    body{
        background-image: url("/Public/Home/images/hospital/bgv1.1.jpg");
        background-repeat: no-repeat;
    }
    #chart1{
        width: 500px;
        height: 300px;
        position: absolute;
        top:800px;
    }

    #map{
        width: 850px;
        height: 550px;
        position: absolute;
        left: 535px;
        top:270px;
    }

    #chart2{
        width: 500px;
        height: 300px;
        position: absolute;
        top:380px;
    }

    #chart3{
        width: 500px;
        height: 300px;
        position: absolute;
        top:380px;
        left: 1420px;
    }

    #chart4{
        width: 500px;
        height: 300px;
        position: absolute;
        top:800px;
        left: 1420px;
    }
</style>
<body>

    <!--病人费用性质-->
    <div id="chart1"></div>
    <!--病人地区分布-->
    <div id="map"></div>
    <!--年龄段分布-->
    <div id="chart2"></div>
    <!---->
    <div id="chart3"></div>

    <div id="chart4"></div>
</body>
<script>
    //病人地区分布
    option = {
        backgroundColor: '#45acb5',
        title:{
          text:'病人来源地区分布Top10'
        },
        color: ['gold','aqua','lime'],
        tooltip : {
            trigger: 'item',
            formatter: '{b}'
        },
        legend: {
            orient: 'vertical',
            x:'left',
            data:['Top10'],
            textStyle : {
                color: '#fff'
            }
        },
//        toolbox: {
//            show : true,
//            orient : 'vertical',
//            x: 'right',
//            y: 'center',
//            feature : {
//                mark : {show: true},
//                dataView : {show: true, readOnly: false},
//                restore : {show: true},
//                saveAsImage : {show: true}
//            }
//        },
        dataRange: {
            min : 100,
            max : 6000,
            calculable : true,
            color: ['#ff3333', 'orange', 'yellow','lime','aqua'],
            textStyle:{
                color:'#fff'
            }
        },
        series : [
            {
                name: '全国',
                type: 'map',
                roam: true,
                hoverable: false,
                mapType: 'china',
                itemStyle:{
                    normal:{
                        borderColor:'rgba(100,149,237,1)',
                        borderWidth:0.5,
                        areaStyle:{
                          //  color: '#88cbdc'
                        }
                    }
                },
                data:[],
                markLine : {
                    smooth:true,
                    symbol: ['none', 'circle'],
                    symbolSize : 1,
                    itemStyle : {
                        normal: {
                            color:'#fff',
                            borderWidth:1,
                            borderColor:'rgba(30,144,255,0.5)'
                        }
                    },
                    data : [

                    ],
                },
                geoCoord: {
                    '贵阳': [106.6992,26.7682],
                    '四川': [104.082256,30.65679],
                    '湖南': [111.720664,27.695864],
                    '湖北': [112.410562,31.209316],
                    '云南': [101.592952,24.8642],
                    '重庆': [106.55716,29.5709],
                    '河南': [101.55630,34.51139],
                    '江西': [115.67608,27.7572],
                    '山东': [118.52766,36.0992],
                    '安徽': [117.2922,31.8673],

                }
            },
            {
                name: 'Top10',
                type: 'map',
                mapType: 'china',
                data:[],
                markLine : {
                    smooth:true,
                    effect : {
                        show: true,
                        scaleSize: 1,
                        period: 30,
                        color: '#fff',
                        shadowBlur: 10
                    },
                    itemStyle : {
                        normal: {
                            borderWidth:1,
                            lineStyle: {
                                type: 'solid',
                                shadowBlur: 20
                            }
                        }
                    },
                    data : [
                        [{name:'贵阳'}, {name:'贵阳',value:5109}],
                        [{name:'四川'}, {name:'四川',value:2064}],
                        [{name:'湖南'}, {name:'湖南',value:547}],
                        [{name:'湖北'}, {name:'湖北',value:352}],
                        [{name:'云南'}, {name:'云南',value:292}],
                        [{name:'重庆'}, {name:'重庆',value:269}],
                        [{name:'河南'}, {name:'河南',value:251}],
                        [{name:'江西'}, {name:'江西',value:247}],
                        [{name:'山东'}, {name:'山东',value:168}],
                        [{name:'安徽'}, {name:'安徽',value:149}]
                    ]
                },
                markPoint : {
                    symbol:'emptyCircle',
                    symbolSize : function (v){
                        return 10 + v/1000
                    },
                    effect : {
                        show: true,
                        shadowBlur : 0
                    },
                    itemStyle:{
                        normal:{
                            label:{show:false}
                        },
                        emphasis: {
                            label:{position:'top'}
                        }
                    },
                    data : [
                        {name:'贵阳',value:5109},
                        {name:'四川',value:2064},
                        {name:'湖南',value:547},
                        {name:'湖北',value:352},
                        {name:'云南',value:292},
                        {name:'重庆',value:269},
                        {name:'河南',value:251},
                        {name:'江西',value:247},
                        {name:'山东',value:168},
                        {name:'安徽',value:149}
                    ]
                }
            }
        ]
    };
    var maps=echarts.init(document.getElementById('map'));
    maps.setOption(option);

    //病人费用性质占比
    option1 = {
        title:{
            text:'病人费用性质占比'
        },
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b}: {c} ({d}%)"
        },
        legend: {
            orient: 'vertical',
            x: 'right',
            textStyle:{
                fontSize:12,
                color:'#fff'
            },
            data:['自费','在职','退休','普通居民','一般农合','其他']
        },
        series: [
            {
                name:'病人费用性质',
                type:'pie',
                radius: ['50%', '70%'],
                avoidLabelOverlap: false,
                label: {
                    normal: {
                        show: false,
                        position: 'center'
                    },
                    emphasis: {
                        show: true,
                        textStyle: {
                            fontSize: '30',
                            fontWeight: 'bold'
                        }
                    }
                },
                labelLine: {
                    normal: {
                        show: false
                    }
                },
                data:[
                    {value:302263, name:'自费'},
                    {value:43133, name:'在职'},
                    {value:31679, name:'退休'},
                    {value:1523, name:'普通居民'},
                    {value:1370, name:'一般农合'},
                    {value:1904,name:'其他'}
                ]
            }
        ]
    };
    var chart1=echarts.init(document.getElementById('chart1'));
    chart1.setOption(option1);

    //彩虹图
    option2 = {
        title:{
            text:'病人年龄段分布'
        },
        tooltip: {
            trigger: 'item'
        },
//        toolbox: {
//            show: true,
//            feature: {
//                dataView: {show: true, readOnly: false},
//                restore: {show: true},
//                saveAsImage: {show: true}
//            }
//        },
        calculable: true,
        grid: {
            borderWidth: 0,
            y: 80,
            y2: 60
        },
        xAxis: [
            {
                type: 'category',
                show: false,
                data: ['幼儿', '少年', '青年', '中年', '老年']
            }
        ],
        yAxis: [
            {
                type: 'value',
                show: false
            }
        ],
        series: [
            {
                name: '病人年龄段',
                type: 'bar',
                itemStyle: {
                    normal: {
                        color: function(params) {
                            // build a color map as your need.
                            var colorList = [
                                '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                                '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                                '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0'
                            ];
                            return colorList[params.dataIndex]
                        },
                        label: {
                            show: true,
                            position: 'top',
                            formatter: '{b}\n{c}'
                        }
                    }
                },
                data: [34671 ,23918 ,202614 ,150272 ,46529],
                markPoint: {
                    tooltip: {
                        trigger: 'item',
                        backgroundColor: 'rgba(0,0,0,0)',
                        formatter: function(params){
                            return '<img src="'
                                + params.data.symbol.replace('image://', '')
                                + '"/>';
                        }
                    },
                    data: [
                        {xAxis:0, y: 350, name:'Line', symbolSize:20, symbol: 'image://../asset/ico/折线图.png'},
                        {xAxis:1, y: 350, name:'Bar', symbolSize:20, symbol: 'image://../asset/ico/柱状图.png'},
                        {xAxis:2, y: 350, name:'Scatter', symbolSize:20, symbol: 'image://../asset/ico/散点图.png'},
                        {xAxis:3, y: 350, name:'K', symbolSize:20, symbol: 'image://../asset/ico/K线图.png'},
                        {xAxis:4, y: 350, name:'Pie', symbolSize:20, symbol: 'image://../asset/ico/饼状图.png'},
                        {xAxis:5, y: 350, name:'Radar', symbolSize:20, symbol: 'image://../asset/ico/雷达图.png'},
                        {xAxis:6, y: 350, name:'Chord', symbolSize:20, symbol: 'image://../asset/ico/和弦图.png'},
                        {xAxis:7, y: 350, name:'Force', symbolSize:20, symbol: 'image://../asset/ico/力导向图.png'},
                        {xAxis:8, y: 350, name:'Map', symbolSize:20, symbol: 'image://../asset/ico/地图.png'},
                        {xAxis:9, y: 350, name:'Gauge', symbolSize:20, symbol: 'image://../asset/ico/仪表盘.png'},
                        {xAxis:10, y: 350, name:'Funnel', symbolSize:20, symbol: 'image://../asset/ico/漏斗图.png'},
                    ]
                }
            }
        ]
    };
    var chart2=echarts.init(document.getElementById('chart2'));
    chart2.setOption(option2);

    //
    option3 = {
        title:{
            text:'病人疾病分布Top5'
        },
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
        grid: {
            borderWidth: 0,
        },
        legend: {
            textStyle:{
                color:'#fff'
            },
            data:['男','女','幼儿','少年','青年', '中年', '老年']
        },
        xAxis : [
            {
                type : 'category',
                splitLine : {show : false},
                data : ['精神分裂症','睡眠障碍','附带妊娠状态','精神障碍','臭汗症','急性支气管炎','分裂情感性精神病']
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
                name:'男',
                type:'bar',
                data:[16406, 9819, 149, 10299, 3206, 4631, 2671]
            },
            {
                name:'女',
                type:'bar',
                tooltip : {trigger: 'item'},
                stack: '广告',
                data:[12436, 11660, 20144, 8807, 7384, 3585, 5400]
            },
            {
               // name:'搜索引擎细分',
                type:'pie',
                tooltip : {
                    trigger: 'item',
                    formatter: '{a} <br/>{b} : {c} ({d}%)'
                },
                center: [100,95],
                radius : [0, 50],
                itemStyle :　{
                    normal : {
                        labelLine : {
                            length : 20
                        }
                    }
                },
                data:[
                    {value:34671, name:'幼儿'},
                    {value:23918, name:'少年'},
                    {value:202614, name:'青年'},
                    {value:150272, name:'中年'},
                    {value:46529,name:'老年'}
                ]
            }
        ]
    };
    var chart3=echarts.init(document.getElementById('chart3'));
    chart3.setOption(option3);

    //
    option4 = {
        color : [
            'rgba(255, 69, 0, 0.5)',
            'rgba(255, 150, 0, 0.5)',
            'rgba(255, 200, 0, 0.5)',
            'rgba(155, 200, 50, 0.5)',
            'rgba(55, 200, 100, 0.5)'
        ],
        title : {
            text: '病人费用类别占比'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c}%"
        },
//        toolbox: {
//            show : true,
//            feature : {
//                mark : {show: true},
//                dataView : {show: true, readOnly: false},
//                restore : {show: true},
//                saveAsImage : {show: true}
//            }
//        },
        legend: {
            textStyle:{
                color:'#fff'
            },
            data : ['现金','贵阳市医保','贵州省医保','贵州新农合','其他']
        },
        calculable : true,
        series : [
            {
                //name:'预期',
                type:'funnel',
                x: '10%',
                width: '80%',
                itemStyle: {
                    normal: {
                        label: {
                            formatter: '{b}'
                        },
                        labelLine: {
                            show : false
                        }
                    },
                    emphasis: {
                        label: {
                            position:'inside',
                            formatter: '{b}:{c}%'
                        }
                    }
                },
                data:[
                    {value:79.51, name:'现金'},
                    {value:16.19, name:'贵阳市医保'},
                    {value:3.74, name:'贵州省医保'},
                    {value:0.4, name:'贵州新农合'},
                    {value:0.2, name:'其他'}
                ]
            }
        ]
    };

    var chart4=echarts.init(document.getElementById('chart4'));
    chart4.setOption(option4);
</script>
</html>