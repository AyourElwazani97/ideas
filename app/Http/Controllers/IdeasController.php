<?php

namespace App\Http\Controllers;

use App\Models\Ideas;
use Illuminate\Http\Request;

class IdeasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Ideas::orderBy("created_at", "DESC")->paginate(3);
        return view("ideas.index", ["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //first way
        /* 
        $idea = Ideas([
                "content"=>strip_tags($request->input("idea-content"))
        ]);
        */
        //validating form
        $request->validate([
            "idea-content" => "required|min:10|max:240"
        ]);
        $ideaTable = new Ideas();
        $ideaTable->content = strip_tags($request->input("idea-content"));
        $ideaTable->save();
        return redirect("/ideas")->with("success", "Idea created Successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Ideas::findOrfail($id);
        return view("ideas.show", ["data" => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //first way ==> Ideas::where('id',$id)->first();
        Ideas::findOrfail($id)->delete();
        return redirect("ideas")->with('success', "Idea Was Deleted Successfully...");
    }
}
