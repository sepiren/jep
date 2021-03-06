<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispSocialxeAdminSnsList';
$info->menu = new stdClass;
$info->menu->socialxe = new stdClass;
$info->menu->socialxe->title='소셜XE';
$info->menu->socialxe->type='';
$info->action = new stdClass;
$info->action->dispSocialxeSnsManage = new stdClass;
$info->action->dispSocialxeSnsManage->type='view';
$info->action->dispSocialxeSnsManage->grant='guest';
$info->action->dispSocialxeSnsManage->standalone='true';
$info->action->dispSocialxeSnsManage->ruleset='';
$info->action->dispSocialxeSnsManage->method='';
$info->action->dispSocialxeConfirmMail = new stdClass;
$info->action->dispSocialxeConfirmMail->type='view';
$info->action->dispSocialxeConfirmMail->grant='guest';
$info->action->dispSocialxeConfirmMail->standalone='true';
$info->action->dispSocialxeConfirmMail->ruleset='';
$info->action->dispSocialxeConfirmMail->method='';
$info->action->dispSocialxeInputAddInfo = new stdClass;
$info->action->dispSocialxeInputAddInfo->type='view';
$info->action->dispSocialxeInputAddInfo->grant='guest';
$info->action->dispSocialxeInputAddInfo->standalone='true';
$info->action->dispSocialxeInputAddInfo->ruleset='';
$info->action->dispSocialxeInputAddInfo->method='';
$info->action->dispSocialxeConnectSns = new stdClass;
$info->action->dispSocialxeConnectSns->type='view';
$info->action->dispSocialxeConnectSns->grant='guest';
$info->action->dispSocialxeConnectSns->standalone='true';
$info->action->dispSocialxeConnectSns->ruleset='';
$info->action->dispSocialxeConnectSns->method='';
$info->action->dispSocialxeSnsProfile = new stdClass;
$info->action->dispSocialxeSnsProfile->type='view';
$info->action->dispSocialxeSnsProfile->grant='guest';
$info->action->dispSocialxeSnsProfile->standalone='true';
$info->action->dispSocialxeSnsProfile->ruleset='';
$info->action->dispSocialxeSnsProfile->method='';
$info->action->procSocialxeConfirmMail = new stdClass;
$info->action->procSocialxeConfirmMail->type='controller';
$info->action->procSocialxeConfirmMail->grant='guest';
$info->action->procSocialxeConfirmMail->standalone='true';
$info->action->procSocialxeConfirmMail->ruleset='confirmEmailAddress';
$info->action->procSocialxeConfirmMail->method='';
$info->action->procSocialxeInputAddInfo = new stdClass;
$info->action->procSocialxeInputAddInfo->type='controller';
$info->action->procSocialxeInputAddInfo->grant='guest';
$info->action->procSocialxeInputAddInfo->standalone='true';
$info->action->procSocialxeInputAddInfo->ruleset='@insertAddInfoSocialxe';
$info->action->procSocialxeInputAddInfo->method='';
$info->action->procSocialxeSnsClear = new stdClass;
$info->action->procSocialxeSnsClear->type='controller';
$info->action->procSocialxeSnsClear->grant='guest';
$info->action->procSocialxeSnsClear->standalone='true';
$info->action->procSocialxeSnsClear->ruleset='';
$info->action->procSocialxeSnsClear->method='';
$info->action->procSocialxeSnsLinkage = new stdClass;
$info->action->procSocialxeSnsLinkage->type='controller';
$info->action->procSocialxeSnsLinkage->grant='guest';
$info->action->procSocialxeSnsLinkage->standalone='true';
$info->action->procSocialxeSnsLinkage->ruleset='';
$info->action->procSocialxeSnsLinkage->method='';
$info->action->procSocialxeCallback = new stdClass;
$info->action->procSocialxeCallback->type='controller';
$info->action->procSocialxeCallback->grant='guest';
$info->action->procSocialxeCallback->standalone='false';
$info->action->procSocialxeCallback->ruleset='';
$info->action->procSocialxeCallback->method='GET|POST';
$info->menu->socialxe->acts[0]='dispSocialxeAdminSettingApi';
$info->action->dispSocialxeAdminSettingApi = new stdClass;
$info->action->dispSocialxeAdminSettingApi->type='view';
$info->action->dispSocialxeAdminSettingApi->grant='guest';
$info->action->dispSocialxeAdminSettingApi->standalone='true';
$info->action->dispSocialxeAdminSettingApi->ruleset='';
$info->action->dispSocialxeAdminSettingApi->method='';
$info->menu->socialxe->acts[1]='dispSocialxeAdminSetting';
$info->action->dispSocialxeAdminSetting = new stdClass;
$info->action->dispSocialxeAdminSetting->type='view';
$info->action->dispSocialxeAdminSetting->grant='guest';
$info->action->dispSocialxeAdminSetting->standalone='true';
$info->action->dispSocialxeAdminSetting->ruleset='';
$info->action->dispSocialxeAdminSetting->method='';
$info->menu->socialxe->acts[2]='dispSocialxeAdminLogRecord';
$info->action->dispSocialxeAdminLogRecord = new stdClass;
$info->action->dispSocialxeAdminLogRecord->type='view';
$info->action->dispSocialxeAdminLogRecord->grant='guest';
$info->action->dispSocialxeAdminLogRecord->standalone='true';
$info->action->dispSocialxeAdminLogRecord->ruleset='';
$info->action->dispSocialxeAdminLogRecord->method='';
$info->menu->socialxe->index='dispSocialxeAdminSnsList';
$info->menu->socialxe->acts[3]='dispSocialxeAdminSnsList';
$info->action->dispSocialxeAdminSnsList = new stdClass;
$info->action->dispSocialxeAdminSnsList->type='view';
$info->action->dispSocialxeAdminSnsList->grant='guest';
$info->action->dispSocialxeAdminSnsList->standalone='true';
$info->action->dispSocialxeAdminSnsList->ruleset='';
$info->action->dispSocialxeAdminSnsList->method='';
$info->action->procSocialxeAdminSettingApi = new stdClass;
$info->action->procSocialxeAdminSettingApi->type='controller';
$info->action->procSocialxeAdminSettingApi->grant='guest';
$info->action->procSocialxeAdminSettingApi->standalone='true';
$info->action->procSocialxeAdminSettingApi->ruleset='';
$info->action->procSocialxeAdminSettingApi->method='';
$info->action->procSocialxeAdminSetting = new stdClass;
$info->action->procSocialxeAdminSetting->type='controller';
$info->action->procSocialxeAdminSetting->grant='guest';
$info->action->procSocialxeAdminSetting->standalone='true';
$info->action->procSocialxeAdminSetting->ruleset='';
$info->action->procSocialxeAdminSetting->method='';
$info->action->procSocialxeAdminDeleteLogRecord = new stdClass;
$info->action->procSocialxeAdminDeleteLogRecord->type='controller';
$info->action->procSocialxeAdminDeleteLogRecord->grant='guest';
$info->action->procSocialxeAdminDeleteLogRecord->standalone='true';
$info->action->procSocialxeAdminDeleteLogRecord->ruleset='';
$info->action->procSocialxeAdminDeleteLogRecord->method='';
return $info;