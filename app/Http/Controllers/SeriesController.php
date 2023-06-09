<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $perPage = 5;
        $keyword = $request->get('search');
        if (!empty($keyword)) {
            $series = Series::where('name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->latest()
                ->paginate($perPage);
        } else {
            $series = Series::latest()->paginate($perPage);
        }

        return view('series.index', compact('series'));
    }

    public function trial(Request $request): View
{
    $keyword = $request->get('search');
    if (!empty($keyword)) {
        $series = Series::where('name', 'LIKE', "%$keyword%")
            ->orWhere('description', 'LIKE', "%$keyword%")
            ->latest()
            ->get();
    } else {
        $series = Series::latest()->get();
    }

    return view('adver', compact('series'));
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    
     public function store(Request $request): RedirectResponse
     {
         //
 
 
         $input = $request->all();
         Series::create($input);
         // return redirect('student')->with('flash_message', 'Student Addedd Successfully!');
         return redirect('series')->with('success', 'series Addedd Successfully!');
     }
    /**
     * Display the specified resource.
     */
    public function show(Series $series)
    {
        return view('series.show', compact('series'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        //

        $series = Series::find($id);
        return view('series.edit')->with('series', $series);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
        $series = Series::find($id);
        $input = $request->all();
        $series->update($input);
        // return redirect('student')->with('flash_message', 'student Updated!');  
        return redirect('series')->with('success', 'series Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Series $series)
    {
        $series->delete();



        return redirect()->route('series.index')

            ->with('success', 'series deleted successfully');
    }
}
