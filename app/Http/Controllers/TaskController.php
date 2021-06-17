<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {

//        unlink(asset('storage/app/public/uploads/2021-06-17_09:21:30_1111.jpg'));
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        $file = $request->image;
//        dd($file($request->file('image')->getClientOriginalName());

//        dd($request->all());
        $task = new Task();
        $task->title = $request->title;
        $task->content = $request->content_input;
        $task->due_date = $request->due_date;
        $file = $request->image;

        if (!$request->hasFile('image')) {
            $task->image = $file;
            if (!$request->file('image')->getSize()) {
                $message1 = "Please choose different image";
                Session::flash('image_false', $message1);
                return redirect()->route('tasks.create', compact('message1'));
            }
        } else {
//            // Lay phan mo rong cua ten anh
            $fileExtension = $file->getClientOriginalExtension();
//            // Convert ten anh
            $fileName = date('Y-m-d_h:i:s') . "_" . $request->title . ".$fileExtension";
//            $fileName = time() . "_" . $request->title .  ".$fileExtension";

////            dd($fileName);
//            // Luu anh vao folder uploads
            $request->file('image')->storeAs('public/uploads', $fileName);
//            //Chay lenh storage:link de connect storage->public
//            // Truyen vao Task
            $task->image = $fileName;
//
        }
//
        $task->save();
//
        $message = "Add task $request->title success";
        Session::flash('create_success', $message);
        return redirect()->route('tasks.index', compact('message'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
