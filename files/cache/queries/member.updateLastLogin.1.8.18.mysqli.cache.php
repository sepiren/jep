<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLastLogin");
$query->setAction("update");
$query->setPriority("");

${'member_srl33_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl33_argument'}->checkFilter('number');
${'member_srl33_argument'}->checkNotNull();
if(!${'member_srl33_argument'}->isValid()) return ${'member_srl33_argument'}->getErrorMessage();
if(${'member_srl33_argument'} !== null) ${'member_srl33_argument'}->setColumnType('number');

${'last_login34_argument'} = new Argument('last_login', $args->{'last_login'});
${'last_login34_argument'}->ensureDefaultValue(date("YmdHis"));
${'last_login34_argument'}->checkNotNull();
if(!${'last_login34_argument'}->isValid()) return ${'last_login34_argument'}->getErrorMessage();
if(${'last_login34_argument'} !== null) ${'last_login34_argument'}->setColumnType('date');

${'member_srl35_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl35_argument'}->checkFilter('number');
${'member_srl35_argument'}->checkNotNull();
${'member_srl35_argument'}->createConditionValue();
if(!${'member_srl35_argument'}->isValid()) return ${'member_srl35_argument'}->getErrorMessage();
if(${'member_srl35_argument'} !== null) ${'member_srl35_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`member_srl`', ${'member_srl33_argument'})
,new UpdateExpression('`last_login`', ${'last_login34_argument'})
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl35_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>