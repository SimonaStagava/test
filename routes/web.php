<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// GET: http://laravel.test/ 
// Route::get('/', function () {
//     dd( \App\Todo::all());
//     dd( \App\Todo::find(1)->created_at->year );
//     $todosGetFromDb = \App\Todo::all();
//     $todosGetFromDb = \App\Todo::orderBy('updated_at', 'asc')->get(); // ascending == asc (augošā secībā), descending == desc (dilstošā)

//     return view('todo', [ 
//     'todos' => $todosGetFromDb,
//     ]);
// });

// // POST: http://laravel.test/ 
// // Route::post('/', function () {
// //     dd( \Request('note') );
// // });

// // (Jebkurš requests mājas lapai) ANY: http://latavel.test/addnew
// Route::any('/addnew', function () {
    
//     $newTodo = new \App\Todo;

//     $newTodo->title = \Request('note');
//     $newTodo->body = 'Some default body';
//     $newTodo->is_done = false;

//     $newTodo->save();

//     return redirect('/');
// });

// // GET: http://latavel.test/delete/?
// Route::get('/delete/{id}', function($id) {

//     $todo = \App\Todo::find($id);
    
    // if ($todo != null) {
    //     $todo->delete();
    // }

//     return redirect('/');
// });

// // GET: http://latavel.test/update/?
// Route::get('/update/{id}', function($id) {

//     $todo = \App\Todo::find($id);

    // if ($todo->is_done == true) {
    //     $todo->is_done = false;
    // } else {
    //     $todo->is_done = true;
//     }

//     $todo->save();

//     return redirect('/');
// }); 

Route::get('/', function() {

    return view('main');
});
Route::get('/note', function() {

    return view('msg_form');
});
Route::any('/blog', function() {

    if (Auth::check()) {

        $newMsg = new \App\Msg;

        $newMsg->name = \Request('name');
        $newMsg->email = \Request('email');
        $newMsg->message = \Request('message');
        $newMsg->user_id = auth()->user()->id;
    
        $newMsg->save();
    
        return redirect('/note');        
    } else {

        return redirect ('/dashboard');
    }
});
Route::get('/blog', function() {

    // $getMsgsFromDb = \App\Msg::orderBy('created_at', 'asc')->get();
    $getMsgsFromDb = \App\Msg::orderBy('created_at', 'asc')->paginate(4);

    return view('blog', [
        'msgs' => $getMsgsFromDb,
    ]);
});
Route::get('/blog/{id}', function($id) {

    $getMsgsFromDb = \App\Msg::find($id);

    $view = View::make('msgView')->with('name', $getMsgsFromDb);

    return $view;
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

