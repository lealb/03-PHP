<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>贵州省公安厅POC</title>
    <link type="text/css" rel="stylesheet" href="/Public/Home/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/Home/css/jquery.gridster.min.css"/>
    <script type="text/javascript" src="/Public/Home/js/echarts/echarts.js"></script>
    <!-引入theme-->
    <script type="text/javascript" src="/Public/Home/js/theme/dark.js"></script>
    <script type="text/javascript" src="/Public/Home/js/map/guizhou.js"></script>
    <script type="text/javascript" src="/Public/Home/js/common/jquery-1.12.2.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/gridster/jquery.gridster.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/common/require.min.js"></script>

</head>
<style>
    .small img{
        height:83px;
        width:97px;
    }
    li {
        background-color: white;
        width: 150px;
        height: 300px;
        border: solid 2px black;
    }
</style>
<body  background="/Public/Home/images/star.jpg">
<!--定义页面图表容器-->
<!-- 必须制定容器的大小（height、width） -->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="gridster">
            <div class="col-md-12">
                <p class="lead text-info text-center" style="font-family: '黑体' ! important;">
                    贵州省公安厅POC模型v1.0
                </p>
            </div>
            <ul>
                <!--
                data-row:数据行，元素所存在的行数。
                data-col:数据列，元素所存在的列数。
                data-sizex:元素块的宽（以个为单位，每个元素块的宽度为widget_base_dimensions所设定的值）
                data-sizey:元素块的高（以个为单位，每个元素块的高度为widget_base_dimensions所设定的值）
                -->
                <li data-row="1" data-col="1" data-sizex="2" data-sizey="2">
                    <div id="pie" style="width: 284px;height: 284px"></div>
                </li>
                <li data-row="1" data-col="2" data-sizex="4" data-sizey="4">
                    <div id="map" style="width: 564px; height: 564px"></div>
                </li>
                <li data-row="1" data-col="3" data-sizex="2" data-sizey="2">
                    <div id="radar" style="width: 284px;height: 284px"></div>
                </li>
                <!-漏斗图-->
                <li data-row="3" data-col="1" data-sizex="2" data-sizey="2">
                    <div id="funnel" style="width: 284px;height: 284px"></div>
                </li>
                <li data-row="2" data-col="2" data-sizex="2" data-sizey="2">
                    <div id="gauge" style="width: 284px;height: 284px"></div>
                </li>
                <li data-row="4" data-col="2" data-sizex="4" data-sizey="2">
                    <div id="bar" style="width: 564px;height: 284px"></div>
                </li>
                <li data-row="3" data-col="2" data-sizex="4" data-sizey="2">
                    <div id="treemap" style="width: 564px;height: 284px"></div>
                </li>
            </ul>
        </div>
    </div>
</div>

