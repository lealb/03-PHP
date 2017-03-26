<?php
/**
 * Author: IntelliJ IDEA.
 * User: leal
 * Date: 9/18/16.2:20 PM
 * Email:lijiadongyue@gmail.com
 * Description:云岩区12319展示
 */

namespace Home\Controller;

use Think\Controller;

class CloudController extends Controller
{
    /*
     * 八月份数据分析报告
     */
    public function index(){

        $this->display('index');
    }

    public function part(){

        $this->display('part');
    }

    public function heatmap(){

        $this->display('heatmap');
    }

    /*
     * 文明办数据分析报告图表
     */
    public function cloud(){

        $this->display('cloud');
    }

    /*
     * 九月份数据分析报告图表
     */
    public function cloudnine(){

        $this->display('cloudnine');
    }

    /*
     * 十月份数据分析报告图表
     */
    public function cloudten(){

        $this->display('cloudten');
    }


}