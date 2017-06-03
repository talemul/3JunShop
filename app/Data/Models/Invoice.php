<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Data\Models\Invoice
 *
 * @property int $id
 * @property int $product_id
 * @property string $invoice_no
 * @property int $customer_id
 * @property string $invoice_date
 * @property string $status
 * @property float $quantity
 * @property float $total
 * @property float $vat_rate
 * @property float $vat_total
 * @property float $discount
 * @property float $ground_total
 * @property float $round_total
 * @property string $bank_type
 * @property string $card_type
 * @property float $bank_amount
 * @property float $cash_amount
 * @property bool $payment_status
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Data\Models\Item[] $items
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereBankAmount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereBankType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereCardType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereCashAmount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereCustomerId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereDiscount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereGroundTotal($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereInvoiceDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereInvoiceNo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice wherePaymentStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereProductId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereQuantity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereRoundTotal($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereTotal($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereVatRate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Invoice whereVatTotal($value)
 * @mixin \Eloquent
 */
class Invoice extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'invoices';

    public function items()
    {
        return $this->hasMany(Item::class, 'invoice_id', 'id')->orderBy('created_at', 'asc');
    }

}
