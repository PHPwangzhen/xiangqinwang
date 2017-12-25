<?php
/**
 * Created by PhpStorm.
 * File: SessionService.php
 * User: konohanaruto
 * Blog: http://www.muyesanren.com
 * QQ: 1039814413
 * Wechat Number: wikitest
 * Date: 12/24/2017
 * Time: 11:50 PM
 */

namespace App\Konohanaruto\Services\Frontend;

use Session;

class SessionService extends BaseService
{
    private $session;

    public function __construct()
    {
        $this->session = Session::get(config('custom.frontendSessionName'));
    }

    public function getUserId()
    {
        return $this->session;
    }
}