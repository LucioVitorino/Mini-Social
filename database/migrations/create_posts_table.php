
Schema::create('posts', function (Blueprint $table){
    $table->id();
    $table->foreignId('user_id')->constrained()->cascadeOnDelete();
    $table->string('image_url')->nullable();
    $table->text('caption')->nullable();
    $table->timestamps();
});

    