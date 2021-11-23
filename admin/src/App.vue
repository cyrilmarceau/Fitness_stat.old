<template>
    <Menu />
</template>

<script>
    import { defineComponent } from 'vue';
    import Menu from './components/Header/Menu.vue';

    export default defineComponent({
        components: {
            Menu,
        },
    });
</script>
