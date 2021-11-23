<template>
    <a-layout style="min-height: 100vh">
        <a-layout-sider v-model:collapsed="collapsed" collapsible>
            <div class="logo" />
            <a-menu theme="dark" v-model:selectedKeys="selectedKeys" mode="inline">
                <a-menu-item v-for="(menu, index) in menuItems" :key="index">
                    <component v-if="menu.icon" :is="menu.icon" />
                    <span>{{ menu.name }}</span>
                </a-menu-item>
            </a-menu>
        </a-layout-sider>

        <a-layout>
            <a-layout-header style="background: #fff; margin: 0 16px 16px 16px; padding-left: 16px">
                <a-breadcrumb>
                    <a-breadcrumb-item>User</a-breadcrumb-item>
                    <a-breadcrumb-item>Bill</a-breadcrumb-item>
                </a-breadcrumb>
            </a-layout-header>
            <a-layout-content style="margin: 0 16px">
                <div :style="{ padding: '24px', background: '#fff', minHeight: '360px' }">Bill is a cat.</div>
            </a-layout-content>
            <a-layout-footer style="text-align: center"> Fitness stat ©2021 Crée par Cyril Marceau </a-layout-footer>
        </a-layout>
    </a-layout>
</template>
<script>
    import { HomeOutlined, BarChartOutlined } from '@ant-design/icons-vue';
    import 'ant-design-vue/dist/antd.css';
    import { defineComponent, ref } from 'vue';
    export default defineComponent({
        components: {
            // /* eslint-disable vue/no-unused-components */
            HomeOutlined,
            BarChartOutlined,
        },

        data() {
            return {
                collapsed: ref(false),
                selectedKeys: ref(['1']),
                menuItems: [
                    {
                        name: 'Accueil',
                        icon: HomeOutlined,
                        route: '/',
                    },
                    {
                        name: 'Statistiques',
                        icon: BarChartOutlined,
                        route: '/stat',
                    },
                ],
            };
        },
    });
</script>

<style lang="scss">
    #components-layout-demo-side .logo {
        height: 32px;
        margin: 16px;
        background: rgba(255, 255, 255, 0.3);
    }

    .site-layout .site-layout-background {
        background: #fff;
    }
    [data-theme='dark'] .site-layout .site-layout-background {
        background: #141414;
    }
</style>
