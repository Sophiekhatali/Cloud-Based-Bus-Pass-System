
<?php
include "../public/assets/vendor/phpqrcode/lib/qrlib.php";
class Ticket extends Controller
{
    public function index($route_id = "")
    {


       // echo $route_id."fff";die;

        if(!Auth::logged_in())
        {
            redirect("login");
        }
        $booking = new Booking();
        $data = [];
        $generalError['genError'] = "";

        $user_id =  Auth::getid();
        // $paymentStatus = true;
        

        // if($paymentStatus)
        // {
        //     $ticketNo = generateRandomString(); //rand(10000, 99999);
        //     $data['ticketNo'] = $ticketNo;

   
        //      $path = "../public/assets/qrCode/";
        //      $folder = "qrCode/";

        //     if (!file_exists($path))
        //         mkdir($path);

            
        
        //     $errorCorrectionLevel = 'L';
        //     $matrixPointSize = 5;
        //     $filename = $path.'test'.md5($ticketNo.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';

        //     $sql = "select qrpath from bookings where user_id = :user_id order by id desc";
        //     $result = $booking->query($sql, ['user_id'=>$user_id]);
          
        //     if(is_array($result)){

        //         $booking->delete(['user_id'=>$user_id]);
                
        //         foreach($result as $row)
        //         {
        //             $qrimg = "../public/assets/".$row->qrpath;
        //             unlink($qrimg);
        //         }
        //     }
        //    //echo $filename;die;
        //     QRcode::png($ticketNo, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
            

        //     $arr['qrpath'] =str_replace('../public/assets/',"",$filename);
        //     $arr['user_id'] = $user_id;
        //     $arr['date'] =  date('Y:m:d H:i:s');
      
        //     $arr['route_id'] = $route_id ?? "0";
        //     $arr['ticketNo'] = $ticketNo;

        //     //show($arr);die;
        //     $booking->insert($arr);
          
        // }

        

       $sql = "select * from bookings where user_id = :user_id order by id desc";
       $result = $booking->query($sql, ['user_id'=>$user_id]);
       $imagepath = "";
       if(is_array($result))
       {
 
        foreach($result as $path)
        {
            $imagepath = $path->qrpath;
        }
    }
    
        
       //show($result);
 

        $data['qrpath'] = $imagepath;
        $data['title'] = 'Bus booking Ticket page';

       $this->view('ticket',$data);
    }

}
