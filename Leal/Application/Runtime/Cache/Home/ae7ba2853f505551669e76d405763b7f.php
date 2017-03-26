<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>省二医展示大屏</title>
    <script type="text/javascript" src="/Public/Home/js/echarts-2.2.7/build/dist/echarts-all.js"></script>
</head>
<style>
    #mzfx{
        width: 150px;
        height: 50px;
        position: absolute;
        top: 10px;
        right:1000px;
        /*background-color: red;*/
    }

    #ksfx{
        width: 150px;
        height: 50px;
        position: absolute;
        top: 10px;
        right:830px;
        /*background-color: yellow;*/
    }

    #chart1{
        width: 300px;
        height: 300px;
        position: absolute;
        top:750px;
        left: 230px;
    }

    #chart2{
        width: 300px;
        height: 300px;
        position: absolute;
        top:750px;
        left: 480px;
    }
    #chart3{
        width: 300px;
        height: 300px;
        position: absolute;
        top:750px;
        left: 730px;
    }
    #chart4{
        width: 300px;
        height: 300px;
        position: absolute;
        top:750px;
        left: 980px;
    }
    #div1{
        width: 250px;
        height: 50px;
        position: absolute;
        top: 320px;
        left:520px;
        font-family: 微软雅黑;
        color: #2aabd2;
        font-size: 22px;
    }
    #div2{
        width: 250px;
        height: 50px;
        position: absolute;
        top: 440px;
        left:500px;
        font-family: 微软雅黑;
        color: #2aabd2;
        font-size: 22px;
    }
    #div3{
        width: 250px;
        height: 50px;
        position: absolute;
        top: 560px;
        left:450px;
        font-family: 微软雅黑;
        color: #2aabd2;
        font-size: 22px;
    }
    #div4{
        width: 250px;
        height: 50px;
        position: absolute;
        top: 685px;
        left:400px;
        font-family: 微软雅黑;
        color: #2aabd2;
        font-size: 22px;
    }
</style>
<body background="/Public/Home/images/hospital/bgv1.0.jpg">
    <a id="mzfx" href="http://127.0.0.1/Analyzer/dashboard/designer.aspx?action=open&tabindex=2&reportid=-212520790&folderid=-1347598238&token=WUFBQUFnQUFBQUFkSUNRV2Y2MnkyM2RDOFVwd0NpdEMyb25LaFowcTFLNElyWWR2RG1CSzMzaTJTcHRGNHI0RA&pv=1&tb=0">门诊驾驶舱</a>
    <a id="ksfx" href="/Hospital/patient">病人分析</a>
    <a id="brfx" href="/Hospital/fee">费用分析</a>
    <a id="ysfx" href="/Hospital/test">检查分析</a>
    <a id="fyfx"></a>
    <a id="jcfx"></a>
    <a id="jyfx"></a>
    <!--人数-->
    <div id="div1">挂号人数：1,344,242人</div>
    <div id="div2">就诊人数：1,344,242人</div>
    <div id="div3">检查人数：1,344,242人</div>
    <div id="div4">检验人数：1,344,242人</div>
    <!--四个仪表盘-->
    <div id="chart1"></div>
    <div id="chart2"></div>
    <div id="chart3"></div>
    <div id="chart4"></div>
</body>
<script>
    //药占比
    option1 = {
        tooltip : {
            formatter: "{a} <br/>{b} : {c}%"
        },
        series : [
            {
                //name:'业务指标',
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
                data:[{value: 63, name: '药占比'}]
            }
        ]
    };

    var chart1=echarts.init(document.getElementById('chart1'));
    chart1.setOption(option1);

    //材料占比
    option2 = {
        tooltip : {
            formatter: "{a} <br/>{b} : {c}%"
        },
        series : [
            {
                //name:'业务指标',
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
                data:[{value: 23, name: '材料占比'}]
            }
        ]
    };

    var chart2=echarts.init(document.getElementById('chart2'));
    chart2.setOption(option2);

    //
    option3 = {
        tooltip : {
            formatter: "{a} <br/>{b} : {c}%"
        },
        series : [
            {
                //name:'业务指标',
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
                data:[{value: 23, name: '材料占比'}]
            }
        ]
    };

    var chart3=echarts.init(document.getElementById('chart3'));
    chart3.setOption(option3);

    //
    option4 = {
        tooltip : {
            formatter: "{a} <br/>{b} : {c}%"
        },
        series : [
            {
                //name:'业务指标',
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
                data:[{value: 23, name: '材料占比'}]
            }
        ]
    };

    var chart4=echarts.init(document.getElementById('chart4'));
    chart4.setOption(option4);
</script>
</html>