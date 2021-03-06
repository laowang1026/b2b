<?php defined('GcWebShop') or exit('Access Invalid!');?>
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/index.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo SHOP_RESOURCE_SITE_URL;?>/js/home_index.js" charset="utf-8"></script>
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/ie6.js" charset="utf-8"></script>
<![endif]-->

<script type="text/javascript">
var uid = window.location.href.split("#V3");
var  fragment = uid[1];
if(fragment){
	if (fragment.indexOf("V3") == 0) {
		document.cookie='uid=0';
	}else {
		document.cookie='uid='+uid[1];
	}
}
</script>
<style type="text/css">
	#img{width: 80px;height: 80px;margin: -230px 0 0 50PX;display: block;border: solid 2px #E6387F;border-radius:40px;position: absolute;z-index: 999;}
	
	#masonry_box .goods-content{width: 206px;height: 360px;border: 3px transparent solid;margin: 0px;position: relative;z-index: 11;transition: border-color 0.4s ease-in-out;-moz-transition: border-color 0.4s ease-in-out;-webkit-transition:border-color 0.4s ease-in-out;-o-transition: border-color 0.4s ease-in-out;overflow: hidden;box-shadow: 0 0 3px rgba(153,153,153,0.1);}

	#masonry_box .goods-content:hover{border-color: #e6387f;}

	#masonry_box .goods-content>.goods-pic>img{max-width: 210px;}

	#masonry_box .goods-pic{background-color: #fff;margin: 0;position: relative;z-index: 1;overflow: hidden;height: 220px;}

	#masonry_box .goods-info{width: 210px;padding-top: 5px;position: relative;top: 70px; z-index: 11;background:rgba(255,255,255,0.9);}
	
	#masonry_box .store a.name :link{text-decoration: none;color: #333;
	}

	#masonry_box .add-cart a{font-weight: 600;font-size: 14px;line-height: 20px;color: #F5CDBF;text-shadow: -2px 0 0 rgba(0,0,0,0.05);background-color: #e6387f;display: block;text-align: center;height: 20px;padding: 8px 0;}

	#masonry_box .add-cart a:hover{text-decoration: none;color: #f5f5f5;}

	#masonry_box .goods-name{padding: 1px 5px 1px 5px;/*white-space: nowrap;*/overflow: hidden;text-overflow: ellipsis;height:35px;}

	#masonry_box .goods-price{padding: 5px 5px 1px 5px;height: 26px;}

	#masonry_box .goods-info .goods-price em.sale-price{font-size: 14px;font-weight: 600;font-style: normal;/*text-overflow: ellipsis;*/white-space: nowrap;max-width: 70px;float: left;/*overflow: hidden;*/}

	#masonry_box .goods-info .goods-price .raty{font-size: 0;line-height: 0;float: right;margin-right: 6px;}

	#masonry_box .goods-info .goods-price .raty img {letter-spacing: normal;word-spacing: normal;display: inline-block;width: 16px;height: 16px;margin: 2px 0;}
	
	#masonry_box .lt-item{line-height: 20px;background:rgba(255,255,255,0.9);display: block;clear: both;}
	#masonry_box .lt-item em{color:#666;font-weight:600;}
	#masonry_box .rule-num{margin-left:20px;}
	#masonry_box .rule-price{float: right;margin-right:20px;color:#666;font-weight:600;}

</style>
 
<div class="clear"></div>
<div id="sticky_footer">
	<div id="wrapperfooter">
		<span class="wrap_quan">????????????</span>
		<div id="search" class="head-search">
			<!--???????????????-->
			<form class="search-form" method="get" action="<?php echo SHOP_SITE_URL;?>/index.php">
				<input type="hidden" value="search" id="search_act" name="gct">
				 <input placeholder="???????????????????????????????????????" name="keyword" id="keyword" type="text" class="input-text" value="" maxlength="60" x-webkit-speech="" lang="zh-CN" onwebkitspeechchange="foo()" x-webkit-grammar="builtin:search">
				<input type="submit" id="button" value="??????" class="input-submit">
			</form>
		</div>
	</div>
</div>
<!-- HomeFocusLayout Begin-->
<div class="home-focus-layout">
  <?php echo $output['web_html']['index_pic'];?>
</div>
<!--HomeFocusLayout End-->
<?php echo loadadv(1089);?>
<!--?????????
<?php if($loadadv = loadadv(11,'html')){?>
<div style="width:100%; border-bottom:1px solid #e7e7e7;">
	<div class="index-width">
		<div id="1F"></div>
		<div><?php echo $loadadv;?></div>
	</div>
</div>
<?php }?>
-->
<!--????????????????????????-->
<?php if($loadadv = loadadv(1058,'html')){?>
<div class="activityVenue">
	<?php echo $loadadv;?>
</div>
<?php }?>

