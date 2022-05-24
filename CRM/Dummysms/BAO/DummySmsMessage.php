<?php

use CRM_Dummysms_ExtensionUtil as E;

class CRM_Dummysms_BAO_DummySmsMessage extends CRM_Dummysms_DAO_DummySmsMessage {

  /**
   * Create a new DummySmsMessage based on array-data
   *
   * @param array $params key-value pairs
   * @return CRM_Dummysms_DAO_DummySmsMessage|NULL
   *
   * public static function create($params) {
   * $className = 'CRM_Dummysms_DAO_DummySmsMessage';
   * $entityName = 'DummySmsMessage';
   * $hook = empty($params['id']) ? 'create' : 'edit';
   *
   * CRM_Utils_Hook::pre($hook, $entityName, CRM_Utils_Array::value('id', $params), $params);
   * $instance = new $className();
   * $instance->copyValues($params);
   * $instance->save();
   * CRM_Utils_Hook::post($hook, $entityName, $instance->id, $instance);
   *
   * return $instance;
   * } */

}
