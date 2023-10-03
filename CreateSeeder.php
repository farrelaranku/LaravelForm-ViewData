// database/seeders/CreateSeeder.php
use Illuminate\Database\Seeder;
use App\Models\CreateSeeder; 

class CreateSeeder extends Seeder
{
    public function run()
    {
        CreateSeeder::create([
            'name' => request('name'),
            'address' => request('address'),
            'phone' => request('phone'),
            'image' => request()->file('image')->store('images'), // Store the image in the "images" directory
        ]);
    }
}
