<script setup>
    defineProps({customers: Object});

    import {router} from '@inertiajs/vue3';

    function edit(id){
        // alert (id);customers/{id}/edit
        router.get('/customers/'+id+'/edit');
    }

    function distroy(id){
        router.delete('/customers/'+id); 
    }
</script>

<template>
    <div class="card col-10">
        <table class="table table-bordered table-hover table-sm">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="customer in customers">
                    <td>{{ customer.name }}</td>
                    <td>{{ customer.email }}</td>
                    <td>{{ customer.phone }}</td>
                    <td style="white-space: nowrap;">
                        <button class="btn btn-info">View</button>
                        <button class="btn btn-primary" @click.prevent = "edit(customer.id)">Edit</button>
                        <button class="btn btn-danger" @click.privent = "distroy(customer.id)">Delete</button>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>


</template>