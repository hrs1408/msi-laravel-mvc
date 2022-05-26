<?php

    namespace Tests\Browser\Home;

    use Illuminate\Foundation\Testing\DatabaseMigrations;
    use Laravel\Dusk\Browser;
    use Tests\DuskTestCase;

    class LoginTest extends DuskTestCase
    {
        public function test_admin_login(): void
        {
            $this->browse(function (Browser $browser) {
                $browser->visit('/login')
                    ->type('email', 'huyhieu.nguyenphan@gmail.com')
                    ->type('password', 'password2')
                    ->press('LOG IN')
                    ->assertPathIs('/login');
            });
        }

        public function test_login_fail(): void
        {
            $this->browse(function (Browser $browser) {
                $browser->visit('/login')
                    ->type('email', 'huyhieu.nguyenphan@gmail.com')
                    ->type('password', 'password')
                    ->press('LOG IN')
                    ->assertPathIs('/admin');
            });
        }
    }
