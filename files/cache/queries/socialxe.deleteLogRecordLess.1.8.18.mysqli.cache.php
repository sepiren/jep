<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteLogRecordLess");
$query->setAction("delete");
$query->setPriority("");

${'regdate_less1_argument'} = new ConditionArgument('regdate_less', $args->regdate_less, 'less');
${'regdate_less1_argument'}->checkNotNull();
${'regdate_less1_argument'}->createConditionValue();
if(!${'regdate_less1_argument'}->isValid()) return ${'regdate_less1_argument'}->getErrorMessage();
if(${'regdate_less1_argument'} !== null) ${'regdate_less1_argument'}->setColumnType('date');

$query->setTables(array(
new Table('`xe_socialxe_log`', '`socialxe_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regdate_less1_argument,"less")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>