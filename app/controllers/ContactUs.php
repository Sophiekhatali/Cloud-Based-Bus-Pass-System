
<?php

class ContactUs extends Controller
{
    public function index()
    {
        $generalError['genError'] = "";



        $data['title'] = 'Bus booking ContactUs page';

       $this->view('contactus',$data);
    }

}
