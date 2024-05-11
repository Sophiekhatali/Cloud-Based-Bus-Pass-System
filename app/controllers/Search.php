
<?php

class Search extends Controller
{
    public function index()
    {  
         $data = [];
        $data['title'] = 'search';
    
       $this->view('search',$data);
    }

}