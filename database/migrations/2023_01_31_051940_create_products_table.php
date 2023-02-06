<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('product_type_id')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->bigInteger('subcategory_id')->nullable();
            $table->bigInteger('child_id')->nullable();

            $table->string('language')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();

            $table->text('description')->nullable();
            $table->text('policy')->nullable();

            $table->string('feature_image')->nullable();
            $table->json('gallery_images')->nullable();

            $table->json('feature_tags')->nullable();
            $table->string('tag')->nullable();

            $table->integer('quantity')->nullable()->default(0);
            $table->double('original_price', 8, 2)->default(0.00);
            $table->integer('discount_percentage')->default(0);
            $table->double('discount_price', 8, 2)->default(0.00);

            $table->integer('status')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
