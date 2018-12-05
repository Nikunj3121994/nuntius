<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:45
 */

namespace Modules\Taxes\Entities;


use App\Support\Tenancy\Models\SubsidiaryTenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\State;

/**
 * Class TaxParametrization
 * @package Modules\Taxes\Entities
 */
class TaxParametrization extends SubsidiaryTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'parametrizacao_fiscal';

    /**
     * @return HasMany
     */
    public function taxParametrizationException(): HasMany
    {
        return $this->hasMany(TaxParametrizationException::class);
    }

    /**
     * @return BelongsTo
     */
    public function invoiceSerie(): BelongsTo
    {
        return $this->belongsTo(InvoiceSerie::class);
    }

    /**
     * @return BelongsTo
     */
    public function natureOperation(): BelongsTo
    {
        return $this->belongsTo(NatureOperation::class);
    }

    /**
     * @return BelongsTo
     */
    public function invoicePrintType(): BelongsTo
    {
        return $this->belongsTo(InvoicePrintType::class);
    }

    /**
     * @return BelongsTo
     */
    public function destinationOperationLocal(): BelongsTo
    {
        return $this->belongsTo(DestinationOperationLocal::class);
    }

    /**
     * @return BelongsTo
     */
    public function invoiceEmissionFinality(): BelongsTo
    {
        $this->belongsTo(InvoiceEmissionFinality::class);
    }

    /**
     * @return BelongsTo
     */
    public function invoiceModel(): BelongsTo
    {
        return $this->belongsTo(InvoiceModel::class);
    }

    /**
     * @return BelongsTo
     */
    public function buyerPresence(): BelongsTo
    {
        return $this->belongsTo(BuyerPresence::class);
    }

    /**
     * @return BelongsTo
     */
    public function cfop(): BelongsTo
    {
        return $this->belongsTo(Cfop::class);
    }

    /**
     * @return BelongsTo
     */
    public function cstIpi(): BelongsTo
    {
        return $this->belongsTo(Cst::class,'cst_ipi_id');
    }

    /**
     * @return BelongsTo
     */
    public function cstPis(): BelongsTo
    {
        return $this->belongsTo(Cst::class, 'cst_pis_id');
    }

    /**
     * @return BelongsTo
     */
    public function cstCofins(): BelongsTo
    {
        return $this->belongsTo(Cst::class, 'cst_cofins_id');
    }

    /**
     * @return BelongsTo
     */
    public function cstIcms(): BelongsTo
    {
        return $this->belongsTo(Cst::class, 'cst_icms_id');
    }

    /**
     * @return BelongsTo
     */
    public function taxFrame(): BelongsTo
    {
        return $this->belongsTo(TaxFrame::class);
    }

    /**
     * @return BelongsTo
     */
    public function goodsOrigin(): BelongsTo
    {
        return $this->belongsTo(GoodsOrigin::class);
    }

    /**
     * @return BelongsTo
     */
    public function icmsBcMode(): BelongsTo
    {
        return $this->belongsTo(IcmsBcMode::class);
    }

    /**
     * @return BelongsTo
     */
    public function icmsBcStMode(): BelongsTo
    {
        return $this->belongsTo(IcmsBcStMode::class);
    }

    /**
     * @return BelongsTo
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    /**
     * @return BelongsTo
     */
    public function icmsDifalPercentage(): BelongsTo
    {
        return$this->belongsTo(IcmsDifalPercentage::class);
    }

}