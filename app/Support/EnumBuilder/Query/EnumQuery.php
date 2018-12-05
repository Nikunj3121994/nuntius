<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 11:48
 */

namespace App\Support\EnumBuilder\Query;


use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class EnumQuery
{

    /**
     * @var Model
     */
    private $model;

    /**
     * @var Request
     */
    private $request;

    /**
     * @var Collection
     */
    private $metaData;

    /**
     * EnumQuery constructor.
     * @param Model $model
     * @param Request $request
     * @param Collection $metaData
     */
    public function __construct( Model $model, Request $request, Collection $metaData )
    {
        $this->model = $model;
        $this->request = $request;
        $this->metaData = $metaData;
    }

    /**
     * @return EloquentCollection
     */
    public function get(): EloquentCollection
    {

        $query = $this->model->newQuery();

        if (strpos($this->metaData->get('text'), '.') > 0) {
            $select = collect([
                $this->metaData->get('text') . " as text",
            ]);
        } else {
            $select = collect([
                $this->metaData->get('table') . '.' . $this->metaData->get('text') . " as text",
            ]);
        }

        $select->push($this->metaData->get('table') . '.' . "id as id");

        if ($this->metaData->has('sub_text')) {
            if (strpos($this->metaData->get('sub_text'), '.') > 0) {
                $select->push($this->metaData->get('sub_text') . " as sub_text");
            } else {
                $select->push($this->metaData->get('table') . '.' . $this->metaData->get('sub_text') . " as sub_text");
            }
        }

        if ($this->metaData->has('join')) {
            foreach ($this->metaData->get('join') as $related) {
                /** @var $related  Collection */
                if ($related->has('select')) {
                    $select->push($related->get('select'));
                }
            }
        }

        $query->select($select->toArray());

        if ($this->metaData->has('join')) {
            foreach ($this->metaData->get('join') as $related) {
                /** @var $related  Collection */
                $query->join($related->get('table'),
                    $related->get('table') . '.id',
                    '=',
                    $this->metaData->get('table') . '.' . $related->get('foreign_key'));
            }
        }

        if ($this->request->has('search')) {

            $filters = $this->metaData->get('filters');

            $query->where(function ( $query ) use ( $filters ) {
                foreach ($filters as $index => $filter) {
                    /** @var $filter  Collection */
                    if ($index == 0) {
                        $query->whereRaw("{$filter->get('table')}.{$filter->get('field')} like '%{$this->request->input('search')}%'");
                    } else {
                        $query->orWhereRaw("{$filter->get('table')}.{$filter->get('field')} like '%{$this->request->input('search')}%'");
                    }
                }
            });

        }

        if ($this->metaData->has('default_filter')) {
            foreach ($this->metaData->get('default_filter') as $defaultFilter) {
                $query->whereRaw($defaultFilter);
            }
        }

        return $query->get();

    }

}