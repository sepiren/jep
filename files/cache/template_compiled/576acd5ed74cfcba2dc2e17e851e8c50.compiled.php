<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/socialxeserver/tpl','header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/socialxeserver/tpl/filter','insert_config.xml');$__xmlFilter->compile(); ?>
<form class="x_form x_form-horizontal" action="./" method="get" onsubmit="return procFilter(this, insert_config)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<div class="x_control-group">
		<label class="x_control-label" for="twitter_consumer_key"><?php echo $__Context->lang->twitter_consumer_key ?></label>
		<div class="x_controls">
			<input type="text" name="twitter_consumer_key" id="twitter_consumer_key" value="<?php echo htmlspecialchars($__Context->config->twitter_consumer_key) ?>" />
			<p class="x_help-block">Callback: <?php echo getFullUrl('', 'module', 'socialxeserver', 'act', 'procSocialxeserverCallback', 'provider', 'twitter') ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="twitter_consumer_key_secret"><?php echo $__Context->lang->twitter_consumer_key_secret ?></label>
		<div class="x_controls">
			<input type="text" name="twitter_consumer_key_secret" id="twitter_consumer_key_secret" value="<?php echo htmlspecialchars($__Context->config->twitter_consumer_key_secret) ?>" />
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="twitter_access_token"><?php echo $__Context->lang->twitter_access_token ?></label>
		<div class="x_controls">
			<input type="text" name="twitter_access_token" id="twitter_access_token" value="<?php echo htmlspecialchars($__Context->config->twitter_access_token) ?>" />
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="twitter_access_token_secret"><?php echo $__Context->lang->twitter_access_token_secret ?></label>
		<div class="x_controls">
			<input type="text" name="twitter_access_token_secret" id="twitter_access_token_secret" value="<?php echo htmlspecialchars($__Context->config->twitter_access_token_secret) ?>" />
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="me2day_application_key"><?php echo $__Context->lang->me2day_application_key ?></label>
		<div class="x_controls">
			<input type="text" name="me2day_application_key" id="me2day_application_key" value="<?php echo htmlspecialchars($__Context->config->me2day_application_key) ?>" />
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="me2day_user_id"><?php echo $__Context->lang->me2day_user_id ?></label>
		<div class="x_controls">
			<input type="text" name="me2day_user_id" id="me2day_user_id" value="<?php echo htmlspecialchars($__Context->config->me2day_user_id) ?>" />
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="me2day_api_key"><?php echo $__Context->lang->me2day_api_key ?></label>
		<div class="x_controls">
			<input type="text" name="me2day_api_key" id="me2day_api_key" value="<?php echo htmlspecialchars($__Context->config->me2day_api_key) ?>" />
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="facebook_app_id"><?php echo $__Context->lang->facebook_app_id ?></label>
		<div class="x_controls">
			<input type="text" name="facebook_app_id" id="facebook_app_id" value="<?php echo htmlspecialchars($__Context->config->facebook_app_id) ?>" />
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="facebook_app_secret"><?php echo $__Context->lang->facebook_app_secret ?></label>
		<div class="x_controls">
			<input type="text" name="facebook_app_secret" id="facebook_app_secret" value="<?php echo htmlspecialchars($__Context->config->facebook_app_secret) ?>" />
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="bitly_username"><?php echo $__Context->lang->bitly_username ?></label>
		<div class="x_controls">
			<input type="text" name="bitly_username" id="bitly_username" value="<?php echo htmlspecialchars($__Context->config->bitly_username) ?>" />
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="bitly_api_key"><?php echo $__Context->lang->bitly_api_key ?></label>
		<div class="x_controls">
			<input type="text" name="bitly_api_key" id="bitly_api_key" value="<?php echo htmlspecialchars($__Context->config->bitly_api_key) ?>" />
		</div>
	</div>
	<!--  kakikaki adding -->
	<div class="x_control-group">
		<label class="x_control-label" for="google_client_id"><?php echo $__Context->lang->google_client_id ?></label>
		<div class="x_controls">
			<input type="text" name="google_client_id" id="google_client_id" value="<?php echo htmlspecialchars($__Context->config->google_client_id) ?>" />
			<p class="x_help-block">Callback: <?php echo getFullUrl('', 'module', 'socialxeserver', 'act', 'procSocialxeserverCallback', 'provider', 'google') ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="google_client_secret"><?php echo $__Context->lang->google_client_secret ?></label>
		<div class="x_controls">
			<input type="text" name="google_client_secret" id="google_client_secret" value="<?php echo htmlspecialchars($__Context->config->google_client_secret) ?>" />
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="google_developer_key"><?php echo $__Context->lang->google_developer_key ?></label>
		<div class="x_controls">
			<input type="text" name="google_developer_key" id="google_developer_key" value="<?php echo htmlspecialchars($__Context->config->google_developer_key) ?>" />
		</div>
	</div>
	<!--  kakikaki adding end : 검증완 -->
	<div class="btnArea">
		<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_registration ?></button>
	</div>
	
</form>
