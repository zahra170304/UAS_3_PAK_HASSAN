<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;

abstract class Controller
{
    public function index()
    {
        return view('pekerjaan.index', [
            "pekerjaan" => Pekerjaan::with('perusahaan')->latest()->paginate(5)
        ]);
    }

    public function create(){
        return view('pekerjaan.create');
    }

    public function detail(Pekerjaan $kerja)
    {
        return view('pekerjaan.show', ['kerja' => $kerja]);
    }

    public function save()
    {
        request()->validate([
            'email' => ['required'],
          'job_title' => ['required', 'min:4'],
          'location' => ['required', 'min:4'],
        ]);

        Pekerjaan::create([
            'title' => request('posisi'),
            'salary' => request('salary'),
            'email' => request('email'),
        'job_title' => request('job_title'),
        'location' => request('location'),
        'region' => request('region'),
        'job_type' => request('job_type'),
        'description' => request('description'),
            'perusahaan_id' => 1,
        ]);
        return redirect('/listkerja');
    }

    public function edit(Pekerjaan $kerja)
    {
        return view("pekerjaan.edit", ["kerja" => $kerja]);
    }

    public function update(Pekerjaan $kerja)
    {
        request()->validate([
            'email' => ['required'],
            'job_title' => ['required', 'min:4'],
            'location' => ['required', 'min:4'],
        ]);

        $kerja->update([
          'title' => request('posisi'),
            'salary' => request('salary'),
            'email' => request('email'),
        'job_title' => request('job_title'),
        'location' => request('location'),
        'region' => request('region'),
        'job_type' => request('job_type'),
        'description' => request('description')
        ]);

        return redirect('/listkerja/' . $kerja->id);
    }

    public function delete(Pekerjaan $kerja){
        $kerja->delete();
        return redirect('/listkerja');
    }
}
