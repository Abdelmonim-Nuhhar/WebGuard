<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    // Show upload forms
    public function showUploadForm() 
    { 
        return view('upload-basic'); 
    }

    public function showBeyondBasicUploadForm() 
    { 
        return view('upload-beyond-basic'); 
    }

    public function showIntermediateUploadForm() 
    { 
        return view('upload-intermediate'); 
    }

    public function showAdvancedUploadForm() 
    { 
        return view('upload-advanced'); 
    }


    // Handle basic uploads
    public function uploadBasic(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);

            return back()->with('success', 'File uploaded successfully without validation.');

        }

        return back()->with('error', 'No file selected.');
    }

    // Handle beyond_basic uploads with basic validation
    public function uploadBeyondBasic(Request $request)
    {
        // Validate the file is an image
        $request->validate(['file' => 'required|file|image|max:2048']); // Max 2MB

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);

            return back()->with('success', 'File uploaded successfully with basic image validation.');
        }

        return back()->with('error', 'No file selected.');
    }

    public function uploadIntermediate(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|file|mimetypes:image/jpeg,image/png|max:1024', // Max 1MB and specific MIME types
        ]);
    
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
    
            return back()->with('success', 'File uploaded successfully with intermediate validation.');
        }
    
        return back()->with('error', 'No file selected.');
    }

    public function uploadAdvanced(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|file|mimes:jpeg,png,gif,doc,docx,pdf|max:512|exclude_if:file,mimetypes:application/php,application/x-msdownload,text/php', // Max 500KB, adjusted MIME types, exclude PHP and .exe files
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->move(public_path('uploads'), $fileName);

            return back()->with('success', 'File uploaded successfully with advanced validation.');
        }

        return back()->with('error', 'No file selected.');
    }

    
}
