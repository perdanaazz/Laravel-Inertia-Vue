<template>
    <Layout>
        
    </Layout>
    <h1>Hello {{ lorem }}</h1>

    <Link href="/admin">Admin</Link>
</template>

<style>

</style>

<script>
    import Layout from '../Layout/LayoutMaster.vue'

    import {
        Link
    } from '@inertiajs/vue3'

    export default {
        components: {
            Link,
            Layout
        },
        props: {
            lorem: String,
        }
    }
</script>
