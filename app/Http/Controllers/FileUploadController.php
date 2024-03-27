<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function showUplodFileChallenge() 
    { 
        return view('file-upload-challenge'); 
    }

    // Handle basic uploads
    public function uploadBasic(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->move(public_path('uploads'), $fileName);
    
            // Check for specific content (e.g., a JavaScript snippet)
            $fileContent = file_get_contents($filePath);
            if (strpos($fileContent, '<script>') !== false) {
                // Check if the user is authenticated
                if (Auth::check()) {
                    // Redirect to the congratulations route if the challenge is completed
                    return redirect()->route('file-upload-congratulations');
                } else {
                    // Redirect to the login page if the user is not authenticated
                    return redirect()->route('login');
                }
            }
    
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
            $filePath = $file->move(public_path('uploads'), $fileName);
    
            // Perform a more in-depth check to verify the file content matches its MIME type
            // This is a placeholder for actual logic which might involve file content analysis
            if ($this->isTrueImage($filePath)) {
                return back()->with('success', 'File uploaded successfully with intermediate validation.');
            } else {
                return redirect()->route('congratulations');
            }
        }
    
        return back()->with('error', 'No file selected.');
    }
    
    // Placeholder for a function that would check if the file is a true image
    // In a real application, this would involve more complex logic
    protected function isTrueImage($filePath)
    {
        // Example check (this is not actual implementation)
        return exif_imagetype($filePath) !== false;
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
