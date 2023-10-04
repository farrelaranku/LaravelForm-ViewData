<?
use Illuminate\Database\Eloquent\Factories\Factory;

$factory->define(App\Models\YourModel::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'image' => $faker->imageUrl(), // Generates a random image URL (you can customize this based on your requirements)
    ];
});
