<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function home()
    {
        $todos = Todo::all();
        if (count($todos) == 0) {
            DB::table('todos')->insert([
                ['title' => 'Welcome to you todolist.'],
                ['title' => 'Hit the + button to add a new item.'],
                ['title' => '<-- Hit this to delete an item.']
            ]);
            return back();
        }
        // die;
        return view(
            'welcome',
            [
                "name" => "ToDo",
                "todos" => $todos
            ]
        );
    }

    public function store(Request $request){
        $todo = new Todo;
        $todo->title = $request->post('item');
        if($todo->title){
            $todo->save();
            return back();
        }else{
            echo ("<script>alert('Please fill the text box')</script>");
            echo ("<script>window.location.href = '/'</script>");
            // return redirect('/');
        }
    }

    public function delete(Request $request){
        $deleted = DB::table('todos')->where('id', '=', $request->post('dltid'))->delete();
        // dd($deleted);
        if($deleted == 1){
            return back();
        }else{
            dd($deleted);
        }
    }
}