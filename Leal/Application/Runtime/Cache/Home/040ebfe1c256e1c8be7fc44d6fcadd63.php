<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>贵州省地图测试</title>
    <script type="text/javascript" src="/Public/Home/js/common/jquery-1.12.2.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/common/require.min.js"></script>
    <!-引入theme-->
    <script type="text/javascript" src="/Public/Home/js/theme/dark.js"></script>
    <script type="text/javascript" src="/Public/Home/js/echarts/echarts.min.js"></script>


</head>
<body>
<!--定义页面图表容器-->
<!-- 必须制定容器的大小（height、width） -->
<div id="map" style="width: 98%; height: 500px; border: 1px solid #ccc; padding: 10px;"></div>
</body>
<script type="text/javascript">
    //后期为了更好的加载、提高性能--可用按需加载
   // echarts.registerTheme("dark");
    var map = echarts.init(document.getElementById('map'),'dark');
    echarts.util.mapData.params.params.贵州 = {
        getGeoJson: function (callback) {
            $.getJSON('/Public/Home/json/map/贵州省.json', function (data) {
                // 压缩后的地图数据必须使用 decode 函数转换
                callback(echarts.util.mapData.params.decode(data));
            });
        }
    };
    option = {
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
    map.setOption(option);
</script>
</html>