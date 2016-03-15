<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/socialxe/tpl','header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/socialxe/tpl/filter','insert_config.xml');$__xmlFilter->compile(); ?>
<form action="./" class="x_form-horizontal" method="post" onsubmit="return procFilter(this, insert_config)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<section class="section">
		<h1><?php echo $__Context->lang->server_settings ?></h1>
		<div class="x_control-group">
			<label class="x_control-label" for="server_hostname"><?php echo $__Context->lang->server_hostname ?></label>
			<div class="x_controls">
				<input type="text" name="server_hostname" id="server_hostname" value="<?php echo htmlspecialchars($__Context->config->server_hostname?$__Context->config->server_hostname:'socialxe.net') ?>" />
				<p class="x_help-block"><?php echo $__Context->lang->about_server_hostname ?> 예) xedesignteam.com</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="server_query"><?php echo $__Context->lang->server_query ?></label>
			<div class="x_controls">
				<input type="text" name="server_query" id="server_query" value="<?php echo htmlspecialchars($__Context->config->server_query?$__Context->config->server_query:'/?module=socialxeserver&act=procSocialxeserverAPI') ?>" />
				<p class="x_help-block"><?php echo $__Context->lang->about_server_query ?> 예) /?module=socialxeserver&act=procSocialxeserverAPI</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="server_query"><?php echo $__Context->lang->client_token ?></label>
			<div class="x_controls">
				<input type="text" name="client_token" id="client_token" value="<?php echo htmlspecialchars($__Context->config->client_token) ?>" />
				<p class="x_help-block"><?php echo $__Context->lang->about_client_token ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->use_ssl ?></div>
			<div class="x_controls">
				<label class="x_inline" for="use_ssl">
					<input type="checkbox" name="use_ssl" id="use_ssl" value="Y"<?php if($__Context->config->use_ssl == 'Y'){ ?> checked="checked"<?php } ?> />
					<?php echo $__Context->lang->about_use_ssl ?>
				</label>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->short_url_settings ?></h1>
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->use_short_url ?></div>
			<div class="x_controls">
				<label class="x_inline" for="use_short_url">
					<input type="checkbox" name="use_short_url" id="use_short_url" value="Y"<?php if($__Context->config->use_short_url == 'Y'){ ?> checked="checked"<?php } ?> />
					<?php echo $__Context->lang->about_use_short_url ?>
				</label>
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
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->service_settings ?></h1>
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->select_service ?></div>
			<div class="x_controls">
					<?php if($__Context->provider_list&&count($__Context->provider_list))foreach($__Context->provider_list as $__Context->provider){ ?><label><input type="checkbox" name="select_service_<?php echo $__Context->provider ?>" value="Y"<?php if($__Context->config->select_service[$__Context->provider] == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->provider[$__Context->provider] ?></label><?php } ?>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="hashtag"><?php echo $__Context->lang->hashtag ?></label>
			<div class="x_controls">
				<input type="text" name="hashtag" id="hashtag" value="<?php echo htmlspecialchars($__Context->config->hashtag) ?>" />
			</div>
		</div>
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->use_social_login ?></div>
			<div class="x_controls">
				<label class="x_inline" for="use_social_login">
					<input type="checkbox" name="use_social_login" id="use_social_login" value="Y"<?php if($__Context->config->use_social_login == 'Y'){ ?> checked="checked"<?php } ?> />
					<?php echo $__Context->lang->about_use_social_login ?>
				</label>
			</div>
		</div>
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $__Context->lang->use_social_info ?></div>
			<div class="x_controls">
				<label class="x_inline" for="use_social_info">
					<input type="checkbox" name="use_social_info" id="use_social_info" value="Y"<?php if($__Context->config->use_social_info == 'Y'){ ?> checked="checked"<?php } ?> />
					<?php echo $__Context->lang->about_use_social_info ?>
				</label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="skin"><?php echo $__Context->lang->skin ?></label>
			<div class="x_controls">
				<select name="skin">
					<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->config->skin == $__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->key ?>)</option><?php } ?>
				</select>
			</div>
		</div>
	</section>
	<div class="x_clearfix btnArea">
		<div class="x_pull-right">
			<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_save ?></button>
		</div>
	</div>
</form>
