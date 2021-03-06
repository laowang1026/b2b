<?php
/**
 * 会员管理
 *
 *
 *
 ***/

defined('GcWebShop') or exit('Access Invalid!');

class memberControl extends SystemControl{
	const EXPORT_SIZE = 1000;
	public function __construct(){
		parent::__construct();
		Language::read('member');
	}

	/**
	 * 会员管理
	 */
	public function memberOp(){
		$lang	= Language::getLangContent();
		$model_member = Model('member');
				/**
		 * 删除
		 */
		if (chksubmit()){
			/**
			 * 判断是否是管理员，如果是，则不能删除
			 */
			/**
			 * 删除
			 */
			if (!empty($_POST['del_id'])){
				if (is_array($_POST['del_id'])){
					foreach ($_POST['del_id'] as $k => $v){
						$v = intval($v);
						$rs = true;//$model_member->del($v);
						if ($rs){
							//删除该会员商品,店铺
							//获得该会员店铺信息
							$member = $model_member->getMemberInfo(array(
								'member_id'=>$v
							));
							//删除用户
							$model_member->del($v);
						}
					}
				}
				showMessage($lang['nc_common_del_succ']);
			}else {
				showMessage($lang['nc_common_del_fail']);
			}
		}
		//会员级别
		$member_grade = $model_member->getMemberGradeArr();
		if ($_GET['search_field_value'] != '') {
    		switch ($_GET['search_field_name']){
    			case 'member_name':
    				$condition['member_name'] = array('like', '%' . trim($_GET['search_field_value']) . '%');
    				break;
				case 'member_id':
				    $condition['member_id'] = trim($_GET['search_field_value']);
				    break;
    			case 'member_email':
    				$condition['member_email'] = array('like', '%' . trim($_GET['search_field_value']) . '%');
    				break;
				case 'member_mobile':
    				$condition['member_mobile'] = array('like', '%' . trim($_GET['search_field_value']) . '%');
    				break;
    			case 'member_truename':
    				$condition['member_truename'] = array('like', '%' . trim($_GET['search_field_value']) . '%');
    				break;
    		}
		}
		switch ($_GET['search_state']){
			case 'no_informallow':
				$condition['inform_allow'] = '2';
				break;
			case 'no_isbuy':
				$condition['is_buy'] = '0';
				break;
			case 'no_isallowtalk':
				$condition['is_allowtalk'] = '0';
				break;
			case 'no_memberstate':
				$condition['member_state'] = '0';
				break;
		}
		//会员等级
		$search_grade = intval($_GET['search_grade']);
		if ($search_grade >= 0 && $member_grade){
		    $condition['member_exppoints'] = array(array('egt',$member_grade[$search_grade]['exppoints']),array('lt',$member_grade[$search_grade+1]['exppoints']),'and');
		}
		//排序
		$order = trim($_GET['search_sort']);
		if (empty($order)) {
		    $order = 'member_id desc';
		}
		$member_list = $model_member->getMemberList($condition, '*', 20, $order);		
		//整理会员信息
		if (is_array($member_list)){
			foreach ($member_list as $k=> $v){
				$member_list[$k]['member_time'] = $v['member_time']?date('Y-m-d H:i:s',$v['member_time']):'';
				$member_list[$k]['member_login_time'] = $v['member_login_time']?date('Y-m-d H:i:s',$v['member_login_time']):'';
				$member_list[$k]['member_grade'] = ($t = $model_member->getOneMemberGrade($v['member_exppoints'], false, $member_grade))?$t['level_name']:'';
			}
		}
		Tpl::output('member_grade',$member_grade);
		Tpl::output('search_sort',trim($_GET['search_sort']));
		Tpl::output('search_field_name',trim($_GET['search_field_name']));
		Tpl::output('search_field_value',trim($_GET['search_field_value']));
		Tpl::output('member_list',$member_list);
		Tpl::output('page',$model_member->showpage());
		Tpl::showpage('member.index');
	}

