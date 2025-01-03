<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Siswa::class;

    public function definition(): array
    {
        $images = [
            'user1.jpg',
            'user2.jpg',
            'user3.jpg',
        ];

        $randomImage = $this->faker->randomElement($images);

        $sourcePath = public_path('images/' . $randomImage);

        if (file_exists($sourcePath)) {
            $image = file_get_contents($sourcePath);
            Storage::disk('public')->put($randomImage, $image);
        }

        return [
            'nis' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'nisn' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'nama_lengkap' => $this->faker->name(),
            'tmpt_lhr' => $this->faker->city(),
            'tgl_lhr' => $this->faker->date(),
            'jk' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            'email' => $this->faker->unique()->safeEmail(),
            'alamat' => $this->faker->address(),
            'no_telp' => $this->faker->phoneNumber(),
            'foto' => $randomImage,
        ];
    }
}
