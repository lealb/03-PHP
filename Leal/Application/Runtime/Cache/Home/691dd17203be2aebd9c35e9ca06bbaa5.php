<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>云岩区12319展示</title>
    <link rel="stylesheet" href="/Public/Home/css/bootstrap.min.css">
    <script type="text/javascript" src="/Public/Home/js/common/jquery-1.12.2.min.js"></script>
    <!--引入2.0-->
    <!--<script type="text/javascript" src="/Public/Home/js/echarts-2.2.7/build/dist/echarts-all.js"></script>-->

    <!--3.0-->
    <script type="text/javascript" src="/Public/Home/js/echarts/echarts.js"></script>
    <script type="text/javascript" src="/Public/Home/js/theme/vintage.js"></script>
    <script type="text/javascript" src="/Public/Home/js/theme/dark.js"></script>
    <script type="text/javascript" src="/Public/Home/js/theme/macarons.js"></script>
    <script type="text/javascript" src="/Public/Home/js/theme/infographic.js"></script>
    <script type="text/javascript" src="/Public/Home/js/theme/shine.js"></script>
    <script type="text/javascript" src="/Public/Home/js/theme/roma.js"></script>
    <!--引入地图-->
    <script type="text/javascript" src="/Public/Home/js/map/guizhou.js"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="map" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart1" style="width: 700px;height: 400px"></div>
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
        <div class="col-md-6">
            <div id="chart9" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-12">
            <div id="chart8" style="width: 1100px;height: 850px"></div>
        </div>
        <div class="col-md-12">
            <div id="chart10" style="width: 1100px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart11" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart12" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart13" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart14" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart15" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart16" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart17" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart18" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart19" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart20" style="width: 800px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart21" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart22" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart23" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-12">
            <div id="chart24" style="width: 1200px;height: 600px"></div>
        </div>
        <div class="col-md-12">
            <div id="chart25" style="width: 1366px;height: 600px"></div>
        </div>
        <div class="col-md-12">
            <div id="chart26" style="width: 1100px;height: 500px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart27" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-12">
            <div id="chart28" style="width: 800px;height: 600px"></div>
        </div>

    </div>
</div>

