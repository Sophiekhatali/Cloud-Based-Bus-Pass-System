
<?php

class Home extends Controller
{
    public function index()
    {
        $generalError['genError'] = "";

       
 


        $data['title'] = 'Bus booking home page';

       $this->view('index',$data);
    }

}
