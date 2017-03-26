<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    /*
     * 首页展示Echarts入门
     */
    public function index(){

        $this->display('index');
    }

    /*
     * 气泡图
     */
    public  function bubble(){

        $this->display("bubble");
    }

    /*
     * 地图测试
     */
    public function map(){
        $this->display("map");
    }

    /*
     * 公安厅展示1
     */
    public function part1(){

        $this->display('part1');
    }

    /*
    * 公安厅展示1
    */
    public function part1_2(){

        $this->display('part1_2');
    }

    /*
     * 公安厅展示2
     */
    public function part2(){

        $this->display('part2');
    }

}