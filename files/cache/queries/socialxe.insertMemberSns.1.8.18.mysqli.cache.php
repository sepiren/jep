<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMemberSns");
$query->setAction("insert");
$query->setPriority("");

${'member_srl39_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl39_argument'}->checkFilter('number');
${'member_srl39_argument'}->checkNotNull();
if(!${'member_srl39_argument'}->isValid()) return ${'member_srl39_argument'}->getErrorMessage();
if(${'member_srl39_argument'} !== null) ${'member_srl39_argument'}->setColumnType('number');

${'service40_argument'} = new Argument('service', $args->{'service'});
${'service40_argument'}->checkNotNull();
if(!${'service40_argument'}->isValid()) return ${'service40_argument'}->getErrorMessage();
if(${'service40_argument'} !== null) ${'service40_argument'}->setColumnType('varchar');

${'id41_argument'} = new Argument('id', $args->{'id'});
${'id41_argument'}->checkNotNull();
if(!${'id41_argument'}->isValid()) return ${'id41_argument'}->getErrorMessage();
if(${'id41_argument'} !== null) ${'id41_argument'}->setColumnType('varchar');

${'name42_argument'} = new Argument('name', $args->{'name'});
${'name42_argument'}->checkNotNull();
if(!${'name42_argument'}->isValid()) return ${'name42_argument'}->getErrorMessage();
if(${'name42_argument'} !== null) ${'name42_argument'}->setColumnType('varchar');
if(isset($args->email)) {
${'email43_argument'} = new Argument('email', $args->{'email'});
if(!${'email43_argument'}->isValid()) return ${'email43_argument'}->getErrorMessage();
} else
${'email43_argument'} = NULL;if(${'email43_argument'} !== null) ${'email43_argument'}->setColumnType('varchar');
if(isset($args->profile_image)) {
${'profile_image44_argument'} = new Argument('profile_image', $args->{'profile_image'});
if(!${'profile_image44_argument'}->isValid()) return ${'profile_image44_argument'}->getErrorMessage();
} else
${'profile_image44_argument'} = NULL;if(${'profile_image44_argument'} !== null) ${'profile_image44_argument'}->setColumnType('varchar');
if(isset($args->profile_url)) {
${'profile_url45_argument'} = new Argument('profile_url', $args->{'profile_url'});
if(!${'profile_url45_argument'}->isValid()) return ${'profile_url45_argument'}->getErrorMessage();
} else
${'profile_url45_argument'} = NULL;if(${'profile_url45_argument'} !== null) ${'profile_url45_argument'}->setColumnType('varchar');
if(isset($args->profile_info)) {
${'profile_info46_argument'} = new Argument('profile_info', $args->{'profile_info'});
if(!${'profile_info46_argument'}->isValid()) return ${'profile_info46_argument'}->getErrorMessage();
} else
${'profile_info46_argument'} = NULL;if(${'profile_info46_argument'} !== null) ${'profile_info46_argument'}->setColumnType('text');
if(isset($args->access_token)) {
${'access_token47_argument'} = new Argument('access_token', $args->{'access_token'});
if(!${'access_token47_argument'}->isValid()) return ${'access_token47_argument'}->getErrorMessage();
} else
${'access_token47_argument'} = NULL;if(${'access_token47_argument'} !== null) ${'access_token47_argument'}->setColumnType('text');
if(isset($args->refresh_token)) {
${'refresh_token48_argument'} = new Argument('refresh_token', $args->{'refresh_token'});
if(!${'refresh_token48_argument'}->isValid()) return ${'refresh_token48_argument'}->getErrorMessage();
} else
${'refresh_token48_argument'} = NULL;if(${'refresh_token48_argument'} !== null) ${'refresh_token48_argument'}->setColumnType('text');

${'linkage49_argument'} = new Argument('linkage', $args->{'linkage'});
${'linkage49_argument'}->ensureDefaultValue('N');
if(!${'linkage49_argument'}->isValid()) return ${'linkage49_argument'}->getErrorMessage();
if(${'linkage49_argument'} !== null) ${'linkage49_argument'}->setColumnType('char');

${'regdate50_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate50_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate50_argument'}->isValid()) return ${'regdate50_argument'}->getErrorMessage();
if(${'regdate50_argument'} !== null) ${'regdate50_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl39_argument'})
,new InsertExpression('`service`', ${'service40_argument'})
,new InsertExpression('`id`', ${'id41_argument'})
,new InsertExpression('`name`', ${'name42_argument'})
,new InsertExpression('`email`', ${'email43_argument'})
,new InsertExpression('`profile_image`', ${'profile_image44_argument'})
,new InsertExpression('`profile_url`', ${'profile_url45_argument'})
,new InsertExpression('`profile_info`', ${'profile_info46_argument'})
,new InsertExpression('`access_token`', ${'access_token47_argument'})
,new InsertExpression('`refresh_token`', ${'refresh_token48_argument'})
,new InsertExpression('`linkage`', ${'linkage49_argument'})
,new InsertExpression('`regdate`', ${'regdate50_argument'})
));
$query->setTables(array(
new Table('`xe_socialxe`', '`socialxe`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>