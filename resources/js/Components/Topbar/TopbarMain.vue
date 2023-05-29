<!--suppress CssInvalidPropertyValue -->
<script setup>
import TopbarContent from './TopbarContent.vue'
import IconButton from "../Buttons/IconButton.vue";

import { ref } from 'vue'

const clickedTriggerNavbar = ref(false)

const onClickTriggerNavbar = () => {
    clickedTriggerNavbar.value = !clickedTriggerNavbar.value
}
</script>

<template>
    <nav class="navigation-bar">
        <div class="row">
            <div class="col-3">
                <div class="row">
                    <div class="col-3 text-center">
                        <IconButton tooltipPlacement="bottom" tooltipText="Sidebar"
                                    :isActive="clickedTriggerNavbar"
                                    @onClick="onClickTriggerNavbar">
                            <i class="bi bi-list bi-bold" />
                        </IconButton>
                    </div>
                    <div class="col-9">
                        <div class="group-input">
                            <span class="input-icon">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" class="input-filter" placeholder="Cari Menu" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <img alt="logo-topbar" src="/image/logo/sai-logo-small.png" class="image-topbar">
            </div>
            <div class="col-3">
                <TopbarContent />
            </div>
        </div>
    </nav>
</template>

<style scoped>
.navigation-bar {
    display: block;
    width: 100%;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(192, 192, 192, 0.25);
    padding: 1.1rem 0.8rem 0.5rem 1.5rem;
    position: fixed;
    z-index: 999;
    top: 0;
}
.bi-bold {
    -webkit-text-stroke: 1px;
}
.bi-list {
    font-size: 1.5rem;
}
.group-input {
    position: relative;
    display: flex;
    background-color: #F2F2F2;
    border-radius: 100px;
    padding: 0.3rem 0.8rem;
}
.bi-search {
    font-size: 1rem;
    color: #A9A9A9;
}
.input-filter {
    width: 100%;
    margin-left: 0.2rem;
    background-color: transparent;
    border: none;
    outline: none;
}
</style>
