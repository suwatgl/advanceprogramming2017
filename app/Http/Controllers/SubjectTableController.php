<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\SubjectTable;

class SubjectTableController extends Controller
{
	const s_date        = ['' => '', 1 => 'จันทร์', 2 => 'อังคาร', 3 => 'พุธ', 4 => 'พฤหัสบดี', 5 => 'ศุกร์', 6 => 'เสาร์', 7 => 'อาทิตย์'];
	const s_begin_time  = ['' => '', 1 => '08:00', 2 => '08:50', 3 => '09:40', 4 => '10:30', 5 => '11:20', 6 => '12:10', 
                           7 => '13:00', 8 => '13:50', 9 => '14:40', 10 => '15:30', 11 => '16:20', 12 => '17:10' ];
    const s_end_time    = ['' => '', 1 => '08:50', 2 => '09:40', 3 => '10:30', 4 => '11:20', 5 => '12:10', 6 => '13:00', 
                           7 => '13:50', 8 => '14:40', 9 => '15:30', 10 => '16:20', 11 => '17:10', 12 => '18:00' ];
	const s_term        = ['' => '', 1 => '1/58',  2 => '2/58',  3 => '1/59',  4 => '2/59', 
                           5 => '1/60',  6 => '2/60',  7 => '1/61',  8 => '2/61', 
						   9 => '1/62', 10 => '2/62', 11 => '1/63', 12 => '2/63' ];
						   
	function __construct() {
		// แชร์ตัวแปรต่อไปนี้ให้กับทุก View
		View::share('s_date', 		self::s_date);
		View::share('s_begin_time', self::s_begin_time);
		View::share('s_end_time', 	self::s_end_time);
		View::share('s_term', 		self::s_term);
	}

	/**
	* Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
    public function index()
    {
		$subject_tables = SubjectTable::latest()->paginate(8);
		return view('subject_tables.index',compact('subject_tables'))
		            ->with('i', (request()->input('page', 1) - 1) * 8);
	}
	
	
	/**
	* Show the form for creating a new resource.
		*
		* @return \Illuminate\Http\Response
		*/
	public function create()
	{
		$teachers   = \App\Teacher::pluck('first_name', 'id')->all();
		$subjects   = \App\Subject::pluck('subject_name', 'id')->all();
		$rooms      = \App\Room::pluck('room_name', 'id')->all();
		return view('subject_tables.create')
		            ->with('teachers', $teachers)
		            ->with('subjects', $subjects)
		            ->with('rooms', $rooms);
	}
	
	/**
	* Store a newly created resource in storage.
	     *
		* @param  \Illuminate\Http\Request  $request
		* @return \Illuminate\Http\Response
		*/
	public function store(Request $request)
	{
		request()->validate([
		            'teacher_id'        => 'required',
		            'subject_id'        => 'required',
		            'room_id'           => 'required',
		            's_date_id'         => 'required',
		            's_begin_time_id'   => 'required',
		            's_end_time_id'     => 'required',
		            's_term_id'         => 'required'
		        ]);
		SubjectTable::create($request->all());
		return redirect()->route('subject_tables.index')
		    ->with('success','subject table created successfully');
	}
	
	
	/**
	* Display the specified resource.
		*
		* @param  int  $id
		* @return \Illuminate\Http\Response
		*/
	public function show($id)
	{
        $subject_table 	= SubjectTable::find($id);
		$students 		= \App\SubjectRegister::where('subject_table_id', '=', $subject_table->id)->get(); 
		$teachers   	= \App\Teacher::pluck('first_name', 'id')->all();
		$subjects   	= \App\Subject::pluck('subject_name', 'id')->all();
		$rooms      	= \App\Room::pluck('room_name', 'id')->all();
		return view('subject_tables.show',compact('subject_table'))
			->with('students', $students)
			->with('teachers', $teachers)
			->with('subjects', $subjects)
			->with('rooms', $rooms);
	}
	
	
	/**
	* Show the form for editing the specified resource.
		*
		* @param  int  $id
		* @return \Illuminate\Http\Response
		*/
	public function edit($id)
	{
        $subject_table 	= SubjectTable::find($id);
		$teachers   	= \App\Teacher::pluck('first_name', 'id')->all();
		$subjects   	= \App\Subject::pluck('subject_name', 'id')->all();
		$rooms      	= \App\Room::pluck('room_name', 'id')->all();
        return view('subject_tables.edit',compact('subject_table'))
			->with('teachers', $teachers)
			->with('subjects', $subjects)
			->with('rooms', $rooms);
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
        request()->validate([
			'teacher_id'        => 'required',
			'subject_id'        => 'required',
			'room_id'           => 'required',
			's_date_id'         => 'required',
			's_begin_time_id'   => 'required',
			's_end_time_id'     => 'required',
			's_term_id'         => 'required'
        ]);
        SubjectTable::find($id)->update($request->all());
        return redirect()->route('subject_tables.index')
                        ->with('success','Subject Table updated successfully');
	}
	
	
	/**
	* Remove the specified resource from storage.
		*
		* @param  int  $id
		* @return \Illuminate\Http\Response
		*/
	public function destroy($id)
	{
        SubjectTable::find($id)->delete();
        return redirect()->route('subject_tables.index')
                        ->with('success','Subject Table deleted successfully');
	}
}
