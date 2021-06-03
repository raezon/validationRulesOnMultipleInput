<?php

class UserCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function canSeeTitleInContactPage(FunctionalTester $I)
    {
        $I->amOnPage(['site/contact']);
        $I->seeInTitle('Contact');
        $I->submitForm('#contact-form',[
            'ContactForm[name][0][user_id]'=>1,
            'ContactForm[name][0][priority]'=>3
        ]);
        $I->See("contact Form Submitted");
    }
}
