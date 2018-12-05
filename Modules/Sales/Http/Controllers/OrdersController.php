<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 30/10/2018
 * Time: 09:50
 */

namespace Modules\Sales\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Sales\Entities\Order;
use Modules\Sales\Http\Requests\OrdersRequest;

class OrdersController extends Controller
{

    /**
     * Returns a list based on the Controller's model
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {

        // Todo - Create a class that will make the pagination
        // For now I'll make the pagination for every route, beacause I need to find a real good way to do this
        $query = Order::query();
        $query->select([
            'pedido_venda.id',
            'pedido_venda.numero',
            'pedido_venda.emissao',
            'pedido_venda.validade',
            'entidade.nome_fantasia',
            'pedido_venda.pedido_total',
            'pedido_venda_status.descricao',
        ])
            ->join('entidade', 'pedido_venda.entidade_id', '=', 'entidade.id')
            ->join('pedido_venda_status', 'pedido_venda.pedido_venda_status_id', '=', 'pedido_venda_status.id');

        if (request()->query('query')) {
            $field = request()->query('field');

            if ($field === 'nome_fantasia') {
                $field = 'entidade.' . $field;
            }

            $q = request()->query('query');
            $query->whereRaw("$field like '%$q%'");
        }

        if (request()->query('sortBy')) {
            $query->orderBy(request()->query('sortBy'), request()->query('descending') === "false" ? "asc" : "desc");
        }

        if (request()->query('rowsPerPage') > 0) {
            $data = $query->paginate(request()->query('rowsPerPage'));
        } else {
            $data = $query->paginate();
        }

        return JsonResponse::create($data);
    }

    /**
     * Store the data in the Controller's model
     * @param OrdersRequest $request
     * @return JsonResponse
     */
    public function store( OrdersRequest $request ): JsonResponse
    {

    }

    /**
     * Returns a Json representation of the Controller's model
     * @param Order $order
     * @return JsonResponse
     */
    public function show( Order $order ): JsonResponse
    {
        return JsonResponse::create($order->toArray());
    }

    /**
     * Update an existing model
     * @param Order $order
     * @param OrdersRequest $request
     * @return JsonResponse
     */
    public function update( Order $order, OrdersRequest $request ): JsonResponse
    {
        // TODO: Implement update() method.
    }

    /**
     * Delete an existing model
     * @param Order $order
     * @return JsonResponse
     */
    public function destroy( Order $order ): JsonResponse
    {
        return JsonResponse::create([
            'message' => 'Deletado com sucesso!',
        ]);
    }
}