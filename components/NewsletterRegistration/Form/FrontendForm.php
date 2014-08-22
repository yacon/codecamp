<?php
class NewsletterRegistration_Form_FrontendForm extends Kwf_Form
{
    protected $_model = 'NewsletterRegistration_Form_Model';
    public function initFields()
    {
        parent::initFields();
        $this->add(new Kwf_Form_Field_TextField('email', trlStatic('E-Mail')))
            ->addValidator(new Kwf_Validate_EmailAddressSimple())
            ->setAllowBlank(false);
    }
}
