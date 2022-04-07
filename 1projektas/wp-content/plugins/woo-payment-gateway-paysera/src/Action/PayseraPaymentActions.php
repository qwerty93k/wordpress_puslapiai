<?php

declare(strict_types=1);

namespace Paysera\Action;

defined('ABSPATH') || exit;

class PayseraPaymentActions
{
    public function build(): void
    {
        add_action('admin_post_paysera_payment_gateway_change', [$this, 'changePaymentGatewayStatus']);
    }

    public function changePaymentGatewayStatus(): void
    {
        WC()->payment_gateways->payment_gateways()['paysera']->update_option(
            'enabled',
            sanitize_text_field($_GET['change']) === 'enable' ? 'yes' : 'no'
        );

        wp_redirect('admin.php?page=paysera-payments');
    }
}
