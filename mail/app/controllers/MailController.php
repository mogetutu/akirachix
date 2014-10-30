<?php

class MailController extends \BaseController {

    /**
     * Sends email to users
     * @return void
     */
    public function sendEmail()
    {
        // Users sign up
        $user = [
            'name'     => 'Alwesh',
            'email'    => 'cynthiaalwenge@gmail.com',
            'password' => Hash::make(time())
        ];
        // Record is created
        Event::fire('account.created', [$user]);
    }

}
