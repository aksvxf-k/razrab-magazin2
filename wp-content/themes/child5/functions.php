<?php
/**
 * Кастомный формат цены для вариативного товара.
 * Заменяет диапазон "3000 ₽ – 4000 ₽" на "от 3000 ₽".
 */
add_filter( 'woocommerce_variable_price_html', 'custom_variation_price_format', 10, 2 );
add_filter( 'woocommerce_variable_sale_price_html', 'custom_variation_price_format', 10, 2 );

function custom_variation_price_format( $price, $product ) {
    // Получаем минимальную цену среди всех вариаций
    $min_price = $product->get_variation_price( 'min', true );
    // Получаем максимальную цену для проверки
    $max_price = $product->get_variation_price( 'max', true );

    // Если цены одинаковые — выводим просто цену без "от"
    if ( $min_price == $max_price ) {
        return wc_price( $min_price );
    }

    // Форматируем минимальную цену с символом валюты
    $formatted_min_price = wc_price( $min_price );

    // Возвращаем строку с приставкой "от"
    return sprintf( __( 'от %s', 'woocommerce' ), $formatted_min_price );
}

add_filter( 'woocommerce_sale_flash', 'custom_sale_badge_text', 10, 3 );
function custom_sale_badge_text( $html, $post, $product ) {
    return '<span class="onsale">ВЫГОДА!</span>';
}

add_action( 'woocommerce_single_product_summary', 'show_low_stock_warning', 15 );
function show_low_stock_warning() {
    global $product;
    if ( $product->managing_stock() && $product->get_stock_quantity() > 0 && $product->get_stock_quantity() < 3 ) {
        echo '<p style="color: #dc2626; font-weight: bold;">Успейте купить! Осталось всего ' . $product->get_stock_quantity() . ' шт.</p>';
    }
}