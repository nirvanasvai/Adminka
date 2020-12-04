<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DoingRequest;
use App\Models\Doing;
use App\Services\Admin\DoingService;
use Illuminate\Http\Request;

class DoingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doings = Doing::all();
        return view('admin.main.doing.index',compact('doings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.main.doing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoingRequest $request,DoingService $doingService)
    {
        $doingService->create($request->validated());

        return redirect('admin/doing');
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
        return view('admin.main.doing.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DoingRequest $request, $id)
    {
        $doing = Doing::find($id);
        $doing->description = $request->get('description');
        $doing->title = $request->get('title');
        if (isset($request->image)) {
            $doing->image = $request->image->store('/about');
        }
        $doing->update();
        return redirect('admin/about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doing $doing)
    {
        $doing->delete();
        return back();
    }
}