<!--????????????
<div class="updateDaily"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/shop/gb04.png" alt="????????????" /></div>
<div class="home-sale-layout index-width mt30">
  <div class="left-layout"> <?php echo $output['web_html']['index_sale'];?> </div>
  <div id="2F"></div>
</div>
-->
<!--????????????
<?php if (!empty($output['group_list'])) { ?>
<div class="updateDaily"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/shop/gb12.png" alt="????????????" /></div>
<div class="home-sale-layout index-width tttj_index mt30">
<img style="height:50px; margin: 0 0 8px 15px;" src="<?php echo SHOP_TEMPLATES_URL;?>/images/tttejia.png" >
 <a class="tiao" href="<?php echo urlShop('show_groupbuy', 'index',array('be_doing'=> 1));?>">??????????????????<img src="<?php echo SHOP_TEMPLATES_URL;?>/images/shop/gif051.gif" /></a>
	<ul>
	<?php foreach ($output['group_list'] as $groupbuy) { ?>
		<li class="<?php echo $output['current'];?>">
			<div class="tttj_left">
				<img class='img' src="<?php echo gthumb($groupbuy['groupbuy_image'],'mid');?>" alt="<?php echo $groupbuy['goods_name'];?>">
			</div>
			<div class="tttj_right">
				<a title="<?php echo $groupbuy['goods_name'];?>" href="<?php echo $groupbuy['goods_url'];?>" target="_blank">
					<div class="groupbuy-title"><span class="title"><?php echo $groupbuy['groupbuy_name'];?></span></div>
					<div class="country">
						<img src="<?php echo UPLOAD_SITE_URL?>/country/<?php echo $groupbuy['country_code'];?>.png"/>
						<span class="title1"><?php echo $groupbuy['goods_name'];?></span> 
					</div>
					<div class="country-jingle">
						<span class="jingle"><?php echo $groupbuy['goods_jingle'];?></span> 
					</div>
					<?php list($integer_part, $decimal_part) = explode('.', $groupbuy['groupbuy_price']);?>
					<?php if ($groupbuy['goods_storage']==0) { ?>
						<div class="hotdate" >
							<i class="icon-time"></i>
							<span class='sheng'><?php echo '????????????';?></span>
						</div>
					<?php }else{ ?>
						<div class="hotdate" >
							<?php $u +=1;?>
							<i class="icon-time"></i>
							<span class='sheng'><?php echo $groupbuy['count_down_text'];?>???</span>

							<span class= "tian" id="t_h<?php echo $u+1;?>"> &nbsp;&nbsp;&nbsp;00:</span>
							<span class= "tian" id="t_m<?php echo $u+1;?>">00:</span>
							<span class= "tian" id="t_s<?php echo $u+1;?>">00</span>
							<script type="text/javascript">  
							function getRTime(){
								var uu = <?php echo $groupbuy['end_time'];?> *1000;//???????????? 
								var NowTime = new Date().getTime();
								var t =uu - NowTime;
								t = t>=0 ? t : 0;
								var d =Math.floor(t/1000/60/60/24);
								var h =Math.floor(t/1000/60/60%24);
								var m =Math.floor(t/1000/60%60);
								var s =Math.floor(t/1000%60);
								document.getElementById("t_h<?php echo $u+1;?>").innerHTML = h + " :";
								document.getElementById("t_m<?php echo $u+1;?>").innerHTML = m + " :";
								document.getElementById("t_s<?php echo $u+1;?>").innerHTML = s + "";
							}
							setInterval(getRTime,1000);
							</script> 
							
						</div>
					<?php }?>
					<div class="item-prices">
						<span class="price"><i><?php echo $lang['currency'];?></i><?php echo $integer_part;?><em>.<?php echo $decimal_part;?></em></span>
						<div class="dock"><del class="orig-price"><?php echo $lang['currency'].$groupbuy['goods_marketprice'];?></del> </div>
						<div class="dock">
						<span class="limit-num"><?php echo number_format($groupbuy['groupbuy_rebate'],1);?>&nbsp;<?php echo $lang['text_zhe'];?></span>
						</div>
						<?php if ($groupbuy['goods_storage']==0) { ?>
							<a href="javascript: ;" class="buy-button used-up">?????????</a>
						<?php } else {?>
							<span href="<?php echo $groupbuy['goods_url'];?>" target="_blank" class="buy-button">?????????</span>
						<?php }?>
					</div>
					
				<?php $c += 1;?>
				<?php if($c == 5){?>
				<?php break;}?>
				</a>
			</div>
		</li>
	<?php } ?>
	</ul>
</div>
<?php } ?>
-->
<!--????????????
<?php if (!empty($output['xianshi_item'])) { ?>
<div class="updateDaily"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/shop/gb28.png" alt="????????????" /></div>
<div class="home-sale-layout xstm_index index-width mt30">
	<div class="group-list">
	  <a class="tiao" href="/gcshop/groupbuy_list-0-0-0-0-0-0.html" class="more">??????????????????<img src="<?php echo SHOP_TEMPLATES_URL;?>/images/shop/gif051.gif" /></a>
		<ul>
		<?php foreach ($output['xianshi_item'] as $xianshi) { ?>
			<?php $t += 1; ?>
			<li class="<?php echo $output['current'];?>">
				<div class="ncg-list-content1"> 
					<a title="<?php echo $xianshi['goods_name'];?>" href="<?php echo $xianshi['goods_url'];?>" class="pic-thumb" target="_blank">
						<img src="<?php echo cthumb($xianshi['goods_image'],'mid',$store_id, $xianshi['goods_commonid']);?>" alt="<?php echo $xianshi['goods_name'];?>">
					</a>  
					<div class="title">
						<a title="<?php echo $xianshi['xianshi_name'];?>" href="<?php echo $xianshi['goods_url'];?>" target="_blank"><?php echo $xianshi['goods_name'];?></a>
					</div>
					<?php list($integer_part, $decimal_part) = explode('.', $xianshi['xianshi_price']);?>
					<div class="item-prices"> 
						<span class="price">
							<del class="orig-price"><?php echo $lang['currency'].$xianshi['goods_marketprice'];?></del>
							<i><?php echo $lang['currency'];?></i><?php echo $integer_part;?>.<?php echo $decimal_part;?>
							<span class="limit-num"><?php echo number_format(10*$xianshi['xianshi_price']/$xianshi['goods_marketprice'],1);?>&nbsp;<?php echo $lang['text_zhe'];?></span> 
						</span> 
					</div>
					<hr>
					<p class="sold-num"><?php echo $xianshi['xianshi_title'];?></p>
				</div>
			</li>
			<?php if($t == 8){ break; }?>
		<?php } ?>
		</ul>
	</div>
</div>
<?php } ?>
-->

