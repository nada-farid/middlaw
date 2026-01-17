<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    
    class CreateConsultingsTable extends Migration
    {
        public function up()
        {
            Schema::create('consultings', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->longText('question');
                $table->longText('answer');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultings');
    }
}
