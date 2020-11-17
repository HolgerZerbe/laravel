<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificateController extends Controller
{   
    
    public function namelist()
    {
        $alleTeilnehmer = ['jochen', 'jan', 'jennifer', 'jürgen', 'josephine', 'jens', 'john', 'joachim', 'johannes', 'jerome',];

        return view('teilnehmerliste', compact('alleTeilnehmer'));

    }


    // public function index()
    // {
    //     return 'Alle Zertifikat werden returned';
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = 'Holger';
        $framework ='React';
        // return view('zertifikat_erstellen', ['user' => $user]);
        // return view('zertifikat_erstellen', ['user' => $user, 'framework' => 'Laravel']);
        // return view('zertifikat_erstellen')->with('user', $user);
        // return view('zertifikat_erstellen')->with(['user' => $user]);
        return view('zertifikat_erstellen', compact('user', 'framework'));
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
        return 'Zeigt Zertifikat mit Id = ' . $id . '.';
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'Zertifikat mit Id = ' . $id . 'zerstört.';        
    }
}
