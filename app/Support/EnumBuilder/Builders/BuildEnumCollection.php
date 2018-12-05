<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 11:30
 */

namespace App\Support\EnumBuilder\Builders;


use App\Support\EnumBuilder\Models\Enum;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;

/**
 * This class build the collection who will return to the client class the enum data
 * Class BuildEnumCollection
 * @package App\Support\EnumBuilder\Builders
 */
class BuildEnumCollection
{

    /**
     * @var EloquentCollection
     */
    private $modelCollection;

    /**
     * @var Collection
     */
    private $collection;

    /**
     * BuildEnumCollection constructor.
     * @param EloquentCollection $modelCollection
     */
    public function __construct( EloquentCollection $modelCollection )
    {
        $this->modelCollection = $modelCollection;
        $this->collection = new Collection();
    }

    /**
     * @return Collection
     */
    public function make(): Collection
    {
        foreach ($this->modelCollection as $model) {
            $this->collection->push( new Enum($model->toArray()));
        }
        return $this->collection;
    }

}