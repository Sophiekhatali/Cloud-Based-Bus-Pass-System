
<?php

class Bookings extends Controller
{
    public function index($id="")
    {
                
        if(!Auth::logged_in())
        {
            redirect('login');die;
        }
    
        $user_id = Auth::getid();
        $route = new Booking();
        $sql = " SELECT bookings.*, routes.toStation , routes.fromStation, routes.startDate, routes.stopDate
            FROM bookings 
            JOIN routes ON routes.id = bookings.route_id 
            WHERE user_id = :user_id;
            ";

        $result = $route->query($sql,['user_id'=>$user_id]);
        if(is_array($result))
        {
            $data['bookings'] = $result;
        }else{
             $data['bookings'] = [];
        }
        

        
        $data['title'] = 'Bus booking History page';

       $this->view('booking',$data);
    }

}
