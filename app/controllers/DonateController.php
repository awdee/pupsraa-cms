<?php



class DonateController extends BaseController 
{

    public function showDonate()
    {
        return View::make('pages.donate');
    }

    public function showProcedure()
    {
        return View::make('pages.procedure');
    }

    public function storeDonate() 
    {
        if(Session::get('phrase') != Input::get('captcha')) {
            Session::flash('error', 'Invalid Security Code');
            return Redirect::to('donate')
                ->withInput(Input::except('captcha'));
        }

        $donator_desc = " ";

        if(Input::get('donator_type') == 'Alumni') {
            $donator_desc = 'COURSE:'.Input::get('donator_course').' YEAR:'.Input::get('donator_year');
        }
        else if(Input::get('donator_type') == 'Friend') {
            $donator_desc = Input::get('friend_name');
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
            'donator_desc' => $donator_desc,
            'project' => Input::get('project'),
            'payment_option' => Input::get('payment_option'),
            'branch_name' => Input::get('branch_name'),
            'transaction_number' => Input::get('transaction_number'),
            'transaction_datetime' => Input::get('transaction_datetime'),
            'amount' => Input::get('amount'),
            'ip_address' => Request::getClientIp()
        ]);

        Session::flush();
        Session::flash('success', 'Your donation details has been submitted successfully. The billing personnels will verify your transaction.');
        return Redirect::to('donate');
    }
}
