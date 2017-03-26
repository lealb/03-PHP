<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>贵州省公安厅POC</title>
    <link type="text/css" rel="stylesheet" href="/Leal/Public/Home/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Leal/Public/Home/css/jquery.gridster.min.css"/>
    <script type="text/javascript" src="/Leal/Public/Home/js/echarts/echarts.js"></script>
    <!-引入theme-->
    <script type="text/javascript" src="/Leal/Public/Home/js/theme/dark.js"></script>
    <script type="text/javascript" src="/Leal/Public/Home/js/map/guizhou.js"></script>
    <script type="text/javascript" src="/Leal/Public/Home/js/common/jquery-1.12.2.min.js"></script>
    <script type="text/javascript" src="/Leal/Public/Home/js/gridster/jquery.gridster.min.js"></script>
    <script type="text/javascript" src="/Leal/Public/Home/js/common/require.min.js"></script>

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
        /*border: solid 2px black;*/
    }
</style>
<body  background="/Leal/Public/Home/images/star.jpg">
<!--定义页面图表容器-->
<!-- 必须制定容器的大小（height、width） -->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-md-12">
            <p class="lead text-info text-center" style="font-family: '黑体' ! important;">
                贵州省公安厅POC模型v1.0
            </p>
        </div>
        <div class="gridster">
            <ul>
                <!--
                data-row:数据行，元素所存在的行数。
                data-col:数据列，元素所存在的列数。
                data-sizex:元素块的宽（以个为单位，每个元素块的宽度为widget_base_dimensions所设定的值）
                data-sizey:元素块的高（以个为单位，每个元素块的高度为widget_base_dimensions所设定的值）
                -->
                <li data-row="1" data-col="1" data-sizex="4" data-sizey="3">
                    <div id="map" style="width: 668px;height: 501px"></div>
                </li>
                <li data-row="1" data-col="3" data-sizex="2" data-sizey="1"></li>
                <li data-row="2" data-col="1" data-sizex="2" data-sizey="1"></li>
                <li data-row="2" data-col="3" data-sizex="2" data-sizey="1"></li>
                <li data-row="3" data-col="1" data-sizex="2" data-sizey="1"></li>
                <li data-row="3" data-col="3" data-sizex="2" data-sizey="1"></li>
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
                widget_base_dimensions: [167, 167]
            });


    //案件发生地图 静态数据
    var map = echarts.init(document.getElementById('map'),'dark');

    option={
        title : {
            text: '贵州省人口分布',
            subtext: '纯属虚构',
            textStyle : {
                color: '#fff',
                fontFamily : '微软雅黑',
                fontSize : 20  ,
                fontWeight : 'bolder'
            },
            left: 'center'
        },
        tooltip : {
            label:{
                show:true,
                formatter: '{c}'
            },
            trigger: 'item',
            formatter: function(params) {
                var res = params.name+'<br/>';
                var myseries = option.series;
                for (var i = 0; i < myseries.length; i++) {
                    res+= myseries[i].name;
                    for(var j=0;j<myseries[i].data.length;j++){
                        if(myseries[i].data[j].name==params.name){
                            if(myseries[i].data[j].value=='NaN'){
                                myseries[i].data[j].value=0;
                            }
                           // console.log(myseries[i].data[j].value);
                            res+=' : '+myseries[i].data[j].value+'</br>';
                        }
                    }
                }
                return res;
            }
        },
        legend: {
            orient: 'vertical',
            left: 'left',
            data:['常住人口','暂住人口','重点监控人口']
        },
        //虚拟标注级别
        visualMap: {
            min: 0,
            max: 2500,
            left: 'left',
            top: 'bottom',
            text:['高','低'],           // 文本，默认为数值文本
            realtime: false,
            calculable: true,
            inRange: {
                color: ['blue','yellow', 'orange']
            }
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
                name: '常住人口',
                type: 'map',
                mapType: '贵州',
                roam: false,
                markPoint:{
                    itemStyle : {
                        normal: {
                            label:{
                                show:true,
                                formatter:'{b}:{c0}'
                            },
                            borderWidth:1,
                            lineStyle: {
                                type: 'solid',
                                shadowBlur: 10
                            }
                        }
                    }
                },
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
                name: '暂住人口',
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
                name: '重点监控人口',
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
</script>
</html>