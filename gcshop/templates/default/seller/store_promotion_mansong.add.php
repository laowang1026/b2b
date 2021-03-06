<?php defined('GcWebShop') or exit('Access Invalid!');?>
<link rel="stylesheet" type="text/css" href="<?php echo RESOURCE_SITE_URL;?>/js/jquery-ui/themes/ui-lightness/jquery.ui.css"  />
<div class="tabmenu">
  <?php include template('layout/submenu');?>
</div>
<div class="ncsc-form-default">
  <div class="alert alert-block">
    <h4><?php echo $lang['nc_explain'].$lang['nc_colon'];?></h4>
    <ul>
      <li><?php echo $lang['mansong_add_explain1'];?></li>
      <li><?php echo $lang['mansong_add_explain2'];?></li>
      <li><?php echo $lang['mansong_add_explain3'];?></li>
    </ul>
  </div>
  <form id="add_form" action="index.php?gct=store_promotion_mansong&gp=mansong_save" method="post">
    <input id="level2_flag" type="hidden" value="false" />
    <input id="level3_flag" type="hidden" value="false" />
    <dl>
      <dt><i class="required">*</i><?php echo $lang['mansong_name'].$lang['nc_colon'];?></dt>
      <dd>
        <input id="mansong_name" name="mansong_name" type="text" maxlength="25" class="w400 text"/>
        <span class="error-message"></span>
        <p class="hint"><?php echo $lang['mansong_name_explain'];?></p>
      </dd>
    </dl>
    <dl>
      <dt><i class="required">*</i><?php echo $lang['start_time'].$lang['nc_colon'];?></dt>
      <dd>
        <input id="start_time" name="start_time" type="text" class="text w130"/><em class="add-on"><i class="icon-calendar"></i></em>
        <span class="error-message"></span>
        <p class="hint"><?php echo sprintf($lang['mansong_add_start_time_explain'],date('Y-m-d H:i',$output['start_time']));?></p>
      </dd>
    </dl>
    <dl>
      <dt><i class="required">*</i><?php echo $lang['end_time'].$lang['nc_colon'];?></dt>
      <dd>
      <input id="end_time" name="end_time" type="text" class="text w130"/><em class="add-on"><i class="icon-calendar"></i></em>
        <span class="error-message"></span>
        <p class="hint">
<?php if (!$output['isOwnShop']) { ?>
        <?php echo sprintf($lang['mansong_add_end_time_explain'],date('Y-m-d H:i',$output['end_time']));?>
<?php } ?>
        </p>
      </dd>
    </dl>
    <dl>
      <dt><i class="required">*</i>???????????????<?php echo $lang['nc_colon'];?></dt>
      <dd>
        <input type="hidden" id="mansong_rule_count" name="rule_count">
        <ul id="mansong_rule_list" class="ncsc-mansong-rule-list">
        </ul>
        <a href="javascript:void(0);" id="btn_add_rule" class="ncsc-btn ncsc-btn-acidblue"><i class="icon-plus-sign"></i>????????????</a>
        <div id="div_add_rule" style="display:none;">
        <div class="ncsc-mansong-error"><span id="mansong_price_error" style="display:none;"><i class="icon-exclamation-sign"></i>??????????????????????????????????????????</span><span id="mansong_discount_error" style="display:none;"><i class="icon-exclamation-sign"></i>????????????????????????????????????</span></div>
        <div class="ncsc-mansong-rule">
        <span>???????????????&nbsp;<input id="mansong_price" type="text" class="text w50"><em class="add-on"><i class="icon-renminbi"></i></em>???</span>
        <span>????????????&nbsp;<input id="mansong_discount" type="text" class="text w50"><em class="add-on"><i class="icon-renminbi"></i></em>???</span>
        <span>?????????&nbsp;<a href="javascript:void(0);" id="btn_show_search_goods" class="ncsc-btn"><i class="icon-gift"></i>????????????</a></span> <div id="mansong_goods_item" class="gift"></div>

        <div id="div_search_goods" class="div-goods-select mt10" style="display: none;">
                    <table class="search-form">
                        <tr>
                            <th class="w150">
                                <strong>??????????????????????????????</strong>
                            </th>
                            <td class="w160">
                                <input id="search_goods_name" type="text w150" class="text" name="goods_name" value=""/>
                            </td>
                            <td class="w70 tc">
                                <a href="javascript:void(0);" id="btn_search_goods" class="ncsc-btn"/><i class="icon-search"></i><?php echo $lang['nc_search'];?></a>
                            </td>
                            <td class="w10"></td>
                            <td>
                                <p class="hint">??????????????????????????????????????????????????????????????????</p>
                            </td>
                        </tr>
                    </table>
                    <a id="btn_hide_search_goods" class="close" href="javascript:void(0);">X</a>
                    <div id="div_goods_search_result" class="search-result" style="width:739px;"></div>
                </div>
            </div>
            <div id="mansong_rule_error" style="display:none;">?????????????????????????????????</div>
            <div class="mt10">
            <a href="javascript:void(0);" id="btn_save_rule" class="ncsc-btn ncsc-btn-acidblue"><i class="icon-ok-circle"></i>??????????????????</a>
            <a href="javascript:void(0);" id="btn_cancel_add_rule" class="ncsc-btn ncsc-btn-orange"><i class="icon-ban-circle"></i>??????</a></div>
        </div>
        <span class="error-message"></span>
        <p class="hint">?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br/>?????????????????????????????????????????????</p>
      </dd>
    </dl>
    <dl>
      <dt><?php echo $lang['text_remark'].$lang['nc_colon'];?></dt>
      <dd>
        <textarea name="remark" rows="3" id="remark" maxlength="100" class="textarea w400"></textarea>
        <p class="hint"><?php echo $lang['mansong_remark_explain'];?></p>
      </dd>
    </dl>
    <div class="bottom">
      <label class="submit-border"><input id="submit_button" type="submit" value="<?php echo $lang['nc_submit'];?>"  class="submit"></label>
    </div>
  </form>
