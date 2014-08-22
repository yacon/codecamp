<?php
class NewsletterRegistration_Form_Success_Component extends Kwc_Form_Success_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['placeholder']['success'] = trlStatic('Vielen Dank für dein Interesse, wir werden dich auf dem Laufenden halten!');
        return $ret;
    }
}
