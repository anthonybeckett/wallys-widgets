<template>
    <div class="contain flex flex-col items-center">
        <h1 class="text-4xl spacing-y-2">Wallys Widgets</h1>

        <h2>Enter your order qty:</h2>

        <form @submit.prevent="submit" class="flex flex-col">
            <label for="qty">Qty:</label>
            <input id="qty" v-model="form.qty" class="border-slate-500 border-solid border-2 px-2" />
            <button type="submit" class="p-4 mt-2 border-green-400 border-solid border-2 bg-green-300">Order</button>
        </form>

        <div class="info mt-4 text-center">
            <h2 class="text-xl text-bold">Packs Available</h2>
            <ul v-for="widget in widgets" :key="widget.qty">
                <li>{{ widget.qty }} Widgets</li>
            </ul>
        </div>
    </div>
</template>

<script>
    import { reactive } from 'vue'
    import { Inertia } from '@inertiajs/inertia'

    export default {
        props: {
            widgets: Array
        },
        setup () {
            const form = reactive({
                qty: 0
            })

            function submit() {
                Inertia.post('/order/process', form)
            }

            return { form, submit }
        },
    }
</script>