</body>
<script type="text/javascript">

    //控制拖拽
    $(".gridster ul").gridster(
        {
            widget_margins: [0, 0],
            widget_base_dimensions: [140, 140]
        });

    //饼形图
    var pie=echarts.init(document.getElementById('pie'),'dark');
    option = {
        title : {
            text: '案件类型',
            subtext: '纯属虚构',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['杀人','抢劫','强奸','放火','投毒']
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
                name:'案件类型',
                type:'pie',
                radius : '55%',
                center: ['50%', '60%'],
                data:[
                    {value:335, name:'杀人'},
                    {value:310, name:'抢劫'},
                    {value:234, name:'强奸'},
                    {value:135, name:'放火'},
                    {value:1548, name:'投毒'}
                ]
            }
        ]
    };
    if (option && typeof option === "object") {
        pie.setOption(option, true);
    }

    //案件发生地图 静态数据
    var map = echarts.init(document.getElementById('map'),'dark');
    option={
        title : {
            text: '贵州省2016案件发生频率级别',
            subtext: '纯属虚构',
            left: 'center'
        },
        tooltip : {
            trigger: 'item'
        },
        legend: {
            orient: 'vertical',
            left: 'left',
            data:['一级','二级','三级']
        },
        //虚拟标注级别
        visualMap: {
            min: 0,
            max: 2500,
            left: 'left',
            top: 'bottom',
            text:['高','低'],           // 文本，默认为数值文本
            calculable : true
        },
        toolbox: {
            show: true,
            orient : 'vertical',
            left: 'right',
            top: 'center',
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        series : [
            {
                name: '一级',
                type: 'map',
                mapType: '贵州',
                roam: false,
                label: {
                    normal: {
                        show: true
                    },
                    emphasis: {
                        show: true
                    }
                },
                data:[
                    {name: '贵阳市',value: Math.round(Math.random()*1000)},
                    {name: '遵义市',value: Math.round(Math.random()*1000)},
                    {name: '六盘水市',value: Math.round(Math.random()*1000)},
                    {name: '铜仁市',value: Math.round(Math.random()*1000)},
                    {name: '黔西南布依族苗族自治州',value: Math.round(Math.random()*1000)},
                    {name: '黔南布依族苗族自治州',value: Math.round(Math.random()*1000)},
                    {name: '黔东南布依族苗族自治州',value: Math.round(Math.random()*1000)},
                    {name: '毕节市',value: Math.round(Math.random()*1000)},
                    {name: '安顺市',value: Math.round(Math.random()*1000)}
                ]
            },
            {
                name: '二级',
                type: 'map',
                mapType: '贵州',
                label: {
                    normal: {
                        show: true
                    },
                    emphasis: {
                        show: true
                    }
                },
                data:[
                    {name: '贵阳市',value: Math.round(Math.random()*1000)},
                    {name: '遵义市',value: Math.round(Math.random()*1000)},
                    {name: '六盘水市',value: Math.round(Math.random()*1000)},
                    {name: '铜仁市',value: Math.round(Math.random()*1000)},
                    {name: '黔西南布依族苗族自治州',value: Math.round(Math.random()*1000)},
                    {name: '黔南布依族苗族自治州',value: Math.round(Math.random()*1000)},
                    {name: '黔东南布依族苗族自治州',value: Math.round(Math.random()*1000)},
                    {name: '毕节市',value: Math.round(Math.random()*1000)}
                ]
            },
            {
                name: '三级',
                type: 'map',
                mapType: '贵州',
                label: {
                    normal: {
                        show: true
                    },
                    emphasis: {
                        show: true
                    }
                },
                data:[
                    {name: '贵阳市',value: Math.round(Math.random()*1000)},
                    {name: '遵义市',value: Math.round(Math.random()*1000)},
                    {name: '六盘水市',value: Math.round(Math.random()*1000)},
                    {name: '铜仁市',value: Math.round(Math.random()*1000)},
                    {name: '黔西南布依族苗族自治州',value: Math.round(Math.random()*1000)},
                    {name: '黔南布依族苗族自治州',value: Math.round(Math.random()*1000)},
                    {name: '黔东南苗族侗族自治州',value: Math.round(Math.random()*1000)}
                ]
            }
        ]
    };
    if(option && typeof option==="object"){
        map.setOption(option,true);
    }

    //雷达图
    var radar=echarts.init(document.getElementById('radar'),'dark');
    option = {
        title : {
            text: '预算 vs 开销',
            subtext: '纯属虚构'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            orient : 'vertical',
            x : 'right',
            y : 'bottom',
            data:['预算分配（Allocated Budget）','实际开销（Actual Spending）']
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
                    { text: '销售（sales）', max: 6000},
                    { text: '管理（Administration）', max: 16000},
                    { text: '信息技术（Information Techology）', max: 30000},
                    { text: '客服（Customer Support）', max: 38000},
                    { text: '研发（Development）', max: 52000},
                    { text: '市场（Marketing）', max: 25000}
                ]
            }
        ],
        calculable : true,
        series : [
            {
                name: '预算 vs 开销（Budget vs spending）',
                type: 'radar',
                data : [
                    {
                        value : [4300, 10000, 28000, 35000, 50000, 19000],
                        name : '预算分配（Allocated Budget）'
                    },
                    {
                        value : [5000, 14000, 28000, 31000, 42000, 21000],
                        name : '实际开销（Actual Spending）'
                    }
                ]
            }
        ]
    };
    if(option && typeof option==="object"){
        radar.setOption(option,true);
    }

    //仪表盘
    var gauge=echarts.init(document.getElementById('gauge'),'dark');
    option = {
        title : {
            text: '年度案件破获率',
            subtext: '纯属虚构',
            x:'left'
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
                data:[{value: 50, name: '破获率'}]
            }
        ]
    };
    option.series[0].data[0].value = (Math.random()*100).toFixed(2) - 0;
    if(option && typeof option==="object"){
        gauge.setOption(option,true);
    }

    //漏斗图
    var funnel=echarts.init(document.getElementById('funnel'),'dark');
    option = {
        title : {
            text: '漏斗图',
            x:'center',
            subtext: '纯属虚构'
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
            data : ['展现','点击','访问','咨询','订单']
        },
        calculable : true,
        series : [
            {
                name:'漏斗图',
                type:'funnel',
                width: '40%',
                data:[
                    {value:60, name:'访问'},
                    {value:40, name:'咨询'},
                    {value:20, name:'订单'},
                    {value:80, name:'点击'},
                    {value:100, name:'展现'}
                ]
            }
//            {
//                name:'金字塔',
//                type:'funnel',
//                x : '50%',
//                sort : 'ascending',
//                itemStyle: {
//                    normal: {
//                        // color: 各异,
//                        label: {
//                            position: 'left'
//                        }
//                    }
//                },
//                data:[
//                    {value:60, name:'访问'},
//                    {value:40, name:'咨询'},
//                    {value:20, name:'订单'},
//                    {value:80, name:'点击'},
//                    {value:100, name:'展现'}
//                ]
//            }
        ]
    };
    if(option && typeof option==="object"){
        funnel.setOption(option,true);
    }

    //柱状图 描述
    var bar= echarts.init(document.getElementById('bar'),'dark');
    option = {
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
    if (option && typeof option === "object") {
            bar.setOption(option, true);
        }

    //树状图 treemap
    var treemap=echarts.init(document.getElementById('treemap'),'dark');
    option = {
        title : {
            text: '手机占有率',
            subtext: '数据下钻例子，虚构数据'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{b}: {c}"
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
        calculable : false,
        series : [
            {
                name:'手机占有率',
                type:'treemap',
                itemStyle: {
                    normal: {
                        label: {
                            show: true,
                            formatter: "{b}"
                        },
                        borderWidth: 1,
                        borderColor: '#ccc'
                    },
                    emphasis: {
                        label: {
                            show: true
                        },
                        color: '#cc99cc',
                        borderWidth: 3,
                        borderColor: '#996699'
                    }
                },
                data:[
                    {
                        name: '三星',
                        itemStyle: {
                            normal: {
                                color: '#99cccc',
                            }
                        },
                        value: 6,
                        children: [
                            {
                                name: 'Galaxy S4',
                                value: 2
                            },
                            {
                                name: 'Galaxy S5',
                                value: 3
                            },
                            {
                                name: 'Galaxy S6',
                                value: 3
                            },
                            {
                                name: 'Galaxy Tab',
                                value: 1
                            }
                        ]
                    },
                    {
                        name: '小米',
                        itemStyle: {
                            normal: {
                                color: '#99ccff',
                            }
                        },
                        value: 4,
                        children: [
                            {
                                name: '小米3',
                                value: 6
                            },
                            {
                                name: '小米4',
                                value: 6
                            },
                            {
                                name: '红米',
                                value: 4
                            }
                        ]
                    },
                    {
                        name: '苹果',
                        itemStyle: {
                            normal: {
                                color: '#9999cc',
                            }
                        },
                        value: 4,
                        children: [
                            {
                                name: 'iPhone 5s',
                                value: 6
                            },
                            {
                                name: 'iPhone 6',
                                value: 3
                            },
                            {
                                name: 'iPhone 6+',
                                value: 3
                            }
                        ]
                    },
                    {
                        name: '魅族',
                        itemStyle: {
                            normal: {
                                color: '#ccff99',
                            }
                        },
                        value: 1,
                        children: [
                            {
                                name: 'MX4',
                                itemStyle: {
                                    normal: {
                                        color: '#ccccff',
                                    }
                                },
                                value: 6
                            },
                            {
                                name: 'MX3',
                                itemStyle: {
                                    normal: {
                                        color: '#99ccff',
                                    }
                                },
                                value: 6
                            },
                            {
                                name: '魅蓝note',
                                itemStyle: {
                                    normal: {
                                        color: '#9999cc',
                                    }
                                },
                                value: 4
                            },
                            {
                                name: 'MX4 pro',
                                itemStyle: {
                                    normal: {
                                        color: '#99cccc',
                                    }
                                },
                                value: 3
                            }
                        ]
                    },
                    {
                        name: '华为',
                        itemStyle: {
                            normal: {
                                color: '#ccffcc',
                            }
                        },
                        value: 2
                    },
                    {
                        name: '联想',
                        itemStyle: {
                            normal: {
                                color: '#ccccff',
                            }
                        },
                        value: 2
                    },
                    {
                        name: '中兴',
                        itemStyle: {
                            normal: {
                                color: '#ffffcc',
                            }
                        },
                        value: 1,
                        children: [
                            {
                                name: 'V5',
                                value: 16
                            },
                            {
                                name: '努比亚',
                                value: 6
                            },
                            {
                                name: '功能机',
                                value: 4
                            },
                            {
                                name: '青漾',
                                value: 4
                            },
                            {
                                name: '星星',
                                value: 4
                            },
                            {
                                name: '儿童机',
                                value: 1
                            }
                        ]
                    }
                ]
            }
        ]
    };
    if (option && typeof option === "object") {
        treemap.setOption(option, true);
    }
</script>
</html>