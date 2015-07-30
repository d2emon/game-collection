<?php

namespace d2emon\games\controllers;

use yii\web\Controller;
use yii\data\ActiveDataProvider;
use d2emon\games\models\GameCompany;
use d2emon\games\models\BookAuthor;
use d2emon\games\models\Genre;
use d2emon\games\models\Tag;

class DefaultController extends Controller
{
    public function actionIndex()
    {
	return $this->render('index', [
	    'companies' => new ActiveDataProvider([
	        'query' => GameCompany::find(),
	    ]),
	    'authors' => new ActiveDataProvider([
	        'query' => BookAuthor::find(),
	    ]),
	    'genres' => new ActiveDataProvider([
	        'query' => Genre::find(),
	    ]),
	    'tags' => new ActiveDataProvider([
	        'query' => Tag::find(),
	    ]),
	]);
    }
}
