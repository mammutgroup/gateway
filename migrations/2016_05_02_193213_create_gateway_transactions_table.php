<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Larabookir\Gateway\PortAbstract;
use Larabookir\Gateway\GatewayResolver;
use Larabookir\Gateway\Enum;

class CreateGatewayTransactionsTable extends Migration
{
	function getTable()
	{
		return config('gateway.table', 'gateway_transactions');
	}

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->getTable(), function (Blueprint $table) {
			$table->engine = "innoDB";
			$table->uuid('id');
			$table->uuid('user_id');
			$table->enum('port', [
				Enum::MELLAT,
				Enum::JAHANPAY,
				Enum::PARSIAN,
				Enum::PASARGAD,
				Enum::PAYLINE,
				Enum::SADAD,
				Enum::SAMAN,
				Enum::ZARINPAL,
			]);
			$table->decimal('price', 15, 2);
			$table->string('ref_id', 100);
			$table->string('tracking_code', 50)->nullable();
			$table->string('card_number', 50)->nullable();
			$table->enum('status', [
				Enum::TRANSACTION_INIT,
				Enum::TRANSACTION_SUCCEED,
				Enum::TRANSACTION_FAILED,
			])->default(Enum::TRANSACTION_INIT);
			$table->string('ip', 20)->nullable();
			$table->dateTime('payment_date')->nullable();
			$table->nullableTimestamps();
			$table->softDeletes();

            $table->primary('id');

            $table->index('user_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop($this->getTable());
	}
}
