<?php return array(
    'root' => array(
        'name' => 'systemsdk/docker-apache-php-laravel-tools',
        'pretty_version' => 'v3.4.0',
        'version' => '3.4.0.0',
        'reference' => null,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'halleck45/php-metrics' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'halleck45/phpmetrics' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'nikic/php-parser' => array(
            'pretty_version' => 'v4.18.0',
            'version' => '4.18.0.0',
            'reference' => '1bcbb2179f97633e98bbbc87044ee2611c7d7999',
            'type' => 'library',
            'install_path' => __DIR__ . '/../nikic/php-parser',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'phpmetrics/phpmetrics' => array(
            'pretty_version' => 'v2.8.2',
            'version' => '2.8.2.0',
            'reference' => '4b77140a11452e63c7a9b98e0648320bf6710090',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpmetrics/phpmetrics',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'roave/security-advisories' => array(
            'pretty_version' => 'dev-latest',
            'version' => 'dev-latest',
            'reference' => '1f77ae7f854c4163fc16d6500cea53e202e38f83',
            'type' => 'metapackage',
            'install_path' => null,
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => true,
        ),
        'systemsdk/docker-apache-php-laravel-tools' => array(
            'pretty_version' => 'v3.4.0',
            'version' => '3.4.0.0',
            'reference' => null,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
