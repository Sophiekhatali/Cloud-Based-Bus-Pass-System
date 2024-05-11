<?php
class Admin extends Controller
{
   
    public function index()
    {
     if(! Auth::logged_in())
      {
         redirect('home');
      }
       
        $data['title'] = "404";
      $this->view('admin/404', $data);
    }

    public function dashboard()
    {
     
        if(! Auth::logged_in())
          {
            redirect('home');
          }
          if(!Auth::user_can('view_dashbord'))
          {
            redirect('admin/route');
          }
        
        $data['title'] = "dashboard";
      $this->view('admin/dashboard', $data);
        
    }
 
//PROFILE METHHODS



//ADS METHODS

    public function route($action =null, $id = null)
    {
        $route = new RouteModel();

      if(! Auth::logged_in())
      {
         redirect('login');
      }
        if(!Auth::is_admin())
        {
          redirect('home');die;

        }

      $user_id = Auth::getId();
      $data['action'] = $action;
      $data['id'] = $id;
      $data['title'] = "Routes";

       if($action== 'add')
      {
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
        
      
          $route->insert($_POST);

        message("Posted successfuly");
        redirect("admin/route");
        }
      }
        else if($action == 'delete')
      {
            $route->delete(['id'=>$id]);
            message('Successfully deleted');
            redirect('admin/route');
  

      }

      $data['routes'] = $route->findall();

      $this->view('admin/route', $data);
    }






  //PERMISSIONS FUNCTION METHOD
      public function roles($action =null, $id = null)
    {
       
          if(! Auth::logged_in())
            {
              redirect('login');
            }
         
            $user_id = Auth::getId();
            $data['action'] = $action;
            $data['id'] = $id;
            $data['title'] = "role";


            $role = new Role();
            //$ads = new Ads_model();
          

            if(Auth::user_can('view_roles'))
            {
              if($action == "add")
              {
                $data['role'] = $role->findALL();
              
                if($_SERVER['REQUEST_METHOD'] == 'POST' )
                      {
                        if(Auth::user_can('add_role'))
                        {
                          if($role->validate($_POST))
                          {
                              //insert category and disabled in the category  into database
                              //$_POST['user_id'] = $user_id;
                              $_POST['slug'] = str_to_url($_POST['category']);
                              //show($_POST);die;
                              $role->insert($_POST);
                          
                              message("Role created  successfuly");
                        
                                redirect('admin/roles');
                            
                              
                          }
                        }
                        else
                        {
                          $role->errors['category'] = 'You have no permission!';
                        }
                          $data['errors']= $role->errors;
                      }
                      

              } 
              elseif($action == "delete")
              {
              
                $data['row'] = $row  = $role->first(['id'=>$id]);
                
                  if($_SERVER['REQUEST_METHOD'] == 'POST' && $row )
                      {
                        if(Auth::user_can('delete_role'))
                        {
                      
                          $role->delete($row->id);
                          message('successfuly deleted');
                          redirect('admin/roles');
                        }
                      }
              }

              elseif($action == "edit")
              {
        
                $data['row'] = $row  = $role->first(['id'=>$id]);

                if($_SERVER['REQUEST_METHOD'] == 'POST' && $row )
                      {
                        if(Auth::user_can('edit_role'))
                        {
                      
                          if($role->validate($_POST))
                          {
                              //insert category and disabled in the category  into database
                              //$_POST['user_id'] = $user_id;
                              //$_POST['slug'] = str_to_url($_POST['category']);
                              //show($_POST);die;
                              $role->update($row->id,$_POST);
                          
                              message("category created  successfuly");
                        
                                redirect('admin/roles');
                            
                              
                          }
                        }
                        $data['errors']= $role->errors;
                      }   
              }
              else 
              {
                //VIEWING OR GETTING ALL ROLES THAT IS ELSE AFETR ACTIONS
                
                    $data['rows'] = $role->findALL();
                  
                  
                  if($_SERVER['REQUEST_METHOD'] == 'POST' )
                      { 
                        //disable permissions before we do anything
                      $sql = "update permission_role set disabled = 1 where id > 0";
                      $role->query($sql);

                        foreach ($_POST as $key => $permission) {
                          echo $permission;
                          if(preg_match("/[0-9]+\_[0-9]+/", $key))
                          {
                            $row_id = preg_replace("/\_[0-9]+/", "",$key);
                            //if record exist
                           
                            $datas =[];
                            $datas['role_id'] = $row_id;
                            $datas['permission']= $permission;

                            $sql = "select id from permission_role  where permission = :permission and role_id = :role_id limit 1";
                            $chck = $role->query($sql, $datas);
                            if($chck)
                            {
                              //we update if the record is found
                            $sql = "update  permission_role  set disabled = 0 where  permission = :permission  &&  role_id = :role_id limit 1";
                            }
                            else{
                              //then int database permission_roles table if record not found
                              $sql = "insert into permission_role (role_id, permission) values (:role_id, :permission)";
                            }
                            //show($sql);
                          // show($datas);die;
                            $role->query($sql, $datas);
                          }
                        }
                        //die;
                        redirect('admin/roles');
                      }
                    
              }
            }
            
            $this->view('admin/roles', $data);
                
  }
 public function users($action='',$id='')
    {
       if(!Auth::logged_in())
      {
        redirect('login');die;
      }
     
   // echo $action;
      $user = new User();
      $data=[];
      $data['action'] = $action;
      if(!Auth::logged_in())
      {
         //redirect('login');die;
      }
        if(!Auth::is_admin())
        {
         // redirect('login');die;

        }
        if($action == "add")
        {  if(Auth::user_can('add_user') )
        {

        }
        }
        elseif($action == "delete")
        {
        
        if(Auth::is_admin() )
        {
        
          if($_SERVER['REQUEST_METHOD'] == "POST")
          {
           
            //echo $id;die;
             $arr['id'] = $id;
            //  $user->delete($arr);
            $sql22 = "delete from users where id = :id";
            $user->query($sql22, $arr);
             message("deleted succefully");
             redirect("admin/users");
          }
        }
         
        }
        elseif($action == "edit")
        {
            if(Auth::user_can('edit_user') )
        {
        }
        }


      $rows = $user->findAll();

   
      $data['rows']= $rows;
        //show($data);die;
      $this->view('admin/users',$data);

      
  
    }



}
