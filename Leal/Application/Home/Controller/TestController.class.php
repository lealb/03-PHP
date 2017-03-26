<?php
/**
 * Author: IntelliJ IDEA.
 * User: LiJia
 * Date: 2016-09-12.14:34
 * Email:lijiadongyue@gmail.com
 * Description:测试一些常用的js
 */

namespace Home\Controller;
use Think\Controller;

class TestController extends Controller
{
    /*
     * 测试拖拽技术 gridster js
     */
    public function gridster(){

        $this->display('gridster');
    }

    /*
     * 测试3d效果
     */
    public function dreamslider(){

        $this->display('dreamslider');
    }

    /**
     * 测试
     */
    public function index(){

        $this->display('index');
    }
}