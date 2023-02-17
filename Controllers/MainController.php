<?php 
namespace App\Controllers;

use App\Models\DeclarationModel;
use App\Models\DontModel;
use App\Models\UsersModel;

use function PHPSTORM_META\map;

class MainController extends Controller
{
    public function index()
    {
        
        $this->render('main/index',[], 'Home');
    }


    public function fiche(){
        $orphelins= new UsersModel;
        $orphelins=$orphelins->findBy(['roles'=>'Orphelin']);
        
        $this->render('main/fiche',compact('orphelins'), 'Home');
    }

    public function fide($id){
        $orphelins= new UsersModel;
        $orphelins=$orphelins->find($id);
        $this->render('main/detaifiche',compact('orphelins'), 'Home');
    }


    public function declaration(){
        $this->render('main/declaration',[], 'Home');
    }


    public function declasction(){
        if(!isset( $_SESSION['user-test-covid']) ){
             echo json_encode(['message'=>
             '<span class=" h5 text-danger">Vous ne pouvez pas effectuer une declaration tanque vous n\'etes pas encore <a href="'.URLROOT.'login" class="text-primary">Connécter</a>; Si vous n\'avez pas de compte veille <a href="'.URLROOT.'login" class="text-primary">Créer </a></span>', 
             'error'=>true
            ]);
            die;
        }

        $declaration = new DeclarationModel;
        $declaration=$declaration
        ->setIdUser($_SESSION['user-test-covid']['id'])
        ->setDestcription(strip_tags(ucfirst($_POST['description'])));


        $declaration=$declaration->create($declaration);
        echo json_encode(['message'=>'<span class=" h5 text-success">Votre déclaration a été envoyer avec succes</span>']);
        die;
        //$_SESSION['user-test-covid']['role']=='Admin'
    }






    public function valuer(){
        if(!isset( $_SESSION['user-test-covid']) ){
            echo json_encode(['message'=>
            '<span class=" h5 text-danger">Vous ne pouvez pas effectuer une declaration tanque vous n\'etes pas encore <a href="'.URLROOT.'login" class="text-primary">Connécter</a>; Si vous n\'avez pas de compte veille <a href="'.URLROOT.'login" class="text-primary">Créer </a></span>', 
            'error'=>true
           ]);
           die;
       }

       $dont= new DontModel;
       $dont=$dont
       ->setIdUser($_SESSION['user-test-covid']['id'])
       ->setAmout($_POST['value']);

       $dont=$dont->create($dont);

       echo json_encode(['message'=>'Vous avez envoyer avec succes votre dont']);
       die;

    }





  
   
    
}
