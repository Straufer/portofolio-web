<?php

use App\Models\Settings;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        Settings::create([
            'key' => '_site_name',
            'label' => 'judu situs',
            'value' => 'May Webset',
            'type' => 'text',
        ]);

        Settings::create([
            'key' => '_location',
            'label' => 'Alamat',
            'value' => 'Cileungsi Kota Bogor',
            'type' => 'text',
        ]);

        Settings::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://instagram/GkAdaIgeh',
            'type' => 'text',
        ]);

        Settings::create([
            'key' => '_github',
            'label' => 'Github',
            'value' => 'https://github.com/straufer',
            'type' => 'text',
        ]);
        
        Settings::create([
            'key' => '_site_description',
            'label' => 'Description Web',
            'value' => 
            '
            ini adalah project website ku yang aku banggakan
            ',
            'type' => 'LongText',
        ]);


    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
