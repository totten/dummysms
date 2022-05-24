<?php
    return [
      [
        'name' => 'SavedSearch_Dummy_SMS', 
        'entity' => 'SavedSearch', 
        'cleanup' => 'unused', 
        'update' => 'unmodified', 
        'params' => [
          'version' => 4, 
          'values' => [
            'name' => 'Dummy_SMS', 
            'label' => 'Dummy SMS', 
            'form_values' => NULL, 
            'search_custom_id' => NULL, 
            'api_entity' => 'DummySmsMessage', 
            'api_params' => [
              'version' => 4, 
              'select' => [
                'created_date', 
                'is_inbound', 
                'from_phone', 
                'to_phone', 
                'body',
              ], 
              'orderBy' => [], 
              'where' => [], 
              'groupBy' => [], 
              'join' => [], 
              'having' => [],
            ], 
            'expires_date' => NULL, 
            'description' => NULL, 
            'mapping_id' => NULL,
          ],
        ],
      ], 
      [
        'name' => 'SavedSearch_Dummy_SMS_SearchDisplay_Dummy_SMS_Table_1', 
        'entity' => 'SearchDisplay', 
        'cleanup' => 'unused', 
        'update' => 'unmodified', 
        'params' => [
          'version' => 4, 
          'values' => [
            'name' => 'Dummy_SMS_Table_1', 
            'label' => 'Messages', 
            'saved_search_id.name' => 'Dummy_SMS', 
            'type' => 'table', 
            'settings' => [
              'actions' => TRUE, 
              'limit' => 50, 
              'classes' => [
                'table', 
                'table-striped',
              ], 
              'pager' => [
                'show_count' => TRUE, 
                'expose_limit' => TRUE,
              ], 
              'sort' => [
                [
                  'created_date', 
                  'DESC',
                ],
              ], 
              'columns' => [
                [
                  'type' => 'field', 
                  'key' => 'created_date', 
                  'dataType' => 'Timestamp', 
                  'label' => 'Created Date', 
                  'sortable' => TRUE,
                ], 
                [
                  'type' => 'field', 
                  'key' => 'from_phone', 
                  'dataType' => 'String', 
                  'label' => 'From Phone', 
                  'sortable' => TRUE,
                ], 
                [
                  'type' => 'field', 
                  'key' => 'to_phone', 
                  'dataType' => 'String', 
                  'label' => 'To Phone', 
                  'sortable' => TRUE,
                ], 
                [
                  'type' => 'field', 
                  'key' => 'body', 
                  'dataType' => 'Text', 
                  'label' => 'Body in Text Format', 
                  'sortable' => TRUE,
                ],
              ],
            ], 
            'acl_bypass' => FALSE,
          ],
        ],
      ],
    ];
