
<?php

use App\Models\Client;
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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('document_number');
            $table->string('email');
            $table->string('phone');
            $table->boolean('defaulter');
            $table->date('date_birth')->nullable();
            $table->char('sex')->nullable();
            $table->smallInteger('marital_status')->nullable();
            $table->string('physical_disability')->nullable();
            $table->string('company_name')->nullable();
            $table->string('client_type');
            $table->integer('soccer_team_id')->unsigned();
            $table->foreign('soccer_team_id')->references('id')->on('soccer_teams');
            $table->timestamps();
        });
        //many-to-one - muitos para um
        //muitos clientes poderão tem um mesmo time
        //um time pode ter um ou muitos clientes
   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};