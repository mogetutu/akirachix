<?php

Event::listen('account.created', function($data)
{
    Mail::send('emails.welcome', $data, function($message) use ($data)
    {
        $message
            ->to($data['email'], $data['name'])
            ->subject('Welcome to Akirachix!');
    });

    return 'Welcome email sent. Hooray.';
});

Event::listen('account.created', function($data)
{
    Mail::send('emails.defaultpassword', $data, function($message) use ($data)
    {
        $message
            ->to($data['email'], $data['name'])
            ->subject('Welcome to Akirachix!');
    });

    return 'Default password email sent. Hooray.';
});
