<?php
class NewsletterRegistration_Component extends Kwc_Abstract_Composite_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlStatic('Newsletter Anmeldung');
        $ret['cssClass'] = 'webStandard';
        $ret['generators']['child']['component']['form'] = 'NewsletterRegistration_Form_Component';
        return $ret;
    }
}
