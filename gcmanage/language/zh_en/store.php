<?php
defined('GcWebShop') or exit('Access Invalid!');
/**
 *  store management  language pakcage
 */

$lang['sel_del_store']     = 'please select what you want to delete';
$lang['open']              = 'open';
$lang['close']             = 'close';
$lang['no_limit']          = 'no limits';
$lang['user_name_no_null'] = 'user name can not be null';
$lang['pwd_no_null']       = 'password can not be null';
$lang['user_open_store']   = 'this user has opened store';
$lang['user_no_exist']     = 'user name does not exist';
$lang['pwd_fail']          = 'wrong password';
$lang['please_input_store_user_name_p'] = 'please input store owner name';
$lang['please_input_store_name_p']      = 'please input store name';
$lang['please_input_store_level']       = 'please fill in tore grade';
$lang['back_store_list']       = 'back to store list';
$lang['countinue_add_store']   = 'continue to add new stores';
$lang['store_name_exists']		= 'this store name has existed, please change it';
$lang['store_no_exist']        = 'this store name does not exist';
$lang['store_no_meet']         = 'store does not meet teh requirement';
$lang['please_sel_store']  = 'please select one store!';
$lang['address_no_null']       = 'region can not be null';
$lang['please_sel_edit_store'] = 'please select the store that you want to edit';
$lang['please_sel_edit_store'] = '!please select what you want to edit!';

$lang['store']           = 'store';
$lang['store_help1']     = 'if the current time exceed the  validity duration or the store is closed, users on the front can not continue to view this store, but the store owners still can edit it';
$lang['store_help2']     = 'the recommended store will be displayed on the relevant location of stor recommendation. the store in a closed state can not be recommended';
$lang['store_audit_help1']= 'application of opening store can be audited by batch ';
$lang['store_grade_help1']=	'the store owner can continue to apply for store upgrade, when the administrator delete the upgrade application';
$lang['store_grade_help2']=	'please Choose edit option to apply for audit';
$lang['manage']          = 'management';
$lang['pending']         = 'apply for opening';
$lang['renew_application']	='renewal application';
$lang['sale_class_application']='Saleclass application';
$lang['add_store']			='Add store';
$lang['csv_import_store']	='CSV import store';
$lang['store_type']			='Store type';
$lang['grade_apply']	 	 = 'upgrade application';
$lang['store_user_name'] = 'storekeeper account';
$lang['store_user_id']   = 'ID';
$lang['store_name']      = 'Store';
$lang['store_index']     = 'Store Homepage';
$lang['belongs_class']   = 'belonging category';
$lang['location']        = 'location';
$lang['details_address'] = 'detailed address';
$lang['zip']             = 'zip code';
$lang['tel_phone']       = 'telephone number';
$lang['belongs_level']   = 'belonging level';
$lang['period_to']       = 'expire on';
$lang['formart']         = '';
$lang['state']           = 'state';
$lang['open']            = 'open';
$lang['close']           = 'close';
$lang['close_reason']    = 'close reason';
$lang['certification']   = 'certification';
$lang['owner_certification']           = 'real name certification';
$lang['owner_certification_del']	   = 'delete real-name certification file?';
$lang['entity_store_certification']    = 'real store certification';
$lang['entity_store_certification_del']= 'delete store certification file?';
$lang['certification_del_success']	   = 'delete certification file successfully';
$lang['certification_del_fail']	       = 'fail to delete certification file';
$lang['recommended']                   = 'recommend';
$lang['recommended_tips']              = 'do not recommend when store close';
$lang['reset']                         = 'reset';
$lang['please_input_store_name']       = 'please input store name';
$lang['please_input_address']       = 'please select region';
$lang['view_owner_certification_file'] = 'view real-name certification file';
$lang['view_entity_store_certification_file'] = 'view real store certification file';
$lang['store_user']               = 'store owner';
$lang['operation']                = 'operation';
$lang['editable']                 = 'editable';
$lang['are_you_sure_del_store']   = 'delete all store informations(including goods, order)?';
$lang['no_edit_please_no_choose'] = 'please do not choose if nothing to change';
$lang['unchanged']                = 'unchanged';
$lang['to']                       = 'to';
$lang['no_edit_please_null']      = 'no edit please stay null';
$lang['authing']                  = 'authing';
$lang['enter_shop_owner_info']    = 'please enter information of store owner';
$lang['user_name']                = 'user name';
$lang['pwd']                      = 'password';
$lang['need_verify_pwd']           = 'need verification code';

//
$lang['if_open_domain']          = 'if open the subdomains';
$lang['open_domain_document']    = 'opening subdomains need youre service to support the extensive domain name analysis';
$lang['suffix']                  = 'subdomain suffix';
$lang['demo']                    = 'if the subdomain of the store is "test.abc.com", you will input "abc.com"';
$lang['reservations_domain']     = 'domain reservation';
$lang['please_input_domain']     = 'reserved subdomain,multiple domain names shoule be separated with comma';
$lang['length_limit']            = 'length limis';
$lang['domain_length']           = 'for example,"3-12" denotes the registered domain names are limited between 3 and 12 characters';
$lang['domain_edit']             = 'edit?';
$lang['domain_times']            = 'edition times';
$lang['domain_edit_tips']        = 'store owner can not change when it can not be edited';
$lang['domain_times_tips']       = 'it can not be changed if reach the setting number when it can be edited';
$lang['domain_times_null']       = 'times of revision can not be null';
$lang['domain_times_digits']     = 'times of revision must be numer';
$lang['domain_times_min']        = '1times of revision at least 1';
$lang['domain_length_tips']      = '???please refer to the illustration on the raght, if the lenth do not meet the requirment';
$lang['domain_suffix_null']      = 'subdomain suffix can not be null';
$lang['store_domain'] = 'subdomain';
$lang['store_domain_times']      = 'edited times';
$lang['store_domain_valid']      = 'letter, number, underline, line-through are valid characters';
$lang['store_domain_rangelength']   = 'the lenth of subdomain is betwwen {0} and {1} character';
$lang['store_domain_times_digits']  = 'modified times must be number';
$lang['store_domain_times_max']  = 'the maximum of modified times must be{0}';
$lang['store_domain_length_error']	= 'the lenth of subdomain do not meet the requirement';
$lang['store_domain_exists']	= 'this subdomain has existed, please changer into others';
$lang['store_domain_sys']	= 'this subdomain is forbidden,please change into others';
$lang['store_domain_invalid']		= 'this subdomain do not meet the regulation, please do not use special characters';
$lang['store_save_defaultalbumclass_name']	= 'default album';