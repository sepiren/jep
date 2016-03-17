<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/socialxe/tpl','_header.html') ?>
<form action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="socialxe" />
	<input type="hidden" name="act" value="procSocialxeAdminSettingApi" />
	<input type="hidden" name="xe_validator_id" value="modules/socialxe/tpl/1" />
	<section class="section">
		<h1>Twitter API</h1>
		<div class="x_control-group">
			<label class="x_control-label" for="twitter_consumer_key">Consumer Key</label>
			<div class="x_controls">
				<input type="text" name="twitter_consumer_key" id="twitter_consumer_key" value="<?php echo $__Context->config->twitter_consumer_key ?>" />
				<a href="#twitter_consumer_key_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="twitter_consumer_key_help" class="x_help-block" hidden><?php echo $__Context->lang->about_twitter_consumer_key ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="twitter_consumer_secret">Consumer Secret</label>
			<div class="x_controls">
				<input type="text" name="twitter_consumer_secret" id="twitter_consumer_secret" value="<?php echo $__Context->config->twitter_consumer_secret ?>" />
				<a href="#twitter_consumer_secret_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="twitter_consumer_secret_help" class="x_help-block" hidden><?php echo $__Context->lang->about_twitter_consumer_secret ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label">Callback URL</label>
			<div class="x_controls">
				<?php echo getNotEncodedFullUrl('', 'module', 'socialxe', 'act', 'procSocialxeCallback','service','twitter') ?>
			</div>
		</div>
	</section>
	<section class="section">
		<h1>Facebook API</h1>
		<div class="x_control-group">
			<label class="x_control-label" for="facebook_app_id">App ID</label>
			<div class="x_controls">
				<input type="text" name="facebook_app_id" id="facebook_app_id" value="<?php echo $__Context->config->facebook_app_id ?>" />
				<a href="#facebook_app_id_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="facebook_app_id_help" class="x_help-block" hidden><?php echo $__Context->lang->about_facebook_app_id ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="facebook_app_secret">App Secret</label>
			<div class="x_controls">
				<input type="text" name="facebook_app_secret" id="facebook_app_secret" value="<?php echo $__Context->config->facebook_app_secret ?>" />
				<a href="#facebook_app_secret_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="facebook_app_secret_help" class="x_help-block" hidden><?php echo $__Context->lang->about_facebook_app_secret ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label">Redirect URL</label>
			<div class="x_controls">
				<?php echo getNotEncodedFullUrl('', 'module', 'socialxe', 'act', 'procSocialxeCallback','service','facebook') ?>
			</div>
		</div>
	</section>
	<section class="section">
		<h1>Google API</h1>
		<div class="x_control-group">
			<label class="x_control-label" for="google_client_id">Client ID</label>
			<div class="x_controls">
				<input type="text" name="google_client_id" id="google_client_id" value="<?php echo $__Context->config->google_client_id ?>" />
				<a href="#google_client_id_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="google_client_id_help" class="x_help-block" hidden><?php echo $__Context->lang->about_google_client_id ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="google_client_secret">Client Secret</label>
			<div class="x_controls">
				<input type="text" name="google_client_secret" id="google_client_secret" value="<?php echo $__Context->config->google_client_secret ?>" />
				<a href="#google_client_secret_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="google_client_secret_help" class="x_help-block" hidden><?php echo $__Context->lang->about_google_client_secret ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label">Redirect URL</label>
			<div class="x_controls">
				<?php echo getNotEncodedFullUrl('', 'module', 'socialxe', 'act', 'procSocialxeCallback','service','google') ?>
			</div>
		</div>
	</section>
	<section class="section">
		<h1>Naver API</h1>
		<div class="x_control-group">
			<label class="x_control-label" for="naver_client_id">Client ID</label>
			<div class="x_controls">
				<input type="text" name="naver_client_id" id="naver_client_id" value="<?php echo $__Context->config->naver_client_id ?>" />
				<a href="#naver_client_id_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="naver_client_id_help" class="x_help-block" hidden><?php echo $__Context->lang->about_naver_client_id ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="naver_client_secret">Client Secret</label>
			<div class="x_controls">
				<input type="text" name="naver_client_secret" id="naver_client_secret" value="<?php echo $__Context->config->naver_client_secret ?>" />
				<a href="#naver_client_secret_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="naver_client_secret_help" class="x_help-block" hidden><?php echo $__Context->lang->about_naver_client_secret ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label">Callback URL</label>
			<div class="x_controls">
				<?php echo getNotEncodedFullUrl('', 'module', 'socialxe', 'act', 'procSocialxeCallback','service','naver') ?>
			</div>
		</div>
	</section>
	<section class="section">
		<h1>Kakao API</h1>
		<div class="x_control-group">
			<label class="x_control-label" for="kakao_client_id">Client ID</label>
			<div class="x_controls">
				<input type="text" name="kakao_client_id" id="kakao_client_id" value="<?php echo $__Context->config->kakao_client_id ?>" />
				<a href="#kakao_client_id_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="kakao_client_id_help" class="x_help-block" hidden><?php echo $__Context->lang->about_kakao_client_id ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label">Redirect Path</label>
			<div class="x_controls">
				<?php echo getNotEncodedUrl('', 'module', 'socialxe', 'act', 'procSocialxeCallback','service','kakao') ?>
			</div>
		</div>
	</section>
	<div class="x_clearfix btnArea">
		<span class="x_pull-right"><input class="x_btn x_btn-primary" type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
	</div>
</form>