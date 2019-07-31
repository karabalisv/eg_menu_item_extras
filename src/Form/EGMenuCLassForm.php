<?php
/**
 * Created by PhpStorm.
 * User: karabill
 * Date: 31/07/2019
 * Time: 10:23
 */

namespace Drupal\eg_menuclass\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Serialization\Exception\InvalidDataTypeException;
use Drupal\Component\Serialization\Yaml;

class EGMenuCLassForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'eg_menuclass.config',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'eg_menuclass_config';
  }


}