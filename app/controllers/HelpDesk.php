
<?php

class HelpDesk extends Controller
{
    public function index()
    {
        $generalError['genError'] = "";

       
 


        $data['title'] = 'Bus booking HelpDesk page';

       $this->view('helpdesk',$data);
    }

}
