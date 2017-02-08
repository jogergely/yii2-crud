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

##Use the extension

1. (http://mypage.com/gii/model)
Generate a model from your database table with gii. It's name should be the same as your table. for example: mydata -> MyData 

2. CRUD generation with gii (http://mypage.com/gii/h3tech)
In the model field write our full model name (app\models\MyData). In the search and controller field you should write the generated Search and  Controller full name. (app\models\MyDataSearch, app\controllers\MyDataController).
After the generation you should delete the Controller and the generated views (views/my-data)

4. 
You must create a Controller which is inherited from the AbstractCRUDController
After you must add inside the Controller.php:
* the model's class
* the search model's class
* viewRules() function definition
	````php
<?php
 
namespace app\controllers;
 
use h3tech\crud\controllers\AbstractCRUDController;
 
class TestDataController extends AbstractCRUDController
{
    protected static $MODEL = 'app\models\MyData';
    protected static $SEARCH_MODEL = 'app\models\MyDataSearch';
 
    public static function viewRules() {
        return [
            'data' => ['textInput']
        ];
    }
}
````

5. now you can reach the generated model (http://mypage.com/my-data/index)
at last you must put a link into the site layout

##Author

**name:** Szabó Gyula
**email:** gt.szgyula@gmail.com

##License

This project is licensed under the MIT License - see the LICENSE.md file for details
