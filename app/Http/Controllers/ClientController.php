<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    private $columns = ['clientName', 'phone', 'email', 'website'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::get();
        return view('clients', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('addClient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $client = new Client();
        // $client->clientName = $request->clientName;
        // $client->phone =$request->phone;
        // $client->email =$request->email;
        // $client->website =$request->website;
        // $client->save();
        $messages = $this->errMsg();
        $data = $request->validate([
            'clientName'=>'required|min:5|max:100',
            'phone'=>'required|min:11',
            'email'=>'required|email:rfc',
            'website'=>'required',
            'city'=>'required|max:30',
            'image' => 'required', // Image validation
        ], $messages);

        $imgExt = $request->image->getClientOriginalExtension();
        $fileName = time() . '.' . $imgExt;

        $path = 'assets/images';
        $request->image->move($path, $fileName);

        $data['image'] = $fileName;
        $data['active'] = isset($request->active);
        client::create($data);
        // return 'Data inserted Successfully :))';
        return redirect('clients');
        // return view('formResult');

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
            return view('showClient', compact('client'));  
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
            return view('editClient', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $messages = $this->errMsg();
    $client = Client::findOrFail($id);

    // Validate the incoming data, making the image optional
    $data = $request->validate([
        'clientName' => 'required|min:5|max:100',
        'phone' => 'required|min:11',
        'email' => 'required|email:rfc',
        'website' => 'required',
        'city' => 'required|max:30',
        'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
    ], $messages);

    // Check if a new image is uploaded
    if ($request->hasFile('image')) {
        $path = public_path('/assets/images/');

        // Remove the old image if it exists
        if ($client->image && file_exists($path . $client->image)) {
            unlink($path . $client->image);
        }

        // Upload the new image
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move($path, $filename);

        // Add the new file name to the data array
        $data['image'] = $filename;
    } else {
        // Retain the existing image if no new image is uploaded
        $data['image'] = $client->image;
    }

    // Handle the 'active' field
    $data['active'] = $request->has('active');

    // Update the client data
    $client->update($data);

    // Redirect back to the clients list with a success message
    return redirect('clients')->with('success', 'Client updated successfully.');
}

    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Client::where('id', $id)->delete();
        return redirect('clients');  
    }
    
        public function forceDelete(Request $request)
        {
            $id = $request->id;
            Client::where('id', $id)->forceDelete();
            return redirect('trashClient'); 
        }

    public function trash()
    {
       $trashed = Client::onlyTrashed()->get();
        return view('trashClient', compact('trashed'));
    }

    public function restore(string $id)
    {
        Client::where('id', $id)->restore();
        return redirect('clients');  
    }




# custom error messages 
    public function errMsg(){
        return [
            'clientName.required' => "The Client's name is missing, Please insert it.",
            'clientName.min' => 'Length of the name is less than 5 letters.',
            'image.required' => 'No images were attached, Please attach an image.' 
        ];
    }

}
