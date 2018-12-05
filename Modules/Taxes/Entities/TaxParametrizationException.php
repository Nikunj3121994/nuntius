<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 09:31
 */

namespace Modules\Taxes\Entities;


use App\Support\Tenancy\Models\SubsidiaryTenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\State;
use Modules\Stock\Entities\Product;

/**
 * Class TaxParametrizationException
 * @package Modules\Taxes\Entities
 */
class TaxParametrizationException extends SubsidiaryTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'parametrizacao_fiscal_excecao';

    /**
     * @return BelongsTo
     */
    public function taxParametrization(): BelongsTo
    {
        return $this->belongsTo(TaxParametrization::class);
    }

    /**
     * @return BelongsTo
     */
    public function ncm(): BelongsTo
    {
        return $this->belongsTo(Ncm::class);
    }

    /**
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
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
    public function stateStOwned(): BelongsTo
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