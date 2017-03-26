<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>桑基图</title>
</head>
<script type="text/javascript" src="/Public/Home/js/common/jquery-1.12.2.min.js"></script>
<!--3.0-->
<script type="text/javascript" src="/Public/Home/js/echarts/echarts.js"></script>


<body>
<div id="chart" style="width: 550px;height: 400px"></div>
</body>
<script type="text/javascript">
    //图29 桑基图
    var chart=echarts.init(document.getElementById('chart'));
    $.get('../Public/Home/data/energy.json', function (data) {
        alert(1);
        chart.setOption(option = {
            title: {
                text: 'Sankey Diagram'
            },
            tooltip: {
                trigger: 'item',
                triggerOn: 'mousemove'
            },
            series: [
                {
                    type: 'sankey',
                    layout: 'none',
                    data: data.nodes,
                    links: data.links,
                    itemStyle: {
                        normal: {
                            borderWidth: 1,
                            borderColor: '#aaa'
                        }
                    },
                    lineStyle: {
                        normal: {
                            color: 'source',
                            curveness: 0.5
                        }
                    }
                }
            ]
        });
    });
</script>
</html>