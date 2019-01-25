
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import CompaniesIndex from './components/companies/CompaniesIndex.vue';
import CompaniesCreate from './components/companies/CompaniesCreate.vue';
import CompaniesEdit from './components/companies/CompaniesEdit.vue';


import JobsIndex from './components/jobs/JobsIndex.vue';
import JobsCreate from './components/jobs/jobsCreate.vue';
import JobsEdit from './components/jobs/jobsEdit.vue';

import EmployerCreate from './components/register/EmployerCreate.vue';
import EmployeeCreate from './components/register/EmployeeCreate.vue';
const routes = [
//    {
//        path: '/',
//        components: {
//            companiessIndex: CompaniesIndex
//        }
//    },
    {path: '/admin/companies/create', component: CompaniesCreate, name: 'createCompany'},
    {path: '/admin/companies/edit/:id', component: CompaniesEdit, name: 'editCompany'},
    {path: '/', components: {jobsIndex: JobsIndex }},
    {path: '/jobs/create', component: JobsCreate, name: 'createJobs'},
    {path: '/jobs/edit/:id', component: JobsEdit, name: 'editJobs'},
    {path: '/create', component: EmployerCreate, name: 'createEmployer'},
    {path: '/register', component: EmployeeCreate, name: 'registerEmployee'},
]

const router = new VueRouter({ routes })

const app = new Vue({ router }).$mount('#app')
