<?php
namespace Admin\Controller;
use Admin\Controller;

class IndexController extends BaseController {

	public function index() {
		$data['member'] = D('member') -> count();
		$data['articlescrap'] = D('articlescrap') -> count();
		//输出文章个数
		$data['links'] = D('links') -> count();
		$this -> assign('data', $data);
		$this -> display();
	}

}
