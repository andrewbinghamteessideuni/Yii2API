'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => true,
            'rules' => [
                ['class'=>'yii\rest\UrlRule', 'controller'=>['api/properties'], 'pluralize'=>'false'],
                '' => 'site/index',
                '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
            ],
        ],
