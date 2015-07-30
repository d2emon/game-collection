<?php

namespace d2emon\games\models;

use Yii;

/**
 * This is the model class for table "genre".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $parent_genre_id
 */
class Genre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'genre';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['parent_genre_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('games', 'ID'),
            'name' => Yii::t('games', 'Name'),
            'description' => Yii::t('games', 'Description'),
            'parent_genre_id' => Yii::t('games', 'Parent Genre ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupGenre()
    {
	return $this->hasOne(self::className(), ['id' => 'parent_genre_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubGenre()
    {
	return $this->hasMany(self::className(), ['parent_genre_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSibGenre()
    {
	return $this->hasMany(self::className(), ['parent_genre_id' => 'parent_genre_id'])->where(['not', ['id' => $this->id]]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupGenres()
    {
	$genres   = [];
        $supgenre = $this->supGenre;
	while ($supgenre) {
	    $genres[] = $supgenre;
            $supgenre = $supgenre->supGenre;
	}
	return array_reverse($genres);
    }
}
