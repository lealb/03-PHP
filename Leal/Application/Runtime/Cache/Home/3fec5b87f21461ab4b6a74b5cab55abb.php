<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>公安厅v2.0展示2</title>
</head>
<style type="text/css">

    *{
        margin: 0;
        padding: 0;
    }
    body{
        background-image: url("/Public/Home/images/police/bgv1.2_2.jpg");
        background-repeat: no-repeat;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        width: 1366px;
        height: 768px;
        position: relative;

    }
    #wheel{

        width: 465px;
        height: 465px;
        padding: 200px 200px 300px 450px;
        /*background-color: red;*/

    }
    #div{
        background-image: url("/Public/Home/images/police/bgv1.2_2.jpg");
    }
    path {
        fill-rule: evenodd;
        stroke: #336699;
        stroke-width: 2px;
    }

    .sun path {
        fill: #FF9933;
    }

    .planet path {
        fill: #FF9933;
    }

    .annulus path {
        fill: #FF9933;
    }

</style>
<body>
<script type="text/javascript" src="/Public/Home/js/echarts-2.2.7/build/dist/echarts-all.js"></script>
<script type="text/javascript" src="/Public/Home/js/common/d3.v3.min.js" charset="utf-8"></script>
<script type="text/javascript" src="/Public/Home/js/common/jquery-1.12.2.min.js" charset="utf-8"></script>>

<!--四个气泡图 有bug-->
<div id="mainBubble" style="padding: 0"></div>

<div id="wheel" ></div>

<div id="chart" style="width: 675px;height: 325px"></div>

<!--车轮图-->
<script>
    //margin
    var width = 465,
            height = 465,
            radius = 25,
            x = Math.sin(2 * Math.PI / 3),
            y = Math.cos(2 * Math.PI / 3);

    var offset = 0,
            speed = 4,
            start = Date.now();

    var svg = d3.select("#wheel").append("svg")
            .attr("width", width)
            .attr("height", height)
            .append("g")
            .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")scale(.55)")
            .append("g");

    var frame = svg.append("g")
            .datum({radius: Infinity});

    frame.append("g")
            .attr("class", "annulus")
            .datum({teeth: 20, radius: -radius * 5, annulus: true})
            .append("path")
            .attr("d", gear);

    frame.append("g")
            .attr("class", "sun")
            .datum({teeth: 4, radius: radius})
            .append("path")
            .attr("d", gear);

    frame.append("g")
            .attr("class", "planet")
            .attr("transform", "translate(0,-" + radius * 3 + ")")
            .datum({teeth: 8, radius: -radius * 2})
            .append("path")
            .attr("d", gear);

    frame.append("g")
            .attr("class", "planet")
            .attr("transform", "translate(" + -radius * 3 * x + "," + -radius * 3 * y + ")")
            .datum({teeth: 8, radius: -radius * 2})
            .append("path")
            .attr("d", gear);

    frame.append("g")
            .attr("class", "planet")
            .attr("transform", "translate(" + radius * 3 * x + "," + -radius * 3 * y + ")")
            .datum({teeth: 8, radius: -radius * 2})
            .append("path")
            .attr("d", gear);

    d3.selectAll("input[name=reference]")
            .data([radius * 5, Infinity, -radius])
            .on("change", function(radius1) {
                var radius0 = frame.datum().radius, angle = (Date.now() - start) * speed;
                frame.datum({radius: radius1});
                svg.attr("transform", "rotate(" + (offset += angle / radius0 - angle / radius1) + ")");
            });

    d3.selectAll("input[name=speed]")
            .on("change", function() { speed = +this.value; });

    function gear(d) {
        var n = d.teeth,
                r2 = Math.abs(d.radius),
                r0 = r2 - 8,
                r1 = r2 + 8,
                r3 = d.annulus ? (r3 = r0, r0 = r1, r1 = r3, r2 + 20) : 20,
                da = Math.PI / n,
                a0 = -Math.PI / 2 + (d.annulus ? Math.PI / n : 0),
                i = -1,
                path = ["M", r0 * Math.cos(a0), ",", r0 * Math.sin(a0)];
        while (++i < n) path.push(
                "A", r0, ",", r0, " 0 0,1 ", r0 * Math.cos(a0 += da), ",", r0 * Math.sin(a0),
                "L", r2 * Math.cos(a0), ",", r2 * Math.sin(a0),
                "L", r1 * Math.cos(a0 += da / 3), ",", r1 * Math.sin(a0),
                "A", r1, ",", r1, " 0 0,1 ", r1 * Math.cos(a0 += da / 3), ",", r1 * Math.sin(a0),
                "L", r2 * Math.cos(a0 += da / 3), ",", r2 * Math.sin(a0),
                "L", r0 * Math.cos(a0), ",", r0 * Math.sin(a0));
        path.push("M0,", -r3, "A", r3, ",", r3, " 0 0,0 0,", r3, "A", r3, ",", r3, " 0 0,0 0,", -r3, "Z");
        return path.join("");
    }

    d3.timer(function() {
        var angle = -(Date.now() - start) * speed,
                transform = function(d) { return "rotate(" + angle / d.radius + ")"; };
        frame.selectAll("path").attr("transform", transform);
        frame.attr("transform", transform); // frame of reference
    });
