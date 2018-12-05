<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 11:22
 */

namespace App\Support\EnumBuilder;


use App\Support\EnumBuilder\Builders\BuildEnumCollection;
use App\Support\EnumBuilder\Query\EnumQuery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

abstract class EnumBuilder
{

    /**
     * @var Model
     */
    protected $model;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var Collection
     */
    protected $metaData;

    /**
     * @var EnumQuery
     */
    protected $enumQuery;

    /**
     * @var Collection
     */
    protected $enumCollection;

    /**
     * EnumBuilder constructor.
     * @param Model $model
     * @param Request $request
     * @param Collection $metaData
     */
    public function __construct( Model $model, Request $request, Collection $metaData )
    {
        $this->model = $model;
        $this->request = $request;
        $this->metaData = $metaData;
        $this->enumQuery = new EnumQuery($model,$request,$metaData);
    }

    /**
     * @return EnumBuilder
     */
    public function make(): self
    {
        $buildEnumCollection = new BuildEnumCollection($this->enumQuery->get());
        $this->enumCollection = $buildEnumCollection->make();
        return $this;
    }

    /**
     * @return Collection
     */
    public function getEnumCollection(): Collection
    {
        return $this->enumCollection;
    }

    /**
     * Turn all data to array
     * @return array
     */
    public function toArray(): array
    {
        return $this->enumCollection->map(function($item){
           return $item->toArray();
        })->toArray();
    }


}