<script setup>
import TopbarMain from '../Components/Topbar/TopbarMain.vue'
</script>

<template>
    <div class="app-container">
        <TopbarMain />
        <div class="sidebar">
            <slot name="sidebar" />
        </div>
        <main class="app-content">
            <slot />
        </main>
    </div>
</template>

<style scoped>
.app-container {
    width: 100vw;
    height: 100vh;
    background-color: yellow;
}
</style>
