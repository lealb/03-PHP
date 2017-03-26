<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>云岩区-九月份</title>
    <link rel="stylesheet" href="/Public/Home/css/bootstrap.min.css">
    <script type="text/javascript" src="/Public/Home/js/common/jquery-1.12.2.min.js"></script>
    <!--关键字-->
    <script type="text/javascript" src="/Public/Home/js/common/swfobject.js"></script>
    <!--3.0-->
    <script type="text/javascript" src="/Public/Home/js/echarts/echarts.js"></script>
    <script type="text/javascript" src="/Public/Home/js/theme/vintage.js"></script>
    <script type="text/javascript" src="/Public/Home/js/theme/dark.js"></script>
    <script type="text/javascript" src="/Public/Home/js/theme/macarons.js"></script>
    <script type="text/javascript" src="/Public/Home/js/theme/infographic.js"></script>
    <script type="text/javascript" src="/Public/Home/js/theme/shine.js"></script>
    <script type="text/javascript" src="/Public/Home/js/theme/roma.js"></script>
    <script src="http://webapi.amap.com/maps?v=1.3&key=7043a2d34a24f2543d6fa0aea210e073"></script>
    <script type="text/javascript" src="/Public/Home/js/gaodemap/addToolbar.js"></script>

    <script type="text/javascript" src="/Public/Home/js/gaodemap/heatmapData.js"></script>
    <script type="text/javascript" src="/Public/Home/js/gaodemap/heatmap-amap.min.js"></script>

</head>
<style>
    /*去除logo*/
    .amap-logo {
        right: 0 !important;
        left: auto !important;
        display: none;
    }
    .amap-copyright {
        right: 70px !important;
        left: auto !important;
    }
    .amap-copyright {
        display: none;
    }
</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="chart1" style="width: 800px;height: 400px"></div>
        </div>
        <!--热力图-->
        <div class="col-md-12">
            <div id="chart2" style="width: 1100px;height: 400px">

            </div>
        </div>
        <div class="col-md-12">
            <div id="chart3" style="width: 1100px;height: 600px"></div>
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
            <div id="chart72" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-12">
            <div id="chart8" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-12">
            <div id="chart9" style="width: 1366px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart10" style="width: 550px;height: 400px"></div>
        </div>
        <!--违章建筑分布图-->
        <div class="col-md-12">
            <div id="chart17" style="width: 1100px;height: 400px">
                违章建筑分布地图
            </div>
        </div>
        <div class="col-md-12">
            <div id="chart18" style="width: 1100px;height: 700px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart19" style="width: 550px;height: 200px"></div>
        </div>
        <div class="col-md-12">
            <div id="chart20" style="width: 1300px;height: 600px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart21" style="width: 550px;height: 200px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart22" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart23" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart24" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart25" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart26" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart27" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-6">
            <div id="chart28" style="width: 550px;height: 400px"></div>
        </div>
        <div class="col-md-12">
            <div id="chart29" style="width: 1100px;height: 900px"></div>
        </div>
    </div>
</div>

