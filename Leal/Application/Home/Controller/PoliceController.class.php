<?php
/**
 * Author: IntelliJ IDEA.
 * User: leal
 * Date: 9/18/16.4:21 PM
 * Email:lijiadongyue@gmail.com
 * Description:公安厅POC
 */

namespace Home\Controller;

use Think\Controller;

class PoliceController extends Controller
{
    public function index(){

        $this->display('index');
    }

    public function plane(){

        $this->display('plane');
    }

    /*
     * 环形饼图
     */
    public function pie(){

        $this->display('pie');
    }

    /*
     * 可展开移动的环形饼图
     */
    public function movepie(){

        $this->display('movepie');
    }

    /*
     * 防资源图
     */
    public function source(){

        $this->display('source');
    }

    /*
     * 重点
     */
    public function important(){

        $this->display('important');
    }

    /*
    * 公安厅展示第三版第一屏
    */
    public function part1(){

        $this->display('part1');
    }

    /*
  * 公安厅展示第三版星空页面
  */
    public function partvstar(){

        $this->display('partvstar');
    }

    /*
   * 公安厅展示第三版第一屏正式
   */
    public function partv3(){

        $this->display('partv3');
    }

    /*
   * 公安厅展示第三版第一屏正式
   */
    public function partv1(){

        $this->display('partv1');
    }

    /*
    * 公安厅展示第二次第一屏正式
    */
    public function part2(){

        $this->display('part2');
    }

    /*
   * 公安厅展示第二次第一屏正式
   */
    public function part2_1(){

        $this->display('part21');
    }

    /*
     * 公安厅大屏
     */
    public  function screen(){

        $this->display('screen');
    }
}