
<?php

class Bookticket extends Controller
{
    public function index($id="")
    {
        $generalError['genError'] = "";
        
        if(!Auth::logged_in())
        {
            redirect('login');die;
        }
       
 

        $route = new RouteModel();
        $data['routes'] = $route->findAll();

        
        $data['title'] = 'Bus booking Bookticket page';

       $this->view('bookticket',$data);
    }

}
