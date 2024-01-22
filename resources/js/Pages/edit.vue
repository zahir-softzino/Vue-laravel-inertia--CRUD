<script setup>
    import { useForm } from '@inertiajs/vue3';
    import { router } from '@inertiajs/vue3';
    const props = defineProps({
        errors: Object,
        customer: Object,
    })

    const form = useForm({
        name: props.customer.name,
        email: props.customer.email,
        phone: props.customer.phone,
    })

    function submit(id){
        router.put('/customers/'+id,form)
    }

</script>

<template>

<div class="card col-6 mt-5">
        <div class="card-header">
            Edit Customer Info
        </div>
        <div class="card-body">
            <form action="" @submit.prevent="submit(customer.id)">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" v-model="form.name" name="name">
                    <div class="text-denger text-xs" v-if="errors.name">
                        {{ errors.name }}
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" v-model="form.email" placeholder="email@gmail.com" name="email">
                    <div class="text-denger text-xs" v-if="errors.email">
                        {{ errors.email }}
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="phone" v-model="form.phone" placeholder="Phone" name="Phone">
                    <div class="text-denger text-xs" v-if="errors.phone">
                        {{ errors.phone }}
                    </div>
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
           
            
        </div>
    </div>
</template>