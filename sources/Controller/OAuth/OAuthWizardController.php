<?php
/**
 * @copyright   Copyright (C) 2010-2022 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

namespace Combodo\iTop\Controller\OAuth;

use Combodo\iTop\Application\TwigBase\Controller\Controller;
use Combodo\iTop\Core\Authentication\Client\OAuth\OAuthClientProviderAbstract;
use Combodo\iTop\Core\Authentication\Client\OAuth\OAuthClientResultDisplayConf;
use Dict;
use utils;

class OAuthWizardController extends Controller
{
	public function OperationWizard()
	{
		$aParams = [];

		$aParams['sReturnUri'] = OAuthClientProviderAbstract::GetRedirectUri();
		$aParams['sAjaxUri'] = utils::GetAbsoluteUrlAppRoot().'pages/ajax.oauth.wizard.php';
		//$this->AddLinkedScript(utils::GetAbsoluteUrlAppRoot().'/js/pages/backoffice/oauth.wizard.js');

		$aOAuthClasses = [
			'Combodo\iTop\Core\Authentication\Client\OAuth\OAuthClientProviderAzure',
			'Combodo\iTop\Core\Authentication\Client\OAuth\OAuthClientProviderGoogle',
		];

		foreach ($aOAuthClasses as $sOAuthClass) {
			$aParams['aProviders'][] = [
				'name'   => $sOAuthClass::GetVendorName(),
				'icon'   => $sOAuthClass::GetVendorIcon(),
				'colors' => $sOAuthClass::GetVendorColors(),
			];
		}

		$aParams['aInputs'] = [
			'client_id'     => ['type' => 'text', 'label' => Dict::S('UI:OAuth:Wizard:Form:Input:ClientId:Label'), 'read_only' => false, 'value' => ''],
			'client_secret' => ['type' => 'text', 'label' => Dict::S('UI:OAuth:Wizard:Form:Input:ClientSecret:Label'), 'read_only' => false, 'value' => ''],
			'scope'         => ['type' => 'text', 'label' => Dict::S('UI:OAuth:Wizard:Form:Input:Scope:Label'), 'read_only' => false, 'value' => ''],
			'additional'    => ['type' => 'text', 'label' => Dict::S('UI:OAuth:Wizard:Form:Input:Additional:Label'), 'read_only' => false, 'value' => ''],
			'redirect_uri'  => ['type' => 'text', 'label' => Dict::S('UI:OAuth:Wizard:Form:Input:RedirectUri:Label'), 'read_only' => true, 'value' => OAuthClientProviderAbstract::GetRedirectUri()],
		];

		$aParams['aAdditionalBlocks'] = [
			OAuthClientResultDisplayConf::GetResultDisplayTemplate(),
		];

		$this->DisplayPage($aParams);
	}
}