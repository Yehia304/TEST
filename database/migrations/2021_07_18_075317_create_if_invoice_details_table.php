<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIfInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('if_invoice_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('ReservationID');
            $table->tinyInteger('TransactionType');
            $table->date('TransactionDate')->nullable();
            $table->integer('PostingMonth');
            $table->tinyInteger('SubmitTo');
            $table->string('VendorNumber')->nullable();
            $table->string('VendorName')->nullable();
            $table->string('VendorAddress')->nullable();
            $table->string('VendorPhone')->nullable();
            $table->string('VendorFax')->nullable();
            $table->string('VendorEmail')->nullable();
            $table->string('ChainCode')->nullable();
            $table->string('PropertyCode')->nullable();
            $table->string('CommissionClientNumber')->nullable();
            $table->string('AgencyCCVendorNumber')->nullable();
            $table->string('AgencyCCCardNumber')->nullable();
            $table->tinyInteger('ProductCode');
            $table->string('VatCode')->nullable();
            $table->string('CurrencyCode')->nullable();
            $table->string('PassengerName')->nullable();
            $table->string('ValidatingCarrier')->nullable();
            $table->string('TicketNumber')->nullable();
            $table->binary('ETicket');
            $table->binary('Exchange');
            $table->binary('ADM');
            $table->string('OriginalTicket')->nullable();
            $table->string('OriginalInvoice')->nullable();
            $table->string('PublishedFare')->default(0);
            $table->string('SellingFare')->default(0);
            $table->string('ReferenceFare')->default(0);
            $table->string('LowFare')->default(0);
            $table->string('Tax1')->default(0);
            $table->string('Tax2')->default(0);
            $table->string('Tax3')->default(0);
            $table->string('Tax4')->default(0);
            $table->string('Penalty')->default(0);
            $table->string('GrossAmount')->default(0);
            $table->string('CommissionAmount')->default(0);
            $table->string('VatOnCommission')->default(0);
            $table->string('PstOnCommission')->default(0);
            $table->string('PenaltyCommission')->default(0);
            $table->string('NetFare')->default(0);
            $table->string('NetFareValueCode')->default(0);
            $table->string('BookingAgentCommission')->default(0);
            $table->string('TicketingAgentCommission')->default(0);
            $table->string('OSAgentCommission1')->default(0);
            $table->string('OSAgentCommission2')->default(0);
            $table->binary('International');
            $table->string('ExceptionCode')->nullable();
            $table->string('GSANumber')->nullable();
            $table->string('PurchaseOrder')->nullable();
            $table->string('FreeFieldA')->nullable();
            $table->string('FreeFieldB')->nullable();
            $table->string('FreeFieldC')->nullable();
            $table->string('FreeFieldD')->nullable();
            $table->string('RoutingCode')->nullable();
            $table->string('TourCode')->nullable();
            $table->string('GroupCode')->nullable();
            $table->string('TransactionCode')->nullable();
            $table->string('Source')->nullable();
            $table->dateTime('TravelDate')->nullable();
            $table->dateTime('ReturnDate')->nullable();
            $table->smallInteger('NumberOfDays');
            $table->smallInteger('NumberOfPassengers');
            $table->smallInteger('NumberOfItems');
            $table->string('ItemType')->nullable();
            $table->string('CityCode')->nullable();
            $table->string('VoucherRate')->default(0);
            $table->tinyInteger('RateType');
            $table->tinyInteger('Status');
            $table->tinyInteger('VoucherStatus');
            $table->dateTime('APDueDate')->nullable();
            $table->integer('AddedBy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('if_invoice_details');
    }
}
