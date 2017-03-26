<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--if发布使用压缩的js-->
    <link rel="stylesheet" href="/Leal/Public/Home/css/bootstrap.min.css">
    <script type="text/javascript" src="/Leal/Public/Home/js/echarts/echarts.js"></script>
    <script type="text/javascript" src="/Leal/Public/Home/js/common/jquery-1.12.2.min.js"></script>
    <script type="text/javascript" src="/Leal/Public/Home/js/common/require.min.js"></script>
    <script type="text/javascript" src="/Leal/Public/Home/js/theme/dark.js"></script>
    <title>Echarts</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p class="lead text-info text-center">Echarts</p>
        </div>
        <div class="col-md-6">
            <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
            <div id="bar" style="width: 600px;height:400px;"></div>
        </div>
        <div class="col-md-6">
            <div id="pie" style="width: 600px;height:400px;"></div>
        </div>
        <div class="col-md-6">
            <div id="autodata" style="width: 600px;height:400px;"></div>
        </div>
        <div class="col-md-6">
            <div id="scatter" style="width: 600px;height:400px;"></div>
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-6"></div>
    </div>
</div>
</body>
<script type="text/javascript">

    //动态加载的数据
    var data=({
                categories: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"],
                data: [5, 20, 36, 10, 10, 20]
            });
    var bar = echarts.init(document.getElementById("bar"),'dark');
    option = null;
    function fetchData(cb) {
        // 通过 setTimeout 模拟异步加载
        setTimeout(function () {
            cb({
                categories: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"],
                data: [5, 20, 36, 10, 10, 20]
            });
        }, 3000);
    }
    // 初始 option
    option = {
        title: {
            text: '异步数据加载示例'
        },
        tooltip: {},
        legend: {
            data:['销量']
        },
        xAxis: {
            data: []
        },
        yAxis: {},
        series: [{
            name: '销量',
            type: 'bar',
            data: []
        }]
    };
    bar.showLoading();
    fetchData(function (data) {
        bar.hideLoading();
        bar.setOption({
            //backgroundColor: '#2c343c',
            xAxis: {
                data: data.categories
            },
            series: [{
                // 根据名字对应到相应的系列
                name: '销量',
                data: data.data
            }]
        });
    });;
    if (option && typeof option === "object") {
        bar.setOption(option, true);
    }

    //测试绑定数据
    // 处理点击事件并且跳转到相应的百度搜索页面
    bar.on('click', function (params) {
        window.open('https://www.baidu.com/s?wd=' + encodeURIComponent(params.name));
    });
    //饼状图   南丁格尔图
    var pie=echarts.init(document.getElementById('pie'));
    pie.setOption({
        //backgroundColor: '#2c343c',
        title : {
            text: '饼图程序调用高亮示例',
            x: 'center'
        },
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            orient: 'vertical',
            left: 'left',
            data: ['直接访问','邮件营销','联盟广告','视频广告','搜索引擎']
        },
        series : [
            {
                name: '访问来源',
                type: 'pie',
                radius: '55%',
                roseType: 'angle',//通过半径表示数据的大小
                itemStyle: {
                    normal: {
                        // 阴影的大小
                        shadowBlur: 200,
                        // 阴影水平方向上的偏移
                        shadowOffsetX: 0,
                        // 阴影垂直方向上的偏移
                        shadowOffsetY: 0,
                        // 阴影颜色
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    },
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                },
                textStyle: {
                    color: 'rgba(255, 255, 255, 0.3)'
                },
                normal: {
                    textStyle: {
                        color: 'rgba(255, 255, 255, 0.3)'
                    },
                    lineStyle: {
                        color: 'rgba(255, 255, 255, 0.3)'
                    }
                },
                data:[
                    {value:400, name:'搜索引擎'},
                    {value:335, name:'直接访问'},
                    {value:310, name:'邮件营销'},
                    {value:274, name:'联盟广告'},
                    {value:235, name:'视频广告'}
                ]
            }
        ]
    });

    //给饼形图添加事件
    var app={};
    app.currentIndex = -1;
    app.timeTicket = setInterval(function () {
        var dataLen = option.series[0].data.length;
        // 取消之前高亮的图形
        pie.dispatchAction({
            type: 'downplay',
            seriesIndex: 0,
            dataIndex: app.currentIndex
        });
        app.currentIndex = (app.currentIndex + 1) % dataLen;
        // 高亮当前图形
        pie.dispatchAction({
            type: 'highlight',
            seriesIndex: 0,
            dataIndex: app.currentIndex
        });
        // 显示 tooltip
        pie.dispatchAction({
            type: 'showTip',
            seriesIndex: 0,
            dataIndex: app.currentIndex
        });
    }, 1000);

    //自动加载数据 setOption
    var base = +new Date(2014, 9, 3);
    var oneDay = 24 * 3600 * 1000;
    var date = [];
    var data = [Math.random() * 150];
    var now = new Date(base);
    var app={};//这有什么用呢？
    var autodata=echarts.init(document.getElementById('autodata'));
    function addData(shift) {
        now = [now.getFullYear(), now.getMonth() + 1, now.getDate()].join('/');
        date.push(now);
        data.push((Math.random() - 0.4) * 10 + data[data.length - 1]);

        if (shift) {
            date.shift();
            data.shift();
        }

        now = new Date(+new Date(now) + oneDay);
    }
    for (var i = 1; i < 100; i++) {
        addData();
    }
    option = {
        xAxis: {
            type: 'category',
            boundaryGap: false,
            data: date
        },
        yAxis: {
            boundaryGap: [0, '50%'],
            type: 'value'
        },
        series: [
            {
                name:'成交',
                type:'line',
                smooth:true,
                symbol: 'none',
                stack: 'a',
                areaStyle: {
                    normal: {}
                },
                data: data
            }
        ]
    };
    app.timeTicket = setInterval(function () {
        addData(true);
        autodata.setOption({
            xAxis: {
                data: date
            },
            series: [{
                name:'成交',
                data: data
            }]
        });
    }, 500);
    //这个必须有，否则没有图像
    if (option && typeof option === "object") {
        autodata.setOption(option, true);
    }
    //添加缩放组件
    option = {
        xAxis: {
            type: 'value'
        },
        yAxis: {
            type: 'value'
        },
        dataZoom: [
            {
                // 这个dataZoom组件，默认控制x轴
                type: 'slider', // 这个dataZoom组件，默认控制x轴
                xAxisIndex: 0,
                start: 10,      // 这个dataZoom组件，默认控制x轴
                end: 60         // 右边在 60% 的位置
            },
            {
                type: 'inside',
                xAxisIndex: 0,
                start: 10,
                end: 60
            },
            {
                type: 'slider',
                yAxisIndex: 0,
                start: 30,
                end: 80
            },
            {
                type: 'inside',
                yAxisIndex: 0,
                start: 30,
                end: 80
            }
        ],
        series: [
            {
                name: 'scatter',// 这是个『散点图』
                type: 'scatter',
                itemStyle: {
                    normal: {
                        opacity: 0.8
                    }
                },
                symbolSize: function (val) {
                    return val[2] * 40;
                },
                data: [
                    ["14.616","7.241","0.896"],["3.958","5.701","0.955"],["2.768","8.971","0.669"],
                    ["9.051","9.710","0.171"],["14.046","4.182","0.536"],["12.295","1.429","0.962"],
                    ["4.417","8.167","0.113"],["0.492","4.771","0.785"],["7.632","2.605","0.645"],
                    ["14.242","5.042","0.368"]
                ]
            }
        ]
    };
    var scatter=echarts.init(document.getElementById('scatter'));
    scatter.setOption(option);

</script>
</html>