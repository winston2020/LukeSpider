<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('文章标题');
            $table->string('author')->comment('作者');
            $table->string('keywords')->comment('内容页关键词');
            $table->string('description')->comment('内容页描述');
            $table->text('content')->comment('文章内容');
            $table->string('comuln_id')->comment('栏目ID');
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
        Schema::dropIfExists('content');
    }
}
