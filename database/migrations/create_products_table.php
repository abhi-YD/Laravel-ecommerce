public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->decimal('price', 10, 2);
        $table->string('image')->nullable();
        $table->timestamps();
    });
}
