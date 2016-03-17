<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteMemberSns");
$query->setAction("delete");
$query->setPriority("");

${'member_srl5_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl5_argument'}->checkFilter('number');
${'member_srl5_argument'}->checkNotNull();
${'member_srl5_argument'}->createConditionValue();
if(!${'member_srl5_argument'}->isValid()) return ${'member_srl5_argument'}->getErrorMessage();
if(${'member_srl5_argument'} !== null) ${'member_srl5_argument'}->setColumnType('number');
if(isset($args->service)) {
${'service6_argument'} = new ConditionArgument('service', $args->service, 'equal');
${'service6_argument'}->createConditionValue();
if(!${'service6_argument'}->isValid()) return ${'service6_argument'}->getErrorMessage();
} else
${'service6_argument'} = NULL;if(${'service6_argument'} !== null) ${'service6_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_socialxe`', '`socialxe`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl5_argument,"equal")
,new ConditionWithArgument('`service`',$service6_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>