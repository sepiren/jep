<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/socialxeserver/tpl','header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/socialxeserver/tpl/filter','insert_client.xml');$__xmlFilter->compile(); ?>
<form class="x_form-horizontal" action="./" method="get" onsubmit="return procFilter(this, insert_client)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<div class="x_control-group">
		<label for="domain" class="x_control-label"><?php echo $__Context->lang->domain ?></label>
		<div class="x_controls">
			<input type="text" name="domain" id="domain" value="<?php echo htmlspecialchars($__Context->client->domain) ?>" />
			<p class="x_help-block"><?php echo $__Context->lang->about_client_domain ?></p>
		</div>
	</div>
	<div class="btnArea">
		<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_registration ?></button>
	</div>
</form>
