public function up()
{
    Schema::create('carts', function (Blueprint $table) {
        $table->id();
        $table->foreignId('product_id')->constrained();
        $table->integer('quantity')->default(1);
        $table->timestamps();
    });
}
