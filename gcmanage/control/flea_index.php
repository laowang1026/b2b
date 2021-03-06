<?php
/**


^^^^^^^^^^^^^^^^^^^^^^^^^^^^

 */
defined('GcWebShop') or exit('Access Invalid!');
class flea_indexControl extends SystemControl{
	public function __construct(){
		parent::__construct();
		Language::read('setting,flea_index_setting');
		if($GLOBALS['setting_config']['flea_isuse']!='1'){
			showMessage(Language::get('flea_isuse_off_tips'),'index.php?gct=dashboard&gp=welcome');
		}
	}
	function flea_indexOp(){
		/**
		 * 读取语言包
		 */
		$lang	= Language::getLangContent();
		
		/**
		 * 实例化模型
		 */
		$model_setting = Model('setting');
		/**
		 * 保存信息
		 */
		if ($_POST['form_submit'] == 'ok'){
			$update_array = array();
			$update_array['flea_site_name'] = trim($_POST['flea_site_name']);
			$update_array['flea_site_title'] = trim($_POST['flea_site_title']);
			$update_array['flea_site_description'] = trim($_POST['flea_site_description']);
			$update_array['flea_site_keywords'] = trim($_POST['flea_site_keywords']);
			$update_array['flea_hot_search'] = str_replace('，',',',trim($_POST['flea_hot_search']));

			$result = $model_setting->updateSetting($update_array);
			if ($result === true){
				showMessage($lang['nc_common_save_succ']);
			}else {
				showMessage($lang['nc_common_save_fail']);
			}
		}
		/**
		 * 读取设置内容 $list_setting
		 */
		$list_setting = $model_setting->getListSetting();
		/**
		 * 模板输出
		 */
		Tpl::output('list_setting',$list_setting);
		Tpl::showpage('setting.flea_index');	
	}
	/**
	 * 闲置首页广告
	 */
	public function adv_manageOp(){
		$model_setting = Model('setting');
		if (chksubmit()){
			$input = array();
			//上传图片
			$upload = new UploadFile();
			$upload->set('default_dir',ATTACH_PATH);
			$upload->set('thumb_ext',	'');
			$upload->set('file_name','flea_1.jpg');
			$upload->set('ifremove',false);
			if (!empty($_FILES['adv_pic1']['name'])){
				if(C(OSS_IS_STORAGE) == 0){
					$result = $upload->upfile('adv_pic1');
					if (!$result){
						showMessage($upload->error,'','','error');
					}else{
						$input[1]['pic'] = $upload->file_name;
						$input[1]['url'] = $_POST['adv_url1'];
					}
				}
				if(C(OSS_IS_STORAGE) == 1){
				//AliyunOSS上传图片
				$oss = Logic('oss');
				$bucketname = IMAGE_BUCKET_NAME;
				$extend 	= pathinfo($_FILES['adv_pic1']['name']); 
				$extend 	= strtolower($extend["extension"]); 
				$imgname	= 'flea_adv1';
				$imgfullname= $imgname . '.' . $extend;
				$objectname = DIR_UPLOAD.DS.ATTACH_PATH.DS.$imgfullname;
				$pathname 	= $_FILES['adv_pic1']['tmp_name'];
					if($_FILES['adv_pic1']['type'] =='image/gif' || $_FILES['adv_pic1']['type'] =='image/jpeg' || $_FILES['adv_pic1']['type'] =='image/png'){
						$result = $oss->uploadFile($bucketname, $objectname, $pathname, $options);
						if (!$result){
							showMessage('Upload Error','','','error');
						}else{
							$input[1]['pic'] = $imgfullname;
							$input[1]['url'] = $_POST['adv_url1'];
						}
					}
				}
			}elseif ($_POST['old_adv_pic1'] != ''){
				$input[1]['pic'] = $_POST['old_adv_pic1'];
				$input[1]['url'] = $_POST['adv_url1'];
			}
			$upload->set('default_dir',ATTACH_PATH);
			$upload->set('thumb_ext',	'');
			$upload->set('file_name','flea_2.jpg');
			$upload->set('ifremove',false);
			if (!empty($_FILES['adv_pic2']['name'])){
				if(C(OSS_IS_STORAGE) == 0){
					$result = $upload->upfile('adv_pic2');
					if (!$result){
						showMessage($upload->error,'','','error');
					}else{
						$input[2]['pic'] = $upload->file_name;
						$input[2]['url'] = $_POST['adv_url2'];
					}
				}
				if(C(OSS_IS_STORAGE) == 1){
				//AliyunOSS上传图片
				$oss = Logic('oss');
				$bucketname = IMAGE_BUCKET_NAME;
				$extend 	= pathinfo($_FILES['adv_pic2']['name']); 
				$extend 	= strtolower($extend["extension"]); 
				$imgname	= 'flea_adv2';
				$imgfullname= $imgname . '.' . $extend;
				$objectname = DIR_UPLOAD.DS.ATTACH_PATH.DS.$imgfullname;
				$pathname 	= $_FILES['adv_pic2']['tmp_name'];
					if($_FILES['adv_pic2']['type'] =='image/gif' || $_FILES['adv_pic2']['type'] =='image/jpeg' || $_FILES['adv_pic2']['type'] =='image/png'){
						$result = $oss->uploadFile($bucketname, $objectname, $pathname, $options);
						if (!$result){
							showMessage('Upload Error','','','error');
						}else{
							$input[2]['pic'] = $imgfullname;
							$input[2]['url'] = $_POST['adv_url2'];
						}
					}
				}
			}elseif ($_POST['old_adv_pic2'] != ''){
				$input[2]['pic'] = $_POST['old_adv_pic2'];
				$input[2]['url'] = $_POST['adv_url2'];
			}
			$upload->set('default_dir',ATTACH_PATH);
			$upload->set('thumb_ext', '');
			$upload->set('file_name', 'flea_3.jpg');
			$upload->set('ifremove', false);
			if (!empty($_FILES['adv_pic3']['name'])){
				if(C(OSS_IS_STORAGE) == 0){
					$result = $upload->upfile('adv_pic3');
					if (!$result){
						showMessage($upload->error,'','','error');
					}else{
						$input[3]['pic'] = $upload->file_name;
						$input[3]['url'] = $_POST['adv_url3'];
					}
				}
				if(C(OSS_IS_STORAGE) == 1){
				//AliyunOSS上传图片
				$oss = Logic('oss');
				$bucketname = IMAGE_BUCKET_NAME;
				$extend 	= pathinfo($_FILES['adv_pic3']['name']); 
				$extend 	= strtolower($extend["extension"]); 
				$imgname	= 'flea_adv3';
				$imgfullname= $imgname . '.' . $extend;
				$objectname = DIR_UPLOAD.DS.ATTACH_PATH.DS.$imgfullname;
				$pathname 	= $_FILES['adv_pic3']['tmp_name'];
					if($_FILES['adv_pic3']['type'] =='image/gif' || $_FILES['adv_pic3']['type'] =='image/jpeg' || $_FILES['adv_pic3']['type'] =='image/png'){
						$result = $oss->uploadFile($bucketname, $objectname, $pathname, $options);
						if (!$result){
							showMessage('Upload Error','','','error');
						}else{
							$input[3]['pic'] = $imgfullname;
							$input[3]['url'] = $_POST['adv_url3'];
						}
					}
				}
			}elseif ($_POST['old_adv_pic3'] != ''){
				$input[3]['pic'] = $_POST['old_adv_pic3'];
				$input[3]['url'] = $_POST['adv_url3'];
			}
			$upload->set('default_dir',ATTACH_PATH);
			$upload->set('thumb_ext',	'');
			$upload->set('file_name','flea_4.jpg');
			$upload->set('ifremove',false);
			if (!empty($_FILES['adv_pic4']['name'])){
				if(C(OSS_IS_STORAGE) == 0){
					$result = $upload->upfile('adv_pic4');
					if (!$result){
						showMessage($upload->error,'','','error');
					}else{
						$input[4]['pic'] = $upload->file_name;
						$input[4]['url'] = $_POST['adv_url4'];
					}
				}
				if(C(OSS_IS_STORAGE) == 1){
				//AliyunOSS上传图片
				$oss = Logic('oss');
				$bucketname = IMAGE_BUCKET_NAME;
				$extend 	= pathinfo($_FILES['adv_pic4']['name']); 
				$extend 	= strtolower($extend["extension"]); 
				$imgname	= 'flea_adv4';
				$imgfullname= $imgname . '.' . $extend;
				$objectname = DIR_UPLOAD.DS.ATTACH_PATH.DS.$imgfullname;
				$pathname 	= $_FILES['adv_pic4']['tmp_name'];
					if($_FILES['adv_pic4']['type'] =='image/gif' || $_FILES['adv_pic4']['type'] =='image/jpeg' || $_FILES['adv_pic4']['type'] =='image/png'){
						$result = $oss->uploadFile($bucketname, $objectname, $pathname, $options);
						if (!$result){
							showMessage('Upload Error','','','error');
						}else{
							$input[4]['pic'] = $imgfullname;
							$input[4]['url'] = $_POST['adv_url4'];
						}
					}
				}
			}elseif ($_POST['old_adv_pic4'] != ''){
				$input[4]['pic'] = $_POST['old_adv_pic4'];
				$input[4]['url'] = $_POST['adv_url4'];
			}
			
			$upload->set('default_dir',ATTACH_PATH);
			$upload->set('thumb_ext',	'');
			$upload->set('file_name','flea_5.jpg');
			$upload->set('ifremove',false);
			if (!empty($_FILES['adv_pic5']['name'])){
				if(C(OSS_IS_STORAGE) == 0){
					$result = $upload->upfile('adv_pic5');
					if (!$result){
						showMessage($upload->error,'','','error');
					}else{
						$input[5]['pic'] = $upload->file_name;
						$input[5]['url'] = $_POST['adv_url5'];
					}
				}
				if(C(OSS_IS_STORAGE) == 1){
				//AliyunOSS上传图片
				$oss = Logic('oss');
				$bucketname = IMAGE_BUCKET_NAME;
				$extend 	= pathinfo($_FILES['adv_pic5']['name']); 
				$extend 	= strtolower($extend["extension"]); 
				$imgname	= 'flea_adv5';
				$imgfullname= $imgname . '.' . $extend;
				$objectname = DIR_UPLOAD.DS.ATTACH_PATH.DS.$imgfullname;
				$pathname 	= $_FILES['adv_pic5']['tmp_name'];
					if($_FILES['adv_pic5']['type'] =='image/gif' || $_FILES['adv_pic5']['type'] =='image/jpeg' || $_FILES['adv_pic5']['type'] =='image/png'){
						$result = $oss->uploadFile($bucketname, $objectname, $pathname, $options);
						if (!$result){
							showMessage('Upload Error','','','error');
						}else{
							$input[5]['pic'] = $imgfullname;
							$input[5]['url'] = $_POST['adv_url5'];
						}
					}
				}
				
			}elseif ($_POST['old_adv_pic4'] != ''){
				$input[5]['pic'] = $_POST['old_adv_pic5'];
				$input[5]['url'] = $_POST['adv_url5'];
			}
			$update_array = array();
			if (count($input) > 0){
				$update_array['flea_loginpic'] = serialize($input);
			}
			$result = $model_setting->updateSetting($update_array);
			if ($result === true){
				$this->log(L('nc_edit,loginSettings'),1);
				showMessage(L('nc_common_save_succ'));
			}else {
				$this->log(L('nc_edit,loginSettings'),0);
				showMessage(L('nc_common_save_fail'));
			}
		}
		$list_setting = $model_setting->getListSetting();
		if ($list_setting['flea_loginpic'] != ''){
			$list = unserialize($list_setting['flea_loginpic']);
		}
		Tpl::output('list', $list);
		Tpl::showpage('flea_setting.adv');
	}
	
}