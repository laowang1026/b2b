<?php defined('GcWebShop') or exit('Access Invalid!');?>

<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3><?php echo $lang['nc_member_predepositmanage'];?></h3>
      <ul class="tab-base">
        <li><a href="JavaScript:void(0);" class="current"><span><?php echo $lang['admin_predeposit_rechargelist']?></span></a></li>
        <li><a href="index.php?gct=predeposit&gp=pd_cash_list"><span><?php echo $lang['admin_predeposit_cashmanage']; ?></span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form method="post" name="form1" id="form1" action="index.php?gct=predeposit&gp=recharge_edit&id=<?php echo intval($_GET['id']);?>">
    <input type="hidden" name="form_submit" value="ok"/>
    <table class="table tb-type2 nobdb">
      <tbody>
        <tr class="noborder">
          <td colspan="2" class="required"><label><?php echo $lang['admin_predeposit_sn']; ?>:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><?php echo $output['info']['pdr_sn']; ?></td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label><?php echo $lang['admin_predeposit_recharge_price'];?>(<?php echo $lang['currency_zh']; ?>):</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><?php echo $output['info']['pdr_amount']; ?></td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label><?php echo $lang['admin_predeposit_membername']; ?>:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><?php echo $output['info']['pdr_member_name']; ?></td>
          <td class="vatop tips"></td>
        </tr>
        <tr class="noborder">
          <td colspan="2" class="required"><label for="site_name"><?php echo $lang['admin_predeposit_paytime'];?>: </label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input readonly id="payment_time" class="" name="payment_time" value="" type="text" /></td>
          <td class="vatop tips"></td>
        </tr>
        <tr class="noborder">
          <td colspan="2" class="required"><label for="site_name"><?php echo $lang['admin_predeposit_payment'];?> : </label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform">
            <select name="payment_code" class="querySelect">
            <option value=""><?php echo $lang['nc_please_choose'];?></option>
            <?php foreach($output['payment_list'] as $val) { ?>
            <option value="<?php echo $val['payment_code']; ?>"><?php echo $val['payment_name']; ?></option>
            <?php } ?>
            </select>
          </td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label for="closed_reason">?????????????????????????????? : </label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" class="txt2" name="trade_no" id="trade_no" maxlength="40"></td>
          <td class="vatop tips"><span class="vatop rowform">??????????????????????????????????????????</span></td>
        </tr>
      </tbody>
      <tfoot>
        <tr class="tfoot">
          <td colspan="2" ><a href="JavaScript:void(0);" id="ncsubmit" class="btn"><span><?php echo $lang['nc_submit'];?></span></a></td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery-ui/jquery.ui.js"></script> 
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery-ui/i18n/zh-CN.js" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="<?php echo RESOURCE_SITE_URL;?>/js/jquery-ui/themes/ui-lightness/jquery.ui.css"  />
<script type="text/javascript">
$(function(){
    $('#payment_time').datepicker({dateFormat: 'yy-mm-dd',maxDate: '<?php echo date('Y-m-d',TIMESTAMP);?>'});
    $('#ncsubmit').click(function(){
    	if($("#form1").valid()){
        	if (confirm("???????????????\n?????????????????????\n?????????????????????????????????????????????\n????????????????")){
        	}else{
        		return false;
        	}
        	$('#form1').submit();
    	}
    });
	$("#form1").validate({
		errorPlacement: function(error, element){
			error.appendTo(element.parent().parent().prev().find('td:first'));
        },
        rules : {
        	payment_time : {
                required : true
            },
            payment_code : {
                required : true
            },
            trade_no    :{
                required : true
            }       
        },
        messages : {
        	payment_time : {
                required : '?????????????????????'
            },
            payment_code : {
                required : '?????????????????????'
            },
            trade_no : {
                required : '???????????????????????????????????????'
            }
        }
	});
});
</script>