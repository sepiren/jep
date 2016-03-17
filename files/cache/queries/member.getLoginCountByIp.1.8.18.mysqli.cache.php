<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLoginCountByIp");
$query->setAction("select");
$query->setPriority("");
if(isset($args->ipaddress)) {
${'ipaddress32_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress32_argument'}->createConditionValue();
if(!${'ipaddress32_argument'}->isValid()) return ${'ipaddress32_argument'}->getErrorMessage();
} else
${'ipaddress32_argument'} = NULL;if(${'ipaddress32_argument'} !== null) ${'ipaddress32_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_login_count`', '`member_login_count`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`ipaddress`',$ipaddress32_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>