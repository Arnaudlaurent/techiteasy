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
    public function index()
    {
        $page = 'invitation';
        $questionnaires = Questionnaire::all();
        $categories = Category::all();
        return view('admin.invitation', compact('page','questionnaires','categories'));
    }

    public function store(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect()
                ->route('admin.invitation.create')
                ->withErrors($validator)
                ->withInput();
        }

        $invitation = new Invitation;

        $invitation->name = $request->name;
        $invitation->save();

        return redirect()
            ->route('admin.invitation.index')
            ->withSuccess("L'invitation a bien été enregistré");
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255|min:3'
        ]);
    }

/*
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
                'login' => $request->input('prenomCandi'),
                'email' => $request->input('emailCandi'),
                'password' => bcrypt('')]);
        }
        return redirect(route('Admin\InvitationController@invitation'))
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
