<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Service;
use App\Models\Question_category;

use Hash;
use Auth;

class QuestionCategoryController extends Controller
{
    public function getQuestionCategoryAdd()
    {
        return view('admin.category.add');
    }

    public function postQuestionCategoryAdd(Request $request)
    {
        $input=$request->all();

        // dd($input);die;

        $title=preg_replace('/\s+/', '-', $input['url']);
        $title=strtolower($title);

        $category=new Question_category();
        $category->category=$input['catgory'];
        $category->url=$title;

        if($request->hasFile('image')){
            $image = $request->image;
            $path = $image->store('category');
            $category->image=$path;
        }

        $category->save();

        $notification = array(
            'message' => 'Form Submitted Successfully', 
            'alert-type' => 'success'
           );

        return redirect('admin/question-category/all')->with($notification);

    }

    public function getQuestionCategoryEdit(Request $request)
    {
        $id=$request->id;

        $category=Question_category::where('id',$id)->first();

        return view('admin.category.edit')->with('category',$category)->with('id',$id);
    }

    public function postQuestionCategoryEdit(Request $request)
    {
        $id=$request->id;
        $input=$request->all();

        $title=preg_replace('/\s+/', '-', $input['url']);
        $title=strtolower($title);

        $category=Question_category::find($id);
        $category->category=$input['category'];
        $category->url=$title;

        if($request->hasFile('image')){
            $image = $request->image;
            $path = $image->store('category');
            $category->image=$path;
        }

        $category->save();

        $notification = array(
            'message' => 'Form Updated Successfully', 
            'alert-type' => 'success'
           );

        return redirect('admin/question-category/all')->with($notification);

    }

    public function all()
    {
        return view('admin.category.all');
    }

    public function allData()
    {
        $category=Question_category::all();

        return DataTables::of($category)->make(true);
    }

    public function delete(Request $request)
    {
        $id=$request->id;
        $question=Question_category::where('id',$id)->delete();

        $notification = array(
            'message' => 'category deleted Successfully', 
            'alert-type' => 'success'
           );



        return redirect('admin/question-category/all');
    }

    public function inactive(Request $request)
    {
        $id=$request->id;
        $question=Question_category::find($id);
        $question->is_active=0;
        $question->save();

        return redirect('admin/question-category/all');


    }


     public function active(Request $request)
    {
        $id=$request->id;
        $question=Question_category::find($id);
        $question->is_active=1;
        $question->save();

        return redirect('admin/question-category/all');


    }

}

