<?php

class SampleModule extends Module {
    protected $isSaved = false;
    public function __construct()
    {
        $this->name = 'samplemodule';
        $this->tab = "content_management";
        $this->version = '1.0.0';
        $this->author = 'zaw';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7.0.0',
            'max' => '8.99.99',
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->trans('Sample Module', array(), 'Modules.CustomProductFields.Admin');
        $this->description = $this->trans('Custom Ajax Module to handle ajax requests.', array(), 'Modules.CustomProductFields.Admin');

        $this->confirmUninstall = $this->trans('Are you sure you want to uninstall this module?', array(), 'Modules.CustomProductFields.Admin');
    }
}