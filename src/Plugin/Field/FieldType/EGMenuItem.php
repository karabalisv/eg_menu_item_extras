<?php

namespace Drupal\eg_menuclass\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\Core\Field\FieldStorageDefinitionInterface as StorageDefinition;

class EGMenuItem extends FieldItemBase{

  /**
   * Field type properties definition.
   *
   * Inside this method we defines all the fields (properties) that our
   * custom field type will have.
   *
   * Here there is a list of allowed property types: https://goo.gl/sIBBgO
   */
  public static function propertyDefinitions(StorageDefinition $storage) {

    $properties = [];

    $properties['eg_menu_item_class_text'] = DataDefinition::create('string')
      ->setLabel(t('Menu Item Class'));

    $properties['eg_menu_item_description_text'] = DataDefinition::create('string')
      ->setLabel(t('Menu Item Description'));

    return $properties;
  }



  /**
   * Field type schema definition.
   *
   * Inside this method we defines the database schema used to store data for
   * our field type.
   *
   * Here there is a list of allowed column types: https://goo.gl/YY3G7s
   */
  public static function schema(StorageDefinition $storage) {

    $columns = [];
    $columns['eg_menu_item_class_text'] = [
      'type' => 'char',
      'length' => 255,
    ];
    $columns['eg_menu_item_description_text'] = [
      'type' => 'char',
      'length' => 255,
    ];

    return [
      'columns' => $columns,
      'indexes' => [],
    ];
  }

  /**
   * Define when the field type is empty.
   *
   * This method is important and used internally by Drupal. Take a moment
   * to define when the field fype must be considered empty.
   */
  public function isEmpty() {

    $isEmpty =
      empty($this->get('eg_menu_item_class_text')->getValue()) &&
      empty($this->get('eg_menu_item_description_text')->getValue());

    return $isEmpty;
  }



}