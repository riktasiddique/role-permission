<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { Link } from '@inertiajs/inertia-vue3'
</script>
<template>
    <Head title="Action Buttons " />
   <p class='text-center mt-5 text-cyan-500'>Manage roles and permissions from here</p>
   <div class='row mt-5'>
    <div class='col-md-6 text-center'>
        <Link class=" bg-gray-600 mr-2 p-2 rounded-lg text-slate-100" href="">View Roles</Link>
        <Link class=" bg-lime-600 mr-2 p-2 rounded-lg text-slate-100" href="">Create Roles</Link>
        <Link class=" bg-teal-600 mr-2 p-2 rounded-lg text-slate-100" href="">Edit Roles</Link>
        <Link class=" bg-orange-700 mr-2 p-2 rounded-lg text-slate-100" href="">Delete Roles</Link>
        <Link class=" bg-sky-500/100 mr-2 p-2 rounded-lg text-slate-100" href="">View Products</Link>
        <Link class=" bg-indigo-600 mr-2 p-2 rounded-lg text-slate-100" href="">Create Products</Link>
        <Link class=" bg-fuchsia-800 mr-2 p-2 rounded-lg text-slate-100" href="">Edit Products</Link>
        <Link class=" bg-rose-700 mr-2 p-2 rounded-lg text-slate-100" href="">Delete Products</Link>
    </div>
   </div>
</template>