<?php
namespace greeschenko\contentautoup;

use Yii;
use yii\helpers\Html;
use yii\base\Widget as BaseWidget;

class AutoUpContent extends BaseWidget
{
    public $url;
    public $interval;

    public function run()
    {
        if ($this->url != '' and $this->interval != '') {
            $this->register();
            echo Html::tag('div','',[
                'id' => (isset($this->id)) ? $this->id : $this->getId(),
                'class' => 'contentautoupwrap',
                'data-url' => $this->url,
                'data-interval' => $this->interval
            ]);
        }
    }

    protected function register()
    {
        $view = $this->getView();
        $asset = Yii::$container->get(Assets::className());
        $asset = $asset::register($view);
    }
}
