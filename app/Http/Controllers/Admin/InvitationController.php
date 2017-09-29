<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 04/09/2017
 * Time: 11:35
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;
use DB;
use Validator;
use App\Http\Requests;
use App\Models\Question;
use App\Models\Questionnaire;
use App\Models\Category;
use App\Models\Candidat;
use App\Http\Controllers\Controller;

class InvitationController extends Controller
{


    public function invitation(){

        $page = 'invitation';
        $questionnaires = Questionnaire::all();
        $categories = Category::all();

        return view('admin.invitation', compact('page', 'questionnaires', 'categories'));
    }


    public function createInvitation(Request $request){
dump($request->all()); die;
        if ($request->isMethod('post'))
        {
            $candidat = DB::table('users__candidats')->insert($request->except(['_token']));

            /*DB::table('users__candidats')->insert([
                'first_name' => $request->input('prenomCandi'),
                'name'=>$request->input('nomCandi'),
                'email' => $request->input('emailCandi'),
                'q0'=>$request->input('q0'),
                'q1'=>$request->input('q1'),
                'q2'=>$request->input('q2'),
                'option_tps'=>$request->input('time'),
                ]);*/
        }
        return redirect(route('invitation'))
            ->withSuccess("L'invitation a bien été envoyé");
    }

    /*public function testMail(){
        //fonction de mail
        $mail = 'aarnal@extia.fr'; // Déclaration de l'adresse de destination.
        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
        {
            $passage_ligne = "\r\n";
        }
        else
        {
            $passage_ligne = "\n";
        }
//=====Déclaration des messages au format texte et au format HTML.
        $message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
        $message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";
//==========

//=====Création de la boundary
        $boundary = "-----=".md5(rand());
//==========

//=====Définition du sujet.
        $sujet = "Hey mon ami !";
//=========

//=====Création du header de l'e-mail.
        $header = "From: \"adrien\"<aarnal@extia.fr>".$passage_ligne;
        $header.= "Reply-to: \"adrien\" <aarnal@extia.fr>".$passage_ligne;
        $header.= "MIME-Version: 1.0".$passage_ligne;
        $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========

//=====Création du message.
        $message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
        $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
        $message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
        $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_html.$passage_ligne;
//==========
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========

//=====Envoi de l'e-mail.
        mail($mail,$sujet,$message,$header);
//==========

    }*/
}



?>
