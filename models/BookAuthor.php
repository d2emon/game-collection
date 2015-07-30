<?php

namespace d2emon\games\models;

use Yii;

/**
 * This is the model class for table "book_author".
 *
 * @property integer $id
 * @property integer $game_company_id
 * @property string $name
 * @property string $description
 *
 * @property GameCompany $gameCompany
 */
class BookAuthor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book_author';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['game_company_id'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['game_company_id'], 'exist', 'skipOnError' => true, 'targetClass' => GameCompany::className(), 'targetAttribute' => ['game_company_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('games', 'ID'),
            'game_company_id' => Yii::t('games', 'Game Company ID'),
            'name' => Yii::t('games', 'Name'),
            'description' => Yii::t('games', 'Description'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGameCompany()
    {
        return $this->hasOne(GameCompany::className(), ['id' => 'game_company_id']);
    }
}
