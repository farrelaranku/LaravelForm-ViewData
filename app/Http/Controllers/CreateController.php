<?
use Illuminate\Http\Request;
use App\Models\CreateController;

public function createForm()
{
    return view('create');
}

public function processForm(Request $request)
{

    // Store the image file in the public/images directory
    $imagePath = $request->file('image')->store('public/images');

    YourModel::create([
        'name' => $request->input('name'),
        'address' => $request->input('address'),
        'phone' => $request->input('phone'),
        'image' => str_replace('public/', '', $imagePath), // Remove 'public/' from the image path
    ]);

    return redirect('/create')->with('success', 'Data seeded successfully.');
}
