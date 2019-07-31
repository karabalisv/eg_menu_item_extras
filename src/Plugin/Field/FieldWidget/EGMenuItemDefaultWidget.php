<?php


namespace Drupal\eg_menuclass\Plugin\Field\FieldWidget;

use Drupal;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;


class EGMenuItemDefaultWidget extends WidgetBase{

  public function formElement(FieldItemListInterface $items, $delta, Array $element, Array &$form, FormStateInterface $formState) {

    // Menu Item Class

    $element['eg_menu_item_class_text'] = [
      '#type' => 'textfield',
      '#title' => t('Menu Item Class'),

      // Set here the current value for this field, or a default value (or
      // null) if there is no a value
      '#default_value' => isset($items[$delta]->eg_menu_item_class_text) ?
        $items[$delta]->eg_menu_item_class_text : null,

      '#empty_value' => '',
      '#placeholder' => t('Menu Item Class'),
    ];

    // Menu Item Description

    $element['eg_menu_item_description_text'] = [
      '#type' => 'textfield',
      '#title' => t('Menu Item Description'),
      '#default_value' => isset($items[$delta]->eg_menu_item_description_text) ?
        $items[$delta]->eg_menu_item_description_text : null,
      '#empty_value' => '',
      '#placeholder' => t('Menu Item Description'),
    ];

    return $element;
  }

}