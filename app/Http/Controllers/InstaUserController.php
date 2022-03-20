<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Insta;

class InstaUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->all();
        Insta::create($storeData);
        return redirect('/home')->with('status', 'Insta User has been added!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $insta = Insta::find($id);
        return view('/home')->with('insta_users', $insta);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insta = Insta::find($id);
        return view('/home')->with('insta_users', $insta);
    }
 
  
    public function update(Request $request, $id)
    {
        $insta = Insta::find($id);
        $input = $request->all();
        $insta->update($input);
        return redirect('/home')->with('status', 'Insta User has been Updated!');  
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $insta = Insta::findOrFail($id);
        $insta->delete();
        return redirect('/home')->with('status', 'Insta User has been deleted');
    }
}