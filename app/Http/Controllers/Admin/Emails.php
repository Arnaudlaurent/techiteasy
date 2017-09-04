<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 04/09/2017
 * Time: 17:10
 */

namespace App\Http\Controllers\Admin;

use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Emails extends Controller
{
    /**
     * Send an e-mail reminder to the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function sendEmailReminder(Request $request, $id)
    {
        $user = User::findOrFail($id);

        Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');

            $m->to($user->email, $user->name)->subject('Your Reminder!');
        });
    }
}