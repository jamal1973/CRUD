<?php

namespace App\Http\Controllers;

use App\Models\PeopleModel;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PeopleController extends Controller
{
    public function create(Request $request) : JsonResponse
    {
        $record = new PeopleModel();
        $record->id = $request->input('id');
        $record->first_name = $request->input('first_name');
        $record->last_name = $request->input('last_name');
        $record->age = $request->input('age');
        $record->phone_number = $request->input('phone_number');
        $record->email = $request->input('email');
        $record->address = $request->input('address');
        $record->city = $request->input('city');
        $record->zip_code = $request->input('zip_code');
        $record->country = $request->input('country');
        $record->save();
        return response()->json($record);
    }


    public function show() : JsonResponse
    {
        return response() -> json(PeopleModel::all(), 200);
    }



    public function index($id)
    {
        $record = PeopleModel::find($id);
        if ($record) {
            return response()->json($record);
        }
        else
        {
            return response()->json(['error' => 'Record not found.'], 204);
        }
    }



    public function update(Request $request,$id)
    {
        $record = PeopleModel::find($id);

        if (!$record) {
            return response()->json(['error' => 'Person not found'], 204);
        }

        $record->update($request->all());

        return response()->json($record);
    }



    public function delete($id) : JsonResponse
    {
        $record = PeopleModel::find($id);
        if (!$record) {
        return response()->json(['error' => 'record not found'], 204);
        }
        $record->delete();
        return response()->json(['message' => 'record deleted']);
        //jakies instruckje
    }
}
?>
