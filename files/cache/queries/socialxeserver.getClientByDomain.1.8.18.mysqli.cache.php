<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getClientByDomain");
$query->setAction("select");
$query->setPriority("");
if(isset($args->domain)) {
${'domain1_argument'} = new ConditionArgument('domain', $args->domain, 'like');
${'domain1_argument'}->createConditionValue();
if(!${'domain1_argument'}->isValid()) return ${'domain1_argument'}->getErrorMessage();
} else
${'domain1_argument'} = NULL;if(${'domain1_argument'} !== null) ${'domain1_argument'}->setColumnType('text');
if(isset($args->client_srl)) {
${'client_srl2_argument'} = new ConditionArgument('client_srl', $args->client_srl, 'notequal');
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
new ConditionWithArgument('`domain`',$domain1_argument,"like")
,new ConditionWithArgument('`client_srl`',$client_srl2_argument,"notequal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>