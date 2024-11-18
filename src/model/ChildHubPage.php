<?php

namespace DFT\SilverStripe\ChildHubPage\Model;

use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\CheckboxField;
use Page;

/**
 * Generate a page
 */
class ChildHubPage extends Page
{
    private static $table_name = 'ChildHubPage';

    /**
     * @var string
     */
    private static $icon = "_resources/vendor/dft/silverstripe-childhubpage/client/dist/img/grid.png";

    /**
     * @var string
     */
    private static $description = 'Display all children of this page as either a list or grid';

    private static $db = [
        "ShowChildrenAs" => "Enum(array('Grid','List'),'Grid')",
        "ShowSideBar" => "Boolean"
    ];

    public function getSettingsFields()
    {
        $fields = parent::getSettingsFields();

        $fields->addFieldsToTab(
            "Root.Settings",
            [
                DropdownField::create(
                    "ShowChildrenAs",
                    $this->fieldLabel("ShowChildrenAs"),
                    $this->dbobject("ShowChildrenAs")->enumValues()
                ),
                CheckboxField::create(
                    'ShowSideBar',
                    $this->fieldLabel("ShowSideBar")
                )
            ],
            "CanViewType"
        );

        return $fields;
    }

}
