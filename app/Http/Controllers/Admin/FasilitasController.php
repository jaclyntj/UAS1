<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Fasilita;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $fasilitas = Fasilita::where('nama', 'LIKE', "%$keyword%")
                ->orWhere('artikel', 'LIKE', "%$keyword%")
                ->orWhere('gambar', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $fasilitas = Fasilita::latest()->paginate($perPage);
        }

        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Fasilita::create($requestData);

        return redirect('admin/fasilitas')->with('flash_message', 'Fasilita added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $fasilita = Fasilita::findOrFail($id);

        return view('admin.fasilitas.show', compact('fasilita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $fasilita = Fasilita::findOrFail($id);

        return view('admin.fasilitas.edit', compact('fasilita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $fasilita = Fasilita::findOrFail($id);
        $fasilita->update($requestData);

        return redirect('admin/fasilitas')->with('flash_message', 'Fasilita updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Fasilita::destroy($id);

        return redirect('admin/fasilitas')->with('flash_message', 'Fasilita deleted!');
    }
}
