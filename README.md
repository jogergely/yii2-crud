# H3Tech/Yii2-CRUD #

##Install

To install this extension you must:

1. open composer.json in your yii2 base folder, then write: 
	````php
	"require": {
		"h3tech/yii2-crud": "dev-master"
    },
	"repositories": [
        {
            "type": "vcs",
            "url":  "https://github.com/jogergely/yii2-crud.git"
        }
    ]
	````

2. run composer update

3. open web.php in config folder and write:
	````php
	$config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'generators' => [
            'h3tech' => [
                'class' => 'h3tech\crud\generators\crud\Generator'
            ]
        ]
    ];
	````

4. You can use the crud generator from /gii page.

##Author

**name:** Szabó Gyula
**email:** gt.szgyula@gmail.com

##License

This project is licensed under the MIT License - see the LICENSE.md file for details