</body>
<script type="text/javascript">

    //热力图
    var map=echarts.init(document.getElementById('map'));
    var geoCoordMap = {
        "百花路":[106.71,26.60],
        "马王庙":[106.71,26.58],
        "中华中路":[106.71,26.58],
        "水东路":[106.76,26.60],
        "花果园":[106.69,26.57],
        "头桥":[106.69,26.58],
        "三桥":[106.66,26.58],
        "二中对面":[106.39,26.92],
        "王家桥":[106.74,26.58],
        "Q":[106.72,26.58],
        "W":[106.73,26.57],
        "E":[106.74,26.56],
        "R":[106.75,26.55],
        "T":[106.69,26.54],
        "Y":[106.68,26.53],
        "U":[106.66,26.52],
        "I":[106.39,26.51],
        "O":[106.38,26.50],
        "P":[106.45,26.61],
        "P":[106.63,26.62],
        "A":[106.25,26.53],
        "S":[106.64,26.54],
        "D":[106.43,26.65],
        "F":[106.29,26.66],
        "G":[106.64,26.67],
        "H":[106.16,26.68],
        "J":[106.19,26.92],
        "K":[106.14,26.91],
        "L":[106.13,26.90],
        "Z":[106.21,26.89],
        "X":[106.21,26.88],
        "C":[106.31,26.87],
        "V":[106.36,26.86],
        "B":[106.49,26.85],
        "N":[106.49,26.84],
        "M":[106.46,26.83],
    };
    var convertData = function (data) {
        var res = [];
        for (var i = 0; i < data.length; i++) {
            var geoCoord = geoCoordMap[data[i].name];
            if (geoCoord) {
                res.push(geoCoord.concat(data[i].value));
            }
        }
        return res;
    };
    option = {
        title: {
            text: '云岩区案件发生',
            left: 'center',
            textStyle: {
                color: '#993333'
            }
        },
        //backgroundColor: '#404a59',
        visualMap: {
            min: 0,
            max: 500,
            splitNumber: 5,
//            inRange: {
//                color: ['#d94e5d','#eac736','#50a3ba'].reverse()
//            },
//            textStyle: {
//                color: '#fff'
//            }
        },
        geo: {
            map: '贵州',
            label: {
                emphasis: {
                    show: false
                }
            },
            roam: true,
//            itemStyle: {
//                normal: {
//                    areaColor: '#323c48',
//                    borderColor: '#111'
//                },
//                emphasis: {
//                    areaColor: '#2a333d'
//                }
//            }
        },
        series: [{
           // name: 'AQI',
            type: 'heatmap',
            coordinateSystem: 'geo',
            data: convertData([
                {name: "百花路", value: 421},
                {name: "马王庙", value: 111},
                {name: "中华中路", value: 500},
                {name: "水东路", value: 89},
                {name: "花果园", value: 120},
                {name: "头桥", value: 395},
                {name: "三桥", value: 416},
                {name: "二中对面", value: 418},
                {name: "王家桥", value: 418},
                {name: "二桥", value: 419},
                {name: "Q", value: 268},
                {name: "W", value: 250},
                {name: "E", value: 300},
                {name: "R", value: 240},
                {name: "T", value: 230},
                {name: "Y", value: 220},
                {name: "U", value: 210},
                {name: "I", value: 200},
                {name: "O", value: 190},
                {name: "P", value: 180},
                {name: "A", value: 170},
                {name: "S", value: 160},
                {name: "D", value: 150},
                {name: "F", value: 140},
                {name: "G", value: 130},
                {name: "H", value: 120},
                {name: "J", value: 110},
                {name: "K", value: 103},
                {name: "L", value: 93},
                {name: "Z", value: 83},
                {name: "X", value: 73},
                {name: "C", value: 63},
                {name: "V", value: 53},
                {name: "B", value: 43},
                {name: "N", value: 33},
                {name: "M", value: 23},
            ])
        }]
    };
    //map.setOption(option);

    //案件来源占比
    var chart1=echarts.init(document.getElementById('chart1'),'macarons');
    option = {
        title:{
            text:'案件来源占比情况',
            x:'center',
            textStyle : {
                color : 'rgba(0,0,0,0.8)',
                fontFamily : '微软雅黑',
                fontSize : 18  ,
                fontWeight : 'bolder'
            }
        },
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b}: {c} ({d}%)"
        },
        legend: {
            orient: 'vertical',
            x: 'left',
            data:['安全生产','出租屋问题','突发事件','街面秩序',
                   '社会治安','施工管理','市容环境','宣传广告' ]
        },
        series: [
            {
                name:'访问来源',
                type:'pie',
                selectedMode: 'single',
                radius: [0, '30%'],
                label: {
                    normal: {
                        position: 'inner'
                    }
                },
                labelLine: {
                    normal: {
                        show: false
                    }
                },
                data:[
                    {value:3146, name:'微信上报',selected:true},
                    {value:9343, name:'电话举报'}
                ]
            },
            {
                name:'访问来源',
                type:'pie',
                radius: ['40%', '55%'],
                data:[
                    {value:4160, name:'市容环境'},
                    {value:2452, name:'街面秩序'},
                    {value:2200, name:'施工管理'},
                    {value:1076, name:'宣传广告'},
                    {value:630, name:'社会治安'},
                    {value:252, name:'突发事件'},
                    {value:2, name:'安全生产'},
                    {value:2, name:'出租屋问题'}
                ]
            }
        ]
    };
    chart1.setOption(option);

    //三 案件受理部门占比
    var chart2=echarts.init(document.getElementById('chart2'));
    var dataStyle = {
        normal: {
            label: {show:false},
            labelLine: {show:false}
        }
    };
    var placeHolderStyle = {
        normal : {
            color: 'rgba(0,0,0,0)',
            label: {show:false},
            labelLine: {show:false}
        },
        emphasis : {
            color: 'rgba(0,0,0,0)'
        }
    };
    option = {
        title: {
            text: '受理部门占比情况',
            x: 'center',
            //y: 'center',
            itemGap: 20,
//            textStyle : {
//                color : 'rgba(30,144,255,0.8)',
//                fontFamily : '微软雅黑',
//                fontSize : 25  ,
//                fontWeight : 'bolder'
//            }
        },
        tooltip : {
            show: true,
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            orient : 'vertical',
            x : document.getElementById('chart2').offsetWidth / 2,
            y : 45,
            itemGap:12,
            data:['73%的来自于社区','27%的来自于联动部门']
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
        series : [
            {
                name:'1',
                type:'pie',
                clockWise:false,
                radius : [125, 150],
                itemStyle : dataStyle,
                data:[
                    {
                        value:73,
                        name:'73%的来自于社区'
                    },
                    {
                        value:27,
                        name:'invisible',
                        itemStyle : placeHolderStyle
                    }
                ]
            },
            {
                name:'2',
                type:'pie',
                clockWise:false,
                radius : [100, 125],
                itemStyle : dataStyle,
                data:[
                    {
                        value:27,
                        name:'27%的来自于联动部门'
                    },
                    {
                        value:73,
                        name:'invisible',
                        itemStyle : placeHolderStyle
                    }
                ]
            }
        ]
    };
    chart2.setOption(option);

    //四 案件类型占比情况
    var chart3=echarts.init(document.getElementById('chart3'));
    option = {
        title: {
            text: '案件类型占比情况',
            left: 'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['咨询类','事务类','应急类']
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
                name:'案件类型占比情况',
                type:'pie',
                radius : ['50%', '70%'],
                itemStyle : {
                    normal : {
                        label : {
                            formatter: "{b} : {c} ({d}%)",
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
                    {value:53, name:'咨询类'},
                    {value:21, name:'应急类'},
                    {value:6135, name:'事务类'}
                ]
            }
        ]
    };
    chart3.setOption(option);

    //五 案件受理诉求类别分布情况
    var chart4=echarts.init(document.getElementById('chart4'));
    option = {
        color : [
            'rgba(255, 69, 0, 1)',
            'rgba(255, 150, 0, 1)',
            'rgba(255, 200, 0, 1)',
            'rgba(155, 200, 50, 1)',
            'rgba(55, 200, 100, 1)'
        ],
        title : {
            text: '案件受理诉求分布情况',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c}%"
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
        legend: {
            orient : 'vertical',
            x : 'left',
            data : ['市容环境','街面秩序','施工管理','宣传广告','社会噪音','突发事件']
        },
        calculable : true,
        series : [
            {
                name:'实际',
                type:'funnel',
                x: '10%',
                width: '80%',
                itemStyle: {
                    normal: {
                        label: {
                            formatter: '{c}%',
                            textStyle: {
                                fontSize: 18
                            }
                        },
                        labelLine: {
                            show : false
                        }
                    },
                    emphasis: {
                        label: {
                            position:'inside',
                            formatter: '{b}实际 : {c}%'
                        }
                    }
                },
                data:[
                    {value:39, name:'市容环境'},
                    {value:23, name:'街面秩序'},
                    {value:20, name:'施工管理'},
                    {value:10, name:'宣传广告'},
                    {value:6, name:'社会噪音'},
                    {value:2, name:'突发事件'}
                ]
            }
        ]
    };
    chart4.setOption(option);

    //六 7.8月六大类情况对比 环比
    var chart5=echarts.init(document.getElementById('chart5'),'macarons');
    option = {
        title : {
            text: '受理数量环比',
            x:'center'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['7月','8月']
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
                    {text : '施工扰民', max  : 1100},
                    {text : '占道经营', max  : 800},
                    {text : '暴露垃圾', max  : 900},
                    {text : '油烟污染', max  : 300},
                    {text : '商业噪音', max  : 900},
                    {text : '违章建筑', max  : 200}
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
                        value : [1052, 792, 820, 239, 222, 171],
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
                        name : '8月'
                    },
                    {
                        value : [1055, 676, 668, 219, 835, 159],
                        name : '7月'
                    }
                ]
            }
        ]
    };
    chart5.setOption(option);

    //七 各区微信上报案件情况
    var chart6=echarts.init(document.getElementById('chart6'));
    option = {
        title : {
            text: '网格微信上报情况',
            x:'center'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['投诉总数','结案数']
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
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
                },
                type : 'category',
                data : ['云岩区','花溪区','南明区','观山湖区','白云区','经开区',
                        '乌当区','修文区','清镇市','息烽县','开阳县']
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
                        label:{
                            show:true,
                            position: "top",
                            formatter: '{c}'
                        }
                    }
                },
                name:'投诉总数',
                type:'bar',
                data:[3710, 3177, 2487, 2162, 1905, 1690, 631, 514, 328, 220, 117],
