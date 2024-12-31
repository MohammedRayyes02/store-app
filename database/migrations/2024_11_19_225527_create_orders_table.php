<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->onDelete('cascade'); // Foreign key to `customers`
            $table->timestamp('order_date')->useCurrent();
            $table->decimal('total_amount', 10, 2);
            $table->string('status')->default('pending'); // 'pending', 'shipped', 'delivered', 'cancelled'
            $table->text('delivery_address')->nullable();
            $table->boolean('is_home_delivery')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};