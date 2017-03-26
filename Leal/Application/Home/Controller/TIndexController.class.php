<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;

class IndexController extends Controller {
    public function index(){

        $this->display("index");
    }

    public function getAjaxData(){

        //避免tp随便添加row_number，采取原生SQL
        $case=M();
        $json=$case
            ->query("SELECT MAX(Longitude) AS lng,MAX(Latitude) AS lat,COUNT(PsinLevel2) AS count
             FROM Dim_Case GROUP BY PsinLevel2 HAVING COUNT(PsinLevel2)>2 ORDER BY count DESC");
        $this->ajaxReturn($json,'JSON');
    }

    public function apriori(){

        $this->display("apriori");
    }

    public function disabledpf(){

        $dpf=M('ddpf');
        $list=$dpf
            ->field("Name,Sex,IdCard,Phone")
            ->select();
        $list=arr2str($list);
        $this->assign('list',$list);
        $this->display('disabledpf');
    }

    public function tagcloud(){

        import("ORG.Util.Page");
        $p=$_GET['p'];
        $tag=$_GET['tag'];
        $num=5;
        $case=D('ycase');
        if(!empty($p)){
            $list=$case
                ->field("DISTINCT(CaseId),CasePsin,CaseRemark,DealTypeName")
                ->page($p.','.$num)
                ->select();
        }
        if(!empty(trim($tag))){
            //$tag = mb_convert_encoding('utf-8', $tag);
            $tag=iconv('GB2312//IGNORE','utf-8',  $tag);
            $map['CaseRemark']=array('like',"%{$tag}%");

        }
        $count=$case
            ->where($map)
            ->count();
        $page=new Page($count,$num);
        $list=$case
            ->field("DISTINCT(CaseId),CasePsin,CaseRemark,DealTypeName")
            ->where($map)
            ->order("CaseId")
            ->limit($page->firstRow.','.$page->listRows)
            ->select();
        $show=$page->show();
        $this->assign('page',$show);
        $this->assign('list',$list);
        $this->display('tagcloud');
    }
    public function yunyan(){

        import("ORG.Util.Page");
        $p=$_GET['p'];
        $tag=$_GET['tag'];
        $num=5;
        $case=D('ycase');
        if(!empty($p)){
            $list=$case
                ->field("DISTINCT(CaseId),CasePsin,CaseRemark,DealTypeName")
                ->page($p.','.$num)
                ->select();
        }
        if(!empty(trim($tag))){
            //$tag = mb_convert_encoding('utf-8', $tag);
            $tag=iconv('GB2312//IGNORE','utf-8',  $tag);
            $map['CaseRemark']=array('like',"%{$tag}%");

        }
        $count=$case
            ->where($map)
            ->count();
        $page=new Page($count,$num);
        $list=$case
            ->field("DISTINCT(CaseId),CasePsin,CaseRemark,DealTypeName")
            ->where($map)
            ->order("CaseId")
            ->limit($page->firstRow.','.$page->listRows)
            ->select();
        $show=$page->show();
        $this->assign('page',$show);
        $this->assign('list',$list);
        $this->display('yunyan');
    }
}