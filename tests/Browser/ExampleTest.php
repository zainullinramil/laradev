<?php

namespace Tests\Browser;

use Illuminate\Support\Facades\Log;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->browse(function ($browser) {
            $browser->visit('http://sbs-general.dev/login/')
                ->type('user_login', 'buh@imagespark.ru-test')
                ->type('password', 'SabaVSS2013')
                ->press('Войти')
                ->assertPathIs('/admin');
        });
    }

    //Уровни менеджмента
    public function testAdminTestManag()
    {
        Log::info('Start testAdminTestManag');
        $this->browse(/**
         * @param $browser
         */
            function ($browser) {
                $browser
                    ->visit('http://sbs-general.dev/admin/')
                    ->clickLink('Уровни менеджмента')
                    ->assertPathIs('/admin/managementlevels')

//                ->clickLink('Добавить')
//                ->assertPathIs('/admin/managementlevels/create')
//                ->type('name', 'test')
//                ->press('Сохранить')
//                ->assertPathIs('/admin/managementlevels')
//                ->assertSee('Линейный менеджмент 2')

//                ->elements('js-confirm2')
                ;
//                $elem = $browser->attribute('.js-confirm', 'href');
                $curl = $browser->resolver->driver->getCurrentURL();
                Log::info($curl);
//                $elemAll = $browser->elements('.js-confirm');
////                dd($elemAll);
//                foreach ($elemAll as $value) {
//
//                    Log::debug('11');
//                    Log::debug($value->getAttribute('href'));
////                    $href = $value->href;
//                }
//                 ->attribute('a class="js-confirm2"', 'href');


//                ->clickLink("js-confirm2");
//                ->click('a[href="{$id}"]')
//                ->click('a[href="http://sbs-general/admin/managementlevels/{management_level_id}/update"]');
//

//                ->press('Редактировать')
//                ->assertPath('/update')
//                ->type('name', 'test1')
//                ->press('Сохранить');
//                ->assertPathIs('/admin/managementlevels/create');
//                ->assertSee('test1')
////              ->js delete
//                ->press('ОК')
//                ->assertDontSee('test1')
//                ->assertPathIs('/managementlevels')
//                ->press('ОК');
//                $browser->pause(1500);
                $browser->assertSee('Линейный менеджмент 2');
            });
    }
}
