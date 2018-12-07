import {getField} from "vuex-map-fields";

const getters = {
    getField,
    getOrderLogisticsVolumes: (state) => {
        return state.orderLogisticsVolumes;
    },
    getOrderLogisticsVolumesItem: (state) => (index) => {
        return state.orderLogisticsVolumes[index];
    },
    getOrderInstallments: (state) => {
        return state.orderInstallments;
    },
    getOrderInstallmentsItem: (state) => (index) => {
        return state.orderInstallments[index];
    },
    getOrderComissions: (state) => {
        return state.orderComissions;
    },
    getOrderComissionsItem: (state) => (index) => {
        return state.orderComissions[index];
    },
};

export default getters;