<?php defined('GcWebShop') or exit('Access Invalid!');?>
<style type="text/css">
.jcarousel-container { width: 640px; margin: 10px 0;}
.jcarousel-container li { width: 160px; height: 160px;}
.jcarousel-container .goods-pic { width: 160px; height: 160px;}
.jcarousel-container .goods-pic a { line-height: 0; background-color: #FFF; text-align: center; vertical-align: middle; display: table-cell; *display: block; width: 160px; height: 160px; overflow: hidden;}
.jcarousel-container .goods-pic a img { max-width: 160px; max-height: 160px; margin-top:expression(160-this.height/2); *margin-top:expression(80-this.height/2)/*IE6,7*/;
}
</style>
<div class="sidebar">
<?php include template('sns/sns_sidebar_visitor');?>
<?php include template('sns/sns_sidebar_messageboard');?>
</div>
<div class="left-content">
  <!-- εδΊ«εε START -->
  <?php if (!empty($output['goodslist'])){?>
  <div class="tabmenu">
    <ul class="tab">
      <li class="active"><a href="index.php?gct=member_snshome&gp=shareglist<?php if(!empty($output['master_id'])){ echo '&mid='.$output['master_id']; }?>"><?php if ($output['relation'] == 3){echo $lang['sns_me']; }else {?>TA<?php }echo $lang['sns_share_of_goods'];?></a></li>
    </ul><span class="more"><a href="index.php?gct=member_snshome&gp=shareglist<?php if(!empty($output['master_id'])){ echo '&mid='.$output['master_id']; }?>"><?php echo $lang['nc_more'];?></a></span>
  </div>
  <ul class="sns-home-share">
    <?php foreach ($output['goodslist'] as $k=>$v){ ?>
    <li id="recordone_<?php echo $v['share_id'];?>"><a href="index.php?gct=member_snshome&gp=goodsinfo&mid=<?php echo $v['share_memberid'];?>&id=<?php echo $v['share_id'];?>" title="<?php echo $v['snsgoods_goodsname']?>" class="pic" style=" background-image:url(<?php echo cthumb($v['snsgoods_goodsimage'],240,$v['snsgoods_storeid']);?>)"> </a>
      <p class="pinterest-cmt"><?php echo $v['share_content'];?></p>
      <div class="ops"> <span class="ops-like" id="likestat_<?php echo $v['share_goodsid'];?>"> <a href="javascript:void(0);" nc_type="likebtn" data-param='{"gid":"<?php echo $v['share_goodsid'];?>"}' class="<?php echo $v['snsgoods_havelike']==1?'noaction':''; ?>"><i class="<?php echo $v['snsgoods_havelike']==1?'noaction':''; ?> pngFix"></i><?php echo $lang['sns_like'];?></a> <em nc_type="likecount_<?php echo $v['share_goodsid'];?>"><?php echo $v['snsgoods_likenum'];?></em> </span> <span class="ops-comment"><a href="index.php?gct=member_snshome&gp=goodsinfo&mid=<?php echo $v['share_memberid'];?>&id=<?php echo $v['share_id'];?>" title="<?php echo $lang['sns_comment'];?>"><i class="pngFix"></i></a><em><?php echo $v['share_commentcount'];?></em> </span> </div>
    </li>
    <?php }?>
  </ul>
  <?php }?>
  <!-- εδΊ«εε END -->
  <!-- εδΊ«εΎη START -->
  <?php if(!empty($output['pic_list'])){?>
  <div class="tabmenu">
    <ul class="tab">
      <li class="active"><a href="index.php?gct=sns_album<?php if(!empty($output['master_id'])){ echo '&mid='.$output['master_id']; }?>"><?php if ($output['relation'] == 3){echo $lang['sns_me']; }else {?>TA<?php }echo $lang['sns_of_album'];?></a></li>
    </ul><span class="more"><a href="index.php?gct=sns_album<?php if(!empty($output['master_id'])){ echo '&mid='.$output['master_id']; }?>"><?php echo $lang['nc_more'];?></a></span>
  </div>
  <ul class="sns-home-album" >
    <?php foreach($output['pic_list'] as $v){?>
    <li><a href="index.php?gct=sns_album&gp=album_pic_info&id=<?php echo $v['ap_id'];?>&class_id=<?php echo $v['ac_id']?>&mid=<?php echo $output['master_id'];?><?php if(!empty($_GET['sort'])){?>&sort=<?php echo $_GET['sort']; }?>" title="<?php echo $v['ap_name']?>" style=" background-image:url(<?php echo UPLOAD_SITE_URL.DS.ATTACH_MALBUM.DS.$output['master_id'].DS.str_ireplace('.', '_240.', $v['ap_cover']);?>)"> </a>
      <p><?php echo $lang['sns_upload_time'].$lang['nc_colon'].date("Y-m-d",$v['upload_time'])?> </p>
    </li>
    <?php }?>
  </ul>
  <?php }?>
  <!-- εδΊ«εΎη END -->
  <!-- εδΊ«εΊιΊ START -->
  <?php if(!empty($output['storelist'])){?>
  <div class="tabmenu">
    <ul class="tab">
      <li class="active"><a href="index.php?gct=member_snshome&gp=storelist<?php if(!empty($output['master_id'])){ echo '&mid='.$output['master_id']; }?>"><?php if ($output['relation'] == 3){echo $lang['sns_me']; }else {?>TA<?php }echo $lang['sns_share_of_store'];?></a></li>
    </ul>
    <span class="more"><a href="index.php?gct=member_snshome&gp=storelist<?php if(!empty($output['master_id'])){ echo '&mid='.$output['master_id']; }?>"><?php echo $lang['nc_more'];?></a></span>
  </div>
  <div class="sns-home-store">
    <ul>
      <?php foreach($output['storelist'] as $k=>$v){?>
      <li id="recordone_<?php echo $v['share_id']; ?>">
        <dl>
          <dt>
            <h3><a href="javascript:void(0)"><?php echo $v['share_membername'];?></a><?php echo date('Y-m-d', $v['share_addtime']);?></h3>
          </dt>
          <dd><i class="pngFix"></i>
            <p><?php echo $v['share_content'] != ''?$v['share_content']:$lang['sns_shared_the_shop'];?><i class="pngFix"></i></p>
          </dd>
          <div class="clear">&nbsp;</div>
        </dl>
        <div class="gcshop-content">
          <div class="arrow pngFix">&nbsp;</div>
          <div class="info">
            <div class="title"><a title="<?php echo $v['store_name'];?>" href="<?php echo urlShop('show_store', 'index', array('store_id'=>$v['store_id']));?>"><i class="ico" ></i><?php echo $v['store_name'];?></a>
            </div>
          </div>
          <div class="detail">
            <?php if (!empty($v['goods'])){?>
            <ul nc_type="mycarousel" class="jcarousel-skin-tango">
              <?php foreach((array)$v['goods'] as $g_k=>$g_v){?>
              <li><div class="goods-pic"><a href="<?php echo $g_v['goodsurl'];?>" target="_blank" title="<?php echo $g_v['goods_name'];?>"><img alt="<?php echo $g_v['goods_name'];?>" src="<?php echo thumb($g_v,240);?>" /></a></div></li>
              <?php }?>
            </ul>
            <?php }?>
          </div>
          <div style="clear: both;"></div>
        </div>
      </li>
      <?php }?>
    </ul>
  </div>
  <?php }?>
  <!-- εδΊ«εΊιΊ END -->
  <!-- ζ°ι²δΊ START -->
  <?php if (!empty($output['tracelist'])){ ?>
  <div class="tabmenu">
    <ul class="tab">
      <li class="active"><a href="index.php?gct=member_snshome&gp=trace<?php if(!empty($output['master_id'])){ echo '&mid='.$output['master_id']; }?>"><?php if ($output['relation'] == 3){echo $lang['sns_me']; }else {?>TA<?php }echo $lang['sns_of_fresh_news'];?></a></li>
    </ul><span class="more"><a href="index.php?gct=member_snshome&gp=trace<?php if(!empty($output['master_id'])){ echo '&mid='.$output['master_id']; }?>"><?php echo $lang['nc_more'];?></a></span>
  </div>
  <ul class="fd-list" id="friendtrace">
    <?php foreach ($output['tracelist'] as $k=>$v){?>
    <li nc_type="tracerow_<?php echo $v['trace_id']; ?>">
      <dl class="fd-wrap">
        <dt><img src="<?php echo getMemberAvatarForID($v['trace_memberid']);?>"  data-param="{'id':<?php echo $v['trace_memberid'];?>}" nctype="mcard">
          <h3><a href="index.php?gct=member_snshome&mid=<?php echo $v['trace_memberid'];?>" target="_blank" data-param="{'id':<?php echo $v['trace_memberid'];?>}" nctype="mcard"><?php echo $v['trace_membername'];?><?php echo $lang['nc_colon'];?></a><?php echo parsesmiles($v['trace_title']);?></h3>
        </dt>
        <dd>
          <?php if ($v['trace_originalid'] > 0 || $v['trace_from'] == '2'){//θ½¬εΈεε?Ή?>
          <div class="fd-forward">
            <?php if ($v['trace_originalstate'] == 1){ echo $lang['sns_trace_originaldeleted'];}else{?>
            <?php echo parsesmiles($v['trace_content']);?>
            <?php if($v['trace_from'] == 'gcshop'){?>
            <div class="stat"><span><?php echo $lang['sns_original_forward']; ?><?php echo $v['trace_orgcopycount']>0?"({$v['trace_orgcopycount']})":''; ?></span>&nbsp;&nbsp; <span><a href="index.php?gct=member_snshome&gp=traceinfo&mid=<?php echo $v['trace_originalmemberid'];?>&id=<?php echo $v['trace_originalid'];?>" target="_blank"><?php echo $lang['sns_original_comment']; ?><?php echo $v['trace_orgcommentcount']>0?"({$v['trace_orgcommentcount']})":''; ?></a></span> </div>
            <?php }?>
            <?php }?>
          </div>
          <?php } else {?>
          <?php echo parsesmiles($v['trace_content']);?>
          <?php }?>
        </dd>
        <dd>
          <span class="goods-time fl"><?php echo date('Y-m-d H:i',$v['trace_addtime']);?></span>
          <span class="fl ml10"><?php echo snsShareFrom($v['trace_from']);?></span>
          <span class="fr"><a href="javascript:void(0);" nc_type="fd_forwardbtn" data-param='{"txtid":"<?php echo $v['trace_id'];?>"}'><?php echo $lang['sns_forward']; ?></a>&nbsp;|&nbsp;<a href="javascript:void(0);" nc_type="fd_commentbtn" data-param='{"txtid":"<?php echo $v['trace_id'];?>","mid":"<?php echo $v['trace_memberid'];?>"}'><?php echo $lang['sns_comment']; ?><?php echo $v['trace_commentcount']>0?"({$v['trace_commentcount']})":'';?></a></span>
        </dd>
        <!-- θ―θ?Ίζ¨‘εstart -->
        <div id="tracereply_<?php echo $v['trace_id'];?>" style="display:none;"></div>
        <!-- θ―θ?Ίζ¨‘εend -->
        <!-- θ½¬εζ¨‘εstart -->
        <div id="forward_<?php echo $v['trace_id'];?>" style="display:none;">
          <div class="forward-widget">
            <div class="forward-edit">
              <form id="forwardform_<?php echo $v['trace_id'];?>" method="post" action="index.php?gct=member_snsindex&gp=addforward&type=<?php echo $output['type'];?>&irefresh=1">
                <input type="hidden" name="originaltype" value="0"/>
                <input type="hidden" name="originalid" value="<?php echo $v['trace_id'];?>"/>
                <div class="forward-add">
                  <textarea resize="none" id="content_forward<?php echo $v['trace_id'];?>" name="forwardcontent"><?php echo $v['trace_title_forward'];?></textarea>
                  <span class="error"></span>
                  <!-- ιͺθ―η  -->
                  <div id="forwardseccode<?php echo $v['trace_id'];?>" class="seccode" style="display: none;">
                    <label for="captcha"><?php echo $lang['nc_checkcode'].$lang['nc_colon']; ?></label>
                    <input name="captcha" class="text" type="text" size="4" maxlength="4"/>
                    <img src="" title="<?php echo $lang['wrong_checkcode_change']; ?>" name="codeimage" onclick="this.src='index.php?gct=seccode&gp=makecode&nchash=<?php echo $output['nchash'];?>&t=' + Math.random()"/> <span><?php echo $lang['wrong_seccode'];?></span>
                    <input type="hidden" name="nchash" value="<?php echo $output['nchash'];?>"/>
                  </div>
                  <input type="text" style="display:none;" />
                  <!-- ι²ζ­’ηΉε»Enterι?ζδΊ€ -->
                  <div class="gct"> <span class="skin-blue"><span class="btn"><a href="javascript:void(0);" nc_type="forwardbtn" data-param='{"txtid":"<?php echo $v['trace_id'];?>"}'><?php echo $lang['sns_forward'];?></a></span></span> <span id="forwardcharcount<?php echo $v['trace_id'];?>" style="float:right;"></span> <a class="face" nc_type="smiliesbtn" data-param='{"txtid":"forward<?php echo $v['trace_id'];?>"}' href="javascript:void(0);" ><?php echo $lang['sns_smiles'];?></a> </div>
                </div>
              </form>
            </div>
            <ul class="forward-list">
            </ul>
          </div>
        </div>
        <!-- θ½¬εζ¨‘εend -->
        <div class="clear"></div>
      </dl>
    </li>
    <?php }?>
  </ul>
  <?php }?>
  <!-- ζ°ι²δΊ END -->
  <!-- δΈΊη©Ίζη€Ί START -->
  <?php if( empty($output['goodslist']) && empty($output['pic_list']) && empty($output['storelist']) && empty($output['tracelist'])){?>
  <div class="sns-norecord"><i class="store-ico pngFix"></i><span><?php echo $lang['sns_regrettably'];?><br />
    <?php if ($output['relation'] == 3){echo $lang['sns_me']; }else {?>TA<?php } echo $lang['sns_of_sns_without_any_share'];?></span></div>
  <?php }?>
  <!-- δΈΊη©Ίζη€Ί END -->
</div>
<div class="clear"></div>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jcarousel/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.ajaxdatalazy.js" charset="utf-8"></script>
<script type="text/javascript">
$(function(){
	//εΎηθ½?ζ’
    $('[nc_type="mycarousel"]').jcarousel({visible: 4});
  	//ε ι€εδΊ«ηεΊιΊ
	$("[nc_type='storedelbtn']").live('click',function(){
		var data_str = $(this).attr('data-param');
        eval( "data_str = "+data_str);
        showDialog('<?php echo $lang['nc_common_op_confirm'];?>','confirm', '', function(){
        	ajax_get_confirm('','index.php?gct=member_snsindex&gp=delstore&id='+data_str.sid);
			return false;
		});
	});
});
</script>
