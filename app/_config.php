<?php

use SilverStripe\Security\PasswordValidator;
use SilverStripe\Security\Member;
use SilverStripe\Core\Manifest\ModuleLoader;

// remove PasswordValidator for SilverStripe 5.0
$validator = new PasswordValidator();
$validator->setMinLength(8);
$validator->setHistoricCount(6);
Member::set_password_validator($validator);

SilverStripe\i18n\i18n::set_locale('fr_FR');
//SilverStripe\i18n\i18n::set_locale('fa');
//
//SilverStripe\ORM\Search\FulltextSearchable::enable();
//
//$test = new \SilverStripe\ORM\Connect\TempDatabase();
//$test->build();

use SilverStripe\Forms\HTMLEditor\HtmlEditorConfig;
HtmlEditorConfig::get('cms')
    ->enablePlugins('fullscreen')
    ->insertButtonsAfter('code', 'fullscreen');
