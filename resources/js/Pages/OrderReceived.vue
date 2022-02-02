<template>
    <Nav />

    <div class="contain flex flex-col items-center">
        <h1 class="text-4xl spacing-y-2">Wallys Widgets</h1>

        <h2>Order Received. Sending the following packs:</h2>

        <ul v-for="(qty, pack) in data" :key="pack">
            <li>{{ qty }}x {{ pack }} Widgets</li>
        </ul>
    </div>
</template>

<script>
    import Nav from '../Shared/Nav.vue'

    export default {
        props: {
            data: Object
        },
        components: {
            Nav
        },
    }
</script>