	/**
	 * 会员修改
	 */
	public function member_editOp(){
		
		$lang	= Language::getLangContent();
		$model_member = Model('member');
		
		//区域合作方-授权区域（收货地址）-table->sales_area
		$area_list = Model('sales_area')->order('sa_sort asc,sa_id asc')->limit(1000)->select();
		Tpl::output('area_list',$area_list);
		//var_dump($area_list);
		
		//平台合作方-来源合作平台-table->parter
		$saleplat_list	=	Model('partner')->order('partner_id asc')->select();
		Tpl::output('saleplat_list',$saleplat_list);
		//var_dump($saleplat_list);

		/**
		 * 保存
		 */
		if (chksubmit()){
			/**
			 * 验证
			 */
			$obj_validate = new Validate();
			$obj_validate->validateparam = array(
			//array("input"=>$_POST["member_email"], "require"=>"true", 'validator'=>'Email', "message"=>$lang['member_edit_valid_email']),
			);
			$error = $obj_validate->validate();
			if ($error != ''){
				showMessage($error);
			}else {
				$update_array = array();
				$add_array = array();
				$update_array['member_id']			= intval($_POST['member_id']);
				if (!empty($_POST['member_passwd'])){
					$update_array['member_passwd'] = md5($_POST['member_passwd']);
				}
				$update_array['member_email']		= $_POST['member_email'];
				$update_array['member_truename']	= $_POST['member_truename'];
				$update_array['member_sex'] 		= $_POST['member_sex'];
				$update_array['member_qq'] 			= $_POST['member_qq'];
				$update_array['member_ww']			= $_POST['member_ww'];
				$update_array['inform_allow'] 		= $_POST['inform_allow'];
				$update_array['is_buy'] 			= $_POST['isbuy'];
				$update_array['is_allowtalk'] 		= $_POST['allowtalk'];
				$update_array['member_state'] 		= $_POST['memberstate'];
				$update_array['member_cityid']		= $_POST['city_id'];
			    $update_array['member_provinceid']	= $_POST['province_id'];
			    $update_array['member_areainfo']	= $_POST['area_info'];
				$update_array['member_mobile'] 		= $_POST['member_mobile'];
				$update_array['member_code'] 		= $_POST['member_code'];
				$update_array['member_bankname'] 	= $_POST['member_bankname'];
				$update_array['member_accountname'] = $_POST['member_accountname'];
				$update_array['member_account'] 	= $_POST['member_account'];
				$update_array['member_email_bind'] 	= intval($_POST['memberemailbind']);
				$update_array['member_mobile_bind'] = intval($_POST['membermobilebind']);
				$update_array['is_seller']			= intval($_POST['is_seller']);
				$update_array['is_rebate']			= intval($_POST['is_rebate']);//增加是否给二维码用户实现商品返利
				$update_array['is_member_rebate']	= intval($_POST['is_member_rebate']);//增加是否给二维码销售员个人返利
				if(!empty($_POST['member_rebate_rate'])){
					$update_array['member_rebate_rate']	= $_POST['member_rebate_rate'];//增加专属销售员个人返利率
				}
 				$update_array['is_manager']			= intval($_POST['is_manager']);
				
				//$update_array['saleplat_id']		= intval($_POST['saleplat_id']);//增加平台合作方,在平台合作方界面增加绑定
				//$update_array['sa_id']				= intval($_POST['sa_id']); //增加区域合作方,在区域合作方界面增加绑定
				
				//如果关闭平台销售员权限则解除平台合作方、区域合作方、商品级返利、会员级返利和管理者权限
				if (intval($_POST['is_seller']) ==0 ) {
					$update_array['is_manager'] = 0;
					$update_array['is_rebate'] = 0;
					$update_array['is_member_rebate'] = 0;
					$update_array['saleplat_id'] = 0;
					$update_array['sa_id'] = 0;
				}
				if (intval($_POST['is_seller']) ==1 ) {$update_array['is_rebate'] = 1;}
				if (intval($_POST['is_manager']) ==1 ) {$update_array['is_rebate'] = 0;$update_array['is_member_rebate'] = 1;}
				if (intval($_POST['is_manager']) ==0 ) {$update_array['is_rebate'] = 1;$update_array['is_member_rebate'] = 0;}
				
				//默认is_rebate=1,商品级返利和会员级返利不能同时存在
				if (intval($_POST['is_rebate']) ==1 ) {$update_array['is_member_rebate'] = 0;}
				if (intval($_POST['is_member_rebate']) ==1 ) {$update_array['is_rebate'] = 0;}
				
				if (!empty($_POST['member_avatar'])){
					$update_array['member_avatar'] = $_POST['member_avatar'];
				}
				
				//增加销售员信息到新表'open_salesman'
				/*$add_array['member_id']			= intval($_POST['member_id']);
				$add_array['member_truename']	= $_POST['member_truename'];
				$add_array['sales_time']		= TIMESTAMP;
				$add_array['is_rebate']			= intval($_POST['is_rebate']);
				$add_array['is_member_rebate']	= intval($_POST['is_member_rebate']);
				if (intval($_POST['is_member_rebate']) ==1 ) {
					$add_array['is_rebate'] = 0;
				}
				if (intval($_POST['is_rebate']) ==1 && intval($_POST['is_member_rebate']) ==1 ) {
					$add_array['is_member_rebate'] = 1;
				}
				if(!empty($_POST['member_rebate_rate'])){
					$add_array['member_rebate_rate']	= $_POST['member_rebate_rate'];
				}
				$re = $model_member->table('open_salesman')->where(array('member_id' => intval($_POST['member_id'])))->select();
				if(intval($_POST['is_rebate']) ==1 || intval($_POST['is_member_rebate']) ==1 ){
					if(!$re){
					$model_member->addSalesman($add_array);
					}else{
						$model_member->editSalesman(array('member_id'=>intval($_POST['member_id'])),$add_array);
					}
				}*/
				
				//增加销售员信息结束
				 
				$result = $model_member->editMember(array('member_id'=>intval($_POST['member_id'])),$update_array);
				if ($result){
					$url = array(
						array(
						'url'=>'index.php?gct=member&gp=member',
						'msg'=>$lang['member_edit_back_to_list'],
						),
						array(
						'url'=>'index.php?gct=member&gp=member_edit&member_id='.intval($_POST['member_id']),
						'msg'=>$lang['member_edit_again'],
						),
					);
					if($update_array['is_seller'] == 1 && $update_array['is_rebate'] == 0 && $update_array['is_member_rebate'] == 0){
						$this->log(L('nc_dredge_salesman').'[会员ID:'.$_POST['member_id'].']',1);
					}else if($update_array['is_seller'] == 1 && $update_array['is_rebate'] == 1){
						$this->log(L('nc_dredge_rebate').'[会员ID:'.$_POST['member_id'].']',1);
					}else if($update_array['is_seller'] == 1 && $update_array['is_member_rebate'] == 1){
						$this->log(L('nc_dredge_member_rebate').'[会员ID:'.$_POST['member_id'].']',1);
					}else{
						$this->log(L('nc_edit,member_index_name').'[会员ID:'.$_POST['member_id'].']',1);
					}
					
					showMessage($lang['member_edit_succ'],$url);
				}else {
					showMessage($lang['member_edit_fail']);
				}
			}
		}
		$condition['member_id'] = intval($_GET['member_id']);
		$member_array = $model_member->getMemberInfo($condition);

		Tpl::output('member_array',$member_array);
		Tpl::showpage('member.edit');
	}
	
