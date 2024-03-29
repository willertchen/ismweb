<?php

namespace App\Http\Controllers\Admin;

use App\Entities\ServiceCenter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $centers = ServiceCenter::paginate(10);

        $binding = [
            'title' => 'Service Centers',
            'centers' => $centers,
        ];

        return view('admin.services.centers.index', $binding);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $binding = [
          'title' => 'Create Center',
        ];
        return view('admin.services.centers.create', $binding);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'address' => 'required|max:255',
            'phone1' => 'required|digits_between:5,20',
            'phone2' => 'digits_between:5,20',
            'fax' => 'required|digits_between:5,20',
            'email' => 'required|email|',
            'attn' => 'required|max:50',
            'continent' => 'required|max:20',
            'country' => 'required|max:50',
        ]);

        ServiceCenter::create($request->all());

        return redirect()->route('Admin.centers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceCenter  $serviceCenter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $serviceCenter = ServiceCenter::findOrFail($id);

        $title = 'Center Detail';

        return view('admin.services.centers.show', compact('serviceCenter', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceCenter  $serviceCenter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serviceCenter = ServiceCenter::findOrFail($id);

        $title = 'Edit';

        return view('admin.services.centers.edit', compact('serviceCenter', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceCenter  $serviceCenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $serviceCenter = ServiceCenter::findOrFail($id);
        $request->validate([
            'title' => 'required|max:50',
            'address' => 'required|max:255',
            'phone1' => 'required|digits_between:5,20',
            'phone2' => 'digits_between:5,20',
            'fax' => 'required|digits_between:5,20',
            'email' => 'required|email|',
            'attn' => 'required|max:50',
            'continent' => 'required|max:20',
            'country' => 'required|max:50',
        ]);

        $serviceCenter->update($request->all());

        return redirect()->route('Admin.centers.index')
            ->with('success', 'Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Entities\ServiceCenter $serviceCenter
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $center = ServiceCenter::find($id);
        $center->delete();

        return redirect()->route('Admin.centers.index')
            ->with('success', " Deleted successfully.");
    }
}
