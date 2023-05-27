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
    background-image: url('/image/background/bg-main.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.content-container {
    padding-top: 5rem;
}
</style>