	/**
	 * 会员审核
	 */
	public function member_examineOp(){
		$lang	= Language::getLangContent();
		$model_member = Model('member');
		if (chksubmit()){
			$update_array = array();
			$update_array['member_examine']	= 1;
			$result = $model_member->editMember(array('member_id'=>intval($_POST['member_id'])),$update_array);
			if ($result){
				$this->log('审核会员成功，'.'[会员ID:'.$_POST['member_id'].']',1);
				showMessage('审核会员成功','index.php?gct=member&gp=member');
			}else {
				showMessage('审核会员失败');
			}
		}
		if($_GET['reason']){
			$update_array = array();
			$update_array['member_examine']	= 2;
			$update_array['disagree_content'] = $_GET['reason'];
			$result = $model_member->editMember(array('member_id'=>intval($_GET['member_id'])),$update_array);
			if ($result){
				$this->log('审核会员不通过，原因：'.$_GET['reason'].'，[会员ID:'.$_GET['member_id'].']',1);
				showMessage('审核会员不通过成功','index.php?gct=member&gp=member');
			}else {
				showMessage('审核会员失败');
			}
		}
		$condition['member_id'] = intval($_GET['member_id']);
		$member_array = $model_member->getMemberInfo($condition);
		Tpl::output('member_array',$member_array);
		Tpl::showpage('member.examine');
	}

