import Vue from 'vue';
import Vuex from 'vuex';
import actions from './global/actions';
import getters from './global/getters';
import mutations from './global/mutations';
import state from './global/state'

Vue.use(Vuex);

const store = new Vuex.Store({
    state,
    getters,
    actions,
    mutations
});

export default store;