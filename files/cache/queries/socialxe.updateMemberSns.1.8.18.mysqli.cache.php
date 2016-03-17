<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMemberSns");
$query->setAction("update");
$query->setPriority("");
if(isset($args->name)) {
${'name1_argument'} = new Argument('name', $args->{'name'});
if(!${'name1_argument'}->isValid()) return ${'name1_argument'}->getErrorMessage();
} else
${'name1_argument'} = NULL;if(${'name1_argument'} !== null) ${'name1_argument'}->setColumnType('varchar');
if(isset($args->email)) {
${'email2_argument'} = new Argument('email', $args->{'email'});
if(!${'email2_argument'}->isValid()) return ${'email2_argument'}->getErrorMessage();
} else
${'email2_argument'} = NULL;if(${'email2_argument'} !== null) ${'email2_argument'}->setColumnType('varchar');
if(isset($args->profile_image)) {
${'profile_image3_argument'} = new Argument('profile_image', $args->{'profile_image'});
if(!${'profile_image3_argument'}->isValid()) return ${'profile_image3_argument'}->getErrorMessage();
} else
${'profile_image3_argument'} = NULL;if(${'profile_image3_argument'} !== null) ${'profile_image3_argument'}->setColumnType('varchar');
if(isset($args->profile_url)) {
${'profile_url4_argument'} = new Argument('profile_url', $args->{'profile_url'});
if(!${'profile_url4_argument'}->isValid()) return ${'profile_url4_argument'}->getErrorMessage();
} else
${'profile_url4_argument'} = NULL;if(${'profile_url4_argument'} !== null) ${'profile_url4_argument'}->setColumnType('varchar');
if(isset($args->profile_info)) {
${'profile_info5_argument'} = new Argument('profile_info', $args->{'profile_info'});
if(!${'profile_info5_argument'}->isValid()) return ${'profile_info5_argument'}->getErrorMessage();
} else
${'profile_info5_argument'} = NULL;if(${'profile_info5_argument'} !== null) ${'profile_info5_argument'}->setColumnType('text');
if(isset($args->access_token)) {
${'access_token6_argument'} = new Argument('access_token', $args->{'access_token'});
if(!${'access_token6_argument'}->isValid()) return ${'access_token6_argument'}->getErrorMessage();
} else
${'access_token6_argument'} = NULL;if(${'access_token6_argument'} !== null) ${'access_token6_argument'}->setColumnType('text');
if(isset($args->refresh_token)) {
${'refresh_token7_argument'} = new Argument('refresh_token', $args->{'refresh_token'});
if(!${'refresh_token7_argument'}->isValid()) return ${'refresh_token7_argument'}->getErrorMessage();
} else
${'refresh_token7_argument'} = NULL;if(${'refresh_token7_argument'} !== null) ${'refresh_token7_argument'}->setColumnType('text');
if(isset($args->linkage)) {
${'linkage8_argument'} = new Argument('linkage', $args->{'linkage'});
if(!${'linkage8_argument'}->isValid()) return ${'linkage8_argument'}->getErrorMessage();
} else
${'linkage8_argument'} = NULL;if(${'linkage8_argument'} !== null) ${'linkage8_argument'}->setColumnType('char');

${'member_srl9_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl9_argument'}->checkFilter('number');
${'member_srl9_argument'}->checkNotNull();
${'member_srl9_argument'}->createConditionValue();
if(!${'member_srl9_argument'}->isValid()) return ${'member_srl9_argument'}->getErrorMessage();
if(${'member_srl9_argument'} !== null) ${'member_srl9_argument'}->setColumnType('number');
if(isset($args->service)) {
${'service10_argument'} = new ConditionArgument('service', $args->service, 'equal');
${'service10_argument'}->createConditionValue();
if(!${'service10_argument'}->isValid()) return ${'service10_argument'}->getErrorMessage();
} else
${'service10_argument'} = NULL;if(${'service10_argument'} !== null) ${'service10_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`name`', ${'name1_argument'})
,new UpdateExpression('`email`', ${'email2_argument'})
,new UpdateExpression('`profile_image`', ${'profile_image3_argument'})
,new UpdateExpression('`profile_url`', ${'profile_url4_argument'})
,new UpdateExpression('`profile_info`', ${'profile_info5_argument'})
,new UpdateExpression('`access_token`', ${'access_token6_argument'})
,new UpdateExpression('`refresh_token`', ${'refresh_token7_argument'})
,new UpdateExpression('`linkage`', ${'linkage8_argument'})
));
$query->setTables(array(
new Table('`xe_socialxe`', '`socialxe`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl9_argument,"equal")
,new ConditionWithArgument('`service`',$service10_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>