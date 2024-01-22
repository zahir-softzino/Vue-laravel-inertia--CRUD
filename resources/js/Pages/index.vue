<script setup>
    defineProps({customers: Object})
</script>

<template>
    <div class="card col-10 offset-3">
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
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>


</template>