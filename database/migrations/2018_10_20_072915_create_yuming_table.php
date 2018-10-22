<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYumingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yuming', function (Blueprint $table) {
            $table->increments('id');
            $table->string('host')->comment('域名');
            $table->string('title')->comment('网站title');
            $table->string('keywords')->comment('网站关键词');
            $table->string('description')->comment('网站描述');
            $table->string('web_name')->comment('网站名称');
            $table->string('temp')->comment('模板文件夹');
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
        Schema::dropIfExists('yuming');
    }
}
