// The file is store.
//
// @author wufly <fei.wu@waiwaimall.com>
// ---------------------------------------

import Vue from 'vue';
import Vuex from 'vuex';

// modules.
import alert from './module/alert';
import manages from './module/manages';

Vue.use(Vuex);

const modules = {
    alert,
    manages
};

const store = new Vuex.Store({
    modules
});

export default store;
