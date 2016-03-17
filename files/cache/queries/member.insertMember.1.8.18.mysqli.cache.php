<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMember");
$query->setAction("insert");
$query->setPriority("");

${'member_srl3_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl3_argument'}->checkFilter('number');
${'member_srl3_argument'}->checkNotNull();
if(!${'member_srl3_argument'}->isValid()) return ${'member_srl3_argument'}->getErrorMessage();
if(${'member_srl3_argument'} !== null) ${'member_srl3_argument'}->setColumnType('number');

${'user_id4_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id4_argument'}->checkFilter('userid');
${'user_id4_argument'}->checkNotNull();
if(!${'user_id4_argument'}->isValid()) return ${'user_id4_argument'}->getErrorMessage();
if(${'user_id4_argument'} !== null) ${'user_id4_argument'}->setColumnType('varchar');

${'email_address5_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address5_argument'}->checkFilter('email');
${'email_address5_argument'}->checkNotNull();
if(!${'email_address5_argument'}->isValid()) return ${'email_address5_argument'}->getErrorMessage();
if(${'email_address5_argument'} !== null) ${'email_address5_argument'}->setColumnType('varchar');

${'password6_argument'} = new Argument('password', $args->{'password'});
${'password6_argument'}->checkNotNull();
if(!${'password6_argument'}->isValid()) return ${'password6_argument'}->getErrorMessage();
if(${'password6_argument'} !== null) ${'password6_argument'}->setColumnType('varchar');

${'email_id7_argument'} = new Argument('email_id', $args->{'email_id'});
${'email_id7_argument'}->checkNotNull();
if(!${'email_id7_argument'}->isValid()) return ${'email_id7_argument'}->getErrorMessage();
if(${'email_id7_argument'} !== null) ${'email_id7_argument'}->setColumnType('varchar');

${'email_host8_argument'} = new Argument('email_host', $args->{'email_host'});
${'email_host8_argument'}->checkNotNull();
if(!${'email_host8_argument'}->isValid()) return ${'email_host8_argument'}->getErrorMessage();
if(${'email_host8_argument'} !== null) ${'email_host8_argument'}->setColumnType('varchar');

${'user_name9_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name9_argument'}->checkNotNull();
if(!${'user_name9_argument'}->isValid()) return ${'user_name9_argument'}->getErrorMessage();
if(${'user_name9_argument'} !== null) ${'user_name9_argument'}->setColumnType('varchar');

${'nick_name10_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name10_argument'}->checkNotNull();
if(!${'nick_name10_argument'}->isValid()) return ${'nick_name10_argument'}->getErrorMessage();
if(${'nick_name10_argument'} !== null) ${'nick_name10_argument'}->setColumnType('varchar');
if(isset($args->find_account_question)) {
${'find_account_question11_argument'} = new Argument('find_account_question', $args->{'find_account_question'});
if(!${'find_account_question11_argument'}->isValid()) return ${'find_account_question11_argument'}->getErrorMessage();
} else
${'find_account_question11_argument'} = NULL;if(${'find_account_question11_argument'} !== null) ${'find_account_question11_argument'}->setColumnType('number');
if(isset($args->find_account_answer)) {
${'find_account_answer12_argument'} = new Argument('find_account_answer', $args->{'find_account_answer'});
if(!${'find_account_answer12_argument'}->isValid()) return ${'find_account_answer12_argument'}->getErrorMessage();
} else
${'find_account_answer12_argument'} = NULL;if(${'find_account_answer12_argument'} !== null) ${'find_account_answer12_argument'}->setColumnType('varchar');
if(isset($args->homepage)) {
${'homepage13_argument'} = new Argument('homepage', $args->{'homepage'});
if(!${'homepage13_argument'}->isValid()) return ${'homepage13_argument'}->getErrorMessage();
} else
${'homepage13_argument'} = NULL;if(${'homepage13_argument'} !== null) ${'homepage13_argument'}->setColumnType('varchar');
if(isset($args->blog)) {
${'blog14_argument'} = new Argument('blog', $args->{'blog'});
if(!${'blog14_argument'}->isValid()) return ${'blog14_argument'}->getErrorMessage();
} else
${'blog14_argument'} = NULL;if(${'blog14_argument'} !== null) ${'blog14_argument'}->setColumnType('varchar');
if(isset($args->birthday)) {
${'birthday15_argument'} = new Argument('birthday', $args->{'birthday'});
if(!${'birthday15_argument'}->isValid()) return ${'birthday15_argument'}->getErrorMessage();
} else
${'birthday15_argument'} = NULL;if(${'birthday15_argument'} !== null) ${'birthday15_argument'}->setColumnType('char');

${'allow_mailing16_argument'} = new Argument('allow_mailing', $args->{'allow_mailing'});
${'allow_mailing16_argument'}->ensureDefaultValue('Y');
if(!${'allow_mailing16_argument'}->isValid()) return ${'allow_mailing16_argument'}->getErrorMessage();
if(${'allow_mailing16_argument'} !== null) ${'allow_mailing16_argument'}->setColumnType('char');

