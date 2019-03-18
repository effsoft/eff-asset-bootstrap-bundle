<?php

namespace effsoft\eff\asset\bootstrap\bundle;

use effsoft\eff\EffAssetBundle;

class BootstrapBundleAssetBundle extends EffAssetBundle{

    public $sourcePath = '@bower/bootstrap/dist';

    public function init(){
        parent::init();

    }

    public $js = [
        YII_ENV_DEV ? 'js/bootstrap.bundle.js':'js/bootstrap.bundle.min.js',
    ];

    public $publishOptions = [
        'only' => [
            'js/*',
        ],
    ];

}