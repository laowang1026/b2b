<div class="eject_con">
  <div id="warning"></div>
  <form method="post" action="index.php?gct=store_liveorder&gp=cancel&order_id=<?php echo $output['order']['order_id']; ?>" id="order_cancel_form" onsubmit="ajaxpost('order_cancel_form','','','onerror')">
    <input type="hidden" name="form_submit" value="ok" />
    <dl>
      <dt>订单号<?php echo $lang['nc_colon'];?></dt>
      <dd><span class="num"><?php echo $output['order']['order_sn']; ?></span></dd>
    </dl>
    <dl>
      <dt>取消原因<?php echo $lang['nc_colon'];?></dt>
      <dd>
        <ul class="eject_con-list">
          <li>
            <input type="radio" class="radio" checked name="state_info" id="d1" value="购买其他抢购" />
            <label for="d1">购买其他抢购</label>
          </li>
          <li>
            <input type="radio" class="radio" name="state_info" id="d3" value="从其他店铺购买" />
            <label for="d3">从其他店铺购买</label>
          </li>
          <li>
            <input type="radio" class="radio" name="state_info" flag="other_reason" id="d4" value="" />
            <label for="d4">其他原因</label>
          </li>
          <li id="other_reason" style="display:none;">
            <textarea name="state_info1" class="textarea w300 h50" rows="2" id="other_reason_input"></textarea>
          </li>
        </ul>
      </dd>
    </dl>
    <div class="bottom">
      <label class="submit-border"><input type="submit" id="confirm_button" class="submit" value="<?php echo $lang['nc_ok'];?>提交" /></label>
    </div>
  </form>
</div>
<script type="text/javascript">
$(function(){
       $("input[name='state_info']").click(function(){
        if ($(this).attr('flag') == 'other_reason')
        {
            $('#other_reason').show();
        }
        else
        {
            $('#other_reason').hide();
        }
    });
});
</script>