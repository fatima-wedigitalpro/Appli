<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class userController extends Controller
{
    public function showUser(Request $req,$id)
    {

         
        $userOrg = $req->organisation;
        
       // return View::make("user.user", compact($userOrg));
        return redirect()->route('user.affecteUser', ['user' => $userOrg ,'language' => app()->getLocale()]);
    }

    public function affectCompagnes(Request $req)
    {
        $users=\App\User::where('id',$req->idUser)->get();
        $compagnes=\App\Compagne::where('id_Compagne',$req->compagne)->get();
        

        foreach($users as $user) {
            foreach ($compagnes as $compagne) {
                \App\User::where('id', $req->idUser)->update(['idCompagne' => $req->compagne]);
            }
        }
    }

    public function getCompagnes(Request $req)
    {
        
        $compagnes=\App\Compagne::all();
        return redirect()->route('user.questionnaire1', ['compagnes' => $compagnes ,'language' => app()->getLocale()]);
    }

    public function getSubject(Request $req)
    {
        $sujet=\DB::table('compagnes')
        ->where('id_Compagne', '=', $req->compagne)
        ->pluck('idSujet');   
                   
        $campagne=$req->compagne;

  

        return redirect()->route('user.sujet', ['sujet' => $sujet[0] ,'campagne' => $campagne,'language' => app()->getLocale()]);
    }
}

/*for( $i = 0 ; $i < 3 ; $i++ ) {
    $result[$i]['id'];
    $result[$i]['name'];
    $result[$i]['email']; 
}

/*rows.ForEach(x =>
    {
                var row = x.Split('-');
                var id = row[0];
                var name = row[1];
                var family = row[2];
    });**/
    
