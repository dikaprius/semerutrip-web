<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
// impor model file
use App\File;
use Illuminate\Http\RedirectResponse;

use Storage;


class FileController extends Controller
{
    public function index(): View
    {
        $paginate = 5;
        $files = File::orderBy('created_at', 'DESC')
            ->paginate($paginate);
        return view('file.index', compact('files'));
    }


    public function form(): View
    {
        return view('file.form');
    }


    public function upload(Request $request): RedirectResponse
    {

    $this->validate($request, [
     'title' => 'Required|max:100',
     'file' => 'required|file|max:2000'
      ]);

     $uploadedFile = $request->file('file');
     $path = $uploadedFile->store('public/files');
     $file = File::create([
         'title' => $request->title ?? $uploadedFile->getClientOriginalName(),
         'filename' => $path
     ]);
     return redirect()
         ->back()
         ->withSuccess(sprintf('File %s has been uploaded.', $file->title));
    }

    public function destroy(Request $request, $id)
    {
        $files = File::find($id);
        $filename = $files->filename;

        if($files->delete()){
          Storage::delete($filename);
        }


        return redirect()->back();
    }
}
