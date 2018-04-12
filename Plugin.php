<?php
namespace Kanboard\Plugin\FlatMaterialCSS;
use Kanboard\Core\Plugin\Base;
class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:css', array('template' => 'plugins/FlatMaterialCSS/css/loader.css'));
    }
}