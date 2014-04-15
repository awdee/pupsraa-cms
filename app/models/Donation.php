<?php

class Donation extends \Eloquent {
	
    protected $table = 'donation';

    public static $rules = [
        // 'title' => 'required'
    ];
    
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'organization',
        'email_address',
        'contact_number',
        'mailing_address',
        'city',
        'zip_code',
        'country',
        'donator_type',
        'donator_desc',
        'project',
        'payment_option',
        'branch_name',
        'transaction_number',
        'transaction_datetime',
        'amount',
        'ip_address'
    ];

}