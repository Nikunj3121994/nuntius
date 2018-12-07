import movements from './movements/index';

const sales = {
    namespaced: true,
    state: {
        data: []
    },
    modules: {
        movements
    }
};

export default sales;