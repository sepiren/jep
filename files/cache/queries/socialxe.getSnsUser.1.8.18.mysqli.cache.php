<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSnsUser");
$query->setAction("select");
$query->setPriority("");

${'id37_argument'} = new ConditionArgument('id', $args->id, 'equal');
${'id37_argument'}->checkNotNull();
${'id37_argument'}->createConditionValue();
if(!${'id37_argument'}->isValid()) return ${'id37_argument'}->getErrorMessage();
if(${'id37_argument'} !== null) ${'id37_argument'}->setColumnType('varchar');
if(isset($args->service)) {
${'service38_argument'} = new ConditionArgument('service', $args->service, 'equal');
${'service38_argument'}->createConditionValue();
if(!${'service38_argument'}->isValid()) return ${'service38_argument'}->getErrorMessage();
} else
${'service38_argument'} = NULL;if(${'service38_argument'} !== null) ${'service38_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_socialxe_user`', '`socialxe_user`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`id`',$id37_argument,"equal")
,new ConditionWithArgument('`service`',$service38_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>