	/**
	 * 新增会员
	 */
	public function member_addOp(){

		$lang	= Language::getLangContent();
		$model_member = Model('member');
		/**
		 * 保存
		 */
		if (chksubmit()){
			/**
			 * 验证
			 */
			$obj_validate = new Validate();
			$obj_validate->validateparam = array(
			    array("input"=>$_POST["member_name"], "require"=>"true", "message"=>$lang['member_add_name_null']),
			    array("input"=>$_POST["member_passwd"], "require"=>"true", "message"=>'密码不能为空')
			    //array("input"=>$_POST["member_mobile"], "require"=>"true", 'validator'=>'Mobile', "message"=>$lang['member_edit_valid_mobile'])
				//array("input"=>$_POST["member_email"], "require"=>"true", 'validator'=>'Email', "message"=>$lang['member_edit_valid_email'])
			);
			$error = $obj_validate->validate();
			if ($error != ''){
				showMessage($error);
			}else {
				
				$insert_array = array();
				$insert_array['member_name']	= trim($_POST['member_name']);
				$insert_array['member_passwd']	= trim($_POST['member_passwd']);
				$insert_array['member_mobile']	= trim($_POST['member_mobile']);
				$insert_array['member_email']	= trim($_POST['member_email']);
				$insert_array['member_truename']= trim($_POST['member_truename']);
				$insert_array['member_sex'] 	= trim($_POST['member_sex']);
				$insert_array['member_qq'] 		= trim($_POST['member_qq']);
				$insert_array['member_ww']		= trim($_POST['member_ww']);
				$insert_array['is_membername_modify'] = 1;
				$insert_array['refer_id']		= 0;
                //默认允许举报商品
                $insert_array['inform_allow'] 	= '1';
				$insert_array['is_seller'] 	= '1';//默认开通平台销售员
				$insert_array['is_rebate'] 	= '1';//默认开通平台销售员后开通商品级返利
				if (!empty($_POST['member_avatar'])){
					$insert_array['member_avatar'] = trim($_POST['member_avatar']);
				}

				$result = $model_member->addMember($insert_array);
				if ($result){
					$url = array(
					array(
					'url'=>'index.php?gct=member&gp=member',
					'msg'=>$lang['member_add_back_to_list'],
					),
					array(
					'url'=>'index.php?gct=member&gp=member_add',
					'msg'=>$lang['member_add_again'],
					),
					);
					$this->log(L('nc_add,member_index_name').'[	'.$_POST['member_name'].']',1);
					showMessage($lang['member_add_succ'],$url);
				}else {
					showMessage($lang['member_add_fail']);
				}
			}
		}
		Tpl::showpage('member.add');
	}

	/**
	 * ajax操作
	 */
	public function ajaxOp(){
		switch ($_GET['branch']){
			/**
			 * 验证会员是否重复
			 */
			case 'check_user_name':
				$model_member = Model('member');
				$condition['member_name']	= $_GET['member_name'];
				$condition['member_id']	= array('neq',intval($_GET['member_id']));
				$list = $model_member->getMemberInfo($condition);
				if (empty($list)){
					echo 'true';exit;
				}else {
					echo 'false';exit;
				}
				break;
				/**
			 * 验证邮件是否重复
			 */
			case 'check_email':
				$model_member = Model('member');
				$condition['member_email'] = $_GET['member_email'];
				$condition['member_id'] = array('neq',intval($_GET['member_id']));
				$list = $model_member->getMemberInfo($condition);
				if (empty($list)){
					echo 'true';exit;
				}else {
					echo 'false';exit;
				}
				break;
		}
	}

}
