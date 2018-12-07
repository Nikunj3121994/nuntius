import Vue from 'vue';
import Vuex from 'vuex';
import sales from './modules/sales/index';
import admin from './modules/admin/index';
import actions from './global/actions';
import getters from './global/getters';
import mutations from './global/mutations';
import state from './global/state'

Vue.use(Vuex);

const store = new Vuex.Store({
    state,
    getters,
    actions,
    mutations,
    modules: {
        admin,
        sales
    }
});

export default store;