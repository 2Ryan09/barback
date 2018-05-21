<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Supplier;
use App\Http\Resources\Supplier as SupplierResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::channel('supplier')->info('Suppliers shown.', ['user' => Auth::user()]);

        // Get articles
        return Supplier::paginate(15);
    }

    /**
     * Display the specified resource
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Log::channel('supplier')->info('Suppliers shown.', ['user' => Auth::user()]);

        // Get a single supplier
        $supplier = Supplier::findOrFail($id);

        // Return the single supplier as a resource
        return new SupplierCollection($supplier);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Supplier::create($request->all());
    }

    /**
     * Create new suppler entry
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        Log::channel('supplier')->info('Supplier created.', [
            'suppler' => $request->all(),
            'user' => Auth::user()
        ]);

        return Supplier::create($request->all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $deleted = $supplier->delete();

        if ($deleted) {
            Log::channel('supplier')->info('Supplier deleted.', [
                'supplier' => $supplier,
                'user' => Auth::user()
            ]);

            return response()->json(['status' => 'success', 'message' => 'supplier_deleted']);
        } else {
            return response()->json(['status' => 'error',
                'message' => 'supplier_not_found', ], 422);
        }
    }
}
