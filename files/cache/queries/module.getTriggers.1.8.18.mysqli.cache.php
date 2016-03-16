<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTriggers");
$query->setAction("select");
$query->setPriority("");
if(isset($args->trigger_name)) {
${'trigger_name10_argument'} = new ConditionArgument('trigger_name', $args->trigger_name, 'equal');
${'trigger_name10_argument'}->createConditionValue();
if(!${'trigger_name10_argument'}->isValid()) return ${'trigger_name10_argument'}->getErrorMessage();
} else
${'trigger_name10_argument'} = NULL;if(${'trigger_name10_argument'} !== null) ${'trigger_name10_argument'}->setColumnType('varchar');
if(isset($args->called_position)) {
${'called_position11_argument'} = new ConditionArgument('called_position', $args->called_position, 'equal');
${'called_position11_argument'}->createConditionValue();
if(!${'called_position11_argument'}->isValid()) return ${'called_position11_argument'}->getErrorMessage();
} else
${'called_position11_argument'} = NULL;if(${'called_position11_argument'} !== null) ${'called_position11_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_trigger`', '`module_trigger`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`trigger_name`',$trigger_name10_argument,"equal")
,new ConditionWithArgument('`called_position`',$called_position11_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>