<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // 'admin' ou 'user'
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Inserir roles básicos
        DB::table('roles')->insert([
            ['name' => 'admin', 'description' => 'Administrador do sistema', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'user', 'description' => 'Usuário padrão', 'created_at' => now(), 'updated_at' => now()]
        ]);

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('role_id')->default(2); // 2 será para usuário padrão
            $table->foreign('role_id')->references('id')->on('roles');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('roles');
    }
};