</script>

<!--echarts 出入境地图-->
<script>
    var chart=echarts.init(document.getElementById('chart'));
    option = {
        backgroundColor: 'rgba(0,72,129,1.0)',//transparent
        color: ['gold','aqua','lime'],
        title : {
            text: '进出港人员流动图',
            subtext:'今日进港人数：26’913 人\n今日出港人数：430’978 人\n当月进港人数：829’274 人\n当月出港人数：11’468’270 人',
            // textAlign:'left',
            x:'center',
            padding:5,
            itemGap:10,
            textStyle : {
                color: '#fff',
                fontFamily : '微软雅黑',
                fontSize : 30  ,
                fontWeight : 'bolder'
            },
            SubtextStyle : {
                color: '#fff',
                fontFamily : '微软雅黑',
                fontSize : 20  ,
                fontWeight : 'bolder',
            }
        },
        tooltip : {
            trigger: 'item',
            formatter: '{b}:{c}人'
        },
        legend: {
            orient: 'vertical',
            x:'left',
            data:['贵阳入港 Top20', '贵阳出港 Top20'],
            selectedMode: 'single',
            selected:{
                '贵阳出港 Top20' : false
            },
            textStyle : {
                color: '#fff'
            }
        },
        toolbox: {
            show : true,
            orient : 'vertical',
            x: 'right',
            y: 'center',
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        dataRange: {
            min : 20000,
            max : 230000,
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
                            color: 'rgba(0,72,129,1.0)'
                        }
                    }
                },
                data:[],
                markLine : {
                    smooth:true,
                    symbol: ['circle','none'],
                    symbolSize : 1,
                    itemStyle : {
                        normal: {
                            color:'#fff',
                            borderWidth:1,
                            borderColor:'rgba(30,144,255,0.5)'
                        }
                    },
                    data : [
                        [{name:'台湾'},{name:'贵阳'}],
                        [{name:'香港'},{name:'贵阳'}],
                        [{name:'哈尔滨'},{name:'贵阳'}],
                        [{name:'合肥'},{name:'贵阳'}],
                        [{name:'南昌'},{name:'贵阳'}],
                        [{name:'太原'},{name:'贵阳'}],
                        [{name:'乌鲁木齐'},{name:'贵阳'}],
                        [{name:'郑州'},{name:'贵阳'}],
                    ],
                },
                geoCoord: {
                    '上海': [121.4648,31.2891],
                    '东莞': [113.8953,22.901],
                    '东营': [118.7073,37.5513],
                    '中山': [113.4229,22.478],
                    '临汾': [111.4783,36.1615],
                    '临沂': [118.3118,35.2936],
                    '丹东': [124.541,40.4242],
                    '丽水': [119.5642,28.1854],
                    '乌鲁木齐': [87.9236,43.5883],
                    '佛山': [112.8955,23.1097],
                    '保定': [115.0488,39.0948],
                    '兰州': [103.5901,36.3043],
                    '包头': [110.3467,41.4899],
                    '北京': [116.4551,40.2539],
                    '北海': [109.314,21.6211],
                    '南京': [118.8062,31.9208],
                    '南宁': [108.479,23.1152],
                    '南昌': [116.0046,28.6633],
                    '南通': [121.1023,32.1625],
                    '厦门': [118.1689,24.6478],
                    '台州': [121.1353,28.6688],
                    '合肥': [117.29,32.0581],
                    '呼和浩特': [111.4124,40.4901],
                    '咸阳': [108.4131,34.8706],
                    '哈尔滨': [127.9688,45.368],
                    '唐山': [118.4766,39.6826],
                    '嘉兴': [120.9155,30.6354],
                    '大同': [113.7854,39.8035],
                    '大连': [122.2229,39.4409],
                    '天津': [117.4219,39.4189],
                    '太原': [112.3352,37.9413],
                    '威海': [121.9482,37.1393],
                    '宁波': [121.5967,29.6466],
                    '宝鸡': [107.1826,34.3433],
                    '宿迁': [118.5535,33.7775],
                    '常州': [119.4543,31.5582],
                    '广州': [113.5107,23.2196],
                    '廊坊': [116.521,39.0509],
                    '延安': [109.1052,36.4252],
                    '张家口': [115.1477,40.8527],
                    '徐州': [117.5208,34.3268],
                    '德州': [116.6858,37.2107],
                    '惠州': [114.6204,23.1647],
                    '成都': [103.9526,30.7617],
                    '扬州': [119.4653,32.8162],
                    '承德': [117.5757,41.4075],
                    '拉萨': [91.1865,30.1465],
                    '无锡': [120.3442,31.5527],
                    '日照': [119.2786,35.5023],
                    '昆明': [102.9199,25.4663],
                    '杭州': [119.5313,29.8773],
                    '枣庄': [117.323,34.8926],
                    '柳州': [109.3799,24.9774],
                    '株洲': [113.5327,27.0319],
                    '武汉': [114.3896,30.6628],
                    '汕头': [117.1692,23.3405],
                    '江门': [112.6318,22.1484],
                    '沈阳': [123.1238,42.1216],
                    '沧州': [116.8286,38.2104],
                    '河源': [114.917,23.9722],
                    '泉州': [118.3228,25.1147],
                    '泰安': [117.0264,36.0516],
                    '泰州': [120.0586,32.5525],
                    '济南': [117.1582,36.8701],
                    '济宁': [116.8286,35.3375],
                    '海口': [110.3893,19.8516],
                    '淄博': [118.0371,36.6064],
                    '淮安': [118.927,33.4039],
                    '深圳': [114.5435,22.5439],
                    '清远': [112.9175,24.3292],
                    '温州': [120.498,27.8119],
                    '渭南': [109.7864,35.0299],
                    '湖州': [119.8608,30.7782],
                    '湘潭': [112.5439,27.7075],
                    '滨州': [117.8174,37.4963],
                    '潍坊': [119.0918,36.524],
                    '烟台': [120.7397,37.5128],
                    '玉溪': [101.9312,23.8898],
                    '珠海': [113.7305,22.1155],
                    '盐城': [120.2234,33.5577],
                    '盘锦': [121.9482,41.0449],
                    '石家庄': [114.4995,38.1006],
                    '福州': [119.4543,25.9222],
                    '秦皇岛': [119.2126,40.0232],
                    '绍兴': [120.564,29.7565],
                    '聊城': [115.9167,36.4032],
                    '肇庆': [112.1265,23.5822],
                    '舟山': [122.2559,30.2234],
                    '苏州': [120.6519,31.3989],
                    '莱芜': [117.6526,36.2714],
                    '菏泽': [115.6201,35.2057],
                    '营口': [122.4316,40.4297],
                    '葫芦岛': [120.1575,40.578],
                    '衡水': [115.8838,37.7161],
                    '衢州': [118.6853,28.8666],
                    '西宁': [101.4038,36.8207],
                    '西安': [109.1162,34.2004],
                    '贵阳': [106.6992,26.7682],
                    '连云港': [119.1248,34.552],
                    '邢台': [114.8071,37.2821],
                    '长沙': [112.94533,28.239827],
                    '郑州': [113.4668,34.6234],
                    '鄂尔多斯': [108.9734,39.2487],
                    '重庆': [107.7539,30.1904],
                    '银川': [106.3586,38.1775],
                    '香港': [114.17199,22.28108],
                    '台湾': [120.96145,23.80406]
                }
            },
            {
                name: '贵阳入港 Top20',
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
                            label:{show:false},
                            lineStyle: {
                                type: 'solid',
                                shadowBlur: 10
                            }
                        }
                    },
                    data : [
                        [{name:'广州'}, {name:'贵阳',value:227911}],
                        [{name:'杭州'}, {name:'贵阳',value:198296}],
                        [{name:'北京'}, {name:'贵阳',value:183734}],
                        [{name:'上海'}, {name:'贵阳',value:177053}],
                        [{name:'成都'}, {name:'贵阳',value:120174}],
                        [{name:'南京'}, {name:'贵阳',value:108395}],
                        [{name:'福州'}, {name:'贵阳',value:105864}],
                        [{name:'昆明'}, {name:'贵阳',value:100665}],
                        [{name:'贵阳'}, {name:'贵阳',value:97009}],
                        [{name:'海口'}, {name:'贵阳',value:92685}],
                        [{name:'西安'}, {name:'贵阳',value:91782}],
                        [{name:'郑州'}, {name:'贵阳',value:72205}],
                        [{name:'济南'}, {name:'贵阳',value:68000}],
                        [{name:'重庆'}, {name:'贵阳',value:50643}],
                        [{name:'武汉'}, {name:'贵阳',value:37987}],
                        [{name:'沈阳'}, {name:'贵阳',value:30145}],
                        [{name:'南宁'}, {name:'贵阳',value:28817}],
                        [{name:'兰州'}, {name:'贵阳',value:28762}],
                        [{name:'天津'}, {name:'贵阳',value:23598}],
                        [{name:'长沙'}, {name:'贵阳',value:22010}]
                    ]
                },
                markPoint : {
                    symbol:'emptyCircle',
                    symbolSize : function (v){
                        console.log(v);
                        return 10 + v/2000000
                    },
                    effect : {
                        show: true,
                        shadowBlur : 0
                    },
                    itemStyle:{
                        normal:{
                            label:{
                                show:true,
                                //position: "top",
                                color:'#fff',
                                formatter: '{b}:{c}'
                            }
                        },
                        emphasis: {
                            label:{position:'top'}
                        }
                    },
                    data : [
                        {name:'广州',value:227911},
                        {name:'杭州',value:198296},
                        {name:'北京',value:183734},
                        {name:'上海',value:177053},
                        {name:'成都',value:120174},
                        {name:'南京',value:108395},
                        {name:'福州',value:105864},
                        {name:'昆明',value:100665},
                        {name:'贵阳',value:97009},
                        {name:'海口',value:92685},
                        {name:'西安',value:91782},
                        {name:'郑州',value:72205},
                        {name:'济南',value:68000},
                        {name:'重庆',value:50643},
                        {name:'武汉',value:37987},
                        {name:'沈阳',value:30145},
                        {name:'南宁',value:28817},
                        {name:'兰州',value:28762},
                        {name:'天津',value:23598},
                        {name:'长沙',value:22010}
                    ]
                }
            },
            {
                name: '贵阳出港 Top20',
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
                                shadowBlur: 10
                            }
                        }
                    },
                    data : [
                        [{name:'贵阳'},{name:'广州',value:4553573}],
                        [{name:'贵阳'},{name:'长沙',value:2790714}],
                        [{name:'贵阳'},{name:'昆明',value:1655460}],
                        [{name:'贵阳'},{name:'杭州',value:2298805}],
                        [{name:'贵阳'},{name:'南宁',value:1816292}],
                        [{name:'贵阳'},{name:'成都',value:1337728}],
                        [{name:'贵阳'},{name:'贵阳',value:1161585}],
                        [{name:'贵阳'},{name:'武汉',value:996013}],
                        [{name:'贵阳'},{name:'北京',value:867967}],
                        [{name:'贵阳'},{name:'南昌',value: 20918}],
                        [{name:'贵阳'},{name:'上海',value:755099}],
                        [{name:'贵阳'},{name:'重庆',value:594991}],
                        [{name:'贵阳'},{name:'郑州',value:559600}],
                        [{name:'贵阳'},{name:'福州',value:468097}],
                        [{name:'贵阳'},{name:'南京',value:455122}],
                        [{name:'贵阳'},{name:'济南',value:306504}],
                        [{name:'贵阳'},{name:'合肥',value:249113}],
                        [{name:'贵阳'},{name:'石家庄',value:206027}],
                        [{name:'贵阳'},{name:'西安',value:164918}],
                        [{name:'贵阳'},{name:'海口',value:97451}],
                    ]
                },
                markPoint : {
                    symbol:'emptyCircle',
                    symbolSize : function (v){
                        return 10 + v/100000
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
                        {name:'广州',value:4553573},
                        {name:'长沙',value:2790714},
                        {name:'昆明',value:1655460},
                        {name:'杭州',value:2298805},
                        {name:'南宁',value:1816292},
                        {name:'成都',value:1337728},
                        {name:'贵阳',value:1161585},
                        {name:'武汉',value:996013},
                        {name:'北京',value:867967},
                        {name:'南昌',value: 20918},
                        {name:'上海',value:755099},
                        {name:'重庆',value:594991},
                        {name:'郑州',value:559600},
                        {name:'福州',value:468097},
                        {name:'南京',value:455122},
                        {name:'济南',value:306504},
                        {name:'合肥',value:249113},
                        {name:'石家庄',value:206027},
                        {name:'西安',value:164918},
                        {name:'海口',value:97451}
                    ]
                }
            }
        ]
    };
    chart.setOption(option);
</script>
</body>
</html>