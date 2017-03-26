<?php
/**
 * Author: IntelliJ IDEA.
 * User: LiJia
 * Date: 2016-09-13.18:07
 * Email:lijiadongyue@gmail.com
 * Description:贵阳电视台 1027 展示demo
 */

namespace Home\Controller;

use Think\Controller;

class StationController extends Controller
{
    public function index(){

        $keyword=I('keyword');
        if($keyword){
            $map['b.RName']=array('LIKE',"%{$keyword}%");
            $coords=M('Coords');
            $list=$coords->field('a.SCoords')
                ->join('AS a INNER JOIN t_RoadInfo AS b ON a.CId=b.CId')
                ->where($map)
                ->find();
            //echo $coords->getLastSql();
            //dump($list);
            $this->assign('list',$list);
        }
        $this->display('index');
    }

}