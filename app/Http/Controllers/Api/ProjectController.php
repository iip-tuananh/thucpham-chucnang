<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create(Request $request, Project $project)
    {
        $data = $project->saveProject($request);
        dd($data);
        return response()->json([
            'message' => 'Save Success',
            'data'=> $data
        ],200);
    }
    public function list(Request $request)
    {
        $keyword = $request->keyword;
        if($keyword == ""){
            $data = Project::orderBy('id','DESC')->get(['id','name','created_at','images']);
        }else{
            $data = Project::where('title', 'LIKE', '%'.$keyword.'%')->orderBy('id','DESC')->get()->toArray();
        }
        return response()->json([
            'data' => $data,
            'message' => 'success'
        ]);
    }
    public function delete($id)
    {
        $query = Project::find($id);
        if($query->images){
            $imgArr = json_decode($query->images);
            foreach($imgArr as $i){
                $file= str_replace('http://localhost:8080','',$i);
                $filename = public_path().$file;
                if(file_exists( public_path().$file ) ){
                    \File::delete($filename);
                }
            }
        }
        $query->delete();
        return response()->json(['message'=>'Delete Success'],200);
    }
    public function edit($id)
    {
        $data = Project::where([
            'id'=> $id
        ])
        ->first();
        return response()->json([
            'data' => $data,
            'message' => 'success'
        ]);
    }
}
