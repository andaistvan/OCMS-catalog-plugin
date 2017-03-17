<?php namespace Arteriaweb\Catalog\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

/**
 * Maincontrollers Back-end Controller
 */
class Maincontrollers extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Arteriaweb.Catalog', 'catalog', 'maincontrollers');
    }
}
