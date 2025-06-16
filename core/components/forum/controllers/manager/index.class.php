<?php
class SplitForumManagerController extends modExtraManagerController
{
    public function process()
    {
        $this->modx->regClientStartupScript('splitforum.js');
        $this->modx->regClientCSS('splitforum.css');
    }

    public function getPageTitle()
    {
        return 'Your Component Admin';
    }

    public function loadCustomCssJs()
    {
        $this->modx->regClientCSS('/core/components/your_component/assets/css/splitforum.css');
        $this->modx->regClientStartupScript('/core/components/your_component/assets/js/splitforum.js');
    }
}