</div>
<script id="mansong_rule_template" type="text/html">
<li nctype="mansong_rule_item">
<span>???????????????<strong><%=price%></strong>?????? </span>
<span>????????????<strong><%=discount%></strong>?????? </span>
<%if(goods_id>0){%>
<span>????????? <%==goods%></span>
<%}%>
<input type="hidden" name="mansong_rule[]" value="<%=price%>,<%=discount%>,<%=goods_id%>">
<a nctype="btn_del_mansong_rule" href="javascript:void(0);" class="ncsc-btn-mini ncsc-btn-red"><i class="icon-trash"></i>??????</a>
</li>
</script>
<script id="mansong_goods_template" type="text/html">
    <div nctype="mansong_goods" class="selected-mansong-goods">
    <a href="<%=goods_url%>" title="<%=goods_name%>" class="goods-thumb" target="_blank">
        <img src="<%=goods_image_url%>"/>
    </a>
    <input nctype="mansong_goods_id" type="hidden" value="<%=goods_id%>">
    </div><a nctype="btn_del_mansong_goods" href="javascript:void(0);" class="ncsc-btn-mini ncsc-btn-red"><i class="icon-trash"></i>????????????????????????</a>
</script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/common.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/template.min.js"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery-ui/i18n/zh-CN.js"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery-ui-timepicker-addon/jquery-ui-timepicker-addon.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo RESOURCE_SITE_URL;?>/js/jquery-ui-timepicker-addon/jquery-ui-timepicker-addon.min.css"  />
<script type="text/javascript">
$(document).ready(function(){
    $('#start_time').datetimepicker({
        controlType: 'select'
    });
    $('#end_time').datetimepicker({
        controlType: 'select'
    });

    jQuery.validator.methods.greaterThanDate = function(value, element, param) {
        var date1 = new Date(Date.parse(param.replace(/-/g, "/")));
        var date2 = new Date(Date.parse(value.replace(/-/g, "/")));
        return date1 < date2;
    };
    jQuery.validator.methods.lessThanDate = function(value, element, param) {
        var date1 = new Date(Date.parse(param.replace(/-/g, "/")));
        var date2 = new Date(Date.parse(value.replace(/-/g, "/")));
        return date1 > date2;
    };
    jQuery.validator.methods.greaterThanStartDate = function(value, element) {
        var start_date = $("#start_time").val();
        var date1 = new Date(Date.parse(start_date.replace(/-/g, "/")));
        var date2 = new Date(Date.parse(value.replace(/-/g, "/")));
        return date1 < date2;
    };

    //????????????????????????
    $("#add_form").validate({
        errorPlacement: function(error, element){
            var error_td = element.parent('dd').children('span.error-message');
            error_td.append(error);
        },
        onfocusout: false,
        submitHandler:function(form){
            ajaxpost('add_form', '', '', 'onerror');
        },
        rules : {
            mansong_name : {
                required : true
            },
            start_time : {
                required : true,
                greaterThanDate : '<?php echo date('Y-m-d H:i',$output['start_time']);?>'
            },
            end_time : {
                required : true,
<?php if (!$output['isOwnShop']) { ?>
                lessThanDate : '<?php echo date('Y-m-d H:i',$output['end_time']);?>',
<?php } ?>
                greaterThanStartDate : true
            },
            rule_count: {
                required: true,
                min: 1
            }
        },
        messages : {
            mansong_name : {
                required : '<i class="icon-exclamation-sign"></i><?php echo $lang['mansong_name_error'];?>'
            },
            start_time : {
                required : '<i class="icon-exclamation-sign"></i><?php echo sprintf($lang['mansong_add_start_time_explain'],date('Y-m-d H:i',$output['start_time']));?>',
                greaterThanDate : '<i class="icon-exclamation-sign"></i><?php echo sprintf($lang['mansong_add_start_time_explain'],date('Y-m-d H:i',$output['start_time']));?>'
            },
            end_time : {
                required : '<i class="icon-exclamation-sign"></i><?php echo sprintf($lang['mansong_add_end_time_explain'],date('Y-m-d H:i',$output['end_time']));?>',
<?php if (!$output['isOwnShop']) { ?>
                lessThanDate : '<i class="icon-exclamation-sign"></i><?php echo sprintf($lang['mansong_add_end_time_explain'],date('Y-m-d H:i',$output['end_time']));?>',
<?php } ?>
                greaterThanStartDate : '<i class="icon-exclamation-sign"></i><?php echo $lang['greater_than_start_time'];?>'
            },
            rule_count: {
                required: '<i class="icon-exclamation-sign"></i>????????????????????????????????????',
                min: '<i class="icon-exclamation-sign"></i>????????????????????????????????????'
            }
        }
    });

    // ????????????????????????
    $('#btn_add_rule').on('click', function() {
        $('#mansong_price').val('');
        $('#mansong_discount').val('');
        $('#mansong_goods_item').html('');
        $('#mansong_price_error').hide();
        $('#mansong_rule_error').hide();
        $('#div_add_rule').show();
        $('#btn_add_rule').hide();
    });

    // ????????????
    $('#btn_save_rule').on('click', function() {
        var mansong = {};
        mansong.price = Number($('#mansong_price').val());
        if(isNaN(mansong.price) || mansong.price <= 0) {
            $('#mansong_price_error').show();
            return false;
        } else {
            $('#mansong_price_error').hide();
        }
        mansong.discount = Number($('#mansong_discount').val());
        if(isNaN(mansong.discount) || mansong.discount < 0 || mansong.discount > mansong.price) {
            $('#mansong_discount_error').show();
            return false;
        } else {
            $('#mansong_discount_error').hide();
        }
        mansong.goods = $('#mansong_goods_item').find('[nctype="mansong_goods"]').html();
        mansong.goods_id = Number($('#mansong_goods_item').find('[nctype="mansong_goods_id"]').val());
        if(isNaN(mansong.goods_id)) {
            mansong.goods_id = 0;
        }
        if(mansong.discount == 0 && mansong.goods_id == 0) {
            $('#mansong_rule_error').show();
            return false;
        } else {
            $('#mansong_rule_error').hide();
        }
        var mansong_rule_item = template.render('mansong_rule_template', mansong);
        $('#mansong_rule_list').append(mansong_rule_item);
        close_div_add_rule();
    });

    // ????????????????????????
    $('#mansong_rule_list').on('click', '[nctype="btn_del_mansong_rule"]', function() {
        $(this).parents('[nctype="mansong_rule_item"]').remove();
        close_div_add_rule();
    });

    // ??????????????????
    $('#btn_cancel_add_rule').on('click', function() {
        close_div_add_rule();
    });

    // ????????????????????????
    function close_div_add_rule() {
        var rule_count = $('#mansong_rule_list').find('[nctype="mansong_rule_item"]').length;
        if( rule_count >= 3) {
            $('#btn_add_rule').hide();
        } else {
            $('#btn_add_rule').show();
        }
        $('#div_add_rule').hide();
        $('#mansong_rule_count').val(rule_count);
    }

    // ????????????????????????
    $('#btn_show_search_goods').on('click', function() {
        $('#div_search_goods').show();
    });

    // ????????????
    $('#btn_search_goods').on('click', function() {
        var url = "<?php echo urlShop('store_promotion_mansong', 'search_goods');?>";
        url += '&' + $.param({goods_name: $('#search_goods_name').val()});
        $('#div_goods_search_result').load(url);
    });

    // ??????????????????
    $('#div_goods_search_result').on('click', 'a.demo', function() {
        $('#div_goods_search_result').load($(this).attr('href'));
        return false;
    });

    // ????????????????????????
    $('#btn_hide_search_goods').on('click', function() {
        $('#div_search_goods').hide();
    });

    // ????????????
    $('#div_goods_search_result').on('click', '[nctype="btn_add_mansong_goods"]', function() {
        var goods = {};
        goods.goods_id = $(this).attr('data-goods-id');
        goods.goods_name = $(this).attr('data-goods-name');
        goods.goods_image_url = $(this).attr('data-goods-image-url');
        goods.goods_url = $(this).attr('data-goods-url');
        var mansong_goods_item = template.render('mansong_goods_template', goods);
        $('#mansong_goods_item').html(mansong_goods_item);
        $('#div_search_goods').hide();
    });

    // ?????????????????????
    $('#mansong_goods_item').on('click', '[nctype="btn_del_mansong_goods"]', function() {
        $('#mansong_goods_item').html('');
    });

});
</script>
