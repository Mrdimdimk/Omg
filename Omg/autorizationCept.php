<?php 
$I = new AcceptanceTester($scenario);
$I->amOnPage('/');
$I->click('.header-sign__reg._action');
$I->waitForElement('.b-modal__window', 5);
$I->fillField('#email',  '3@g.com');
$I->fillField('#pass',  '2222');
$I->click('.auth_button.js-submitBtn');
$I->dontSee('.b-modal__window');
$I->waitForElementNotVisible('.b-modal__window', 5);
$I->click('.header-sign__login');
$I->waitForElement('.login-nav__link', 5);
$I->click('.login-nav__link');
$I->seeElement('input.user-info__field-name[value="fdasddas"]');
$I->seeElement('input.user-info__field-email[value="3@g.com"]');
$I->see('Сохранить','save_button js-submitBtn');
$I->click('.b-popup-addwork__submit.js-submitBtn');
$I->seeInCurrentUrl('http://test.lama.by.dev.lovata.com/user/update/70');
