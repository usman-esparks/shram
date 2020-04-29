<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'install' => [
        'date' => 'Fri, 19 Apr 2019 21:46:32 +0000'
    ],
    'crypt' => [
        'key' => 'cFeDjFhLhdoBTNtz5BfyamabY8LuALar'
    ],
    'session' => [
        'save' => 'files'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'nhkegerzzp',
                'username' => 'nhkegerzzp',
                'password' => 'PStA3JG9s3159',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1'
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'eav' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'translate' => 1,
        'config_webservice' => 1,
        'compiled_config' => 1,
        'customer_notification' => 1,
        'google_product' => 1,
        'vertex' => 1
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '37a_'
            ],
            'page_cache' => [
                'id_prefix' => '37a_'
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'downloadable_domains' => [
        'magento-264371-983781.cloudwaysapps.com'
    ],
    'system' => [
        'default' => [
          'smile_elasticsuite_core_base_settings' => [
            'es_client' => [
              'servers' => '127.0.0.1:9200',
              'enable_https_mode' => '0',
              'enable_http_auth' => '0',
              'http_auth_user' => '',
              'http_auth_pwd' => ''
            ]
          ]
        ]
      ]
];
