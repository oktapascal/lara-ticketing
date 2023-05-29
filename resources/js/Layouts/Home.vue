<script setup>
import TopbarHome from '../Components/Topbar/TopbarHome.vue';
</script>

<template>
    <TopbarHome />
    <div class="home-container">
        <div class="content-container">
            <slot />
        </div>
    </div>
</template>

<style scoped>
.home-container {
    height: 100vh;
    width: 100vw;
    background-image: url('../../../public/image/background/bg-main.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.content-container {
    padding: 10rem 5rem 0 5rem;
}
</style>
