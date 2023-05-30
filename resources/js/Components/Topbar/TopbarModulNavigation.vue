<script setup>
import { ref } from 'vue'
import { onClickOutside } from '@vueuse/core'

const target = ref(null)

const emits = defineEmits(['onToggleNavigationModul'])

const toggleNavigationModule = () => {
    emits('onToggleNavigationModul')
}

onClickOutside(target, (event) => toggleNavigationModule())
</script>

<template>
    <div class="card-topbar" ref="target">
        <div class="card-header">
            <h6 class="text-header">Modul</h6>
        </div>
        <div class="card-body">
            <ul class="list-modul">
                <li>
                    <div class="row">
                        <div class="col-2">
                            <img alt="icon-module" src="/image/icon/icon-building.svg" class="icon-modul" />
                        </div>
                        <div class="col-7 text-modul self-center">Admin TKM</div>
                        <div class="col-3 self-center text-right">
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-2">
                            <img alt="icon-module" src="/image/icon/icon-building.svg" class="icon-modul" />
                        </div>
                        <div class="col-7 text-modul self-center">Admin TKM</div>
                        <div class="col-3 self-center">
                            <div class="modul-used">
                                Sekarang
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="modul-all-container">
                <button type="button" class="btn-all-modul">Show All Button</button>
            </div>
        </div>
    </div>
</template>

<style scoped>
.card-topbar {
    position: absolute;
    top: 3.2rem;
    right: 0;
    width: 24rem;
    height: calc(100vh - 20rem);
    background-color: #ffffff;
    box-shadow: 0 4px 6px rgba(88, 88, 88, 0.25);
    border-radius: 0.75rem;
}
.card-topbar .card-header {
    padding: 0.8rem 1.2rem;
}
.card-topbar .card-header .text-header {
    font-size: 1rem;
    font-weight: 600;
}
.card-topbar .card-body {
    position: relative;
    height: calc(100% - 1rem);
}
.card-topbar .card-body .list-modul {
    padding-left: 0;
}
.card-topbar .card-body .list-modul li {
    list-style: none;
    border-bottom: 1px solid #f3f3f3;
    border-top: 1px solid #f3f3f3;
    cursor: pointer;
    padding: 0.5rem 1.25rem;
}
.card-topbar .card-body .list-modul li:hover {
    background-color: #f8f8f8;
}
.card-topbar .card-body .list-modul li .text-modul {
    font-size: 1rem;
    color: #000000;
}
.card-topbar .card-body .list-modul li .icon-modul {
    height: 1.5rem;
    width: 1.5rem;
}
.card-topbar .card-body .list-modul li .bi-caret-right-fill {
    font-size: 0.875rem;
}
.card-topbar .card-body .list-modul li .modul-used {
    background-color: #3e884f;
    color: #ffffff;
    border-radius: 1.25rem;
    font-size: 0.625rem;
    padding: 0.2rem 0.75rem 0.2rem 0.75rem;
    text-align: center;
    vertical-align: center;
}
.card-topbar .modul-all-container {
    position: absolute;
    bottom: 2.3rem;
    display: flex;
    justify-content: center;
    width: 100%;
}
.card-topbar .modul-all-container .btn-all-modul {
    background-color: transparent;
    border: none;
    width: 100%;
    border-bottom-right-radius: 0.75rem;
    border-bottom-left-radius: 0.75rem;
    padding: 0.4rem 0 0.8rem 0;
    border-top: 1px solid #f3f3f3;
    font-size: 0.875rem;
}
.card-topbar .modul-all-container .btn-all-modul:hover {
    background-color: #f8f8f8;
}
</style>
