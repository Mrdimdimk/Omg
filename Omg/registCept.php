<?php 
$I = new AcceptanceTester($scenario);

$I->wantTo('perform actions and see result');
$I->amOnPage('/');
$I->click('.header-sign__auth._action',"регистрация");
$I->click('.b-popup-register__type-private');
$I->waitForElement('b-modal__window', 5);
$I->fillField('#user-name',"Фродо");
$I->fillField('#user-passport',"Бэгинс");
$I->fillField('#user-email',"b.bagind@shire.com");
$I->fillField('#user-pass',"ring");
$I->fillField('#user-pass-repeat',"ring");
$I->fillField('#user-tel',"2020327");
$I->click('.register_button.register_button.js-submitBtn');
$I->dontSee('.b-modal__window');
$I->see("Фродо",'.header-sign__login');
$I->click('.header-sign__login');
$I->click('.login-nav__link');
$I->seeInCurrentUrl('http://test.lama.by.dev.lovata.com/user/update/78');
$I->see("Фродо",'.register-block__name');
$I->see("b.bagind@shire.com",'.register-block__field-email');
$I->see("Ваши работы",'.user__switch _switch-active');
$I->see("Сохранить",'save_button js-submitBtn');