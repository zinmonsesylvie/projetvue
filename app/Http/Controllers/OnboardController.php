<?php

namespace App\Http\Controllers;

use App\Models\Onboard;
use App\Http\Requests\OnboardRequest;

/**
 * Class OnboardController
 * @package App\Http\Controllers
 */
class OnboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $onboards = Onboard::paginate();

        return view('onboard.index', compact('onboards'))
            ->with('i', (request()->input('page', 1) - 1) * $onboards->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $onboard = new Onboard();
        return view('onboard.create', compact('onboard'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OnboardRequest $request)
    {
        Onboard::create($request->validated());

        return redirect()->route('onboards.index')
            ->with('success', 'Onboard created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $onboard = Onboard::find($id);

        return view('onboard.show', compact('onboard'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $onboard = Onboard::find($id);

        return view('onboard.edit', compact('onboard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OnboardRequest $request, Onboard $onboard)
    {
        $onboard->update($request->validated());

        return redirect()->route('onboards.index')
            ->with('success', 'Onboard updated successfully');
    }

    public function destroy($id)
    {
        Onboard::find($id)->delete();

        return redirect()->route('onboards.index')
            ->with('success', 'Onboard deleted successfully');
    }
}
