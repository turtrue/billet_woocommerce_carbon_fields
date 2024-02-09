<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Настройки темы')
    ->set_icon('dashicons-carrot')
    ->add_tab('Шапка', array(
        Field::make('image', 'est_header_logo', 'Логотип')
    ))
    ->add_tab('Подвал', array(
        Field::make('text', 'crb_email', 'Email')->set_width(33),
        Field::make('text', 'crb_phone_1', 'Телефон 1')->set_width(33),
        Field::make('text', 'crb_phone_2', 'Телефон 2')->set_width(33)
    ));
