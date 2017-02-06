# yii2-crud >> README

Install

To install this extension you must:
1): open composer.json in your yii2 base folder, then write: 
	"require": {
		"h3tech/yii2-crud": "dev-master"
    },
	"repositories": [
        {
            "type": "vcs",
            "url":  "https://github.com/jogergely/yii2-crud.git"
        }
    ]

2): run composer update

3): open web.php in config folder and write:
	$config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'generators' => [
            'h3tech' => [
                'class' => 'h3tech\crud\generators\crud\Generator'
            ]
        ]
    ];

4): after you can use the crud generator from /gii page
