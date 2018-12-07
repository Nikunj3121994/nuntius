import orders from './orders/index';

const movements = {
    namespaced: true,
    state: {
        data: []
    },
    modules: {
        orders
    }
};

export default movements;