//                markPoint : {
//                    data : [
//                        {type : 'max', name: '最大值'},
//                        {type : 'min', name: '最小值'}
//                    ]
//                },
//                markLine : {
//                    data : [
//                        {type : 'average', name: '平均值',formatter: '{b}:{c}'}
//                    ]
//                },
            },
            {
                itemStyle: {
                    normal: {
                        label:{
                            show:true,
                            position: "top",
                            formatter: '{c}'
                        }
                    }
                },
                name:'结案数',
                type:'bar',
                data:[1279,
                    884,
                    632,
                    266,
                    379,
                    70,
                    42,
                    0,
                    156,
                    88,
                    62
                ],
//                markPoint : {
//                    data : [
//                        {name : '最高', value : 3710, xAxis: 7, yAxis: 183, symbolSize:18},
//                        {name : '最低', value : 117, xAxis: 11, yAxis: 3}
//                    ]
//                },
//                markLine : {
//                    data : [
//                        {type : 'average', name : '平均值'}
//                    ]
//                }
            }
        ]
    };
    chart6.setOption(option);

    //八 对比云岩区南明区（微信上报数）
    var chart7=echarts.init(document.getElementById('chart7'));
    option = {
        title : {
            text: '网格微信上报受理情况对比',
            x:'center'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['南明区','云岩区']
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
                data : ['投诉总数','受理数','结案数']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'云岩区',
                type:'line',
                smooth:true,
                itemStyle:
                {
                    normal:
                        {
                            label:{
                                show:true,
                                position: "top",
                                formatter: '{c}'
                            },
                            areaStyle: {type: 'default'}
                        }
                },
                data:[3710, 1289, 1279]
            },
            {
                name:'南明区',
                type:'line',
                smooth:true,
                itemStyle:
                {
                    normal:
                    {
                        label:{
                            show:true,
                            position: "top",
                            formatter: '{c}'
                        },
                        areaStyle: {type: 'default'}
                    }
                },
                data:[2487, 653, 632]
            }
        ]
    };
    chart7.setOption(option);

    //十 我区案件处置情况表
    var chart9=echarts.init(document.getElementById('chart9'));
    option = {
        title:{
           text:'案件处置情况' ,
            x:'center'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['按期结案率','结案率']
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
                data : ['1月','2月','3月','4月','5月','6月','7月','8月']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [

            {
                name:'按期结案率',
                type:'line',
                stack: '占比',
                itemStyle:
                {
                    normal:
                    {
                        label:{
                            show:true,
                            position: "top",
                            formatter: '{c}%'
                        },
                        areaStyle: {type: 'default'}
                    }
                },
                data:[88.31, 90.90, 87.20, 84.82, 77.11, 70.95, 75.84,74.57]
            },
            {
                name:'结案率',
                type:'line',
                stack: '占比',
                itemStyle:
                {
                    normal:
                    {
                        label:{
                            show:true,
                            position: "top",
                            formatter: '{c}%'
                        },
                        areaStyle: {type: 'default'}
                    }
                },
                data:[96.40, 97.14, 95.48, 93.54, 94.69, 95.34, 98.24,97.07]
            }
        ]
    };
    chart9.setOption(option);

    //十一 社区受理处置情况
    var chart10=echarts.init(document.getElementById('chart10'));
    option = {
        title:{
            text:'社区受理情况',
            x:'center'
        },
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
            orient : 'vertical',
            x : 'left',
            data:['受理数','处置数']
        },
        xAxis: [
            {
                axisLabel:{
                   // interval:0,  //类目全显
                    textStyle:{

                    }
                },
                type: 'category',
                data : [
                    '金狮社区',
                    '延中社区',
                    '威清社区',
                    '栖霞社区',
                    '金关社区',
                    '金龙社区',
                    '市西社区',
                    '中天社区',
                    '荷塘社区',
                    '中环社区',
                    '省府社区',
                    '贵乌社区',
                    '中东社区',
                    '宅吉社区',
                    '金惠社区',
                    '头桥社区',
                    '北京社区',
                    '黔东社区',
                    '三桥社区',
                    '圣泉社区',
                    '中华社区',
                    '普陀社区',
                    '普天社区',
                    '黔灵镇',
                    '东山社区',
                    '水东社区',
                    '蔡关社区',
                    '金鸭社区']
            }
        ],
        yAxis: [
            {
                type: 'value',
                name: '数目',
                min: 0,
                max: 800,
                interval: 50,
                axisLabel: {
                    formatter: '{value}'
                }
            },
            {
                type: 'value',
                name: '数目',
                min: 0,
                max: 800,
                interval: 50,
                axisLabel: {
                    formatter: '{value}'
                }
            }
        ],
        series: [
            {
                itemStyle:
                {
                    normal:
                    {
                        label:{
                            show:true,
                            position: "top",
                            formatter: '{c}'
                        },
                        areaStyle: {type: 'default'}
                    }
                },
                name:'受理数',
                type:'bar',
                data:[232,
                    284,
                    307,
                    169,
                    31,
                    114,
                    128,
                    63,
                    45,
                    97,
                    62,
                    236,
                    244,
                    191,
                    32,
                    302,
                    238,
                    90,
                    91,
                    44,
                    115,
                    165,
                    98,
                    782,
                    83,
                    153,
                    29,
                    80]
            },
            {
                itemStyle:
                {
                    normal:
                    {
                        label:{
                            show:true,
                            position: "top",
                            formatter: '{c}'
                        },
                        areaStyle: {type: 'default'}
                    }
                },
                name:'处置数',
                type:'line',
                yAxisIndex: 1,
                data:[232,
                    284,
                    307,
                    167,
                    31,
                    113,
                    128,
                    62,
                    45,
                    95,
                    60,
                    229,
                    235,
                    188,
                    32,
                    302,
                    225,
                    90,
                    88,
                    44,
                    114,
                    158,
                    96,
                    746,
                    82,
                    132,
                    29,
                    50]
            }
        ]
    };
    if (option && typeof option === "object") {
        chart10.setOption(option, true);
    }

    //以下是六大类的柱状图
    //十二 暴露垃圾
    var chart11=echarts.init(document.getElementById('chart11'),'vintage');
    option = {
        title : {
            text: '暴露垃圾',
            subtext:'热点区域排名',
            subtextStyle:{
                color:'rgba(0,0,0,1)',
                fontSize:14,
            },
            x:'center'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['举报数量']
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
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
                },
                type : 'category',
                data : ['三桥','东山','大营坡','煤矿村','文昌北路','百花山','相宝山','头桥']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                itemStyle:
                {
                    normal:
                    {
                        label:{
                            show:true,
                            position: "top",
                            formatter: '{c}'
                        },
                        areaStyle: {type: 'default'}
                    }
                },
                name:'举报数量',
                type:'bar',
                data:[25, 21, 20, 11, 10, 9, 9, 6]
            }
        ]
    };
    if (option && typeof option === "object") {
        chart11.setOption(option, true);
    }

    //十三 油烟污染
    var chart12=echarts.init(document.getElementById('chart12'),'macarons');
    option = {
        title : {
            text: '油烟污染',
            subtext:'热点区域排名',
            subtextStyle:{
                color:'rgba(0,0,0,1)',
                fontSize:14,
            },
            x:'center'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['举报数量']
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
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
                },
                type : 'category',
                data : ['文昌北路','北京路','北新区路','城基路','威清路','二桥','王家桥','黔灵东路','三桥']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {

                name:'举报数量',
                type:'bar',
                itemStyle:
                {
                    normal:
                    {
                        label:{
                            show:true,
                            position: "top",
                            formatter: '{c}'
                        },
                        areaStyle: {type: 'default'}
                    }
                },
                data:[20, 12, 11, 11, 9, 8, 8, 7, 7]
            }
        ]
    };
    if (option && typeof option === "object") {
        chart12.setOption(option, true);
    }

    //十四 施工扰民
    var chart13=echarts.init(document.getElementById('chart13'),'infographic');
    option = {
        title : {
            text: '施工扰民',
            subtext:'热点区域排名',
            subtextStyle:{
                color:'rgba(0,0,0,1)',
                fontSize:14,
            },
            x:'center'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['举报数量']
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
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
                },
                type : 'category',
                data : ['大营路','省政府','三桥','北京路','二桥','小石城','未来方舟','盐务街','瑞金北路']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                itemStyle:
                {
                    normal:
                    {
                        label:{
                            show:true,
                            position: "top",
                            formatter: '{c}'
                        },
                        areaStyle: {type: 'default'}
                    }
                },
                name:'举报数量',
                type:'bar',
                data:[65, 58, 48, 41, 35, 33, 32, 27,27]
            }
        ]
    };
    if (option && typeof option === "object") {
        chart13.setOption(option, true);
    }

    //十五 占道经营
    var chart14=echarts.init(document.getElementById('chart14'),'shine');
    option = {
        title : {
            text: '占道经营',
            subtext:'热点区域排名',
            subtextStyle:{
                color:'rgba(0,0,0,1)',
                fontSize:14,
            },
            x:'center'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['举报数量']
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
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
                },
                type : 'category',
                data : ['大营坡','金阳大道','黔灵公园','三桥','金顶山','北京路','百花山','中山路']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                itemStyle:
                {
                    normal:
                    {
                        label:{
                            show:true,
                            position: "top",
                            formatter: '{c}'
                        },
                        areaStyle: {type: 'default'}
                    }
                },
                name:'举报数量',
                type:'bar',
                data:[48, 26, 22, 21, 19, 18, 16, 14]
            }
        ]
    };
    if (option && typeof option === "object") {
        chart14.setOption(option, true);
    }

    //十六 商业噪音
    var chart15=echarts.init(document.getElementById('chart15'),'roma');
    option = {
        title : {
            text: '商业噪音',
            subtext:'热点区域排名',
            subtextStyle:{
                color:'rgba(0,0,0,1)',
                fontSize:14,
            },
            x:'center'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['举报数量']
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
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
                },
                type : 'category',
                data : ['盐务街','头桥','中山东路','大营路','中华路','东山','贯城河','和平路']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                itemStyle:
                {
                    normal:
                    {
                        label:{
                            show:true,
                            position: "top",
                            formatter: '{c}'
                        },
                        areaStyle: {type: 'default'}
                    }
                },
                name:'举报数量',
                type:'bar',
                data:[10, 9, 9, 8, 8, 6, 6, 6]
            }
        ]
    };
    if (option && typeof option === "object") {
        chart15.setOption(option, true);
    }

    //十七 违章建筑
    var chart16=echarts.init(document.getElementById('chart16'));
    option = {
        title : {
            text: '违章建筑',
            subtext:'热点区域排名',
            subtextStyle:{
                color:'rgba(0,0,0,1)',
                fontSize:14,
            },
            x:'center'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['举报数量']
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
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
                },
                type : 'category',
                data : ['三桥','金关村','未来方舟','黔灵东路','中天花园','东山','富水北路','渔安新城']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                itemStyle:
                {
                    normal:
                    {
                        label:{
                            show:true,
                            position: "top",
                            formatter: '{c}'
                        },
                        areaStyle: {type: 'default',color:'rgba(213,212,12,1)'}
                    }
                },
                name:'举报数量',
                type:'bar',
                data:[17, 10, 10, 8, 6, 5, 4, 4]
            }
        ]
    };
    if (option && typeof option === "object") {
        chart16.setOption(option, true);
    }

    //十八  微信上报案件占比
    var chart17=echarts.init(document.getElementById('chart17'));
    option = {
        title : {
            text: '全市微信上报案件占比',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{b}: {c}%"
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
        calculable : true,
        series : [
            {
                name:'矩形图',
                type:'treemap',
                itemStyle: {
                    normal: {
                        label: {
                            show: true,
                            formatter: "{c}%"
                        },
                        borderWidth: 1
                    },
                    emphasis: {
                        label: {
                            show: true,
                            formatter: "{c}%"
                        }
                    }
                },
                data:[
                    {
                        name: '云岩区22%',
                        value: 22
                    },
                    {
                        name: '花溪区19%',
                        value: 19
                    },
                    {
                        name: '南明区14%',
                        value: 14
                    },
                    {
                        name: '观山湖区13%',
                        value: 13
                    },
                    {
                        name: '白云区11%',
                        value: 11
                    },
                    {
                        name: '经开区10%',
                        value: 10
                    },
                    {
                        name: '乌当区',
                        value: 4
                    },
                    {
                        name: '修文县',
                        value: 3
                    },
                    {
                        name: '清镇市2%',
                        value: 2
                    },
                    {
                        name: '息烽县1%',
                        value: 1
                    },
                    {
                        name: '',
                        value: 1
                    }
                ]
            }
        ]
    };
    chart17.setOption(option);

    //十九 南明区、云岩区整体指标对比
    var chart18=echarts.init(document.getElementById('chart18'));
    option = {
        title: {
            text: '整体指标对比',
            x:'center'
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data: ['南明区', '云岩区']
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
        radar: [
            {
                axisLine: {
                    lineStyle: {
                        color: 'rgba(255, 255, 255, 0.5)'
                    }
               },
               splitLine: {
                    lineStyle: {
                        color: 'rgba(255, 255, 255, 0.5)'
                    }
                }
            },
            {
                name:{
                    textStyle: {
                        color:'#000',
                        fontSize:12
                    }
                },
                indicator: [
                    { text: '受理数', max: 8500 },
                    { text: '结案率', max: 100 },
                    { text: '贡献度', max: 100 },
                    { text: '按期结案率', max: 100 },
                    { text: '返工率', max: 100 }
                ],
                radius: 120
            }
        ],
        series: [
            {
                name: '对比结果',
                type: 'radar',
                radarIndex: 1,
                data: [
                    {
                        value: [8071, 95.97, 32.60, 80.56, 6.08],
                        name: '南明区',
                        opacity: 0.9
                    },
                    {
                        value: [6209, 97.07, 25.36, 74.57, 4.99],
                        name: '云岩区',
                        label: {
                            normal: {
                                show: true,
                                formatter:function(params) {
                                    return params.value;
                                }
                            }
                        },
                        areaStyle: {
                            normal: {
                                label: {
                                    normal: {
                                        show: true,
                                        formatter:function(params) {
                                            return params.value;
                                        }
                                    }
                                },
                                opacity: 0.9,
                                color: new echarts.graphic.RadialGradient(0.5, 0.5, 1, [
                                    {
                                        color: '#B8D3E4',
                                        offset: 0
                                    },
                                    {
                                        color: '#72ACD1',
                                        offset: 1
                                    }
                                ])
                            }
                        }
                    }
                ]
            }
        ]
    }
    chart18.setOption(option);

    //二十 全市区指标对比
    var chart19=echarts.init(document.getElementById('chart19'));
    var dataStyle = {
        normal: {
            label : {
                show: true,
                position: 'insideLeft',
                formatter: '{c}%',
            }
        }
    };
    option = {
        title: {
            text: '全市',
            subtext:'各辖区指标对比',
            subtextStyle:{
                color:'rgba(0,0,0,1)',
                fontSize:14
            },
            x:'left'
        },
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            },
            formatter : '{b}<br/>{a0}:{c0}%<br/>{a2}:{c2}%<br/>'
        },
        legend: {
            itemGap : document.getElementById('chart19').offsetWidth / 8,
            data:['结案率','按期结案率','返工率']
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
                data : [
                    '经开区','观山湖区', '清镇市', '白云区','乌当区','云岩区', '花溪区',  '开阳县',
                    '南明区', '修文县',  '高新区','息烽县'
                ]
            }
        ],
        series : [
            {
                name:'结案率',
                type:'bar',
                stack: '总量',
                itemStyle: dataStyle,
                data:[
                    '91.52','96.03','97.39','91.99', '99.03', '97.07','98.82',
                    '98.77','95.97','99.73','100.00','99.56'
                ]
            },
            {
                name:'按期结案率',
                type:'bar',
                stack: '总量',
                itemStyle: dataStyle,
                data:[
                    74.32,74.59,79.77,83.16,82.29,74.57,83.12,87.78,80.56,
                    91.49,100.00,99.12
                ]
            },
            {
                name:'返工率',
                type:'bar',
                stack: '总量',
                itemStyle: {
                    normal: {
                        label : {
                            show: true,
                            position: 'insideLeft',
                            formatter: '{c}%',
                            textStyle:{
                                color:'rgba(0,0,0,1)'
                            }
                        }
                    }
                },
                data:[
                    7.30,7.44,7.70,5.05,12.83,4.99,8.28,12.88,
                    6.08,12.80,8.57,5.33
                ]
            }
        ]
    };
    chart19.setOption(option);

    //二十三 受理案件总数 仪表板
    var chart20=echarts.init(document.getElementById('chart20'));

    option = {
        tooltip : {
            formatter: "{a} <br/>{c} {b}"
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
                name:'占比',
                type:'gauge',
                z: 3,
                min:0,
                max:100,
               //splitNumber:11,
                axisLine: {            // 坐标轴线
                    lineStyle: {       // 属性lineStyle控制线条样式
                        width: 10
                    }
                },
                axisTick: {            // 坐标轴小标记
                    length :15,        // 属性length控制线长
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: 'auto'
                    }
                },
                splitLine: {           // 分隔线
                    length :20,         // 属性length控制线长
                    lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
                        color: 'auto'
                    }
                },
                title : {
                    textStyle: {
                        // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        fontWeight: 'bolder',
                        fontSize: 20,
                        fontStyle: 'italic',
                        position:'bottom'

                    }
                },
                detail : {
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        fontWeight: 'bolder'
                    }
                },
                data:[{value: 25.21, name: '在全市占比'}]
            },
            {
                name:'数量',
                type:'gauge',
                center : ['25%', '55%'],    // 默认全局居中
                radius : '50%',
                min:0,
                max:10000,
                endAngle:45,
                splitNumber:4,
                axisLine: {            // 坐标轴线
                    lineStyle: {       // 属性lineStyle控制线条样式
                        width: 8
                    }
                },
                axisTick: {            // 坐标轴小标记
                    length :12,        // 属性length控制线长
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: 'auto'
                    }
                },
                splitLine: {           // 分隔线
                    length :20,         // 属性length控制线长
                    lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
                        color: 'auto'
                    }
                },
                pointer: {
                    width:5
                },
                title : {
                    offsetCenter: [0, '-30%'],       // x, y，单位px
                },
                detail : {
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        fontWeight: 'bolder'
                    }
                },
                data:[{value: 6209, name: '云岩区受理数量'}]
            },
            {
                name:'全市的受理数量',
                type:'gauge',
                center : ['75%', '50%'],    // 默认全局居中
                radius : '50%',
                min:0,
                max:30000,
                startAngle:135,
                endAngle:0,
                splitNumber:5,
                axisLine: {            // 坐标轴线
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: [[0.2, '#ff4500'],[0.8, '#48b'],[1, '#228b22']],
                        width: 8
                    }
                },
                axisTick: {            // 坐标轴小标记
                    //splitNumber:5,
                    length :10,        // 属性length控制线长
                    lineStyle: {       // 属性lineStyle控制线条样式
                        color: 'auto'
                    }
                },
                splitLine: {           // 分隔线
                    length :15,         // 属性length控制线长
                    lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
                        color: 'auto'
                    }
                },
                pointer: {
                    width:2
                },
                data:[{value: 24632, name: '全市受理数量'}]
            }
        ]
    };
    chart20.setOption(option,true);

    //二十四 在全市占比
    var chart21=echarts.init(document.getElementById('chart21'));
    option = {
        title:{
            text:'云岩区占比情况',
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
                name: '在全市的占比',
                type: 'gauge',
                detail: {formatter:'{value}%'},
                data: [{value: 25.21, name: '在全市的占比'}]
            }
        ]
    };
    chart21.setOption(option);

    //后三名分析
    //二十五
    var chart22=echarts.init(document.getElementById('chart22'));
    var dataStyle = {
        normal: {
            label : {
                show: true,
                position: 'insideLeft',
                formatter: '{c}%'
            }
        }
    };
    option = {
        title:{
            text:'社区',
            subtext:'倒数三名分析',
            subtextStyle : {
                color : 'rgba(0,0,0,1)',
                fontFamily : '微软雅黑',
                fontSize : 18  ,
                fontWeight : 'bolder'
            },
            x:'left'
        },
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            },
            formatter : '{b}<br/>{a0}:{c0}%<br/>{a2}:{c2}%<br/>'
        },
        legend: {
            itemGap : document.getElementById('chart19').offsetWidth / 8,
            data:['结案率','按期结案率','返工率']
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
                data : [
                    '金鸭社区',
                    '蔡关社区',
                    '水东社区'
                ]
            }
        ],
        series : [
            {
                name:'结案率',
                type:'bar',
                stack: '总量',
                itemStyle: dataStyle,
                data:[
                    62.50,
                    100.00,
                    86.27
                ]
            },
            {
                name:'按期结案率',
                type:'bar',
                stack: '总量',
                itemStyle: dataStyle,
                data:[
                    37.50,
                    41.38,
                    49.67
                    ]
            },
            {
                name:'返工率',
                type:'bar',
                stack: '总量',
                itemStyle: {
                    normal: {
                        label : {
                            show: true,
                            position: 'insideLeft',
                            formatter: '{c}%',
                            textStyle:{
                                color:'rgba(0,0,0,1)'
                            }
                        }
                    }
                },
                data:[
                    2.00,
                    10.34,
                    9.85
                ]
            }
        ]
    };
    chart22.setOption(option);

    //二十六
    var chart23=echarts.init(document.getElementById('chart23'));
    var dataStyle = {
        normal: {
            label : {
                show: true,
                position: 'insideLeft',
                formatter: '{c}%'
            }
        }
    };
    option = {
        title:{
            text:'联动单位',
            subtext:'倒数三名分析',
            subtextStyle : {
                color : 'rgba(0,0,0,1)',
                fontFamily : '微软雅黑',
                fontSize : 18  ,
                fontWeight : 'bolder'
            },
            x:'left'
        },
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            },
            formatter : '{b}<br/>{a0}:{c0}%<br/>{a2}:{c2}%'
        },
        legend: {
            itemGap : document.getElementById('chart19').offsetWidth / 8,
            data:['结案率','按期结案率','返工率']
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
                data : [
                    '区棚改办',
                    '区国土分局',
                    '区住建局'
                    ]
            }
        ],
        series : [
            {
                name:'结案率',
                type:'bar',
                stack: '总量',
                itemStyle: dataStyle,
                data:[
                    0.00,
                    100.00,
                    88.30
                ]
            },
            {
                name:'按期结案率',
                type:'bar',
                stack: '总量',
                itemStyle: dataStyle,
                data:[
                    0.00,
                    0.00,
                    37.43
                ]
            },
            {
                name:'返工率',
                type:'bar',
                stack: '总量',
                itemStyle: {
                    normal: {
                        label : {
                            show: true,
                            position: 'insideLeft',
                            formatter: '{c}%',
                            textStyle:{
                                color:'rgba(0,0,0,1)'
                            }
                        }
                    }
                },
                data:[
                    0.00,
                    0.00,
                    7.95
                ]
            }
        ]
    };
    chart23.setOption(option);

    //二十二
    //云图
    //二十一  云岩区联动单位指标对比
    var chart24=echarts.init(document.getElementById('chart24'));
    var dataStyle = {
        normal: {
            label : {
                show: true,
                position: 'insideLeft',
                formatter: '{c}%'
            }
        }
    };
    option = {
        title:{
            text:'联动单位指标对比情况',
            x:'left'
        },
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            },
            formatter : '{b}<br/>{a0}:{c0}%<br/>{a2}:{c2}%<br/>'
        },
        legend: {
            itemGap : document.getElementById('chart19').offsetWidth / 8,
            data:['结案率','按期结案率','返工率']
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
                data : [
                    '区棚改办',
                    '区国土分局',
                    '区住建局',
                    '区生态文明局',
                    '区房屋征收局',
                    '京筑环卫公司',
                    '区发改局',
                    '区教育局',
                    '区市场监督管理局',
                    '区市政工程管理所',
                    '区环境卫生管理站',
                    '区综合执法大队',
                    '区东线建设指挥部',
                    '区计生和卫生局',
                    '区规划分局',
                    '区民政局',
                    '人力资源社会保障局',
                    ]
            }
        ],
        series : [
            {
                name:'结案率',
                type:'bar',
                stack: '总量',
                itemStyle: dataStyle,
                data:[
                    0.00,
                    100.00,
                    88.30,
                    97.24,
                    90.91,
                    96.88,
                    100.00,
                    100.00,
                    95.83,
                    97.44,
                    100.00,
                    99.36,
                    100.00,
                    100.00,
                    100.00,
                    100.00,
                    100.00,

                ]
            },
            {
                name:'按期结案率',
                type:'bar',
                stack: '总量',
                itemStyle: dataStyle,
                data:[
                    0.00,
                    0.00,
                    37.43,
                    40.69,
                    81.82,
                    75.00,
                    100.00,
                    77.46,
                    95.83,
                    94.87,
                    94.12,
                    96.08,
                    100.00,
                    100.00,
                    100.00,
                    100.00,
                    100.00,
                ]
            },
            {
                name:'返工率',
                type:'bar',
                stack: '总量',
                itemStyle: {
                    normal: {
                        label : {
                            show: true,
                            position: 'insideLeft',
                            formatter: '{c}%',
                            textStyle:{
                                color:'rgba(0,0,0,1)'
                            }
                        }
                    }
                },
                data:[
                    0.00,
                    0.00,
                    7.95,
                    15.60,
                    10.00,
                    6.45,
                    50.00,
                    5.63,
                    17.39,
                    2.63,
                    0.00,
                    0.83,
                    0.00,
                    0.00,
                    0.00,
                    0.00,
                    0.00,

                ]
            }
        ]
    };
    chart24.setOption(option);

    //二十二 云岩区社区指标对比
    var chart25=echarts.init(document.getElementById('chart25'));
    var dataStyle = {
        normal: {
            label : {
                show: true,
                position: 'insideLeft',
                formatter: '{c}%'
            }
        }
    };
    option = {
        title:{
           text:'社区指标对比' ,
            x:'left'
        },
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            },
            formatter : '{b}<br/>{a0}:{c0}%<br/>{a2}:{c2}%<br/>{a4}:{c4}%<br/>{a6}:{c6}%'
        },
        legend: {
            itemGap : document.getElementById('chart19').offsetWidth / 8,
            data:['结案率','按期结案率','返工率']
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
                data : ['金鸭社区',
                    '蔡关社区',
                    '水东社区',
                    '东山社区',
                    '黔灵镇',
                    '普天社区',
                    '普陀社区',
                    '中华社区',
                    '圣泉社区',
                    '三桥社区',
                    '黔东社区',
                    '北京社区',
                    '头桥社区',
                    '金惠社区',
                    '宅吉社区',
                    '中东社区',
                    '贵乌社区',
                    '省府社区',
                    '中环社区',
                    '荷塘社区',
                    '中天社区',
                    '市西社区',
                    '金龙社区',
                    '金关社区',
                    '栖霞社区',
                    '威清社区',
                    '延中社区',
                    '金狮社区'

                ]
            }
        ],
        series : [
            {
                name:'结案率',
                type:'bar',
                stack: '总量',
                itemStyle: dataStyle,
                data:[62.50,
                    100.00,
                    86.27,
                    98.80,
                    95.40,
                    97.96,
                    95.76,
                    99.13,
                    100.00,
                    96.70,
                    100.00,
                    94.54,
                    100.00,
                    100.00,
                    98.43,
                    96.31,
                    97.03,
                    96.77,
                    97.94,
                    100.00,
                    98.41,
                    100.00,
                    99.12,
                    100.00,
                    98.82,
                    100.00,
                    100.00,
                    100.00
                ]
            },
            {
                name:'按期结案率',
                type:'bar',
                stack: '总量',
                itemStyle: dataStyle,
                data:[
                    37.50,
                    41.38,
                    49.67,
                    49.40,
                    43.86,
                    55.10,
                    61.21,
                    57.39,
                    65.91,
                    68.13,
                    72.22,
                    73.11,
                    72.19,
                    75.00,
                    76.96,
                    78.69,
                    80.93,
                    83.87,
                    84.54,
                    86.67,
                    84.13,
                    82.03,
                    84.21,
                    96.77,
                    87.57,
                    87.62,
                    89.44,
                    100.00
                ]
            },
            {
                name:'返工率',
                type:'bar',
                stack: '总量',
                itemStyle: {
                    normal: {
                        label : {
                            show: true,
                            position: 'insideLeft',
                            formatter: '{c}%',
                            textStyle:{
                                color:'rgba(0,0,0,1)'
                            }
                        }
                    }
                },
                data:[2.00,
                    10.34,
                    9.85,
                    10.98,
                    6.97,
                    11.46,
                    13.29,
                    5.26,
                    15.91,
                    11.36,
                    11.11,
                    8.44,
                    13.25,
                    3.13,
                    6.38,
                    7.66,
                    10.04,
                    8.33,
                    8.42,
                    11.11,
                    4.84,
                    5.47,
                    7.96,
                    19.35,
                    1.80,
                    4.89,
                    5.28,
                    3.45,
                ]
            }
        ]
    };
    chart25.setOption(option);

    //二十七 时间段发生举报数量对比
    var chart26=echarts.init(document.getElementById('chart26'));
    var hours = ['24', '1', '2', '3', '4', '5', '6',
        '7', '8', '9','10','11',
        '12', '13', '14', '15', '16', '17',
        '18', '19', '20', '21', '22', '23'];
    var days = [
        '施工扰民',//0
        '暴露垃圾',//1
        '无照经营游商',//2
        '商业噪音',//3
        '投诉已建好的违法建筑',//4
        '道路不洁',//5
        '投诉正在建设违法建筑',//6
        '油烟污染',//7
        '私搭乱建'];//8
    var data = [
        [3,0,1.2],
        [0,0,13.8],//43.8
        [7,0,0.4],
        [4,0,0.4],
        [5,0,0.1],
        [2,0,1],
        [0,1,14.2],//28.2
        [3,1,0.2],
        [2,1,1],
        [5,1,0.1],
        [7,1,0.6],
        [0,2,19.4],//19.4
        [2,2,1.2],
        [5,2,0.2],
        [7,2,0.4],
        [2,3,1.6],
        [0,3,14.6],
        [5,3,0.1],
        [7,3,0.2],
        [0,4,8.6],
        [7,4,0.2],
        [2,4,0.2],
        [0,5,4.8],
        [2,5,0.4],
        [7,6,0.2],
        [2,6,2.2],
        [0,6,2.2],
        [3,6,0.2],
        [5,7,0.1],
        [3,7,0.2],
        [0,7,0.2],
        [1,7,1],
        [7,7,0.6],
        [2,7,9.8],
        [6,8,0.2],
        [2,8,9],
        [4,8,0.2],
        [1,8,2.9],
        [5,8,0.3],
        [7,8,1.4],
        [3,8,1.2],
        [0,9,0.2],
        [2,9,16.4],
        [1,9,15.6],
        [3,9,2],
        [7,9,2.2],
        [4,9,0.8],
        [6,9,0.9],
        [5,9,0.9],
        [4,10,1.4],
        [2,10,11],//21
        [8,10,0.1],
        [5,10,1.1],
        [7,10,5.2],
        [1,10,15.2],
        [0,10,0.4],
        [3,10,2.6],
        [6,10,1.3],
        [4,11,1.2],
        [5,11,0.7],
        [1,11,11.6],
        [7,11,4.2],
        [6,11,1.6],
        [3,11,3.4],
        [2,11,14],
        [3,12,3.6],
        [1,12,3.7],
        [5,12,0.7],
        [4,12,0.8],
        [6,12,1.2],
        [7,12,1.6],
        [2,12,8.8],
        [3,13,4.6],
        [5,13,0.6],
        [6,13,0.8],
        [2,13,13.4],
        [4,13,0.8],
        [7,13,2],
        [1,13,4.7],
        [6,14,0.3],
        [3,14,2],
        [5,14,0.1],
        [1,14,5.5],
        [2,14,9.6],
        [7,14,2.2],
        [4,14,1.4],
        [3,15,3.2],
        [0,15,0.6],
        [2,15,9.4],
        [8,15,0.1],
        [4,15,0.6],
        [6,15,1],
        [1,15,4.2],
        [7,15,2.2],
        [5,15,0.5],
        [5,16,0.1],
        [7,16,2],
        [1,16,3.9],
        [3,16,2.2],
        [0,16,0.4],
        [2,16,8.8],
        [4,16,1.4],
        [6,16,1.1],
        [1,17,2.5],
        [4,17,1],
        [7,17,2.4],
        [3,17,3.2],
        [0,17,0.2],
        [6,17,0.7],
        [2,17,4.6],
        [5,17,0.2],
        [2,18,6.8],
        [1,18,1],
        [7,18,2],
        [4,18,0.6],
        [3,18,3],
        [6,18,0.6],
        [0,18,0.2],
        [5,19,0.2],
        [7,19,3.6],
        [4,19,0.8],
        [6,19,0.3],
        [2,19,7],
        [0,19,1],
        [8,19,0.1],
        [3,19,2.2],
        [1,19,1.6],
        [0,20,0.6],
        [6,20,0.1],
        [3,20,2.4],
        [1,20,0.7],
        [7,20,5],
        [4,20,0.6],
        [2,20,5.2],
        [5,20,0.3],
        [3,21,2.4],
        [2,21,3.6],
        [7,21,3],
        [1,21,0.5],
        [5,21,0.1],
        [4,21,0.4],
        [0,21,4],
        [6,21,0.2],
        [1,22,0.6],
        [3,22,2],
        [0,22,15.6],//33.6
        [2,22,2],
        [5,22,0.3],
        [7,22,4],
        [0,23,20.4],//47.4
        [5,23,0.1],
        [4,23,0.2],
        [7,23,2.2],
        [2,23,1.4],
        [3,23,2.6],
        [6,23,0.2]
    ];
    option = {
        title:{
            text:'重点案件时间段分析',
            x:'center'
        },
        tooltip: {
            position: 'top'
        },
        title: [],
        singleAxis: [],
        series: []
    };
    echarts.util.each(days, function (day, idx) {
        option.title.push({
            textBaseline: 'middle',
            top: (idx + 0.5) * 100 / 7 + '%',
            text: day
        });
        option.singleAxis.push({
            left: 150,
            type: 'category',
            boundaryGap: false,
            data: hours,
            top: (idx * 100 / 7 + 5) + '%',
            height: (100 / 7 - 10) + '%',
            axisLabel: {
                interval: 2
            }
        });
        option.series.push({
            singleAxisIndex: idx,
            coordinateSystem: 'singleAxis',
            type: 'scatter',
            data: [],
            symbolSize: function (dataItem) {
                return dataItem[1] * 4;
            }
        });
    });
    echarts.util.each(data, function (dataItem) {
        option.series[dataItem[0]].data.push([dataItem[1], dataItem[2]]);
    });
    chart26.setOption(option);

    //九 各社区 微信上报案件情况（结案数未知）
    var chart8=echarts.init(document.getElementById('chart8'));
    option = {
        title:{
            text:'微信上报案件情况',
            x:'center'
        },
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            },
            formatter:'{b}:{c}'
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['投诉总数', '受理数']
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                magicType : {show: true, type: ['line', 'bar']},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        xAxis : [
            {
                type : 'value'
            }
        ],
        yAxis : [
            {
                type : 'category',
                axisTick : {show: false},
                data : [
                    '黔灵镇',
                    '圣泉社区',
                    '荷塘社区',
                    '金惠社区',
                    '金鸭社区',
                    '黔东社区',
                    '水东社区',
                    '中环社区',
                    '中东社区',
                    '金龙社区',
                    '东山社区',
                    '蔡关社区',
                    '中华社区',
                    '普天社区',
                    '普陀社区',
                    '中天社区',
                    '三桥社区',
                    '贵乌社区',
                    '栖霞社区',
                    '市西社区',
                    '头桥社区',
                    '金关社区',
                    '省府社区',
                    '北京社区',
                    '威清社区',
                    '金狮社区',
                    '宅吉社区',
                    '延中社区',

                ]
            }
        ],
        series : [
            {
                name:'投诉总数',
                type:'bar',
                barWidth : 12,
                itemStyle : { normal: {label : {show: true, position: 'right'}}},
                data:[0,
                    1,
                    1,
                    2,
                    4,
                    4,
                    5,
                    5,
                    7,
                    13,
                    15,
                    19,
                    22,
                    25,
                    42,
                    73,
                    97,
                    106,
                    124,
                    144,
                    187,
                    187,
                    209,
                    311,
                    316,
                    480,
                    507,
                    804
                ]
            },
            {
                name:'受理数',
                type:'bar',
                stack: '总量',
                barWidth : 12,
                itemStyle: {
                    normal: {
                        label : {
                            show: true,
                            position: 'right'
                        }
                  }
                },
                data:[0,
                    0,
                    1,
                    0,
                    0,
                    0,
                    1,
                    0,
                    3,
                    8,
                    14,
                    2,
                    8,
                    3,
                    31,
                    44,
                    37,
                    38,
                    112,
                    60,
                    113,
                    2,
                    6,
                    117,
                    232,
                    172,
                    118,
                    167

                ]
            }
        ]
    };
    chart8.setOption(option);



</script>
</html>