<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
public function create()
{

    return view('create');

}
    public function store(Request $request)

    {
//    dd($teacher);

      $teacher=Teacher::create($request->all());
      return redirect('Index');

    }
    public function Index()
    {
$data=Teacher::all();
//dd($data);
        return view('Index',compact('data'));

    }
    public function edit($id)
    {
      $data=Teacher::find($id);
          return view('edit',compact('data'));

    }
    public function update(Request $request , Teacher $teacher)
    {
//     dd($teacher);
$teacher->update($request->all());
return redirect('Index');

    }
    public function delete(Teacher $teacher)
    {

$teacher->delete();
return redirect('Index');

    }

}
