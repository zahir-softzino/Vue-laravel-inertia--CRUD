<script setup>
import{ useForm} from '@inertiajs/vue3';
import {router} from '@inertiajs/vue3';

defineProps({
    errors:Object
});

const form = useForm ({
    name: null,
    email: null,
    phone: null,
});

function submit(){
    router.post('/customers/store', form)
}

</script>

<template>
    <div class="card col-6 ofset-3">
        <div class="card-header">
            Create Form
        </div>
        <div class="card-body">
            <form action="" @submit.prevent="submit">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" v-model="form.name" placeholder="Name" name="name">
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