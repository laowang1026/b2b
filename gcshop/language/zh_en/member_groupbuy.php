<?php
defined('GcWebShop') or exit('Access Invalid!');
/**
 *  
 */
$lang['groupbuy_state_all'] = 'panic buying';
$lang['groupbuy_state_verify'] = 'unaudited';
$lang['groupbuy_state_cancel'] = 'canceled';
$lang['groupbuy_state_progress'] = 'already passed';
$lang['groupbuy_state_fail'] = 'audit failure';
$lang['groupbuy_state_close'] = 'already over';

/**
 * 
 **/
$lang['group_template'] = 'panic buying';
$lang['group_template_tip'] = 'select the buying activity and time interval to participate';
$lang['group_name'] = 'snap name';
$lang['group_name_tip'] = '30snap header name length up to 30 characters';
$lang['group_goods_sel'] = 'select goods';
$lang['group_help'] = 'panic buying';
$lang['start_time'] = 'start time';
$lang['end_time'] = 'end time';
$lang['goods_price'] = 'commodity price';
$lang['goods_storage'] = 'merchandise inventory';
$lang['store_price'] = 'price';
$lang['groupbuy_price'] = 'panic buying';
$lang['groupbuy_price_tip'] = '<br/>0.01~1000000(：)<br/>，panic buying price for the goods to participate in the event when the promotional price of <br/> must be between 0.01~1000000 (unit: yuan) <br/> rush to buy the price should include postage, buying goods system does not charge postage';
$lang['limit_type'] = 'limit type';
$lang['virtual_quantity'] = 'virtual quantity';
$lang['min_quantity'] = 'into the number of grab';
$lang['sale_quantity'] = 'purchase quantity';
$lang['max_num'] = 'total merchandise';
$lang['group_intro'] = 'ben introduced';
$lang['group_pic'] = 'snapping pictures';
$lang['group_edit'] = 'editorial content';

$lang['groupbuy_class'] = 'panic category';
$lang['groupbuy_class_tip'] = 'please select the type of goods purchased';
$lang['groupbuy_area'] = 'subordinate region';
$lang['groupbuy_goods'] = 'panic buying';
$lang['groupbuy_goods_explain'] = 'click on the top of the input box from the selected goods to participate in the purchase of goods';
$lang['min_quantity_explain'] = '， "1"the minimum number of successful purchases, the default is 1"';
$lang['virtual_quantity_explain'] = '，，virtual purchase quantity, only for the front display, does not affect the transaction record';
$lang['sale_quantity_explain'] = 'ID， "0"the maximum number of buyers can purchase ID, unlimited number please fill in "0"';
$lang['max_num_explain'] = '<br/>the total number of purchased goods shall be equal to or less than the quantity of the merchandise stock <br/> please confirm in advance that the amount of merchandise stock to be involved in is sufficient';
$lang['group_pic_explain'] = ',530、290、1M，<br/>jpg、jpeg、gif、png。for buying pictures of the event page, please use the width of 530 pixels, height of 290 pixels, the size of the picture in the 1M, <br/> support JPG, JPEG, GIF, PNG format upload.';
$lang['group_pic_explain2'] = '，,210、180、1M，<br/>jpg、jpeg、gif、png。for the purchase of the recommended side of the page, the home page recommended bits of the picture, please use the width of 210 pixels, height of 180 pixels, the size of the picture in the 1M, <br/> support JPG, JPEG, GIF, PNG format upload.';
$lang['groupbuy_message_not_start'] = 'buying activity has not yet begun';
$lang['groupbuy_message_close'] = 'the rush is over';
$lang['groupbuy_message_start'] = 'limited quantity please order as soon as possible';
$lang['groupbuy_message_success'] = 'buying success can continue to buy';

/**
 * 
 **/
