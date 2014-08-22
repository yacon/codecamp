<?php
class NewsletterRegistration_Form_Component extends Kwc_Form_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['placeholder']['submitButton'] = trlStatic('Auf dem Laufenden bleiben');
        $ret['generators']['child']['component']['success'] = 'NewsletterRegistration_Form_Success_Component';
        return $ret;
    }
}
