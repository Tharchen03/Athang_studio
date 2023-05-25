<?php

namespace App\Http\Controllers;

use App\Models\AthangShorts;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
// use App\Http\Requests\StoreCustomerRequest;
// use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\View\View;

class AthangShortsController extends Controller
{
    //
        /**
     * Display a listing of the resource.
     */

    public function index(Request $request): View
    {
        $perPage = 5;
        $keyword = $request->get('search');
        if (!empty($keyword)) {
            $students = AthangShorts::where('name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->latest()
                ->paginate($perPage);
        } else {
            $students = AthangShorts::latest()->paginate($perPage);
        }

        return view('shorts.index', compact('students'));
    }

//     private function getStudents($perPage, $keyword = null)
// {
//     if (!empty($keyword)) {
//         return AthangShorts::where('name', 'LIKE', "%$keyword%")
//             ->orWhere('description', 'LIKE', "%$keyword%")
//             ->latest()
//             ->paginate($perPage);
//     } else {
//         return AthangShorts::latest()->paginate($perPage);
//     }
// }

// public function home(Request $request): View
// {
//     $perPage = 5;
//     $keyword = $request->get('search');
//     $students = $this->getStudents($perPage, $keyword);
//     return view('home', compact('students'));
// }

    public function home(Request $request): View
    {
        $perPage = 5;
        $keyword = $request->get('search');
        if (!empty($keyword)) {
            $students = AthangShorts::where('name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->latest()
                ->paginate($perPage);
        } else {
            $students = AthangShorts::latest()->paginate($perPage);
        }
    
        return view('home', compact('students'));
    }
    

    public function trial(Request $request): View
{
    $keyword = $request->get('search');
    if (!empty($keyword)) {
        $students = AthangShorts::where('name', 'LIKE', "%$keyword%")
            ->orWhere('description', 'LIKE', "%$keyword%")
            ->latest()
            ->get();
    } else {
        $students = AthangShorts::latest()->get();
    }

    return view('trial', compact('students'));
}


public function vedio(Request $request): View
{
    $keyword = $request->get('search');
    if (!empty($keyword)) {
        $students = AthangShorts::where('name', 'LIKE', "%$keyword%")
            ->orWhere('description', 'LIKE', "%$keyword%")
            ->latest()
            ->get();
    } else {
        $students = AthangShorts::latest()->get();
    }

    return view('vedio', compact('students'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shorts.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request): RedirectResponse
    {
        //


        $input = $request->all();
        AthangShorts::create($input);
        // return redirect('student')->with('flash_message', 'Student Addedd Successfully!');
        return redirect('shorts')->with('success', 'shorts Addedd Successfully!');
    }

    
    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        //
        $student = AthangShorts::find($id);
        return view('shorts.show')->with('students', $student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        //

        $student = AthangShorts::find($id);
        return view('shorts.edit')->with('students', $student);
    }



    public function update(Request $request, string $id): RedirectResponse
    {
        //
        $student = AthangShorts::find($id);
        $input = $request->all();
        $student->update($input);
        // return redirect('student')->with('flash_message', 'student Updated!');  
        return redirect('shorts')->with('success', 'shorts Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
        AthangShorts::destroy($id);
        // return redirect('student')->with('flash_message', 'Student deleted!');
        return redirect('shorts')->with('success', 'shorts deleted!');
    }
}
