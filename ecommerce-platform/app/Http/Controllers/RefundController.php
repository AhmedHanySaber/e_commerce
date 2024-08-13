<?php

namespace App\Http\Controllers;

use App\Models\Refund;
use Illuminate\Http\Request;

class RefundController extends Controller
{
    public function index()
    {
        $refunds = Refund::all();
        return response()->json($refunds);
    }

    public function show($id)
    {
        $refund = Refund::find($id);
        return response()->json($refund);
    }

    public function store(Request $request)
    {
        $refund = Refund::create($request->all());
        return response()->json($refund, 201);
    }

    public function update(Request $request, $id)
    {
        $refund = Refund::find($id);
        $refund->update($request->all());
        return response()->json($refund);
    }

    public function destroy($id)
    {
        Refund::find($id)->delete();
        return response()->json(null, 204);
    }
}
