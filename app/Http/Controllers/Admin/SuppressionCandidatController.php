<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/09/2017
 * Time: 14:41
 */

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Pagination\Paginator;
use DB;
use Validator;
use App\Http\Requests;
use App\Models\Question;
use App\Models\Questionnaire;
use App\Models\Candidat;
use App\Models\Category;
use App\Http\Controllers\Controller;


class SuppressionCandidatController extends Controller
{
    public function vueSuppression(){

        $page = 'suppression';
        $candidats = Candidat::all();

        return view('admin.suppression', compact('page', 'candidats'));
    }

    public function destroy($id)
    {
        $candidats = Candidat::findOrFail($id);

        DB::table('Users__Candidats')->where('id', '=', $id)->delete();

        return redirect()
            ->route('vueSuppression')
            ->withSuccess('Le candidat a été supprimée.');
    }
}