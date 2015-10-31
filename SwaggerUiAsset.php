<?php
/**
 * @license MIT
 */

namespace machour\yii2\swagger\ui;

use yii\web\AssetBundle;

/**
 * @author Mehdi Achour <machour@gmail.com>
 * @since 1.0
 */
class SwaggerUiAsset extends AssetBundle
{
    public $sourcePath = '@bower/swagger-ui/dist';

    public $js = [
        'lib/jquery-1.8.0.min.js',
        'lib/jquery.slideto.min.js',
        'lib/jquery.wiggle.min.js',
        'lib/jquery.ba-bbq.min.js',
        'lib/handlebars-2.0.0.js',
        'lib/underscore-min.js',
        'lib/backbone-min.js',
        'swagger-ui.js',
        'lib/highlight.7.3.pack.js',
        'lib/marked.js',
        'lib/swagger-oauth.js',
    ];

    public $css = [
        'css/typography.css', // media='screen' rel='stylesheet' type='text/css'/>
        'css/reset.css', // media='screen' rel='stylesheet' type='text/css'/>
        'css/screen.css', // media='screen' rel='stylesheet' type='text/css'/>
       // 'css/reset.css', // media='print' rel='stylesheet' type='text/css'/>
       // 'css/print.css', // media='print' rel='stylesheet' type='text/css'/>
    ];
}
