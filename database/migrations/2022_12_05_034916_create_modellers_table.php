<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modeller', function (Blueprint $table) {
            $table->id('modeller_id');
            $table->string('name', 100)->comment('名前');
            $table->string('email')->unique('email')->comment('メールアドレス');
            $table->string('password')->comment('パスワード');
            $table->string('zip',10)->comment('郵便番号');
            $table->string('prefecture', 40)->comment('都道府県名 フリーテキスト検索で使用');
		    $table->string('address')->comment('住所2');
		    $table->string('tel', 20)->nullable()->comment('電話番号');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modellers');
    }
}