$lang['groupbuy_unavailable'] = 'buy function is not open';
$lang['no_groupbuy_template_in_progress'] = 'no ongoing rush to buy';
$lang['no_groupbuy_info'] = 'no buying information';
$lang['no_groupbuy_template_soon'] = 'no rush to start';
$lang['no_groupbuy_template_history'] = 'no history buying activity';
$lang['no_groupbuy'] = 'there is no rush to buy information';
$lang['param_error'] = 'parameter error';
$lang['group_name_error'] = 'snap name cannot be empty';
$lang['group_goods_error'] = 'please choose to buy goods';
$lang['group_help_error'] = 'snap note cannot be empty';
$lang['start_time_error'] = 'start time cannot be empty';
$lang['end_time_error'] = 'end time cannot be empty';
$lang['groupbuy_price_error'] = 'please enter the right buying price';
$lang['group_pic_error'] = '，jpg/gif/pngsnap pictures cannot be empty, and must be in jpg/gif/png format';
$lang['min_quantity_error'] = '，0the number can not be empty, and must be an integer greater than 0';
$lang['virtual_quantity_error'] = '，the virtual number cannot be empty and must be an integer';
$lang['sale_quantity_error'] = '，the purchase quantity cannot be empty, it must be an integer';
$lang['max_num_error'] = '，the total number of goods can not be empty, and must be less than the current inventory';
$lang['groupbuy_none'] = 'the platform is currently in no rush to buy';
$lang['group_goods_is_exist'] = '，this item has been purchased in this period, please choose other commodities';
$lang['goods_info'] = 'commodity information';
$lang['buyer_list'] = 'purchase record';
$lang['store_info'] = 'store information';
$lang['groupbuy_not_state'] = 'buying activity has not yet begun';
$lang['groupbuy_closed'] = 'the rush is over';
$lang['goods_not_enough'] = 'commodity inventory shortage';
$lang['groupbuy_not_enough'] = 'insufficient balance';
$lang['groupbuy_sale_quantity'] = 'you can only buy';
$lang['can_not_buy'] = 'you cannot buy your own merchandise';

$lang['groupbuy_add_success'] = 'please wait for the audit to be released';
$lang['groupbuy_add_fail'] = 'launch failure';
$lang['groupbuy_edit_success'] = 'buy event editor';
$lang['groupbuy_edit_fail'] = 'buy event editor failed';
$lang['groupbuy_quota_add_success'] = 'up plans to buy success';

/**
 * 
 **/
$lang['groupbuy_title'] = 'commodity buying';
$lang['groupbuy_soon'] = 'begin in a minute';
$lang['groupbuy_history'] = 'to panic buying';
$lang['text_year'] = 'year';
$lang['text_month'] = 'month';
$lang['text_day'] = 'day';
$lang['text_tian'] = 'day';
$lang['text_hour'] = 'time';
$lang['text_minute'] = 'branch';
$lang['text_second'] = 'second';
$lang['text_to'] = 'to';
$lang['text_di'] = 'no.';
$lang['text_qi'] = 'stage';
$lang['text_groupbuy'] = 'mall rush';
$lang['text_groupbuy_list'] = 'panic list';
$lang['text_groupbuy_detail'] = 'panic buying';
$lang['text_goods_price'] = 'original price';
$lang['text_zhe'] = 'fracture';
$lang['text_discount'] = 'discount';
$lang['text_save'] = 'save';
$lang['groupbuy_buy'] = 'i want to rob';
$lang['groupbuy_close'] = 'already over';
$lang['text_end_time'] = 'end of period';
$lang['text_start_time'] = 'distance begins';
$lang['text_no_limit'] = 'unlimited';
$lang['text_class'] = 'classification';
$lang['text_price'] = 'price';
$lang['text_unit_price'] = 'unit price';
$lang['text_default'] = 'default';
$lang['text_sale'] = 'sales volume';
$lang['text_rebate'] = 'discount';
$lang['text_order'] = 'sort';
$lang['text_country'] = 'whole country';
$lang['text_people'] = 'people';
$lang['text_buy'] = 'already purchased';
$lang['text_jiangyu'] = 'in';
$lang['text_start'] = 'just in time';
$lang['see_store'] = 'shop around';
$lang['see_goods'] = 'view merchandise';
$lang['to_see'] = 'go to see';
$lang['history_hot'] = 'previous sales ranking';
$lang['current_hot'] = 'hot buying';
$lang['text_buyer'] = 'buyers';
$lang['text_buy_count'] = 'purchase quantity';
$lang['text_buy_now'] = 'buy now';
$lang['text_buy_time'] = 'order time';
$lang['text_piece'] = 'piece';
$lang['text_goods_buy'] = 'this product has been snapped up';
$lang['text_goods_store'] = 'commodity shop';
$lang['text_goods_commend'] = 'shop recommended goods';
$lang['text_read_agree1'] = 'i have read';
$lang['text_read_agree2'] = 'and agree';
$lang['text_agreement'] = 'rush service agreement';
$lang['agree_must'] = 'you must agree to this agreement';
$lang['store_goods_album_insert_users_photo'] = 'insert photo album';
$lang['text_remain'] = 'surplus';

