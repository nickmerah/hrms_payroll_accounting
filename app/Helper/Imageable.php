<?php
namespace App\Helper;

Trait Imageable 
{
    public function storeMedia($request)
    {
        $path = public_path('uploads');

        if ( ! file_exists($path) ) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('image');

        $fileName = $request->employeeid . '.' . trim($file->getClientOriginalExtension());
        
        $this->image = $fileName;
        
        $file->move($path, $fileName);

        return $this;
    }
}