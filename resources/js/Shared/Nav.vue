<template>
    <div class="bg-blue-500 space-x-4 px-2 py-4 mb-2">
        <Link href="/" class="hover:text-white">Home</Link>
        <Link href="/create" class="hover:text-white">Add</Link>
    </div>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3'

    export default {
        components: {
            Link
        },
    };
</script>
