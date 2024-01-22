<script setup>
    defineProps({customers: Object});

    import {router} from '@inertiajs/vue3';

    function edit(id){
        router.get('/customers/'+id+'/edit');
    }

    function distroy(id){
        router.delete('/customers/'+id); 
    }

    function addCustomer(){
        router.get('/customers/create');
    }
</script>

<template>

    <div class="card col-10 mt-5">

        <div v-if="$page.props.flash.message" class="alert alert-success">
            <strong>{{ $page.props.flash.message }}</strong>
        </div>
        <div class="row col-md-12">            
            <div class="col-md-2">

            </div>
            <div class="col-md-8 d-flex justify-content-center">
                <strong>
                    Customer Info
                </strong>
            </div>
            <div class="col-md-2 d-flex justify-content-end">
                <button class="btn btn-primary" @click.privent = "addCustomer">Add Customer</button>
            </div>

        </div>
        
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
                        <!-- <button class="btn btn-info">View</button> -->
                        <button class="btn btn-primary" @click.prevent = "edit(customer.id)">Edit</button>
                        &nbsp;
                        <button class="btn btn-danger" @click.privent = "distroy(customer.id)">Delete</button>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>

</template>