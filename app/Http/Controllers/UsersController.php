<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Loans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user=new User();

        $user->name=$request->fname;
        $user->email=$request->email;
        $user->phone=$request->tel;

        $user->nationaId =$request->nationalId;
        $user->loanType =$request->loantype;
        $user->password=Hash::make($request->password);

        //create Loan item

        

        
        

        if ((User::where('email', $user->email)->exists()) || (User::where('phone', $user->phone)->exists())  ) {
            return redirect()->route('register')->with('error', 'User with that email or phone exists');
        } else {

            // User does not exist, proceed with creating the user
            $user->save();

            $loans=new Loans();

            $loans->user=$user->id;
            $loans->loanType=$request->loantype;
            $loans->amount="5,500";

            $loans->status=$request->status;

            if($loans->save()){
                $request->session()->put('loans', $loans);
                $request->session()->put('user', $user);

                return redirect()->route('loan');
            }


            
            // Handle successful user creation
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Users $users)
    {
        //
    }

    public function loan(Request $request){

        return view ('loan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Users $users)
    {
        //
    }
}
