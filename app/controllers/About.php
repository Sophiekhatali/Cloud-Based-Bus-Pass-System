
<?php

class About extends Controller
{
    public function index()
    {
     


        $data['title'] = 'About home page';

       $this->view('about',$data);
    }

}
