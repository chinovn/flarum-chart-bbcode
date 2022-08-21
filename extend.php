<?php namespace ChinoVN\BBCode\Custom;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
  	->css(__DIR__.'/less/forum.less'),
    (new Extend\Formatter)
    ->configure(function (Configurator $config) {
        
        $config->BBCodes->addCustom('[CHART]{ANYTHING}[/CHART]', '<div class="cb-chart">{ANYTHING}</div>');
        $config->BBCodes->addCustom('[CHART2]{ANYTHING}[/CHART2]', '<div class="cb-chart2">{ANYTHING}</div>');

        $config->BBCodes->addCustom('[CITEM]{TEXT},{COLOR},{NUMBER1},{NUMBER2}[/CITEM]', '<div class="cb-chart-item" style="background:{COLOR} !important; left:{NUMBER1}% !important; width:{NUMBER2}% !important;"><div class="cb-chart-item-name">{TEXT}</div></div>');
        $config->BBCodes->addCustom('[CGRID]{NUMBER},{TEXT}[/CGRID]', '<div class="cb-chart-grid" style="left: {NUMBER}%;">{TEXT}</div>');
        $config->BBCodes->addCustom('[CLEG]{COLOR},{TEXT}[/CLEG]', '<div class="cb-chart-legend"><div class="cb-chart-legend-mark" style="background: {COLOR} !important;"></div>{TEXT}</div>');
    })
];
