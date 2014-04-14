<?php



class DonateController extends BaseController 
{

    public function showDonate()
    {
        return View::make('pages.donate');
    }

    public function storeDonate() 
    {
        if(Session::get('phrase') != Input::get('captcha')) {
            Session::flash('error', 'Invalid Security Code');
            return Redirect::to('donate')
                ->withInput(Input::except('captcha'));
        }

        Donation::create([
            'first_name' => Input::get('first_name'),
            'middle_name' => Input::get('middle_name'),
            'last_name' => Input::get('last_name'),
            'organization' => Input::get('organization'),
            'email_address' => Input::get('email_address'),
            'contact_number' => Input::get('contact_number'),
            'mailing_address' => Input::get('mailing_address'),
            'city' => Input::get('city'),
            'zip_code' => Input::get('zip_code'),
            'country' => Input::get('country'),
            'donator_type' => Input::get('donator_type'),
            'donator_desc' => Input::get('donator_desc'),
            'project' => Input::get('project'),
            'ip_address' => Request::getClientIp(),
            'amount' => Input::get('amount')
        ]);

        Session::flush();
        return Redirect::to('donate');
    }
}