${'allow_message17_argument'} = new Argument('allow_message', $args->{'allow_message'});
${'allow_message17_argument'}->ensureDefaultValue('Y');
if(!${'allow_message17_argument'}->isValid()) return ${'allow_message17_argument'}->getErrorMessage();
if(${'allow_message17_argument'} !== null) ${'allow_message17_argument'}->setColumnType('char');

${'denied18_argument'} = new Argument('denied', $args->{'denied'});
${'denied18_argument'}->ensureDefaultValue('N');
if(!${'denied18_argument'}->isValid()) return ${'denied18_argument'}->getErrorMessage();
if(${'denied18_argument'} !== null) ${'denied18_argument'}->setColumnType('char');
if(isset($args->limit_date)) {
${'limit_date19_argument'} = new Argument('limit_date', $args->{'limit_date'});
if(!${'limit_date19_argument'}->isValid()) return ${'limit_date19_argument'}->getErrorMessage();
} else
${'limit_date19_argument'} = NULL;if(${'limit_date19_argument'} !== null) ${'limit_date19_argument'}->setColumnType('date');

${'regdate20_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate20_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate20_argument'}->isValid()) return ${'regdate20_argument'}->getErrorMessage();
if(${'regdate20_argument'} !== null) ${'regdate20_argument'}->setColumnType('date');

${'change_password_date21_argument'} = new Argument('change_password_date', $args->{'change_password_date'});
${'change_password_date21_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'change_password_date21_argument'}->isValid()) return ${'change_password_date21_argument'}->getErrorMessage();
if(${'change_password_date21_argument'} !== null) ${'change_password_date21_argument'}->setColumnType('date');

${'last_login22_argument'} = new Argument('last_login', $args->{'last_login'});
${'last_login22_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_login22_argument'}->isValid()) return ${'last_login22_argument'}->getErrorMessage();
if(${'last_login22_argument'} !== null) ${'last_login22_argument'}->setColumnType('date');

${'is_admin23_argument'} = new Argument('is_admin', $args->{'is_admin'});
${'is_admin23_argument'}->ensureDefaultValue('N');
if(!${'is_admin23_argument'}->isValid()) return ${'is_admin23_argument'}->getErrorMessage();
if(${'is_admin23_argument'} !== null) ${'is_admin23_argument'}->setColumnType('char');
if(isset($args->description)) {
${'description24_argument'} = new Argument('description', $args->{'description'});
if(!${'description24_argument'}->isValid()) return ${'description24_argument'}->getErrorMessage();
} else
${'description24_argument'} = NULL;if(${'description24_argument'} !== null) ${'description24_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars25_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars25_argument'}->isValid()) return ${'extra_vars25_argument'}->getErrorMessage();
} else
${'extra_vars25_argument'} = NULL;if(${'extra_vars25_argument'} !== null) ${'extra_vars25_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order26_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order26_argument'}->isValid()) return ${'list_order26_argument'}->getErrorMessage();
} else
${'list_order26_argument'} = NULL;if(${'list_order26_argument'} !== null) ${'list_order26_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl3_argument'})
,new InsertExpression('`user_id`', ${'user_id4_argument'})
,new InsertExpression('`email_address`', ${'email_address5_argument'})
,new InsertExpression('`password`', ${'password6_argument'})
,new InsertExpression('`email_id`', ${'email_id7_argument'})
,new InsertExpression('`email_host`', ${'email_host8_argument'})
,new InsertExpression('`user_name`', ${'user_name9_argument'})
,new InsertExpression('`nick_name`', ${'nick_name10_argument'})
,new InsertExpression('`find_account_question`', ${'find_account_question11_argument'})
,new InsertExpression('`find_account_answer`', ${'find_account_answer12_argument'})
,new InsertExpression('`homepage`', ${'homepage13_argument'})
,new InsertExpression('`blog`', ${'blog14_argument'})
,new InsertExpression('`birthday`', ${'birthday15_argument'})
,new InsertExpression('`allow_mailing`', ${'allow_mailing16_argument'})
,new InsertExpression('`allow_message`', ${'allow_message17_argument'})
,new InsertExpression('`denied`', ${'denied18_argument'})
,new InsertExpression('`limit_date`', ${'limit_date19_argument'})
,new InsertExpression('`regdate`', ${'regdate20_argument'})
,new InsertExpression('`change_password_date`', ${'change_password_date21_argument'})
,new InsertExpression('`last_login`', ${'last_login22_argument'})
,new InsertExpression('`is_admin`', ${'is_admin23_argument'})
,new InsertExpression('`description`', ${'description24_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars25_argument'})
,new InsertExpression('`list_order`', ${'list_order26_argument'})
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>