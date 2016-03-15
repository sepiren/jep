<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getClient");
$query->setAction("select");
$query->setPriority("");
if(isset($args->client_token)) {
${'client_token1_argument'} = new ConditionArgument('client_token', $args->client_token, 'equal');
${'client_token1_argument'}->createConditionValue();
if(!${'client_token1_argument'}->isValid()) return ${'client_token1_argument'}->getErrorMessage();
} else
${'client_token1_argument'} = NULL;if(${'client_token1_argument'} !== null) ${'client_token1_argument'}->setColumnType('varchar');
if(isset($args->client_srl)) {
${'client_srl2_argument'} = new ConditionArgument('client_srl', $args->client_srl, 'equal');
${'client_srl2_argument'}->createConditionValue();
if(!${'client_srl2_argument'}->isValid()) return ${'client_srl2_argument'}->getErrorMessage();
} else
${'client_srl2_argument'} = NULL;if(${'client_srl2_argument'} !== null) ${'client_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_socialxeserver_member`', '`socialxeserver_member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`client_token`',$client_token1_argument,"equal")
,new ConditionWithArgument('`client_srl`',$client_srl2_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>