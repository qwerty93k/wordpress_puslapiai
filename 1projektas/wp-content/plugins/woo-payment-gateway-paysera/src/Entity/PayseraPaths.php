<?php

declare(strict_types=1);

namespace Paysera\Entity;

defined('ABSPATH') || exit;

class PayseraPaths
{
    public const PAYSERA_LOGO = PayseraPluginUrl . 'assets/images/paysera.svg';
    public const PAYSERA_DELIVERY_CSS = PayseraPluginUrl . 'assets/css/paysera-delivery.css';
    public const PAYSERA_DELIVERY_GRID_CSS = PayseraPluginUrl . 'assets/css/paysera-delivery-grid.css';
    public const PAYSERA_PAYMENT_CSS = PayseraPluginUrl . 'assets/css/paysera-payment.css';
    public const PAYSERA_LOGO_MENU = PayseraPluginUrl . 'assets/images/paysera-logo-menu.svg';
    public const PAYSERA_DELIVERY_FRONTEND_JS = PayseraPluginUrl . 'assets/js/delivery/frontend.js';
    public const PAYSERA_DELIVERY_FRONTEND_AJAX_JS = PayseraPluginUrl . 'assets/js/delivery/frontend.ajax.js';
    public const PAYSERA_DELIVERY_FRONTEND_GRID_JS = PayseraPluginUrl . 'assets/js/delivery/frontend-grid.js';
    public const PAYSERA_ADMIN_SETTINGS_LINK = 'admin.php?page=paysera';
    public const PAYSERA_DOCUMENTATION_LINK = 'https://developers.paysera.com/';
    public const PAYSERA_PAYMENT_BACKEND_JS = PayseraPluginUrl . 'assets/js/payment/backend.js';
    public const PAYSERA_PAYMENT_FRONTEND_JS = PayseraPluginUrl . 'assets/js/payment/frontend.js';
    public const PAYSERA_PAYMENT_QUALITY_SIGN_JS = PayseraPluginUrl . 'assets/js/payment/sign.js';
    public const PAYSERA_SELECT_2_CSS = 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css';
    public const PAYSERA_SELECT_2_JS = 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js';
    public const PAYSERA_TRANSLATIONS = 'paysera';
    public const PAYSERA_MESSAGE = 'Paysera: ';
}
