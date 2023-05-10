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
        Schema::table('posts', function (Blueprint $table) {
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //xoá khoá ngoại category_id cảu bảnng posts
       Schema::table('posts', function($table){
        $table->dropForeign('posts_category_id_foreign');
       });
    }
};

// quy tắc ten khoá ngoại 
// bảng chứa khoá ngoại_cột khoá ngoại_foreign