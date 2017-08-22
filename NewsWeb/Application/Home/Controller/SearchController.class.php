<?php

namespace Home\Controller;
use Think\Controller;
class SearchController extends CommonController {
	 public function index() {
	 
	 	    $conds = array();
			$title = $_POST['title'];
	        if($title) {
	            $conds['title'] = $title;
	        }
			$news =  D("News")->getNewsByTitle($conds);
			if(!$news ) {
			      return $this->error("没有与之相关的新闻文章");
			        }
	        $this->assign('news',$news);
	        $this->display("Search/index");
	
//	        $count = intval($news['count']) + 1;
//	        D('News')->updateCount($id, $count);
//	
//	        $content = D("NewsContent")->find($id);
//	        $news['content'] = htmlspecialchars_decode($content['content']);
//	
//	        $advNews = D("PositionContent")->select(array('status'=>1,'position_id'=>3),2);
//	        $rankNews = $this->getRank();
//	
//	        $this->assign('result', array(
//	            'rankNews' => $rankNews,
//	            'advNews' => $advNews,
//	            'catId' => $news['catid'],
//	            'news' => $news,
//	        ));
//	
//	        $this->display("Search/index");
//	    }
//	   //文章预览功能的实现
//	    public function  view() {
//	        if(!getLoginUsername()) {
//	            $this->error("您没有权限访问该页面");
//	        }
//	        $this->index();
//	
	    }
 }
?>