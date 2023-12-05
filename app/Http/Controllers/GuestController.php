<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Guest;
use Illuminate\Http\Request;
use App\Http\Requests\GuestRequest;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        // dd($request->input('all'));

        if ($request->input('all') == 1) {


            $guests = Guest::query()
                ->orderBy('created_at', 'desc')
                ->get();
        } else {
            $today = Carbon::today(); // Obtenemos la fecha actual

            $guests = Guest::query()
                ->whereDate('created_at', $today) // Filtramos por la fecha actual
                ->orderBy('created_at', 'desc')
                ->get();
        }

        return view('index', compact('guests'));
    }



    public function store(GuestRequest $request)
    {
        $guest = $request->all();

        $guest = Guest::create($guest);


        return redirect()->route('index')
            ->with('success', __('Visita Registrada con Éxito'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guest $guest)
    {
        /*         $doctor->update($request->all());

            $doctor->specialties()->sync($request->input('specialties'));

            return redirect()->route('doctors.index')
                ->with('success', __('Doctor Updated Successfully')); */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guest $guest)
    {
        //
    }
}