/**
 * index
 */
$lang['groupbuy_index_no_right']			= 'your store level does not have this permission';
$lang['groupbuy_index_in_audit']			= 'your store level is under review';
$lang['groupbuy_index_add_success']			= 'add panic buying activity';
$lang['groupbuy_index_add_fail']			= 'failed to add panic buying';
$lang['groupbuy_index_not_exists']			= 'no acquisition activity found';
$lang['groupbuy_index_modify_success']		= 'modify buying activities successfully';
$lang['groupbuy_index_modify_fail']			= 'failed to modify buying activity';
$lang['groupbuy_index_default_spec']		= 'default specification';
$lang['groupbuy_index_all_group']			= 'panic buying';
$lang['groupbuy_index_unpublish']			= 'unpublished';
$lang['groupbuy_index_canceled']			= 'canceled';
$lang['groupbuy_index_going']				= 'have in hand';
$lang['groupbuy_index_finished']			= 'already completed';
$lang['groupbuy_index_ended']				= 'already over';
$lang['groupbuy_index_num']					= '()(number)';
$lang['groupbuy_index_amount']				= '()(quantity)';
$lang['groupbuy_index_desc']				= 'explain';
$lang['groupbuy_index_order_num']			= 'order number';
$lang['groupbuy_index_input_name']			= 'please fill in the name';
$lang['groupbuy_index_desc']				= 'panic buying';
$lang['groupbuy_index_end_time']			= 'end time';
$lang['groupbuy_index_search_first']		= 'please search for the goods';
$lang['groupbuy_index_input_right_num']		= 'please fill in the correct number';
$lang['groupbuy_index_input_right_amount']	= 'please fill in the correct number of pieces';
$lang['groupbuy_index_def_quantity_error']  = 'please fill in the order';
$lang['groupbuy_index_goods_sum_null']		= 'total merchandise cannot be empty';
$lang['groupbuy_index_goods_sum_one']		= '1the total number of commodities shall not be less than 1';
$lang['groupbuy_index_input_right_price']	= 'please fill in the price';
$lang['groupbuy_index_max_per_user_error']  = 'please fill in the number of purchase';
$lang['groupbuy_index_input_price']			= 'please fill in the price';
$lang['groupbuy_index_base_info']			= 'buying basic information';
$lang['groupbuy_index_activity_name']		= 'activity name';
$lang['groupbuy_index_publish_now']			= 'immediate release';
$lang['groupbuy_index_yes']					= 'yes';
$lang['groupbuy_index_no']					= 'no';
$lang['groupbuy_index_publish_tip']			= '“”，“”if the "immediate release", in addition to "buy" information will not be changed';
$lang['groupbuy_index_start_time']			= 'start time';
$lang['groupbuy_index_end_time']			= 'end time';
$lang['groupbuy_index_goods_info']			= 'buying commodity information';
$lang['groupbuy_index_choose_goods']		= 'select goods';
$lang['groupbuy_index_order_num_now']		= 'order number';
$lang['groupbuy_index_order_num_published']	= 'the number of orders that have been displayed after release';
$lang['groupbuy_index_condition']			= 'limiting condition';
$lang['groupbuy_index_by_num']				= 'to buy the success of the number of looting';
$lang['groupbuy_index_by_amount']			= 'the number of products to buy into the grab';
$lang['groupbuy_index_group_num']			= 'number of people involved';
$lang['groupbuy_index_group_espect_num']	= 'expected number of orders to complete the purchase';
$lang['groupbuy_index_group_amount']		= 'into pieces';
$lang['groupbuy_index_group_espect_amount']	= 'number of expected orders to complete the purchase';
$lang['groupbuy_index_amount_limit']		= 'purchase per person';
$lang['groupbuy_index_amount_limit_tip']	= '，0the number of items that can be ordered by each participant is 0';
$lang['groupbuy_index_goods_sum']			= 'total merchandise';
$lang['groupbuy_index_amount_max_limit']	= '，the number of orders that can be ordered by all the participants, the default is the number of goods inventory';
$lang['groupbuy_index_intro']				= 'ben introduced';
$lang['groupbuy_index_spec_price']			= 'standard price';
$lang['groupbuy_index_spec']				= 'specifications';
$lang['groupbuy_index_stock']				= 'stock';
$lang['groupbuy_index_store_price']			= 'shop price';
$lang['groupbuy_index_group_price']			= 'rush price';
$lang['groupbuy_index_search']				= 'query';
$lang['groupbuy_index_submit']				= 'submit';
$lang['groupbuy_index_new_group']			= 'new panic';
$lang['groupbuy_index_activity_state']		= 'active state';
$lang['groupbuy_index_start_time']			= 'start time';
$lang['groupbuy_index_group_num']			= 'snapped up';
$lang['groupbuy_index_to']					= 'to';
$lang['groupbuy_index_year']				= 'year';
$lang['groupbuy_index_month']				= 'month';
$lang['groupbuy_index_day']					= 'day';
$lang['groupbuy_index_publish_tip']			= '，you cannot edit it after the release, but are you sure you want to publish it?';
$lang['groupbuy_index_publish']				= 'release';
$lang['groupbuy_index_del_tip']				= '，，if the purchase has been completed, then delete the purchase will lead to a single user can not order, you are sure to do so';
$lang['groupbuy_index_order']				= 'order';
$lang['groupbuy_index_order_state']			= 'order situation';
$lang['groupbuy_index_finish_tip']			= '，this action will set the snap to a successful state. are you sure you want to close the reservation';
$lang['groupbuy_index_finish']				= 'complete';
$lang['groupbuy_index_end']				    = 'end reservation';
$lang['groupbuy_index_no_record']			= 'no eligible goods found';
$lang['groupbuy_index_loading_list']		= 'loading list';
$lang['groupbuy_index_no_goods']			= 'no related items found';
$lang['groupbuy_index_choose_goods']		= 'select goods';
$lang['groupbuy_index_goods_name']			= 'commodity name';
$lang['groupbuy_index_store_class']			= 'shop classification';
$lang['groupbuy_index_please_choose']		= 'all categories';
$lang['groupbuy_index_search_back']			= 'please search above';
$lang['groupbuy_index_publish_success']		= 'release success';
$lang['groupbuy_index_change_to_finish']		= 'status changed to complete';
$lang['groupbuy_index_group_canceled']			= 'panic buying has been cancelled';
$lang['groupbuy_index_modify_intro_success']	= 'modify commodity description success';
$lang['groupbuy_index_modify_order_num_sucess']	= 'modify the number of goods order success';
$lang['groupbuy_index_cancel_reason']			= 'cancel reason';
$lang['groupbuy_index_username']				= 'Username';
$lang['groupbuy_index_linkman']					= 'contacts';
$lang['groupbuy_index_phone']					= 'contact number';
$lang['groupbuy_index_jian']					= 'piece';
$lang['groupbuy_index_no_record_now']			= 'no order record';
$lang['groupbuy_index_del_success']		= 'delete up success';
$lang['groupbuy_index_del_fail']		= 'delete up failure';
$lang['groupbuy_index_datefail']		= '，\n7！date cannot be less than the same day, \ n the default buying time for 7 days!';
$lang['groupbuy_index_startdatefail']		= '，\n！for start time is not earlier than that day, \ n the default for the start time for the same day!';