</body>
<script type="text/javascript">

    //图1 受理案件总数 仪表板
    var chart1=echarts.init(document.getElementById('chart1'));
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
                        fontWeight: 'bolder',
                        color:'rgb(99,134,158)'
                    }
                },
                data:[{value: 27.22, name: '在全市占比'}]
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
                        fontWeight: 'bolder',
                        color:'rgb(99,134,158)'
                    }
                },
                data:[{value: 5589, name: '云岩区受理数量'}]
            },
            {
                name:'全市的受理数量',
                type:'gauge',
                center : ['75%', '50%'],    // 默认全局居中
                radius : '50%',
                min:0,
                max:25000,
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
                    width:5
                },
                detail : {
                    textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                        fontWeight: 'bolder',
                       // color:'rgb(99,134,158)'
                    }
                },
                data:[{value: 20525, name: '全市受理数量'}]
            }
        ]
    };
    chart1.setOption(option,true);

    //图2 热点案件区域分布图
    var point_x=106.732165;
    var point_y=26.575634;
    var map = new AMap.Map("chart2", {
        resizeEnable: true,
        center: [point_x, point_y],//26.6047055087,106.7243686963
        zoom: 13
    });

    if (!isSupportCanvas()) {
        alert('热力图仅对支持canvas的浏览器适用,您所使用的浏览器不能使用热力图功能,请换个浏览器试试~')
    }
    //详细的参数,可以查看heatmap.js的文档 http://www.patrick-wied.at/static/heatmapjs/docs.html
    //参数说明如下:
    /* visible 热力图是否显示,默认为true
     * opacity 热力图的透明度,分别对应heatmap.js的minOpacity和maxOpacity
     * radius 势力图的每个点的半径大小
     * gradient  {JSON} 热力图的渐变区间 . gradient如下所示
     *	{
     .2:'rgb(0, 255, 255)',
     .5:'rgb(0, 110, 255)',
     .8:'rgb(100, 0, 255)'
     }
     其中 key 表示插值的位置, 0-1
     value 为颜色值
     */

    //利用ajax查询热力图数据
    var heatmap;
    map.plugin(["AMap.Heatmap"], function() {
        //初始化heatmap对象
        heatmap = new AMap.Heatmap(map, {
            radius: 25, //给定半径
            opacity: [0, 0.8],
            gradient:{
                0.5: 'blue',
                0.65: 'rgb(117,211,248)',
                0.7: 'rgb(0, 255, 0)',
                0.9: '#ffea00',
                1.0: 'red'
            }
        });
        heatmap.start();
        //设置数据集：
        heatmap.setDataSet({
            data: heatmapData,
            max: 100
        });
    });
    //判断浏览区是否支持canvas
    function isSupportCanvas() {
        var elem = document.createElement('canvas');
        return !!(elem.getContext && elem.getContext('2d'));
    }

    //图3 案件分布时段 时间段发生举报数量对比  需修改数据
    var chart3=echarts.init(document.getElementById('chart3'));
    var hours = ['24', '1', '2', '3', '4', '5', '6',
        '7', '8', '9','10','11',
        '12', '13', '14', '15', '16', '17',
        '18', '19', '20', '21', '22', '23'];
    var days = [
        '施工扰民',//0
        '暴露垃圾',//1
        '无照游商',//2
        '商业噪音',//3
        '违法建筑',//4
        '宣传广告',//5
        '下水道堵塞',//6
        '油烟污染'];//8
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
    chart3.setOption(option);

    //图4 案件来源占比情况
    var chart4=echarts.init(document.getElementById('chart4'),'macarons');
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
            data:['油烟污染','无照游商','商业噪音','暴露垃圾',
                  '施工扰民','宣传广告','违章建筑',
                    '下水道堵塞','大气污染']
        },
        series: [
            {
                name:'访问来源',
                type:'pie',
                selectedMode: 'single',
                radius: [0, '30%'],
                label: {
                    normal: {
                        textStyle:{
                            fontSize:12,
                            color:'#000'
                        },
                        position: 'inner'
                    }
                },
                labelLine: {
                    normal: {
                        show: false
                    }
                },
                data:[
                    {value:1085, name:'微信上报',selected:true},
                    {value:4504, name:'电话举报'}
                ]
            },
            {
                name:'访问来源',
                type:'pie',
                radius: ['40%', '55%'],
                data:[
                    {value:184, name:'油烟污染'},
                    {value:845, name:'无照游商'},
                    {value:835, name:'商业噪音'},
                    {value:788, name:'暴露垃圾'},
                    {value:706, name:'施工扰民'},
                    {value:568, name:'宣传广告'},
                    {value:279, name:'违章建筑'},
                    {value:129, name:'下水道堵塞'},
                    {value:96, name:'大气污染'}

                ]
            }
        ]
    };
    chart4.setOption(option);

    //图5 案件类型占比情况
    var chart5=echarts.init(document.getElementById('chart5'));
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
                    {value:23, name:'咨询类'},
                    {value:6, name:'应急类'},
                    {value:5560, name:'事务类'}
                ]
            }
        ]
    };
    chart5.setOption(option);

    //图6 案件受理部门占比
    var chart6=echarts.init(document.getElementById('chart6'));
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
            x : document.getElementById('chart6').offsetWidth / 2,
            y : 45,
            itemGap:12,
            data:['社区处置占71%','联动部门处置占29%']
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
                        value:71,
                        name:'社区处置占71%'
                    },
                    {
                        value:29,
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
                        value:29,
                        name:'联动部门处置占29%'
                    },
                    {
                        value:71,
                        name:'invisible',
                        itemStyle : placeHolderStyle
                    }
                ]
            }
        ]
    };
    chart6.setOption(option);

    //图7 （1） 网格微信上报情况
    var chart7=echarts.init(document.getElementById('chart7'));
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
                data : ['南明区',
                    '花溪区',
                    '观山湖区',
                    '云岩区',
                    '白云区',
                    '乌当区',
                    '经开区',
                    '修文县',
                    '息烽县',
                    '清镇市',
                    '开阳县'
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
                        label:{
                            show:true,
                            position: "top",
                            formatter: '{c}'
                        }
                    }
                },
                name:'投诉总数',
                type:'bar',
                data:[3998,
                    3997,
                    3020,
                    2813,
                    2387,
                    1917,
                    1125,
                    510,
                    214,
                    150,
                    0
                ],
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
                data:[391,
                    880,
                    245,
                    1079,
                    425,
                    103,
                    131,
                    3,
                    126,
                    60,
                    0
                ]
            }
        ]
    };
    chart7.setOption(option);

    //图7 （2）  微信上报案件占比
    var chart72=echarts.init(document.getElementById('chart72'));
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

                type:'treemap',
                data:[
                    {
                        name: '南明区20%',
                        value: 3998
                    },
                    {
                        name: '花溪区20%',
                        value: 3997
                    },
                    {
                        name: '观山湖区15%',
                        value: 3020
                    },
                    {
                        name: '云岩区14%',
                        value: 2813
                    },
                    {
                        name: '白云区12%',
                        value: 2387
                    },
                    {
                        name: '乌当区10%',
                        value: 1917
                    },
                    {
                        name: '经开区6%',
                        value: 1125
                    },
                    {
                        name: '修文县3%',
                        value: 510
                    },
                    {
                        name: '息烽市1%',
                        value: 214
                    },
                    {
                        name: '',
                        value: 150
                    },
                    {
                        name: '',
                        value: 0
                    }
                ]
            }
        ]
    };
    chart72.setOption(option);

    //图8 对比云岩区南明区（微信上报数）
    var chart8=echarts.init(document.getElementById('chart8'));
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
                //saveAsImage : {show: true}
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
                            formatter: '{a}:{c}'
                        },
                        areaStyle: {type: 'default'}
                    }
                },
                data:[2813, 1085, 1079]
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
                data:[3998, 395, 391]
            }
        ]
    };
    chart8.setOption(option);

    //图9 微信上报案件情况  1100 换一种表达
    var chart9=echarts.init(document.getElementById('chart9'));
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
                type : 'category',
                axisLabel:{
                    interval:0,  //类目全显
                    rotate:30
                },
                data : [
                    '延中社区',
                    '金狮社区',
                    '头桥社区',
                    '栖霞社区',
                    '普陀社区',
                    '市西社区',
                    '威清社区',
                    '宅吉社区',
                    '中天社区',
                    '中华社区',
                    '三桥社区',
                    '贵乌社区',
                    '东山社区',
                    '中东社区',
                    '省府社区',
                    '黔灵镇',
                    '北京路社区',
                    '金龙社区',
                    '蔡关社区',
                    '金鸭社区',
                    '中环社区',
                    '金关社区',
                    '普天社区',
                    '黔东社区',
                    '荷塘社区',
                    '圣泉社区',
                    '金惠社区',
                    '水东社区'
                ]
            }
        ],
        yAxis : [
            {
                type : 'value',

            }
        ],
        series : [
            {
                name:'投诉总数',
                type:'bar',
                barWidth : 12,
                itemStyle : {
                    normal: {
                        label : {
                            show: true,
                            position: 'top',
                            textStyle:{
                                fontSize:10,
                            }
                        }
                    }
                },
                data:[887,
                    231,
                    190,
                    113,
                    174,
                    161,
                    116,
                    464,
                    60,
                    45,
                    58,
                    73,
                    18,
                    14,
                    48,
                    32,
                    25,
                    4,
                    58,
                    4,
                    2,
                    29,
                    5,
                    1,
                    1,
                    0,
                    0,
                    0
                ]
            },
            {
                name:'受理数',
                type:'bar',
                stack: '总量',
                barWidth : 12,
                itemStyle : {
                    normal: {
                        label : {
                            show: true,
                            position: 'top',
                            textStyle:{
                                fontSize:10,
                            }
                        }
                    }
                },
                data:[228,
                    153,
                    114,
                    107,
                    103,
                    73,
                    73,
                    54,
                    50,
                    25,
                    24,
                    21,
                    17,
                    10,
                    8,
                    8,
                    8,
                    3,
                    3,
                    2,
                    1,
                    0,
                    0,
                    0,
                    0,
                    0,
                    0,
                    0
                ]
            }
        ]
    };
    chart9.setOption(option);

    //图10 案件受理诉求类别分布情况
    var chart10=echarts.init(document.getElementById('chart10'));
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
            y:'bottom',
            padding: [
                100,  // 上
                10, // 右
                140,  // 下
                10, // 左
            ],
            data : ['市容环境','街面秩序','施工管理','社会噪音','突发事件','宣传广告']
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
                    {value:34, name:'市容环境'},
                    {value:28, name:'街面秩序'},
                    {value:23, name:'施工管理'},
                    {value:7, name:'社会噪音'},
                    {value:4, name:'突发事件'},
                    {value:1, name:'宣传广告'}
                ]
            }
        ]
    };
    chart10.setOption(option);

    //图11-16为六大类

    //图17 违章建筑分布地图
    //初始化地图对象，加载地图
    var point_x=106.732165;
    var point_y=26.615634;
    var map = new AMap.Map("chart17", {
        resizeEnable: true,
        center: [point_x, point_y],//地图中心点
        zoom: 13 //地图显示的缩放级别
    });
    //alert(Math.random()/50.0);
    var lnglats = [
        [106.729867,26.593395],
        [106.724103,26.59696],
        [106.717914,26.603525],
        [106.710649,26.593644],
        [106.707404,26.616381],
        [106.717914,26.603525],
        [106.676308,26.589146],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.71812,26.592661],
        [106.732076,26.594408],
        [106.672178,26.580197],
        [106.725416,26.615141],
        [106.679351,26.584122],
        [106.679843,26.588081],
        [106.724721,26.597187],
        [106.738233,26.5854],
        [106.738385,26.624744],
        [116.318451,39.735048],
        [106.725362,26.588687],
        [106.675495,26.588472],
        [106.675495,26.588472],
        [106.667524,26.598963],
        [106.730023,26.619127],
        [106.706925,26.625779],
        [106.717914,26.603525],
        [106.67325,26.585008],
        [106.721805,26.606948],
        [106.721805,26.606948],
        [106.717914,26.603525],
        [106.727343,26.614803],
        [106.720293,26.608599],
        [106.720375,26.597163],
        [106.726129,26.612541],
        [106.676308,26.589146],
        [106.71685,26.617138],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.738233,26.5854],
        [106.721203,26.604328],
        [106.731427,26.61262],
        [106.700343,26.606994],
        [106.708002,26.601363],
        [106.700401,26.618703],
        [106.717914,26.603525],
        [106.717495,26.620698],
        [106.675495,26.588472],
        [106.675495,26.588472],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.71685,26.617138],
        [106.738385,26.624744],
        [106.72644,26.614897],
        [106.675495,26.588472],
        [106.675495,26.588472],
        [106.731763,26.612061],
        [106.675495,26.588472],
        [106.717914,26.603525],
        [106.72997,26.592082],
        [106.738233,26.5854],
        [106.727885,26.616546],
        [106.722265,26.60984],
        [106.717914,26.603525],
        [106.675697,26.590015],
        [106.743191,26.589723],
        [106.675495,26.588472],
        [106.675495,26.588472],
        [106.675495,26.588472],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.675495,26.588472],
        [106.743191,26.589723],
        [106.717914,26.603525],
        [106.687372,26.590044],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.722515,26.595369],
        [106.730796,26.608678],
        [106.700343,26.606994],
        [106.729151,26.623829],
        [106.717914,26.603525],
        [106.671451,26.599503],
        [106.726886,26.593301],
        [106.733108,26.599933],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.722265,26.60984],
        [106.725416,26.615141],
        [106.717914,26.603525],
        [106.679351,26.584122],
        [106.729726,26.607141],
        [106.661272,26.58449],
        [106.729151,26.623829],
        [106.709909,26.601614],
        [106.717914,26.603525],
        [106.722265,26.60984],
        [106.722265,26.60984],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.696246,26.577438],
        [106.661272,26.58449],
        [106.666857,26.587815],
        [106.700343,26.606994],
        [106.738213,26.614825],
        [106.717914,26.603525],
        [106.738233,26.5854],
        [106.738233,26.5854],
        [106.708904,26.603799],
        [106.673955,26.587734],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.726129,26.612541],
        [106.708761,26.584356],
        [106.689384,26.593704],
        [106.728227,26.594374],
        [106.708761,26.584356],
        [106.738233,26.5854],
        [106.717914,26.603525],
        [106.735655,26.620087],
        [106.717914,26.603525],
        [106.726129,26.612541],
        [106.710688,26.62133],
        [106.729053,26.608584],
        [106.714695,26.594138],
        [106.729053,26.608584],
        [106.661272,26.58449],
        [106.661272,26.58449],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.678335,26.588322],
        [106.679554,26.587819],
        [106.717914,26.603525],
        [106.661272,26.58449],
        [106.72075,26.607475],
        [106.717914,26.603525],
        [106.738385,26.624744],
        [106.666645,26.602639],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.72119,26.617837],
        [106.738233,26.5854],
        [106.705649,26.59407],
        [106.718326,26.598706],
        [106.708761,26.584356],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.722965,26.587184],
        [106.708761,26.584356],
        [106.707611,26.60041],
        [106.721805,26.606948],
        [106.724721,26.597187],
        [106.717914,26.603525],
        [106.72122,26.584833],
        [106.708761,26.584356],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.675495,26.588472],
        [106.699903,26.582615],
        [106.724635,26.601334],
        [106.750507,26.586406],
        [106.717914,26.603525],
        [106.699903,26.582615],
        [106.696017,26.58935],
        [106.743191,26.589723],
        [106.722265,26.60984],
        [106.661272,26.58449],
        [106.699903,26.582615],
        [106.717914,26.603525],
        [106.743191,26.589723],
        [106.717914,26.603525],
        [106.717914,26.603525],
        [106.661636,26.578637]

    ];
    //添加点标记，并使用自己的icon
    //map.clearMap();  // 清除地图覆盖物
    var marker;
    //var infoWindow = new AMap.InfoWindow({offset: new AMap.Pixel(0, -30)});
    for(var i=0;i<= lnglats.length-1;i++){
        marker= new AMap.Marker({
            map: map,
            position:  lnglats[i],
            icon: new AMap.Icon({
                size: new AMap.Size(16, 16),  //图标大小
                image: "/Public/Home/images/icon/home16.png",
                imageOffset: new AMap.Pixel(0, 0)
            })
        });
    }
    //图18 云岩区社区指标对比
    var chart18=echarts.init(document.getElementById('chart18'));
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
                inverse:'true',
                splitLine: {show: false},
                data : [
                    '金狮社区',
                    '栖霞社区',
                    '金关社区',
                    '延中社区',
                    '市西社区',
                    '头桥社区',
                    '中环社区',
                    '贵乌社区',
                    '普陀社区',
                    '威清社区',
                    '金龙社区',
                    '水东社区',
                    '黔灵镇',
                    '省府社区',
                    '黔东社区',
                    '宅吉社区',
                    '荷塘社区',
                    '中天社区',
                    '圣泉社区',
                    '北京社区',
                    '中华社区',
                    '中东社区',
                    '三桥社区',
                    '东山社区',
                    '普天社区',
                    '蔡关社区',
                    '金惠社区',
                    '金鸭社区'
                ]
            }
        ],
        series : [
            {
                name:'结案率',
                type:'bar',
                stack: '总量',
                itemStyle: dataStyle,
                data:[99.49,
                    100.00,
                    100.00,
                    99.67,
                    100.00,
                    100.00,
                    100.00,
                    100.00,
                    98.48,
                    100.00,
                    98.32,
                    90.10,
                    92.88,
                    98.04,
                    100.00,
                    91.26,
                    100.00,
                    98.78,
                    100.00,
                    97.69,
                    100.00,
                    95.35,
                    97.35,
                    95.51,
                    98.33,
                    94.52,
                    76.92,
                    50.00
                ]
            },
            {
                name:'按期结案率',
                type:'bar',
                stack: '总量',
                itemStyle: dataStyle,
                data:[
                    97.95,
                    95.36,
                    95.00,
                    91.45,
                    95.04,
                    90.19,
                    90.91,
                    86.55,
                    83.25,
                    81.13,
                    87.39,
                    90.10,
                    82.68,
                    82.35,
                    75.86,
                    77.67,
                    78.26,
                    74.39,
                    68.00,
                    70.00,
                    58.80,
                    65.12,
                    59.29,
                    56.18,
                    45.00,
                    39.73,
                    61.54,
                    26.39
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
                data:[4.64,
                    2.65,
                    0.00,
                    4.29,
                    7.09,
                    5.14,
                    8.44,
                    8.19,
                    6.19,
                    4.40,
                    16.24,
                    9.89,
                    4.36,
                    12.00,
                    10.34,
                    6.38,
                    17.39,
                    12.35,
                    0.00,
                    8.66,
                    9.20,
                    10.98,
                    6.36,
                    9.41,
                    8.47,
                    7.25,
                    20.00,
                    11.11

                ]
            }
        ]
    };
    chart18.setOption(option);

    //图19 后三名社区分析
    var chart19=echarts.init(document.getElementById('chart19'));
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
                inverse:'true',
                splitLine: {show: false},
                data : [
                    '蔡关社区',
                    '金惠社区',
                    '金鸭社区'
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
                    94.52,
                    76.92,
                    50.00
                ]
            },
            {
                name:'按期结案率',
                type:'bar',
                stack: '总量',
                itemStyle: dataStyle,
                data:[
                    39.73,
                    61.54,
                    26.39
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
                    7.25,
                    20.00,
                    11.11
                ]
            }
        ]
    };
    chart19.setOption(option);

    //图20  云岩区联动单位指标对比
    var chart20=echarts.init(document.getElementById('chart20'));
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
                inverse:'true',
                splitLine: {show: false},
                data : [
                    '区计生和卫生局',
                    '区发改局',
                    '区民政局',
                    '区东线建设指挥部',
                    '区综合执法大队',
                    '区人力资源社会保障局',
                    '区房屋征收局',
                    '区市场监督管理局',
                    '京筑环卫公司',
                    '区住建局',
                    '区环境卫生管理站',
                    '区市政工程管理所',
                    '区商务局',
                    '区教育局',
                    '区生态文明局',
                    '区规划分局',
                    '区国土分局',
                    '区棚改办'
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
                    100.00,
                    100.00,
                    100.00,
                    100.00,
                    100.00,
                    100.00,
                    100.00,
                    100.00,
                    100.00,
                    100.00,
                    100.00,
                    98.31,
                    100.00,
                    98.39,
                    87.68,
                    71.43,
                    100.00,
                    33.33

                ]
            },
            {
                name:'按期结案率',
                type:'bar',
                stack: '总量',
                itemStyle: dataStyle,
                data:[
                    100.00,
                    100.00,
                    100.00,
                    100.00,
                    95.44,
                    100.00,
                    100.00,
                    100.00,
                    88.78,
                    91.53,
                    83.33,
                    83.05,
                    100.00,
                    79.03,
                    66.31,
                    71.43,
                    0.00,
                    33.33
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
                    0.00,
                    0.00,
                    1.88,
                    10.00,
                    14.29,
                    16.67,
                    5.61,
                    8.47,
                    0.00,
                    6.90,
                    0.00,
                    14.75,
                    6.47,
                    0.00,
                    0.00,
                    0.00
                ]
            }
        ]
    };
    chart20.setOption(option);

    //图21 后三名联动单位分析
    var chart21=echarts.init(document.getElementById('chart21'));
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
                inverse:'true',
                splitLine: {show: false},
                data : [
                    '区规划分局',
                    '区国土分局',
                    '区棚改办'

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
                    71.43,
                    100.00,
                    33.33
                ]
            },
            {
                name:'按期结案率',
                type:'bar',
                stack: '总量',
                itemStyle: dataStyle,
                data:[
                    71.43,
                    0.00,
                    33.33
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
                    0.00
                ]
            }
        ]
    };
    chart21.setOption(option);

    //图22 全市区指标对比
    var chart22=echarts.init(document.getElementById('chart22'));
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
                inverse:'true',
                splitLine: {show: false},
                data : [
                    '息烽县',
                    '高新区',
                    '云岩区',
                    '修文县',
                    '花溪区',
                    '南明区',
                    '开阳县',
                    '乌当区',
                    '观山湖区',
                    '白云区',
                    '清镇市',
                    '经开区'

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
                    99.33,
                    100.00,
                    97.24,
                    98.56,
                    97.54,
                    94.28,
                    97.62,
                    97.59,
                    94.28,
                    88.46,
                    96.73,
                    86.66

                ]
            },
            {
                name:'按期结案率',
                type:'bar',
                stack: '总量',
                itemStyle: dataStyle,
                data:[
                    99.33,
                    94.74,
                    80.52,
                    87.93,
                    83.89,
                    76.90,
                    83.33,
                    80.39,
                    78.88,
                    79.66,
                    70.09,
                    69.34

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
                    3.82,
                    10.53,
                    6.46,
                    12.24,
                    9.28,
                    7.44,
                    11.38,
                    10.85,
                    7.42,
                    5.31,
                    10.15,
                    8.38

                ]
            }
        ]
    };
    chart22.setOption(option);

    //图23 南明区、云岩区整体指标对比
    var chart23=echarts.init(document.getElementById('chart23'),'macarons');
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
                    { text: '受理数', max: 6600 },
                    { text: '结案率', max: 100 },
                    { text: '贡献度', max: 100 },
                    { text: '按期结案率', max: 90 },
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
                        value: [4961, 94.28, 23.94, 76.90, 7.44],
                        name: '南明区',
                        opacity: 0.9
                    },
                    {
                        value: [5589, 97.24, 27.82, 80.52, 6.46],
                        name: '云岩区',
                        label: {
                            normal: {
                                show: true,
                                textStyle: {
                                    color:'#000',
                                    position:'right',
                                    fontSize:12
                                },
                                formatter:function(params) {
                                    return params.value;
                                }
                            }
                        },
//                        areaStyle: {
//                            normal: {
//                                label: {
//                                    normal: {
//                                        show: true,
//                                        formatter:function(params) {
//                                            return params.value;
//                                        }
//                                    }
//                                },
//                                opacity: 0.9,
//                                color: new echarts.graphic.RadialGradient(0.5, 0.5, 1, [
//                                    {
//                                        color: '#B8D3E4',
//                                        offset: 0
//                                    },
//                                    {
//                                        color: '#72ACD1',
//                                        offset: 1
//                                    }
//                                ])
//                            }
//                        }
                    }
                ]
            }
        ]
    }
    chart23.setOption(option);


