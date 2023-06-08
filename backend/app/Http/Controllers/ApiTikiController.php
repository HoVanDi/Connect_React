<?php


namespace App\Http\Controllers;

use App\Models\Tiki;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ApiTikiController extends Controller
{
    public function getTikis()
    {
        $tikis = Tiki::all();
        return response()->json($tikis);
    }
    public function getOneTiki($id)
    {
        $tiki = Tiki::find($id);
        return response()->json($tiki);
    }
    public function addTiki(Request $request)
    {
        $tiki = new Tiki();
        $tiki->name = $request->input('name');
        $tiki->image = $request->input('image');
        $tiki->price = intval($request->input('price'));
        $tiki->description = $request->input('description');
        $tiki->rate = intval($request->input('rate'));
        $tiki->save();
        return $tiki;
    }
    public function deleteTiki($id)
    {
        $tiki = Tiki::find($id);
        $fileName = 'source/image/product/' . $tiki->image;
        if (File::exists($fileName)) {
            File::delete($fileName);
        }
        $tiki->delete();
        return ['status' => 'ok', 'msg' => 'Delete successed'];
    }
    public function editTiki(Request $request, $id)
    {
        $tiki = Tiki::find($id);
        $tiki->name = $request->input('name');
        $tiki->image = $request->input('image');
        $tiki->description = $request->input('description');
        $tiki->rate = intval($request->input('rate'));
        $tiki->price = intval($request->input('price'));
        $tiki->save();
        return response()->json(['status' => 'ok', 'msg' => 'Edit successed']);
    }

    public function uploadImage(Request $request)
    {
        // process image							
        if ($request->hasFile('uploadImage')) {
            $file = $request->file('uploadImage');
            $fileName = $file->getClientOriginalName();

            $file->move('source/image/product', $fileName);

            return response()->json(["message" => "ok"]);
        } else
            return response()->json(["message" => "false"]);
    }
}
