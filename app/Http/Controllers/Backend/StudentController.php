<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $students = Students::quary();
        $students = Students::query();
        if ($request->has('filter')) {
            if ($request->desc) {
                $students->orderBy($request->desc, 'DESC');
            }
            if ($request->state) {
                $students->whereRaw('LOWER(`state`) LIKE ? ',[trim(strtolower($request->state)).'%']);

               
            }
            if ($request->school_level) {
                $students->where('school_level',$request->school_level);
            }

           
        }
        $students = $students->paginate(10);

        return view('backend.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Students::create([
            'name' => $request->name,
            'age' => $request->age,
            'height' => $request->height,
            'weight' => $request->weight,
            'gender' => $request->gender,
            'school_level' => $request->school_level,
            'school_name' => $request->school_name,
            'state' => $request->state,
            'position' => $request->position,
            'top_pitch_velocity' => $request->top_pitch_velocity,
            'average_velocity' => $request->average_velocity,
            'sprit_time' => $request->sprit_time,
            'vertical_jump_height' => $request->vertical_jump_height,
            'hitting_rap' => $request->hitting_rap,
            'resistance_ratio' => $request->resistance_ratio,
            'velocity_video' => $request->velocity_video,
            'valo_video_date' => $request->valo_video_date,
            'velocity_video2' => $request->velocity_video2,
            'valo_video_date2' => $request->valo_video_date2,
            'sprint_video' => $request->sprint_video,
            'sprint_video_date' => $request->sprint_video_date,
            'jump_video_link' => $request->jump_video_link,
            'jump_video_link_date' => $request->jump_video_link_date,
            'hitting_video' => $request->hitting_video,
            'hitting_video_date' => $request->hitting_video_date,
            'resistance_video' => $request->resistance_video,
            'resistance_video_date' => $request->resistance_video_date,
            'description' => $request->description,

        ]);

        return redirect()->route('student.index')->with('message', 'Player Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Students::find($id);
        return view('backend.student.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $stu = Students::where('id', '=', $id)->first();
        $stu->name      = $request['name'];
        $stu->age       = $request['age'];
        $stu->height    = $request['height'];
        $stu->weight    = $request['weight'];
        $stu->gender    = $request['gender'];
        $stu->school_level = $request['school_level'];
        $stu->school_name = $request['school_name'];
        $stu->state     = $request['state'];
        $stu->position  = $request['position'];
        $stu->top_pitch_velocity = $request['top_pitch_velocity'];
        $stu->average_velocity = $request['average_velocity'];
        $stu->sprit_time = $request['sprit_time'];
        $stu->vertical_jump_height = $request['vertical_jump_height'];
        $stu->hitting_rap = $request['hitting_rap'];
        $stu->resistance_ratio = $request['resistance_ratio'];
        $stu->velocity_video = $request['velocity_video'];
        $stu->valo_video_date = $request['valo_video_date'];
        $stu->velocity_video2 = $request['velocity_video2'];
        $stu->valo_video_date2 = $request['valo_video_date2'];
        $stu->sprint_video = $request['sprint_video'];
        $stu->sprint_video_date = $request['sprint_video_date'];
        $stu->jump_video_link = $request['jump_video_link'];
        $stu->jump_video_link_date = $request['jump_video_link_date'];
        $stu->hitting_video = $request['hitting_video'];
        $stu->hitting_video_date = $request['hitting_video_date'];
        $stu->resistance_video = $request['resistance_video'];
        $stu->resistance_video_date = $request['resistance_video_date'];
        $stu->description = $request['description'];
        $stu->save();
        return redirect()->route('student.index')->with('message', 'User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $student)
    {

        $student->delete();
        return redirect()->route('student.index')->with('message', 'Player Deleted Successfully');
    }
}
