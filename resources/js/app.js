require('./bootstrap');

import Vue from 'vue';
import Dashboard from '@/pages/Dashboard';

import ViewDashboardOutline from '~/ViewDashboardOutline';
import AccountMultipleOutline from '~/AccountMultipleOutline';
import BellOutline from '~/BellOutline';
import CartOutline from '~/CartOutline';
import CogOutline from '~/CogOutline';
import StoreOutline from '~/StoreOutline';
import ViewSplitHorizontal from '~/ViewSplitHorizontal';
import TagOutline from '~/TagOutline';
import Shape from '~/Shape';
import Power from '~/Power';
import Menu from '~/Menu';
import PlusBoxOutline from '~/PlusBoxOutline';
import Magnify from '~/Magnify';
import Close from '~/Close';

Vue.mixin(require('./mixins'));
Vue.component('dashboard', Dashboard);

Vue.component('view-dashboard-outline', ViewDashboardOutline);
Vue.component('account-multiple-outline', AccountMultipleOutline);
Vue.component('bell-outline', BellOutline);
Vue.component('cart-outline', CartOutline);
Vue.component('cog-outline', CogOutline);
Vue.component('store-outline', StoreOutline);
Vue.component('view-split-horizontal', ViewSplitHorizontal);
Vue.component('tag-outline', TagOutline);
Vue.component('shape', Shape);
Vue.component('power', Power);
Vue.component('menu-icon', Menu);
Vue.component('plus-box-outline', PlusBoxOutline);
Vue.component('magnify', Magnify);
Vue.component('close', Close);

const app = new Vue({
    el: '#app'
});
