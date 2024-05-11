
<?php

class BusTimetable extends Controller
{
    public function index()
    {
        $generalError['genError'] = "";
        
        if(!Auth::logged_in())
        {
            redirect('login');die;
        }
       

        $route = new RouteModel();
        $data['routes'] = $route->findAll();

        $data['title'] = 'Bus timetable page';

       $this->view('busTimetable',$data);
    }

}
