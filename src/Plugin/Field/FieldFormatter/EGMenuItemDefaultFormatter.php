<?php

namespace Drupal\eg_menuclass\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal;

class EGMenuItemDefaultFormatter extends FormatterBase{

  /**
   * Define how the field type is showed.
   *
   * Inside this method we can customize how the field is displayed inside
   * pages.
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {

    $elements = [];
    foreach ($items as $delta => $item) {
      $elements[$delta] = [
        '#type' => 'markup',
        '#markup' => $item->eg_menu_item_class_text . ', ' . $item->eg_menu_item_description_text
      ];
    }

    return $elements;
  }

}