<?php

namespace {

    use SilverStripe\CMS\Controllers\ContentController;
    use SilverStripe\Forms\DateField;
    use SilverStripe\Forms\DatetimeField;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\Form;
    use SilverStripe\Forms\FormAction;
    use SilverStripe\Forms\MoneyField;
    use SilverStripe\Forms\NumericField;
    use SilverStripe\View\Requirements;

    class PageController extends ContentController
    {
        protected function init()
        {
            parent::init();
            // You can include any CSS or JS required by your project here.
            // See: https://docs.silverstripe.org/en/developer_guides/templates/requirements/

            Requirements::javascript('//code.jquery.com/jquery-3.3.1.min.js');
            Requirements::javascript('//code.jquery.com/ui/1.12.1/jquery-ui.min.js');
            Requirements::css('//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');

        }

    }
}
