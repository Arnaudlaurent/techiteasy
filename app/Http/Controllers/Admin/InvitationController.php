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
use DB;
use Validator;
use App\Http\Requests;
use App\Models\Question;
use App\Models\Questionnaire;
use App\Models\Category;
use App\Http\Controllers\Controller;

class InvitationController extends Controller
{
    public function invitation(){
        return view('admin.invitation', [
            'page' => "invitation",
            'questionnaires' => Questionnaire::all(),
            'categories' => Category::all(),
        ]);
    }


    public function createInvitation(){
        if ($request->isMethod('post'))
        {
            DB::table(users)->insert([
                'login' => $request->input('loginCandidat'),
                'email' => $request->input('email'),
                'password' => bcrypt('')]);
        }
        return redirect(route('admin.question.index'))
            ->withSuccess('La question a bien été ajoutée.');
    }
/*
    public function store(Request $request) {
        if ($request->isMethod('post')) {

            $idQuestion = DB::table('questions')->insertGetId(
                ['level' => $request->input('difficulties'), 'label' => $request->input('question'), 'description' => $request->input('description'), 'category_id' => $request->input('categories'), 'user_id' => 1]);


            //insert answers
            $valide_1 = (null == $request->input('reponse_valide_1')  ? "0" : "1");
            $valide_2 = (null == $request->input('reponse_valide_2')  ? "0" : "1");

            DB::table('answers')->insert(
                ['label' => $request->input('answer1'), 'verify' => $valide_1, 'question_id'=>$idQuestion]);
            DB::table('answers')->insert(
                ['label' => $request->input('answer2'), 'verify' => $valide_2, 'question_id'=>$idQuestion]);
            if($request->input('answer3'))
            {
                $valide_3 = is_null($request->input('reponse_valide_3')  ? "0" : "1");
                DB::table('answers')->insert(
                    ['label' => $request->input('answer3'), 'verify' => $valide_3 , 'question_id'=>$idQuestion]);
            }
            if($request->input('answer4'))
            {
                $valide_4 = is_null($request->input('reponse_valide_4')  ? "0" : "1");
                DB::table('answers')->insert(
                    ['label' => $request->input('answer4'), 'verify' => $valide_4, 'question_id'=>$idQuestion]);
            }
            if($request->input('answer5'))
            {
                $valide_5 = is_null($request->input('reponse_valide_5')  ? "0" : "1");
                DB::table('answers')->insert(
                    ['label' => $request->input('answer5'), 'verify' => $valide_5, 'question_id'=>$idQuestion]);
            }

            if($request->input('answer6'))
            {
                $valide_6 = is_null($request->input('reponse_valide_6')  ? "0" : "1");
                DB::table('answers')->insert(
                    ['label' => $request->input('answer6'), 'verify' => $valide_6, 'question_id'=>$idQuestion]);
            }

        }
        return redirect(route('admin.question.index'))
            ->withSuccess('La question a bien été ajoutée.');
    } */
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
