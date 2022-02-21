<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('productos')->insert([
            'nombre' => 'Televisor 40',
            'descripcion' => 'Televisor Smart 43". FHD 1920x1080. Tasa de refresco 60Hz. Proc. Quad Core. Audio 20W. Salida de audio digital optico. Magic remote. Reconocimiento de voz. Bluetooth. HDMI x 3. USB x 2. Virtual Surround Plus. LG ThinQ AI.',
            'precio' => '64999',
            'image' => 'imagen/producto2.jpeg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Lavarropas Drean',
            'descripcion' => 'Descripcion del producto 1',
            'precio' => '66999',
            'image' => 'imagen/producto1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Televisor 40',
            'descripcion' => 'Televisor Smart 43". FHD 1920x1080. Tasa de refresco 60Hz. Proc. Quad Core. Audio 20W. Salida de audio digital optico. Magic remote. Reconocimiento de voz. Bluetooth. HDMI x 3. USB x 2. Virtual Surround Plus. LG ThinQ AI.',
            'precio' => '64999',
            'image' => 'imagen/producto2.jpeg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Lavarropas Drean',
            'descripcion' => 'Descripcion del producto 1',
            'precio' => '66999',
            'image' => 'imagen/producto1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Televisor 40',
            'descripcion' => 'Televisor Smart 43". FHD 1920x1080. Tasa de refresco 60Hz. Proc. Quad Core. Audio 20W. Salida de audio digital optico. Magic remote. Reconocimiento de voz. Bluetooth. HDMI x 3. USB x 2. Virtual Surround Plus. LG ThinQ AI.',
            'precio' => '64999',
            'image' => 'imagen/producto2.jpeg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Lavarropas Drean',
            'descripcion' => 'Descripcion del producto 1',
            'precio' => '66999',
            'image' => 'imagen/producto1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Televisor 40',
            'descripcion' => 'Televisor Smart 43". FHD 1920x1080. Tasa de refresco 60Hz. Proc. Quad Core. Audio 20W. Salida de audio digital optico. Magic remote. Reconocimiento de voz. Bluetooth. HDMI x 3. USB x 2. Virtual Surround Plus. LG ThinQ AI.',
            'precio' => '64999',
            'image' => 'imagen/producto2.jpeg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Lavarropas Drean',
            'descripcion' => 'Descripcion del producto 1',
            'precio' => '66999',
            'image' => 'imagen/producto1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Televisor 40',
            'descripcion' => 'Televisor Smart 43". FHD 1920x1080. Tasa de refresco 60Hz. Proc. Quad Core. Audio 20W. Salida de audio digital optico. Magic remote. Reconocimiento de voz. Bluetooth. HDMI x 3. USB x 2. Virtual Surround Plus. LG ThinQ AI.',
            'precio' => '64999',
            'image' => 'imagen/producto2.jpeg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Lavarropas Drean',
            'descripcion' => 'Descripcion del producto 1',
            'precio' => '66999',
            'image' => 'imagen/producto1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
