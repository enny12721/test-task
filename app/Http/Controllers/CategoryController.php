<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Prod;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth;

class CategoryController extends Controller
{
    public function index(Request $request) {

        if ($request->filled('gost_id')){
            $prods = DB::table('prods')->get();
            $categories_id = [];
            foreach($prods as $prod) {
                if(json_decode($prod->fields)->ГОСТ == $request->gost_id && !in_array($prod->category_id, $categories_id)) {
                    array_push($categories_id, $prod->category_id);
                }
            }
            $categories = Category::with('children')->where('id', $categories_id)->get();
        }
        else {
            $categories = Category::with('children')->where('parent_id', null)->get();
        }
        return view('category.index', ['categories' => $categories]);
    }
    public function settingIndex() {
        return view('category.setting', ['categories' => Category::with('children')->where('parent_id', null)->get()]);
    }
    public function settingSave(Request $request) {
        $sort = $request->input('sort');//Получаем отсортированный список id
        $user = auth()->user();
        DB::table('users')
            ->where('id', $user->id)
            ->update(['sort' => $sort]);
    }
}
