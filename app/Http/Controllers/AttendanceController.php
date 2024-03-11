<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;


class AttendanceController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_user' => 'required',
            'id_kelas' => 'required',
            'id_material' => 'required',
            'teaching_role' => 'required',
            'code' => 'required',
        ]);

        dd($validatedData);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}
