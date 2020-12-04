<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioRequest;
use App\Models\Portfolio;
use App\Services\Admin\PortfolioService;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::paginate(15);
        return view('admin.portfolio.index',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortfolioRequest $request,PortfolioService $portfolioService)
    {
        $portfolioService->create($request->validated());
        return redirect('admin/portfolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolio.index',compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit',compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(PortfolioRequest $request,$id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->title = $request->get('title');
        $portfolio->main_description = $request->get('main_description');
        if (isset($request->image)) {
            $portfolio->image = $request->image->store('/portfolio');
        }
        $portfolio->description = $request->get('description');
        $portfolio->slug = $request->get('slug');
        $portfolio->name_project = $request->get('name_project');
        $portfolio->development_time = $request->get('development_time');
        $portfolio->languages = $request->get('languages');
        $portfolio->description_job = $request->get('description_job');
        $portfolio->description_about = $request->get('description_about');

        $portfolio->update();

        return redirect('admin/portfolio');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return back();
    }
}
