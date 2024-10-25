<?php

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
        Schema::table('user', function (Blueprint $table) {
            if (!Schema::hasColumn('user', 'jurusan_id')) {
                $table->foreignId('jurusan_id')->nullable()->constrained('jurusan')->onDelete('set null');
            } else {
                // Jika kolom sudah ada, tambahkan foreign key saja
                $table->foreign('jurusan_id')->references('id')->on('jurusan')->onDelete('set null')->change();
            }
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user', function (Blueprint $table) {
            if (Schema::hasColumn('user', 'jurusan_id')) {
                $table->dropForeign(['jurusan_id']); // hapus foreign key
                $table->dropColumn('jurusan_id'); // hapus kolom jurusan_id
            }
        });
    }
};
