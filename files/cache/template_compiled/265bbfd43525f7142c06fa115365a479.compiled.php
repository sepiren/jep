<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/socialxeserver/tpl','header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/socialxeserver/tpl/filter','delete_checked.xml');$__xmlFilter->compile(); ?>
<!-- 목록 -->
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/socialxeserver/tpl/client/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/socialxeserver/ruleset/deleteClient.xml", FALSE, "", 0, "body", TRUE, "") ?><form  class="x_form-horizontal" action="<?php echo Context::getRequestUri() ?>" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="deleteClient" />
	<input type="hidden" name="module" value="socialxeserver" />
	<input type="hidden" name="act" value="procSocialxeserverAdminDeleteCheckedClient" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/socialxeserver/tpl/client/1" />
<table class="x_table x_table-striped x_table-hover">
<caption>Total <?php echo number_format($__Context->total_count) ?>, Page <?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?></caption>
<thead>
	<tr>
		<th scope="col"><?php echo $__Context->lang->no ?></th>
		<th scope="col"><?php echo $__Context->lang->nick_name ?></th>
		<th scope="col" class="title">Client Token</th>
		<th scope="col"><?php echo $__Context->lang->domain ?></th>
		<th>&nbsp;</th>
		<th scope="col"><input type="checkbox" /></th>
	</tr>
</thead>
<tbody>
	<?php if($__Context->client_list&&count($__Context->client_list))foreach($__Context->client_list as $__Context->no=>$__Context->val){ ?><tr>
		<td><?php echo $__Context->no ?></td>
		<td><a href="#popup_menu_area" class="member_<?php echo $__Context->val->member_srl ?>" onclick="return false"><?php echo $__Context->val->nick_name ?></a></td>
		<td><?php echo $__Context->val->client_token ?></td>
		<td>
			<?php $__Context->domain_array = explode(',', $__Context->val->domain) ?>
			<?php if($__Context->domain_array&&count($__Context->domain_array))foreach($__Context->domain_array as &$__Context->val2){ ?>
				<?php $__Context->val2 = trim($__Context->val2) ?>
			<?php } ?>
			<?php $__Context->_domain = implode('<br />', $__Context->domain_array) ?>
			<?php echo $__Context->_domain ?>
		</td>
		<td>
			<a href="<?php echo getUrl('act','dispSocialxeserverAdminModifyClient','client_srl',$__Context->val->client_srl) ?>" class="x_icon-cog"><?php echo $__Context->lang->cmd_setup ?></a>
			<a href="#" onclick="doDeleteClient('<?php echo $__Context->val->client_srl ?>');return false;" title="<?php echo htmlspecialchars($__Context->lang->cmd_delete) ?>" class="x_icon-remove"><?php echo $__Context->lang->cmd_delete ?></a>
		</td>
		<td><input type="checkbox" name="cart" value="<?php echo $__Context->val->client_srl ?>" /></td>
	</tr><?php } ?>
</tbody>
</table>
<div class="x_pull-right x_btn-group" style="position:relative;right:0;bottom:-10px">
	<a href="<?php echo getUrl('act', 'dispSocialxeserverAdminInsertClient', 'client_srl', '') ?>" class="x_btn x_btn-inverse"><?php echo $__Context->lang->cmd_insert ?></a>
	<button type="submit" class="x_btn"><?php echo $__Context->lang->cmd_delete_checked ?></button>
</div>
</form>
<?php 
	$__Context->urlInfo = parse_url(getRequestUriByServerEnviroment());
	parse_str($__Context->urlInfo['query'], $__Context->param);
 ?>
<?php if($__Context->page_navigation){ ?><form action="./" class="x_pagination x_pull-left" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<?php if($__Context->param&&count($__Context->param))foreach($__Context->param as $__Context->key=>$__Context->val){;
if(!in_array($__Context->key, array('mid', 'vid', 'act'))){ ?><input type="hidden" name="<?php echo $__Context->key ?>" value="<?php echo $__Context->val ?>" /><?php }} ?>
	<ul>
		<li<?php if(!$__Context->page || $__Context->page == 1){ ?> class="x_disabled"<?php } ?>><a href="<?php echo getUrl('page', '') ?>">&laquo; <?php echo $__Context->lang->first_page ?></a></li>
		<?php if($__Context->page_navigation->first_page != 1 && $__Context->page_navigation->first_page + $__Context->page_navigation->page_count > $__Context->page_navigation->last_page - 1 && $__Context->page_navigation->page_count != $__Context->page_navigation->total_page){ ?>
			<?php $__Context->isGoTo = true ?>
			<li>
				<a href="#goTo" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
				<?php if($__Context->isGoTo){ ?><span id="goTo" class="x_input-append">
					<input type="number" min="1" max="<?php echo $__Context->page_navigation->last_page ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
					<button type="submit" class="x_add-on">Go</button>
				</span><?php } ?>
			</li>
		<?php } ?>
		<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
			<?php $__Context->last_page = $__Context->page_no ?>
			<li<?php if($__Context->page_no == $__Context->page){ ?> class="x_active"<?php } ?>><a  href="<?php echo getUrl('page', $__Context->page_no) ?>"><?php echo $__Context->page_no ?></a></li>
		<?php } ?>
		<?php if($__Context->last_page != $__Context->page_navigation->last_page && $__Context->last_page + 1 != $__Context->page_navigation->last_page){ ?>
			<?php $__Context->isGoTo = true ?>
			<li>
				<a href="#goTo" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
				<?php if($__Context->isGoTo){ ?><span id="goTo" class="x_input-append">
					<input type="number" min="1" max="<?php echo $__Context->page_navigation->last_page ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
					<button type="submit" class="x_add-on">Go</button>
				</span><?php } ?>
			</li>
		<?php } ?>
	<li<?php if($__Context->page == $__Context->page_navigation->last_page){ ?> class="x_disabled"<?php } ?>><a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>" title="<?php echo $__Context->page_navigation->last_page ?>"><?php echo $__Context->lang->last_page ?> &raquo;</a></li>
	</ul>
</form><?php } ?>
<form action="./" class="search x_input-append center"  style="clear:both;margin-top:10px"><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<?php if($__Context->param&&count($__Context->param))foreach($__Context->param as $__Context->key=>$__Context->val){;
if(!in_array($__Context->key, array('mid', 'vid', 'act', 'page'))){ ?><input type="hidden" name="<?php echo $__Context->key ?>" value="<?php echo $__Context->val ?>" /><?php }} ?>
	<input type="search" name="domain" required title="Search" value="<?php echo htmlspecialchars($__Context->domain) ?>">
	<button class="x_btn x_btn-inverse" type="submit"><?php echo $__Context->lang->cmd_search ?></button>
	<a href="<?php echo getUrl('page', '', 'domain', '') ?>" class="x_btn"><?php echo $__Context->lang->cmd_cancel ?></a>
</form>
