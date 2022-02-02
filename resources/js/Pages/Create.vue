<template>
    <Nav />

    <div class="contain flex flex-col items-center">
        <h2>Enter your new qty:</h2>

        <form @submit.prevent="submit" class="flex flex-col">
            <label for="qty">Qty:</label>
            <input id="qty" v-model="form.qty" class="border-slate-500 border-solid border-2 px-2" />
            <button type="submit" class="p-4 mt-2 border-green-400 border-solid border-2 bg-green-300">Add</button>
        </form>
    </div>
</template>

<script>
    import Nav from '../Shared/Nav.vue'
    import { reactive } from 'vue'
    import { Inertia } from '@inertiajs/inertia'

    export default {
        components: {
            Nav
        },
        setup () {
            const form = reactive({
                qty: 0
            })

            function submit() {
                Inertia.post('/store', form)
            }

            return { form, submit }
        },
    };
</script>
