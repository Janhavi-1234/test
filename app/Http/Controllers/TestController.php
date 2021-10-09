<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TestModel;
use DB;

class TestController extends Controller
{
    public function register_view(){
        $users = DB::table('hospital')->select('id','name')->get();
        return view('welcome',compact('users'));
    }

    public function get_department($hospital_id){
        $department = DB::table('department')->select('id','name')->where('hospital_id', $hospital_id)->get();
        
        $response = '';

        foreach($department as $dept) {
            $response .= '<option value="'.$dept->id.'">'. $dept->name .'</option>';
        }
        
        if($response == ''){
            $response = '<option value="0">N/A</option>';
        }
        return $response;
    }
    
    public function search_page(Request $request)
    {
        $user = DB::table('users')
        ->join('hospital', 'users.hospital_id','=', 'hospital.id')
        ->join('department', 'users.department_id','=', 'department.id')
        ->select('users.*', 'hospital.name as h_name', 'department.name as d_name')
        ->get();
        
        return view('search_page',compact('user'));
    }

    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $user = DB::table('users')->where('name','LIKE','%'.$request->search."%")
            ->orWhere('email','LIKE','%'.$request->search."%")
            ->get();
            
            if($user)
            {
                foreach ($user as $key => $users) {
                
                $output.='<tr>'.
                '<td>'.$users->name.'</td>'.
                '<td>'.$users->email.'</td>'.
                '<td>'.$users->phone.'</td>'.
                '<td>'.$users->hospital_id.'</td>'.
                '<td>'.$users->department_id.'</td>'.
                '<td>'.$users->created_at.'</td>'.
                '</tr>';
                }
            }
        return Response($output);
        }
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'phone' => 'required|max:11',
         ]);

        $user= new TestModel();
        $user->name= $request->name;
        $user->email= $request->email;
        $user->phone= $request->phone;
        $user->hospital_id= $request->hospital_id;
        $user->department_id = $request->department_id;
        $user->save();
 
        return redirect('/search_page');
    }
}
