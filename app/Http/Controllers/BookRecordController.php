<?php

namespace App\Http\Controllers;

use App\Models\BookRecord;
use Illuminate\Http\Request;

class BookRecordController extends Controller
{
    //


    public function bookList(){
        $book_list  = BookRecord::all();
        return view("list_view")->with('bookList',$book_list);
    }

    public function bookForm(){
        return view('bookForm')->with('update',false);
    }
    public function bookCreate(Request $request){
        $bookObject = new BookRecord();
        $bookObject->book_id = $request->book_id;
        $bookObject->title = $request->title;
        $bookObject->author_id = $request->author_id;
        $bookObject->description = $request->description;
        $bookObject->price = $request->price;

        $bookObject->save();
        return redirect('book/list')->with('status','Record saved successfully');
    }
    public function bookUpdateFrom($id){
        $book_data = BookRecord::findOrFail($id);
        return view('bookForm')->with('bookData',$book_data)->with('update',true);
    }

    public function bookUpdate(Request $request,$id){
        $bookData = BookRecord::findOrFail($id);
        $bookData->book_id = $request->book_id;
        $bookData->title = $request->title;
        $bookData->author_id = $request->author_id;
        $bookData->description = $request->description;
        $bookData->price = $request->price;

        $bookData->update();
        return redirect('book/list')->with('status','Record updated successfully');

    }
    public function bookDelete($id){
        $bookObject = BookRecord::findOrFail($id);
        $bookObject->delete();
        return redirect('book/list')->with('status','Record delete successfully');
    }
}
