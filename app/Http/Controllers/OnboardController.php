<?php

namespace App\Http\Controllers;

use App\Models\Onboard;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\OnboardRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OnboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $onboards = Onboard::paginate();

        return view('onboard.index', compact('onboards'))
            ->with('i', ($request->input('page', 1) - 1) * $onboards->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $onboard = new Onboard();

        return view('onboard.create', compact('onboard'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OnboardRequest $request): RedirectResponse
    {
        $onboard = Onboard::create($request->validated());
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('images', $fileName, 'public');
            
            $onboard->image = $path;
            $onboard->save();
        }
    
        return Redirect::route('onboards.index')
            ->with('success', 'Onboard created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $onboard = Onboard::find($id);

        return view('onboard.show', compact('onboard'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $onboard = Onboard::find($id);

        return view('onboard.edit', compact('onboard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OnboardRequest $request, Onboard $onboard): RedirectResponse
    {
        $onboard->update($request->validated());
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('images', $fileName, 'public');
            
            $onboard->image = $path;
            $onboard->save();
        }
    

        return Redirect::route('onboards.index')
            ->with('success', 'Onboard updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Onboard::find($id)->delete();

        return Redirect::route('onboards.index')
            ->with('success', 'Onboard deleted successfully');
    }
}
