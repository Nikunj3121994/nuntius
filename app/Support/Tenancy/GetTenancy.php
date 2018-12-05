<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 29/10/2018
 * Time: 18:52
 */

namespace App\Support\Tenancy;


use App\Support\Tenancy\Exceptions\CompanyNotRegisteredException;
use Illuminate\Database\Eloquent\Collection;
use Modules\Admin\Entities\Company;
use Modules\Admin\Entities\Subsidiary;

/**
 * Class GetTenancy
 * @package App\Support\Tenancy
 */
class GetTenancy
{

    /**
     * @var Company
     */
    private $company;

    /**
     * @var Subsidiary
     */
    private $subsidiary;

    /**
     * GetTenancy constructor.
     * @param Company|null $company
     * @param Subsidiary|null $subsidiary
     */
    public function __construct( Company $company = null, Subsidiary $subsidiary = null )
    {

        if ($company) {
            $this->company = $company;
        }

        if ($subsidiary) {
            $this->subsidiary = $subsidiary;
        }
    }

    /**
     * @param Company $company
     * @param Subsidiary $subsidiary
     */
    public function logMeIn( Company $company, Subsidiary $subsidiary ): void
    {
        $this->company = $company;
        $this->subsidiary = $subsidiary;
    }

    /**
     * Check if this instance is registered to a Company and Subsidiary
     * @return bool
     */
    public function isRegistered(): bool
    {
        return isset($this->company) && isset($this->subsidiary);
    }


    /**
     * @return Company
     */
    public function getCompany(): Company
    {
        return $this->company;
    }

    /**
     * @return Subsidiary
     */
    public function getSubsidiary(): Subsidiary
    {
        return $this->subsidiary;
    }

    /**
     * @return Collection
     * @throws CompanyNotRegisteredException
     */
    public function getCompanySubsidiaries(): Collection
    {
        if (!$this->company) {
            throw new CompanyNotRegisteredException('You must sign up to a company first');
        }

        return $this->company->subsidiary;
    }

    /**
     * @return Collection
     */
    public function getAllCompanies(): Collection
    {
        return Company::all();
    }

    /**
     * @return Collection
     */
    public function getAllSubsidiaries(): Collection
    {
        return Subsidiary::all();
    }

}