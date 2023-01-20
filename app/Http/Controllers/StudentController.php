<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request){
        // #1 get all the data from database
        $data = Students::all();
        
        // #2 get the specific data from database
        // $data = Students::where('id', 1) -> get(); // SELECT * FROM Students WHERE id = 3
        
        // #3 Wildcard searching
        // #3.1 long way
        // $data = 
        // Students::where('first_name') 
        // -> orwhere('first_name', 'like', 'A%') 
        // -> get(); // SELECT * WHERE first_name LIKE 'A%'

        // #3.2 shorter way
        // $data = Students::where('first_name', 'like', 'a%') -> get();

        // # 3.3 how to use operator
        // $data = Students::where('age', '<', 20) -> get();

        // # 3.4 how to use ORDER BY ASC/DESC and LIMIT
        // $data = Students::where('age', '>', 20) -> orderBy('first_name', 'asc') -> limit(5) -> get();

        // # 4 Custom Query
        // $data = DB::table('students')
        //         -> select(DB::raw('count(*) as gender_count, gender'))s
        //         -> groupBy('gender')
        //         -> get();

        // # 5 Exception FirstOrFail
        // $data = Students::where('id', 11) -> FirstOrFail() -> get(); // To returns 404 not found if it doesn't exist

        // dd($data);
        return view('students.index', ['students' => $data]);
    }

    // # 6 Find the data from the database Students
    public function show($id){
       $data = Students::findOrFail($id);
       dd($data); // You will see the attributes of the person named Howell. If none, 404 not found.
       return view('students.index', ['students' => $data]);
    }
}