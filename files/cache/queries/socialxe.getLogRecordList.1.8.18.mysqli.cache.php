<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLogRecordList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
} else
${'member_srl1_argument'} = NULL;if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');
if(isset($args->category)) {
${'category2_argument'} = new ConditionArgument('category', $args->category, 'equal');
${'category2_argument'}->createConditionValue();
if(!${'category2_argument'}->isValid()) return ${'category2_argument'}->getErrorMessage();
} else
${'category2_argument'} = NULL;if(${'category2_argument'} !== null) ${'category2_argument'}->setColumnType('varchar');
if(isset($args->content)) {
${'content3_argument'} = new ConditionArgument('content', $args->content, 'like');
${'content3_argument'}->createConditionValue();
if(!${'content3_argument'}->isValid()) return ${'content3_argument'}->getErrorMessage();
} else
${'content3_argument'} = NULL;if(${'content3_argument'} !== null) ${'content3_argument'}->setColumnType('text');
if(isset($args->ipaddress)) {
${'ipaddress4_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress4_argument'}->createConditionValue();
if(!${'ipaddress4_argument'}->isValid()) return ${'ipaddress4_argument'}->getErrorMessage();
} else
${'ipaddress4_argument'} = NULL;if(${'ipaddress4_argument'} !== null) ${'ipaddress4_argument'}->setColumnType('varchar');

${'page6_argument'} = new Argument('page', $args->{'page'});
${'page6_argument'}->ensureDefaultValue('1');
if(!${'page6_argument'}->isValid()) return ${'page6_argument'}->getErrorMessage();

${'page_count7_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count7_argument'}->ensureDefaultValue('10');
if(!${'page_count7_argument'}->isValid()) return ${'page_count7_argument'}->getErrorMessage();

${'list_count8_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count8_argument'}->ensureDefaultValue('20');
if(!${'list_count8_argument'}->isValid()) return ${'list_count8_argument'}->getErrorMessage();

${'sort_index5_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index5_argument'}->ensureDefaultValue('micro_time');
if(!${'sort_index5_argument'}->isValid()) return ${'sort_index5_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_socialxe_log`', '`socialxe_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl1_argument,"equal")
,new ConditionWithArgument('`category`',$category2_argument,"equal", 'and')
,new ConditionWithArgument('`content`',$content3_argument,"like", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress4_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index5_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count8_argument'}, ${'page6_argument'}, ${'page_count7_argument'}));
return $query; ?>