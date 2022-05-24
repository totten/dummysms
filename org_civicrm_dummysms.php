<?php

/**
 *
 * @package CRM
 * @copyright LLC (c) 2019-2020
 * $Id$
 *
 */
class org_civicrm_dummysms extends CRM_SMS_Provider {


  /**
   * We only need one instance of this object. So we use the singleton
   * pattern and cache the instance in this variable
   *
   * @var object
   * @static
   */
  static private $_singleton = array();

  /**
   * @param array $provider
   *   SmsProvider configuration details
   * @param bool $skipAuth
   *   I have no idea what this is.
   */
  public function __construct(array $provider, bool $skipAuth = TRUE) {
    $this->provider = $provider;
  }

  /**
   * I have no idea why I have to override this, but all published extensions do it, and it fails without an override.
   *
   * @return object
   * @static
   */
  public static function &singleton($providerParams = array(), $force = FALSE) {
    if (isset($providerParams['provider'])) {
      $providers = CRM_SMS_BAO_Provider::getProviders(NULL, array('name' => $providerParams['provider']));
      $providerID = current($providers)['id'];
    }
    else {
      $providerID = CRM_Utils_Array::value('provider_id', $providerParams);
    }
    $skipAuth = $providerID ? FALSE : TRUE;
    $cacheKey = (int) $providerID;

    if (!isset(self::$_singleton[$cacheKey]) || $force) {
      $provider = array();
      if ($providerID) {
        $provider = CRM_SMS_BAO_Provider::getProviderInfo($providerID);
      }
      self::$_singleton[$cacheKey] = new static($provider, $skipAuth);
    }
    return self::$_singleton[$cacheKey];
  }

  /**
   * Send an SMS Message via the API Server.
   *
   * @param string $recipient
   * @param array $header
   * @param string $message
   * @param int $jobID
   */
  public function send($recipient, $header, $message, $jobID = NULL) {
    $reformat = function($phone) {
      return $this->formatPhone($this->stripPhone($phone), $kind, 'dash');
    };

    $record = [
      'from_phone' => !empty($this->provider['api_params']['from']) ? $reformat($this->provider['api_params']['from']) : '0',
      'to_phone' => $reformat($recipient),
      'body' => $message,
      'is_inbound' => FALSE,
    ];
    return TRUE;
  }

  /**
   * Process Inbound sms.
   *
   */
  public function inbound() {
    // This is insane.
    $like = "";
    $fromPhone = $this->retrieve('from', 'String');
    $fromPhone = $this->formatPhone($this->stripPhone($fromPhone), $like, "like");
    $to = $this->retrieve('to', 'String');
    $to = $this->formatPhone($this->stripPhone($to), $like, "like");
    $message = $this->retrieve('message', 'String');
    $refId = $this->retrieve('ref', 'String');
    return parent::processInbound($fromPhone, $message, $to, $refId);
  }

}
