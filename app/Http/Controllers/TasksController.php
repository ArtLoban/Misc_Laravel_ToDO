<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\createTaskRequest;
use App\Task;

class TasksController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
        return view('tasks.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createTaskRequest $request) {
        
//        dd($request->all()); // Возвращает массив все поля из формы
//        dd($request->only('title')); // Только это указанное поле
//        dd($request->except('title')); // Все кроме этого указанного
//        dd($request->get('title')); // Возвращает значение указаного поля
        
        $task = new Task();
//        $task->title = $request->get('title');  // Как вариант получения значения поля
//        $task->description = $request->get('description'); // Как вариант получения значения поля
                
//        $task->fill($request->all()); // Заменяет верхние два благодаря записи в модели protected $fillable = ['title', 'description']; 
//        $task->save(); // Сохранение атрибутов (значений полей) в БД
        
        
//         $this->validate($request, [
//            'title' => 'required',
//            'description' => 'required',
//        ]);                                 // Вывести ошибки отдельно в виде
        
        Task::create($request->all());  // А это запись 3-й вариант.  Заменяет собой две верхние
      
        return redirect()->route('tasks.index');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        
        $myTask = Task::find($id);
        
        return view('tasks.edit', ['task' => $myTask]); //  Таким образом передаются данные в вид, как я понимаю
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $myTask = Task::find($id);
        
        $myTask->fill($request->all());
        $myTask->save();
        
        return redirect()->route('tasks.index');
        
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        
        $myTask = Task::find($id);
        
        return view('tasks.show', ['task' => $myTask]); 
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        
        Task::find($id)->delete();
        
        return redirect()->route('tasks.index');
    }
    
}
