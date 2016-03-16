<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->is_admin)) {
${'is_admin6_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin6_argument'}->createConditionValue();
if(!${'is_admin6_argument'}->isValid()) return ${'is_admin6_argument'}->getErrorMessage();
} else
${'is_admin6_argument'} = NULL;if(${'is_admin6_argument'} !== null) ${'is_admin6_argument'}->setColumnType('char');
if(isset($args->is_denied)) {
${'is_denied7_argument'} = new ConditionArgument('is_denied', $args->is_denied, 'equal');
${'is_denied7_argument'}->createConditionValue();
if(!${'is_denied7_argument'}->isValid()) return ${'is_denied7_argument'}->getErrorMessage();
} else
${'is_denied7_argument'} = NULL;if(${'is_denied7_argument'} !== null) ${'is_denied7_argument'}->setColumnType('char');
if(isset($args->member_srls)) {
${'member_srls8_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls8_argument'}->createConditionValue();
if(!${'member_srls8_argument'}->isValid()) return ${'member_srls8_argument'}->getErrorMessage();
} else
${'member_srls8_argument'} = NULL;if(${'member_srls8_argument'} !== null) ${'member_srls8_argument'}->setColumnType('number');
if(isset($args->s_user_id)) {
${'s_user_id9_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id9_argument'}->createConditionValue();
if(!${'s_user_id9_argument'}->isValid()) return ${'s_user_id9_argument'}->getErrorMessage();
} else
${'s_user_id9_argument'} = NULL;if(${'s_user_id9_argument'} !== null) ${'s_user_id9_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name10_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name10_argument'}->createConditionValue();
if(!${'s_user_name10_argument'}->isValid()) return ${'s_user_name10_argument'}->getErrorMessage();
} else
${'s_user_name10_argument'} = NULL;if(${'s_user_name10_argument'} !== null) ${'s_user_name10_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name11_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name11_argument'}->createConditionValue();
if(!${'s_nick_name11_argument'}->isValid()) return ${'s_nick_name11_argument'}->getErrorMessage();
} else
${'s_nick_name11_argument'} = NULL;if(${'s_nick_name11_argument'} !== null) ${'s_nick_name11_argument'}->setColumnType('varchar');
if(isset($args->html_nick_name)) {
${'html_nick_name12_argument'} = new ConditionArgument('html_nick_name', $args->html_nick_name, 'like');
${'html_nick_name12_argument'}->createConditionValue();
if(!${'html_nick_name12_argument'}->isValid()) return ${'html_nick_name12_argument'}->getErrorMessage();
} else
${'html_nick_name12_argument'} = NULL;if(${'html_nick_name12_argument'} !== null) ${'html_nick_name12_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address13_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address13_argument'}->createConditionValue();
if(!${'s_email_address13_argument'}->isValid()) return ${'s_email_address13_argument'}->getErrorMessage();
} else
${'s_email_address13_argument'} = NULL;if(${'s_email_address13_argument'} !== null) ${'s_email_address13_argument'}->setColumnType('varchar');
if(isset($args->s_birthday)) {
${'s_birthday14_argument'} = new ConditionArgument('s_birthday', $args->s_birthday, 'like');
${'s_birthday14_argument'}->createConditionValue();
if(!${'s_birthday14_argument'}->isValid()) return ${'s_birthday14_argument'}->getErrorMessage();
} else
${'s_birthday14_argument'} = NULL;if(${'s_birthday14_argument'} !== null) ${'s_birthday14_argument'}->setColumnType('char');
if(isset($args->s_extra_vars)) {
${'s_extra_vars15_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars15_argument'}->createConditionValue();
if(!${'s_extra_vars15_argument'}->isValid()) return ${'s_extra_vars15_argument'}->getErrorMessage();
} else
${'s_extra_vars15_argument'} = NULL;if(${'s_extra_vars15_argument'} !== null) ${'s_extra_vars15_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate16_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate16_argument'}->createConditionValue();
if(!${'s_regdate16_argument'}->isValid()) return ${'s_regdate16_argument'}->getErrorMessage();
} else
${'s_regdate16_argument'} = NULL;if(${'s_regdate16_argument'} !== null) ${'s_regdate16_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login17_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login17_argument'}->createConditionValue();
if(!${'s_last_login17_argument'}->isValid()) return ${'s_last_login17_argument'}->getErrorMessage();
} else
${'s_last_login17_argument'} = NULL;if(${'s_last_login17_argument'} !== null) ${'s_last_login17_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more18_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more18_argument'}->createConditionValue();
if(!${'s_regdate_more18_argument'}->isValid()) return ${'s_regdate_more18_argument'}->getErrorMessage();
} else
${'s_regdate_more18_argument'} = NULL;if(${'s_regdate_more18_argument'} !== null) ${'s_regdate_more18_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less19_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less19_argument'}->createConditionValue();
if(!${'s_regdate_less19_argument'}->isValid()) return ${'s_regdate_less19_argument'}->getErrorMessage();
} else
${'s_regdate_less19_argument'} = NULL;if(${'s_regdate_less19_argument'} !== null) ${'s_regdate_less19_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more20_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more20_argument'}->createConditionValue();
if(!${'s_last_login_more20_argument'}->isValid()) return ${'s_last_login_more20_argument'}->getErrorMessage();
} else
${'s_last_login_more20_argument'} = NULL;if(${'s_last_login_more20_argument'} !== null) ${'s_last_login_more20_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less21_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less21_argument'}->createConditionValue();
if(!${'s_last_login_less21_argument'}->isValid()) return ${'s_last_login_less21_argument'}->getErrorMessage();
} else
${'s_last_login_less21_argument'} = NULL;if(${'s_last_login_less21_argument'} !== null) ${'s_last_login_less21_argument'}->setColumnType('date');

${'page24_argument'} = new Argument('page', $args->{'page'});
${'page24_argument'}->ensureDefaultValue('1');
if(!${'page24_argument'}->isValid()) return ${'page24_argument'}->getErrorMessage();

${'page_count25_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count25_argument'}->ensureDefaultValue('10');
if(!${'page_count25_argument'}->isValid()) return ${'page_count25_argument'}->getErrorMessage();

${'list_count26_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count26_argument'}->ensureDefaultValue('20');
if(!${'list_count26_argument'}->isValid()) return ${'list_count26_argument'}->getErrorMessage();

${'sort_index22_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index22_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index22_argument'}->isValid()) return ${'sort_index22_argument'}->getErrorMessage();

${'sort_order23_argument'} = new SortArgument('sort_order23', $args->sort_order);
${'sort_order23_argument'}->ensureDefaultValue('asc');
if(!${'sort_order23_argument'}->isValid()) return ${'sort_order23_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`is_admin`',$is_admin6_argument,"equal")
,new ConditionWithArgument('`denied`',$is_denied7_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls8_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$s_user_id9_argument,"like")
,new ConditionWithArgument('`user_name`',$s_user_name10_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name11_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$html_nick_name12_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address13_argument,"like", 'or')
,new ConditionWithArgument('`birthday`',$s_birthday14_argument,"like", 'or')
,new ConditionWithArgument('`extra_vars`',$s_extra_vars15_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate16_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_login`',$s_last_login17_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more18_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less19_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more20_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less21_argument,"less", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index22_argument'}, $sort_order23_argument)
));
$query->setLimit(new Limit(${'list_count26_argument'}, ${'page24_argument'}, ${'page_count25_argument'}));
return $query; ?>