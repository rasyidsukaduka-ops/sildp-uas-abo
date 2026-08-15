<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('data_requests', function (Blueprint $table) {
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->string('data_name');
            $table->text('description');
            $table->text('purpose')->nullable();

            $table->enum('status', [
                'diajukan',
                'diverifikasi',
                'diproses',
                'selesai',
                'ditolak'
            ])->default('diajukan');

            $table->text('admin_note')->nullable();

            $table->foreignId('operator_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('data_requests', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['operator_id']);

            $table->dropColumn([
                'user_id',
                'data_name',
                'description',
                'purpose',
                'status',
                'admin_note',
                'operator_id',
            ]);
        });
    }
};
