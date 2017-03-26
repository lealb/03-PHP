<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>公安厅展示第二次</title>
</head>
<style>
    body{
        width: 1920px;
        height: 1080px;
    }
    #mainMap{
        width: 1050px;
        height: 825px;
        margin-top: -225px;
        margin-left: 450px;

    }
    #main_1{
        width: 365px;
        height: 235px;
        margin-top: 125px;
    }
    #main_2{
        width: 365px;
        height: 235px;
    }
</style>
<script type="text/javascript" src="/Public/Home/js/echarts-2.2.7/build/dist/echarts-all.js"></script>
<script  src="/Public/Home/data/json/data/province.json"></script>
<body  background="/Public/Home/images/police/police.jpg">
    <div id="main_1" ></div>
    <div id="main_2" ></div>
    <div id="mainMap"></div>
</body>
<script>

    var myMap = echarts.init(document.getElementById('mainMap'));
    // 标准地图
    var mapOption = {

        backgroundColor: 'rgba(0,72,129,1.0)',
        color: ['gold','aqua','lime'],
        title : {
            text: '地州数据汇入图',
            //subtext:'今日进港人数：26’913 人\n今日出港人数：430’978 人\n当月进港人数：829’274 人\n当月出港人数：11’468’270 人',
            // textAlign:'left',
            x:'center',
            padding:5,
            itemGap:10,
            textStyle : {
                color: '#fff',
                fontFamily : '微软雅黑',
                fontSize : 18  ,
                fontWeight : 'bolder'
            },
            SubtextStyle : {
                color: '#fff',
                fontFamily : '微软雅黑',
                fontSize : 20  ,
                fontWeight : 'bolder'
            }
        },
        tooltip : {
            trigger: 'item',
            formatter: '{b}:{c}人'
        },
        legend: {
            orient: 'vertical',
            x:'left',
            data:['贵阳汇入'],
            selectedMode: 'single',
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
                restore : {show: true}
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
                roam: false,
                hoverable: false,
                mapType: '贵州',
                itemStyle:{
                    normal:{
                        label:{
                            show:true,
                            textStyle:{
                                color:'#fff',
                                fontSize:14
                            }
                        },
                        borderColor:'rgba(100,149,237,1)',
                        borderWidth:0.5,
                        areaStyle:{
                            color: 'rgba(0,72,129,1.0)'
                        }
                    }
                },
                data : [
                    {name:'安顺',value:198296},
                    {name:'毕节',value:183734},
                    {name:'赤水',value:177053},
                    {name:'都匀',value:120174},
                    {name:'凯里',value:108395},
                    {name:'六盘水',value:105864},
                    {name:'清镇',value:100665},
                    {name:'铜仁',value:97009},
                    {name:'兴义',value:92685},
                    {name:'遵义',value:91782}
                ],
                markLine : {
                    smooth:true,
                    symbol: ['circle','none'],
                    symbolSize : 1,
                    itemStyle : {
                        label:{show:false},
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
                    '贵阳': [106.57,26.63],
                    '安顺': [105.95,26.00],
                    '毕节': [105.18,27.18],
                    '都匀': [107.31,26.00],
                    '凯里': [108.40,26.59],
                    '六盘水': [104.83,26.20],
                    '铜仁': [108.52,27.80],
                    '兴义': [105.20,25.22],
                    '遵义': [106.91,27.90]
                },
            },
            {
                name: '贵阳汇入',
                type: 'map',
                mapType: '贵州',
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
                        // [{name:'贵阳'}, {name:'贵阳',value:227911}],
                        [{name:'安顺'}, {name:'贵阳',value:198296}],
                        [{name:'毕节'}, {name:'贵阳',value:183734}],
                        [{name:'都匀'}, {name:'贵阳',value:120174}],
                        [{name:'凯里'}, {name:'贵阳',value:108395}],
                        [{name:'六盘水'}, {name:'贵阳',value:105864}],
                        [{name:'铜仁'}, {name:'贵阳',value:97009}],
                        [{name:'兴义'}, {name:'贵阳',value:92685}],
                        [{name:'遵义'}, {name:'贵阳',value:91782}]
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
                        // type:'bounce',
                        shadowBlur : 0
                    },
                    data : [
                        {name:'安顺',value:198296},
                        {name:'毕节',value:183734},
                        {name:'都匀',value:120174},
                        {name:'凯里',value:108395},
                        {name:'六盘水',value:105864},
                        {name:'铜仁',value:97009},
                        {name:'兴义',value:92685},
                        {name:'遵义',value:91782}
                    ]
                }
            }
        ]
    };
    myMap.setOption(mapOption);
    validProvinceList=["贵阳市","毕节地区","遵义市","兴义市","铜仁地区","六盘水市","安顺市",
        "黔东南苗族侗族自治州","黔南布依族苗族自治州","黔西南布依族苗族自治州"];
    displayProvince="贵阳市";
    function provinceDisplay(displayProvince){
        var displayObj = provinceJSON[validProvinceList.indexOf(displayProvince)];
        //alert(provinceJSON);
        var subTitle = "区域：" + displayProvince;
        //第一个柱状图 左上1
        var barOption = {
            borderColor: 'red',       // 标题边框颜色

            tooltip : {
                trigger: 'axis'
            },
            legend: {
                data:['社会资源','公安内部','公共服务机构','政府部门管理'],
                textStyle:{
                    color:'#fff'
                }
            },
            grid:{
                borderWidth: 0,
            },
            calculable : true,
            xAxis : [
                {
                    type : 'category',
                    data : ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月'],
                    splitLine:{
                        show:false
                    },
                    axisLabel:{
                        textStyle:{
                            color:'#fff',
                        }
                    }

                }
            ],
            yAxis : [
                {
                    type : 'value',
                    splitLine:{
                        show:false
                    },
                    axisLabel:{
                        formatter:function (v){
                            return  v/1000
                        },
                        textStyle:{
                            color:'#fff',

                        }
                    }
                }
            ],
            series : [
                {
                    name:'社会资源',
                    type:'bar',
                    data:displayObj.dataQtyA,
                },
                {
                    name:'公安内部',
                    type:'bar',
                    data:displayObj.dataQtyB,
                },
                {
                    name:'公共服务机构',
                    type:'bar',
                    data:displayObj.dataQtyC,
                },
                {
                    name:'政府部门管理',
                    type:'bar',
                    data:displayObj.dataQtyD,
                }
            ]
        };
        var myChart_pie = echarts.init(document.getElementById('main_1'));
        myChart_pie.setOption(barOption,true);

        //第二个折线图
        var lineOption = {

            tooltip : {
                trigger: 'axis'
            },
            legend: {
                data:['社会资源','公安内部','公共服务机构','政府部门管理'],
                textStyle:{
                    color:'#fff'
                }
            },
            calculable : false,
            xAxis : [
                {
                    type : 'category',
                    boundaryGap : false,
                    splitLine:{
                        show:false
                    },
                    data : ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月']
                }
            ],
            yAxis : [
                {
                    type : 'value',
                    splitLine:{
                        show:false
                    },
                    axisLabel : {
                        color:'#fff',
                        formatter: '{value}'
                    }
                }
            ],
            series : [
                {
                    name:'社会资源',
                    type:'line',
                    data:displayObj.dayQtyA

                },
                {
                    name:'公安内部',
                    type:'line',
                    data:displayObj.dayQtyB
                },
                {
                    name:'公共服务机构',
                    type:'line',
                    data:displayObj.dayQtyC
                },
                {
                    name:'政府部门管理',
                    type:'line',
                    data:displayObj.dayQtyD
                }
            ]
        };
        var myChart_gauge = echarts.init(document.getElementById('main_2'));
        myChart_gauge.setOption(lineOption,true);

    }
    // 事件响应模块
    //默认显示贵阳市
    provinceDisplay("贵阳市");
    myMap.on('click',function (params) {
        alert(params.name);
        provinceDisplay(params.name);

    });
</script>
</html>