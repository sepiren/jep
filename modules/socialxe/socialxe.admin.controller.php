<?php
	/**
	 * @class  socialxeAdminController
     * @author CONORY (http://www.conory.com)
	 * @brief The admin controller class of the socialxe module
	 */
	
	class socialxeAdminController extends socialxe
	{
		/**
		 * @brief Initialization
		 */
		function init()
		{
		}
		
        /**
         * @brief API 설정
         **/
        function procSocialxeAdminSettingApi() 
		{
            $args = Context::getRequestVars();
			
			$config_names = array('twitter_consumer_key','twitter_consumer_secret','facebook_app_id','facebook_app_secret','google_client_id','google_client_secret','naver_client_id','naver_client_secret','kakao_client_id');
			
			$config = $this->config;
			foreach($config_names as $val){
				$config->{$val} = $args->{$val};
			}
			
            $oModuleController = getController('module');
            $oModuleController->insertModuleConfig('socialxe', $config);	
			
            $this->setMessage('success_updated');
			$returnUrl = Context::get('success_return_url')?Context::get('success_return_url'):getNotEncodedUrl('', 'module', 'admin', 'act', 'dispSocialxeAdminSettingApi');
			$this->setRedirectUrl($returnUrl);
        }
		
        /**
         * @brief 환경설정
         **/
        function procSocialxeAdminSetting() 
		{
            $args = Context::getRequestVars();
			
			$config_names = array('delete_auto_log_record','sns_services','sns_profile','layout_srl','skin','mlayout_srl','mskin','sns_login','default_login','default_signup','delete_member_forbid','sns_follower_count','mail_auth_valid_hour','sns_suspended_account','sns_keep_signed','sns_input_add_info','linkage_module_srl','linkage_module_target');
			
			$config = $this->config;
			foreach($config_names as $val){
				$config->{$val} = $args->{$val};
			}
			
            $oModuleController = getController('module');
            $oModuleController->insertModuleConfig('socialxe', $config);	
			
            $this->setMessage('success_updated');
			$returnUrl = Context::get('success_return_url')?Context::get('success_return_url'):getNotEncodedUrl('', 'module', 'admin', 'act', 'dispSocialxeAdminSetting');
			$this->setRedirectUrl($returnUrl);
        }
		
        /**
         * @brief 로그기록 삭제
         **/
        function procSocialxeAdminDeleteLogRecord() 
		{
			$args = new stdClass;
			$date_srl = Context::get('date_srl');
		    if($date_srl){
				$args->regdate = $date_srl;
			}
            $output = executeQuery('socialxe.deleteLogRecord', $args);	
            if(!$output->toBool()) return $output;
				
            $this->setMessage('success_deleted');
			$returnUrl = Context::get('success_return_url')?Context::get('success_return_url'):getNotEncodedUrl('', 'module', 'admin', 'act', 'dispSocialxeAdminLogRecord');
			$this->setRedirectUrl($returnUrl);
        }
	}