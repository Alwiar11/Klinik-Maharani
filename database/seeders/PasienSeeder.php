<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pasien;
use Faker\Factory as Faker;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 20; $i++) {
            $provinsi = $faker->state;
            $kota = $faker->city;
            $kecamatan = $faker->citySuffix;
            $desa = $faker->streetName;
            
            $rt = $faker->numberBetween(1, 20);
            $rw = $faker->numberBetween(1, 20);

            $alamat = "$desa, $rt, $rw, $kecamatan, $kota,  $provinsi";

            Pasien::create([
                'nama' => $faker->name,
                'tanggal_lahir' => $faker->date,
                'alamat' => $alamat,
                'nomor_telepon' => $faker->numerify('08##########'),
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'nomor_rekam_medis' => $faker->unique()->numerify('KM###'),
                'riwayat_penyakit' => $faker->randomElement(['Ada', 'Tidak Ada']),
            ]);
        }
    }
}
