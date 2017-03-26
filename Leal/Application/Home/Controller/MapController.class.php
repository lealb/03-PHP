<?php
/**
 * Author: IntelliJ IDEA.
 * User: leal
 * Date: 9/9/16.12:19 PM
 * Email:lijiadongyue@gmail.com
 * Descripition:处理Echarts的地图展示
 */

namespace Home\Controller;
use Think\Controller;

class MapController extends Controller
{
    /*
     * js格式的贵州省地图（未钻取）
     */
    public function guizhoujs(){

        $this->display('guizhoujs');
    }

    /*
     * jsong格式的贵州省地图（钻取）
     */
    public function guizhoujson(){

        $this->display('guizhoujson');
    }

}