<!--StandardLayout Begin--> 
<?php echo $output['web_html']['index'];?>
<!--StandardLayout End-->


<?php if($loadadv = loadadv(1068)){?>
<!--?????????????????? Begin-->
<div class="wrapper">
    <div class="mt30"><?php echo $loadadv;?></div>
</div>
<?php }?>


<!-- ??????????????????????????? -->
<div class="home-sale-layout wrapper" >
	<div id="masonry_box" class="masonry_box">
		<ul class="col"></ul>
		<ul class="col"></ul>
		<ul class="col"></ul>
		<ul class="col"></ul>
		<ul class="col" style="margin-right:0"></ul>
		<a href="javascript:" class="loadMeinvMOre" id="loadMeinvMOre">????????????????????????</a>
	</div>
</div>


<?php if($loadadv = loadadv(1079,'html')){?>
<!--?????????????????????-->
<div class="wrapper">
    <div class="mt30"><?php echo $loadadv;?></div>
</div>
<?php }?>

<!--
<div id="ads">
	<img class="us" src="/gcshop/templates/default/images/6.png"/>
	<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1662233123&amp;site=qq&amp;menu=yes" title="QQ: 1662233123">
		<img class="uus" src="/gcshop/templates/default/images/7.png"/>
	</a>
	<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=1115533123&amp;site=qq&amp;menu=yes" title="QQ: 1115533123" target="_blank">
		<img class="uus1" src="/gcshop/templates/default/images/7.png"/>
	</a>
</div>
-->

<?php if($loadadv = loadadv(1069)){?>
<!-- ?????????????????? -->
<div id="dd"> 
	<div id="dd"><?php echo $loadadv;?></div>
	<script src="<?php echo SHOP_TEMPLATES_URL;?>/home/layer/layer.js"></script>
</div>


<?php }?>

<div class="footer-line"></div>
<!--????????????????????????-->
<?php require_once template('layout/index_ensure');?>
<!--????????????????????????-->
<!--StandardLayout Begin-->
<div class="nav_Sidebar">
<a class="nav_Sidebar_1" href="javascript:;" ></a>
<a class="nav_Sidebar_2" href="javascript:;" ></a>
<a class="nav_Sidebar_3" href="javascript:;" ></a>
<a class="nav_Sidebar_4" href="javascript:;" ></a>
<a class="nav_Sidebar_5" href="javascript:;" ></a>
<a class="nav_Sidebar_6" href="javascript:;" ></a> 
<!--<a class="nav_Sidebar_7" href="javascript:;" ></a>
<a class="nav_Sidebar_8" href="javascript:;" ></a>
<a class="nav_Sidebar_9" href="javascript:;" ></a>
<a class="nav_Sidebar_10" href="javascript:;" ></a>-->
</div>
<!--StandardLayout End-->
<script>
/* ????????????????????? */
$(window).scroll(function() {
    if ( $(this).scrollTop()- $(this).height() > 10) {
    	$("#sticky_footer").slideDown("slow");
    }
    if ( $(this).scrollTop()- $(this).height() < 10) {
    	$("#sticky_footer").slideUp("slow"); 
    }
});
</script>