<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getClient");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
} else
${'member_srl1_argument'} = NULL;if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');
if(isset($args->domain)) {
${'domain2_argument'} = new ConditionArgument('domain', $args->domain, 'like');
${'domain2_argument'}->createConditionValue();
if(!${'domain2_argument'}->isValid()) return ${'domain2_argument'}->getErrorMessage();
} else
${'domain2_argument'} = NULL;if(${'domain2_argument'} !== null) ${'domain2_argument'}->setColumnType('text');

${'page4_argument'} = new Argument('page', $args->{'page'});
${'page4_argument'}->ensureDefaultValue('1');
if(!${'page4_argument'}->isValid()) return ${'page4_argument'}->getErrorMessage();

${'page_count5_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count5_argument'}->ensureDefaultValue('10');
if(!${'page_count5_argument'}->isValid()) return ${'page_count5_argument'}->getErrorMessage();

${'list_count6_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count6_argument'}->ensureDefaultValue('10');
if(!${'list_count6_argument'}->isValid()) return ${'list_count6_argument'}->getErrorMessage();

${'list_order3_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order3_argument'}->ensureDefaultValue('client_srl');
if(!${'list_order3_argument'}->isValid()) return ${'list_order3_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_socialxeserver_member`', '`socialxeserver_member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl1_argument,"equal", 'and')
,new ConditionWithArgument('`domain`',$domain2_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order3_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count6_argument'}, ${'page4_argument'}, ${'page_count5_argument'}));
return $query; ?>