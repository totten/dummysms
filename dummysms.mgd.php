<?php
$entities[] = [
  'name' => 'dummysms',
  'entity' => 'OptionValue',
  'update' => 'always',
  'params' => [
    'version' => 3,
    'option_group_id' => 'sms_provider_name',
    'label' => 'Dummy SMS',
    'value' => 'org.civicrm.dummysms',
    'name' => 'dummysms',
    'is_active' => 1,
  ],
];
$entities[] = [
  'name' => 'dummysms_provider',
  'entity' => 'SmsProvider',
  'update' => 'always',
  'params' => [
    'version' => 3,
    'name' => 'org.civicrm.dummysms',
    'title' => 'Dummy',
    'username' => 'dummy',
    'password' => 'dummy',
    'api_type' => '1',
    'api_url' => 'https://example.com',
    'api_params' => 'from=12025551212',
    'is_default' => '1',
    'is_active' => '1',
    'domain_id' => '1',
  ],
];
return $entities;
