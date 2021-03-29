<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Student::all();
        return view('students.index',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'ttl' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'jurusan' => 'required',
            'asal_sekolah' => 'required'
        ]);

        Student::create($request->all());
        return redirect('siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'ttl' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'jurusan' => 'required',
            'asal_sekolah' => 'required'
        ]);

        $siswa = Student::find($id);
        Student::where('id',$siswa->id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'ttl' => $request->ttl,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'jurusan' => $request->jurusan,
            'asal_sekolah' => $request->asal_sekolah,
        ]);
        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Student::find($id);
        $siswa->delete();
        
        return redirect('siswa');
    }
}
