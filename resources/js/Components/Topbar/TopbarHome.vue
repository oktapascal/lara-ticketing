<script setup>
import { router } from '@inertiajs/vue3'

const onSignOut = () => {
    // noinspection JSUnresolvedReference
    router.post(route('ticket.logout'))
}
</script>

<template>
    <div class="topbar">
        <div class="row">
            <div class="col-4 align-center">
                <h6 class="title-topbar">Menu Portal</h6>
            </div>
            <div class="col-4">
                <img alt="logo-topbar" src="/image/logo/sai-logo-small.png" class="image-topbar">
            </div>
            <div class="col-4">
                <button type="button" class="btn btn-outline-danger pull-right" @click="onSignOut">
                    Keluar
                </button>
            </div>
        </div>
    </div>
</template>

<style scoped>
.topbar {
    position: absolute;
    width: 100%;
    background-color: #ffffff;
    top: 0;
    padding: 1rem 2.5rem;
    opacity: 0.7;
    box-shadow: 0px 4px 6px rgba(88, 88, 88, 0.25);
}
.title-topbar {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0;
}
.image-topbar {
    height: 1.9rem;
    width: 9rem;
    margin: 0 auto;
    display: block;
}
.align-center {
    align-self: center;
}
.pull-right {
    float: right;
}
</style>
