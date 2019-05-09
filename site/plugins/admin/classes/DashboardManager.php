<?php

namespace Flextype;

use Flextype\Component\Http\Http;
use Flextype\Component\Session\Session;

class DashboardManager
{
    public static function getDashboardManager()
    {
        if (Session::get('username') == 'uebs') {
            Http::redirect(Http::getBaseUrl() . '/admin/entries');
        } else {
            Http::redirect(Http::getBaseUrl() . '/admin/entries/?entry=home');
        }
    }
}
