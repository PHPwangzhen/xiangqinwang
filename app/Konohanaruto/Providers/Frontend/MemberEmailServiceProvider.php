<?php
/**
 * Created by PhpStorm.
 * User: konohanaruto
 * Blog: http://www.muyesanren.com
 * QQ: 1039814413
 * Wechat Number: wikitest
 * Date: 2017/9/30
 * Time: 9:40
 */

namespace App\Konohanaruto\Providers\Frontend;

use App\Konohanaruto\Services\Frontend\MemberEmailService;
use Illuminate\Support\ServiceProvider;

class MemberEmailServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('MemberEmailService', function () {
            return new MemberEmailService();
        });
    }
}