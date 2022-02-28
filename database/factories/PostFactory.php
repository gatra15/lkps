<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tridharma' => $this->faker->title,
            'lembaga_mitra' => $this->faker->title,
            'judul_kegiatan' => $this->faker->title,
            'manfaat' => $this->faker->title,
            'waktu_durasi' => $this->faker->title,
            'bukti_kerjasama' => $this->faker->title,
            'tahun_laporan' => $this->faker->title,
            'prodi' => $this->faker->title,
            'created_by' => $this->faker->title,
        ];
    }
}
