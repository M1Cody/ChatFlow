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
        'driftingly/rector-laravel' => array(
            'pretty_version' => '1.0.0',
            'version' => '1.0.0.0',
            'reference' => 'b5a43f683d2c32850c050fda1983828ff97b8470',
            'type' => 'rector-extension',
            'install_path' => __DIR__ . '/../driftingly/rector-laravel',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'phpstan/phpstan' => array(
            'pretty_version' => '1.10.59',
            'version' => '1.10.59.0',
            'reference' => 'e607609388d3a6d418a50a49f7940e8086798281',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpstan/phpstan',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'rector/rector' => array(
            'pretty_version' => '1.0.1',
            'version' => '1.0.1.0',
            'reference' => '258b775511e62a7188f8ce114d44acaf244d9a7d',
            'type' => 'library',
            'install_path' => __DIR__ . '/../rector/rector',
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
