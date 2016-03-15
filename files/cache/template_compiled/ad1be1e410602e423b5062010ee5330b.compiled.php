<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/socialxeserver/tpl','header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/socialxeserver/tpl/filter','modify_client.xml');$__xmlFilter->compile(); ?>
<form class="x_form-horizontal" action="./" method="get" onsubmit="return procFilter(this, modify_client)" id="fo_obj"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="client_srl" value="<?php echo $__Context->client_srl ?>" />
<input type="hidden" name="domain" value="<?php echo $__Context->client_info->domain ?>" />
	<div class="x_control-group">
		<div class="x_control-label">Client Token</div>
		<div class="x_controls"><?php echo $__Context->client_info->client_token ?></div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="insert_domain"><?php echo $__Context->lang->domain ?></label>
		<div class="x_controls">
			<select name="_domain_list" multiple="multiple" size="<?php echo count($__Context->domain_list)?count($__Context->domain_list):1 ?>">
				<?php if($__Context->domain_list&&count($__Context->domain_list))foreach($__Context->domain_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val ?>"><?php echo $__Context->val ?></option><?php } ?>
			</select>
			<button type="button" class="x_btn" onclick="doDeleteDomain()"><?php echo $__Context->lang->cmd_delete ?></button>
			<br />
			<input type="text" name="_domain" id="insert_domain" />
			<button type="button" class="x_btn" onclick="doInsertDomain()"><?php echo $__Context->lang->cmd_insert ?></button>
		</div>
	</div>
	<div class="btnArea">
		<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_registration ?></button>
	</div>
</form>
