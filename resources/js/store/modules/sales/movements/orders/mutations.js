import {updateField} from "vuex-map-fields";

const mutations = {
    updateField,
    updateOrderLogisticsVolumes: (state, payload) => {
        state.orderLogisticsVolumes = payload;
    },
    updateOrderInstallments: (state, payload) => {
        state.orderInstallments = payload;
    },
    addOrderInstallment: (state, payload) => {
        state.orderInstallments.push(payload);
    },
    updateOrderComissions: (state, payload) => {
        state.orderComissions = payload;
    },
    addOrderComission: (state, payload) => {
        state.orderComissions.push(payload);
    }
};

export default mutations;