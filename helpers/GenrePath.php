<?php
namespace d2emon\games\helpers;

class GenrePath 
{
    public static function forModel($model)
    {
	$path = [];
	foreach($model->supGenres as $supgenre) {
	    $path[] = [
	        'label' => $supgenre->name,
		'url'   => ['/games/genre/view', 'id' => $supgenre->id],
	    ];
	}
	$path[] = $model->name;

	return $path;        
    }	

    public static function forId($id)
    {
	return self::forModel(Genre::findOne($id));
    }
}
