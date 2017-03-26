<?php
/**
 * Author: IntelliJ IDEA.
 * User: LiJia
 * Date: 2017-01-20.17:13
 * Email:lijiadongyue@gmail.com
 * Description:医院POC大屏测试
 */

namespace Home\Controller;

use Think\Controller;

class HospitalController extends Controller
{
    public function index(){

        $this->display('index');
    }

    public function charts(){

        $this->display('charts');
    }

    public function test(){

        $this->display('test');
    }

    public function fee(){

        $this->display('fee');
    }

}