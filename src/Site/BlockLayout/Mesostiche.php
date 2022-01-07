<?php

namespace Mesostiche\Site\BlockLayout;

use Omeka\Api\Representation\SiteRepresentation;
use Omeka\Api\Representation\SitePageBlockRepresentation;
use Omeka\Api\Representation\SitePageRepresentation;
use Omeka\Site\BlockLayout\AbstractBlockLayout;
use Laminas\Form\Element\Text;
use Laminas\View\Renderer\PhpRenderer;

class Mesostiche extends AbstractBlockLayout
{
    public function getLabel()
    {
        return 'Mesostiche'; // @translate
    }

    public function form(PhpRenderer $view, SiteRepresentation $site, SitePageRepresentation $page = null, SitePageBlockRepresentation $block = null)
    {
        $regle = new Text('o:block[__blockIndex__][o:data][regle]');
        $regle->setLabel('Règle verticale'); // @translate
        $regle->setValue($block ? $block->dataValue('regle', 'BIENVENU') : 'BIENVENU');

        return $view->formRow($regle);
    }

    public function render(PhpRenderer $view, SitePageBlockRepresentation $block)
    {
        return $view->partial('mesostiche/common/block-layouts/mesostiche', ['block' => $block]);
    }

    public function prepareRender(PhpRenderer $view)
    {

        $view->headScript()->appendFile($view->assetUrl('js/anime.min.js','Mesostiche'));
        $view->headScript()->appendFile($view->assetUrl('js/d3.V6.min.js','Mesostiche'));
        $view->headScript()->appendFile($view->assetUrl('js/opentype.min.js','Mesostiche'));
        $view->headScript()->appendFile($view->assetUrl('js/echelleColor.js','Mesostiche'));
        $view->headScript()->appendFile($view->assetUrl('js/rgbcolor.js','Mesostiche'));
        $view->headScript()->appendFile($view->assetUrl('js/canvg.js','Mesostiche'));
        $view->headScript()->appendFile($view->assetUrl('js/svgenie.js','Mesostiche'));
        $view->headScript()->appendFile($view->assetUrl('js/jquery.min.js','Mesostiche'));

        $view->headScript()->appendScript('const urlFont = "'.$view->assetUrl('fonts/FiraSansMedium.woff','Mesostiche').'";
        let aleaItems = [];');

        $view->headScript()->appendFile($view->assetUrl('js/main.js','Mesostiche'));
        $view->headScript()->appendFile($view->assetUrl('js/mesostiche.js','Mesostiche'));
        $view->headScript()->appendFile($view->assetUrl('js/exagramme.js','Mesostiche'));
        $view->headScript()->appendFile($view->assetUrl('js/papillon.js','Mesostiche'));
        $view->headScript()->appendFile($view->assetUrl('js/textes.js','Mesostiche'));

    }

}
