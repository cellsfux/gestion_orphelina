<?php

namespace App\Controllers;

use App\Models\DeclarationModel;
use App\Models\DontModel;
use App\Models\UsersModel;

class AdminController extends Controller
{
    public function index(){
        $this->isAdmin();
        $orph= new UsersModel;
        $orph= $orph->findBy(['roles'=>'Orphelin']);

        $this->render('admin/index', compact('orph'), 'Home');
    }



    

    public function declaration(){
        $this->isAdmin();
        $declaration = new DeclarationModel;
        $declaration=$declaration->findAll();

        $user= new UsersModel;
        

        $html='';
        $i=0;

        foreach($declaration as $lis){
           $user=$user->find($lis->id_user);
         if($user){
            
          $i+=1;
          $html.='<tr>';
          $html.='<td>'.$i.'</td>';
          $html.=' <td>
                     <div class="d-flex">
                           <img src="'. URLROOT .'uploads/img/'. $user->profilpic .'" alt="" style="border-radius: 50%; width:50px; height: 50px"/>
                          '. ucfirst( $user->prenom ." ". $user->nom).'
                     </div>
                 </td>';

        $html.='<td title=""> 

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Lire la declaration
</button>
        
        


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
      '.$lis->destcription.'
      </div>
      
    </div>
  </div>
</div>
        
        
        
        
        </td>';
        $html.='<td> <a href="'.URLROOT.'admin/deletedeclaretion/'.$lis->id.'" class="btn btn-danger">delete</a> </td>';
          
          $html.= '</tr>';

         }
        }

        $this->render('admin/decla', compact('html'), 'Home');


    }







    public function dont(){
        $this->isAdmin();
        $donts = new DontModel;
        $dont=$donts->findAll();
       

        $html='';
        $i=0;

        foreach($dont as $lis){

            $users= new UsersModel;
            $user=$users->find($lis->id_user);
            if($user){
             $i+=1;
             $html.='<tr>';
             $html.='<td>'.$i.'</td>';
             $html.=' <td>
                        <div class="d-flex">
                              <img src="'. URLROOT .'uploads/img/'. $user->profilpic .'" alt="" style="border-radius: 50%; width:50px; height: 50px"/>
                             '. ucfirst( $user->prenom ." ". $user->nom).'
                        </div>
                    </td>';

            $html.='<td> $ '. $lis->amout.'.00</td>';
            $html.='<td> <a href="'.URLROOT.'admin/deletedont/'.$lis->id.'" class="btn btn-danger">delete</a> </td>';
            $html.='</tr>';
            }   

        }
        $this->render('admin/dont', compact('html'), 'Home');
    }





    public function deletedont(int $id){
        $this->isAdmin();
        $dont= new DontModel;
        $dont=$dont->delete($id);
        header('location:'.URLROOT.'admin/dont');
    }

    public function deletedeclaretion(int $id){
        $this->isAdmin();
        $declaration= new DeclarationModel;
        $declaration=$declaration->delete($id);
        header('location:'.URLROOT.'admin/declaration');
    }


    public function addorphelin(){
        $this->isAdmin();
        $this->render('admin/add', [], 'Home');
    }

    public function deleteop(int $id){
        $this->isAdmin();
        $orphs= new UsersModel;
        $orph= $orphs->find($id);
        unlink('../public/uploads/img/'.$orph->profilpic);
        $delete= $orphs->delete($id);
        header('location:'.URLROOT.'admin');

    }


    public function save(){
        
 


        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
  
        $file_ext= strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
  
         
      
        $extensions= array("png","jpg", "jpeg", "PNG", "JPG", "JPEG");
  
  
        if(in_array($file_ext,$extensions)=== false){
          echo json_encode(['message'=>'Extension not allowed, please choose a "png","jpg", "jpeg", "PNG", "JPG", "JPEG" file', 'error'=> true]);
          die;
         }
  
  
       if($file_size > 5097152){
          echo json_encode(['message'=>'L\'image ne doit pas depasser 5 MB svp!', 'error'=> true]);
          die;
       }
  
      
       $user= new UsersModel;
        $newName='jison_'. uniqid(md5('jison')).'.'.$file_ext;

        
        $nom= strip_tags($_POST['nom']);
        $prenom= strip_tags($_POST['prenom']);
        $genre= strip_tags($_POST['genre']);
        $date= strip_tags($_POST['date']);
        $lieu= strip_tags($_POST['lieu']);
        $descriptio= strip_tags($_POST['descr']);
        $role= 'Orphelin';
  
        if(move_uploaded_file($file_tmp,"../public/uploads/img/".$newName)){
               $user=$user
               ->setNom(ucfirst($nom))
               ->setPrenom(ucfirst($prenom))
               ->setGenre($genre)
               ->setDateNaisse($date)
               ->setLisNaissance(ucfirst($lieu))
               ->setDescriptionDont($descriptio)
               ->setProfilpic($newName)
               ->setRoles(ucfirst($role));
               $user=$user->create($user);

               echo json_encode(['message'=>'Vous avez ajouter avec siucces un orphelin ']);
               die;
                 
        }  


    }



    public function user(){
        $this->isAdmin();
        $user= new UsersModel;
        $user=$user->findAll();

        $this->render('admin/users', compact('user'), 'Home');
    }

    public function deleteuser(int $id){
        $this->isAdmin();
        $user= new UsersModel;
        $users=$user->find($id);

        if(  $users->roles=='Admin'){
            header('location:'.URLROOT.'admin/user');
            die;
        }

        unlink('../public/uploads/img/'.$users->profilpic);

        $user=$user->delete($id);
        header('location:'.URLROOT.'admin/user');
        die;
        
    }




    public function isAdmin(){
        if(isset( $_SESSION['user-test-covid']) &&  $_SESSION['user-test-covid']['role']=='Admin'){
             return true;
             die;
        }else{
            header('location:'.URLROOT);
            die;
        }
    }
}