<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 30/10/2018
 * Time: 08:54
 */

namespace App\Support\Tenancy;


use App\Support\Tenancy\Exceptions\NameSubsidiaryParameterNotFound;
use Carbon\Carbon;
use Modules\Admin\Entities\SubsidiaryParameter;

/**
 * Class GetSubsidiaryParameter
 * @package App\Support\Tenancy
 */
class GetSubsidiaryParameter
{

    /**
     * @param string $name
     * @return bool|Carbon|string|int|float|null
     * @throws NameSubsidiaryParameterNotFound
     */
    public function getValueByName( string $name )
    {
        $subsidiaryParameter = SubsidiaryParameter::where('variavel', $name)
            ->get()
            ->first();

        if (!$subsidiaryParameter) {
            throw new NameSubsidiaryParameterNotFound($name);
        }

        switch ($subsidiaryParameter->tipo) {
            case 'B':
                return $subsidiaryParameter->conteudo === 'true';
            case 'N':
                return $subsidiaryParameter->conteudo;
            case 'C':
                return $subsidiaryParameter->conteudo;
            case 'D':
                return new Carbon($subsidiaryParameter->conteudo);
            default:
                return null;
        }

    }

}