</script>
<!--引入2.0-->
 <script type="text/javascript">

    //新增
    //图24 关键字云图
    //关键字云图
    var so = new SWFObject("/Public/Home/data/ctagcloud.swf", "tagcloud", "360", "420", "7", "#ffffff");
    so.addParam("wmode", "transparent");
    so.addVariable("tcolor", "0x333333");
    so.addVariable("tcolor2", "0x009900");
    so.addVariable("mode", "tags");
    so.addVariable("distr", "true");
    so.addVariable("tspeed", "100");
    so.addVariable("tagcloud", "<tags><a href='/Home/Index/tagcloud/tag/安全隐患' data-toggle='modal' data-target='#myModal' class='tag-link-66' title='2 topics' rel='tag' style='font-size: 20pt;' color='0xff0099'>安全隐患</a><a href='/Home/Index/tagcloud/tag/违章建筑' class='tag-link-39' title='1 topics' rel='tag' style='font-size: 19pt;'>违章建筑</a> <a href='/Home/Index/tagcloud/tag/噪音扰民' class='tag-link-54' title='2 topics' rel='tag' style='font-color:red;font-size: 18pt;'>噪音扰民</a> <a href='/Home/Index/tagcloud/tag/占道经营' class='tag-link-42' title='1 topics' rel='tag' style='font-size: 17pt;'>占道经营</a> <a href='/Home/Index/tagcloud/tag/道路破损' class='tag-link-25' title='1 topics' rel='tag' style='font-size: 16pt;'>道路破损</a> <a href='/Home/Index/tagcloud/tag/油烟污染' class='tag-link-27' title='1 topics' rel='tag' style='font-size: 15pt;'>油烟污染</a> <a href='/Home/Index/tagcloud/tag/下水道堵塞' class='tag-link-29' title='1 topics' rel='tag' style='font-size: 14pt;'>下水道堵塞</a> <a href='/Home/Index/tagcloud/tag/污水横流' class='tag-link-43' title='1 topics' rel='tag' style='font-size: 13.5pt;' hicolor='red'>污水横流</a> <a href='/Home/Index/tagcloud/tag/施工扰民' class='tag-link-24' title='1 topics' rel='tag' style='font-size: 13pt;'>施工扰民</a> <a href='/Home/Index/tagcloud/tag/夜市摊点' class='tag-link-48' title='2 topics' rel='tag' style='font-size: 12.5pt;'>夜市摊点</a> <a href='/Home/Index/tagcloud/tag/机动车违停' class='tag-link-26' title='2 topics' rel='tag' style='font-size: 12pt;'>机动车违停</a> <a href='/Home/Index/tagcloud/tag/化粪池堵塞' class='tag-link-37' title='3 topics' rel='tag' style='font-size: 11.1111pt;'>化粪池堵塞</a> <a href='/Home/Index/tagcloud/tag/高音喇叭' class='tag-link-18' title='1 topics' rel='tag' style='font-size: 11pt;'>高音喇叭</a> <a href='/Home/Index/tagcloud/tag/粪水横流' class='tag-link-28' title='1 topics' rel='tag' style='font-size: 10.5pt;'>粪水横流</a> <a href='/Home/Index/tagcloud/tag/施工放炮' class='tag-link-32' title='1 topics' rel='tag' style='font-size: 10pt;'>施工放炮</a> <a href='/Home/Index/tagcloud/tag/没有路灯' class='tag-link-56' title='2 topics' rel='tag' style='font-size: 9.55556pt;'>没有路灯</a> <a href='/Home/Index/tagcloud/tag/交通堵塞' class='tag-link-57' title='2 topics' rel='tag' style='font-size: 9.5px;'>交通堵塞</a> <a href='/Home/Index/tagcloud/tag/井盖翘起' class='tag-link-8' title='1 topics' rel='tag' style='font-size: 9.5pt;'>井盖翘起</a> <a href='/Home/Index/tagcloud/tag/垃圾堆放' class='tag-link-61' title='2 topics' rel='tag' style='font-size: 9pt;'>垃圾堆放</a> <a href='/Home/Index/tagcloud/tag/乞丐行乞' class='tag-link-64' title='2 topics' rel='tag' style='font-size: 8.5pt;'>乞丐行乞</a> <a href='/Home/Index/tagcloud/tag/外墙漏水' class='tag-link-34' title='2 topics' rel='tag' style='font-size: 8pt;'>外墙漏水</a> <a href='/Home/Index/tagcloud/tag/片区停电' class='tag-link-50' title='2 topics' rel='tag' style='font-size: 8pt;'>片区停电</a> <a href='/Home/Index/tagcloud/tag/摩托车乱停放' class='tag-link-62' title='2 topics' rel='tag' style='font-size: 8pt;'>摩托车乱停放</a> <a href='/Home/Index/tagcloud/tag/酒吧噪音' class='tag-link-45' title='1 topics' rel='tag' style='font-size: 8pt;'>酒吧噪音</a> <a href='/Home/Index/tagcloud/tag/僵尸车' class='tag-link-38' title='1 topics' rel='tag' style='font-size: 8pt;'>僵尸车</a> <a href='/Home/Index/tagcloud/tag/棚户改造' class='tag-link-36' title='1 topics' rel='tag' style='font-size: 8pt;'>棚户改造</a> <a href='/Home/Index/tagcloud/tag/申请廉租房' class='tag-link-40' title='3 topics' rel='tag' style='font-size: 8pt;'>申请廉租房</a> </tags>");
    so.write("chart24");

    //图25 热点问题环比分析
    var chart25=echarts.init(document.getElementById('chart25'),'infographic');
    option = {
        title : {
            text: '热点问题环比分析',
            x:'center'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['八月','九月']
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
                    {text : '违章建筑', max  : 1000},
                    {text : '暴露垃圾', max  : 1000},
                    {text : '油烟污染', max  : 1000},
                    {text : '施工扰民', max  : 1100},
                    {text : '商业噪音', max  : 1000}
                ],
                radius : 130
            }
        ],
        series : [
            {
                type: 'radar',
                data : [
                    {
                        value : [171, 820, 239, 1052, 222],
                        name : '八月'
                    },
                    {
                        value : [279, 788, 184, 706, 208],
                        name : '九月',
                        itemStyle: {
                            normal: {
                                label:{
                                    show:true,
                                    formatter: ' {c}',
                                    textStyle:{
                                        color:'rgba(0,0,0,1)',
                                    }
                                },
//                                areaStyle: {
//                                    type: 'default'
//                                }
                            }
                        },
                    }
                ]
            }
        ]
    };
    chart25.setOption(option);

    //图26 违章建筑数量占比 283/20525
    var chart26=echarts.init(document.getElementById('chart26'));
    option = {
        title:{
            text:'违章建筑数量占比',
            x:'center'

        },
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
                type:'gauge',
                detail : {formatter:'{value}%'},
                data:[{value: 4.6, name: '违章建筑数量占比'}]
            }
        ]
    };
    chart26.setOption(option, true);

     //图27 八大类热点问题占比
    var chart27=echarts.init(document.getElementById('chart27'),'macarons');
    option = {
        title : {
            text: '九大类热点问题分布',
            x:'center'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['热点问题']
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
        polar : [
            {
                color:'#000',
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
                    {text : '违章建筑', max  : 1000},//285
                    {text : '暴露垃圾', max  : 1000},//801
                    {text : '油烟污染', max  : 1000},//184
                    {text : '无照游商', max  : 1000},//850
                    {text : '宣传广告', max  : 1000},//574
                    {text : '施工扰民', max  : 1000},//706
                    {text : '下水道堵塞', max  : 900},//129
                    {text : '商业噪音', max  : 900},//839
                    {text : '大气污染', max  : 1000},//839

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
                            //color:'#000',
                            type: 'default'
                        }
                    }
                },
                data : [
                    {
                        value : [279,
                            788,
                            184,
                            845,
                            568,
                            706,
                            129,
                            208,
                            96
                        ],
                        name : '九月',
                        itemStyle: {
                            normal: {
                                label:{
                                    show:true,
                                    formatter: ' {c}',
                                    textStyle:{
                                        color:'rgba(0,0,0,1)',
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
    chart27.setOption(option);

     //图28 本年结案比较
     var chart28=echarts.init(document.getElementById('chart28'));
    option = {
        title : {
            text: '本年度结案比较',
            x:'center'
        },
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['结案率','按期结案率']
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
                name:'结案率',
                itemStyle : { normal: {label : {show: true, position: 'top'}}},
                type:'bar',
                data:[96.40,
                    97.14,
                    95.48,
                    93.54,
                    94.69,
                    95.34,
                    98.24,
                    97.07,
                    97.24
                ]
            },
            {
                name:'按期结案率',
                itemStyle : { normal: {label : {show: true, position: 'top'}}},
                type:'bar',
                data:[88.31,
                    90.90,
                    87.20,
                    84.82,
                    77.11,
                    70.95,
                    75.84,
                    74.57,
                    80.52,
                ]
            }
        ]
    };
    chart28.setOption(option);

     //图29 桑基图
    //九 各社区 微信上报案件情况（结案数未知）
    var chart29=echarts.init(document.getElementById('chart29'));
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
                inverse:'true',
                axisTick : {show: false},
                data : [
                    '延中社区',
                    '金狮社区',
                    '头桥社区',
                    '栖霞社区',
                    '普陀社区',
                    '市西社区',
                    '威清社区',
                    '宅吉社区',
                    '中天社区',
                    '中华社区',
                    '三桥社区',
                    '贵乌社区',
                    '东山社区',
                    '中东社区',
                    '省府社区',
                    '黔灵镇',
                    '北京路社区',
                    '金龙社区',
                    '蔡关社区',
                    '金鸭社区',
                    '中环社区',
                    '金关社区',
                    '普天社区',
                    '黔东社区',
                    '荷塘社区',
                    '圣泉社区',
                    '金惠社区',
                    '水东社区'
                ]
            }
        ],
        series : [
            {
                name:'投诉总数',
                type:'bar',
                barWidth : 12,
                itemStyle : { normal: {label : {show: true, position: 'right'}}},
                data:[887,
                    231,
                    190,
                    113,
                    174,
                    161,
                    116,
                    464,
                    60,
                    45,
                    58,
                    73,
                    18,
                    14,
                    48,
                    32,
                    25,
                    4,
                    58,
                    4,
                    2,
                    29,
                    5,
                    1,
                    1,
                    0,
                    0,
                    0
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
                data:[228,
                    153,
                    114,
                    107,
                    103,
                    73,
                    73,
                    54,
                    50,
                    25,
                    24,
                    21,
                    17,
                    10,
                    8,
                    8,
                    8,
                    3,
                    3,
                    2,
                    1,
                    0,
                    0,
                    0,
                    0,
                    0,
                    0,
                    0

                ]
            }
        ]
    };
    chart29.setOption(option);
 </script>
</html>