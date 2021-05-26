<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'pgsql:host=localhost;dbname=dispatch_summary',
            'username' => 'postgres',
            'password' => 'Ms34901351',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'transport'=>[
              'class' => 'Swift_SmtpTransport',
              'host' => 'uc.esrr.rzd',
              'username' => 'di_karatuevin',
              'password' => 'Zz123456',
              'port' => '25',
              'encryption' => 'tls',
              'streamOptions' => [
                  'ssl' =>[
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                  ],
              ],
            ],
        ],
    ],
];
