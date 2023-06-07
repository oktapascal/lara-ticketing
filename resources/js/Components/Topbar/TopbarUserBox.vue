<script setup>
import { ref, inject } from 'vue'
import { onClickOutside } from '@vueuse/core'
import {router} from "@inertiajs/vue3";

defineProps({
    user: {
        type: Object,
        required: true
    }
})

const emits = defineEmits(['onToggleUserBox'])

const swal = inject('$swal')

const target = ref(null)

const toggleUserBox = () => {
    emits('onToggleUserBox')
}

const onSignOut = () => {
    swal.fire({
        title: 'Keluar Aplikasi ?',
        html: 'Semua halaman akses yang sama akan keluar',
        showCancelButton: true,
        showConfirmButton: true,
        confirmButtonText: 'Keluar',
        cancelButtonText: 'Batal',
        reverseButtons: true,
        buttonsStyling: false,
        customClass: {
            confirmButton: 'btn btn-primary mx-1',
            cancelButton: 'btn btn-secondary mx-1'
        },
    }).then(result => {
        if(result.isConfirmed) {
            // noinspection JSUnresolvedReference
            router.post(route('tkm.auth.logout'))
        }
    });
}

onClickOutside(target, () => {
    toggleUserBox()
})
</script>

<template>
    <div class="card-toolbar" ref="target">
        <div class="grid-content">
            <div>
                <img alt="avatar-image" src="/image/avatar/user.png" class="avatar-image"/>
            </div>
            <div class="information-container">
                <p class="text-information">{{ user.nik }}</p>
                <p class="text-information">-</p>
            </div>
        </div>
        <hr class="separator" />
        <div class="grid-content">
            <div class="text-muted w-full">
                Lokasi
            </div>
            <div class="w-full text-right text-information">
                11
            </div>
        </div>
        <hr class="separator" />
        <div>
            <button type="button" class="logout-button" @click="onSignOut">
                <i class="bi bi-box-arrow-left"></i>
                <span class="text-logout">Logout</span>
            </button>
        </div>
    </div>
</template>

<style scoped>
.card-toolbar {
    position: absolute;
    top: 3.2rem;
    right: 0;
    width: 14rem;
    height: auto;
    background-color: #ffffff;
    box-shadow: 0 4px 6px rgba(88, 88, 88, 0.25);
    border-radius: 0.75rem;
    display: flex;
    flex-direction: column;
}
.card-toolbar .grid-content {
    padding: 0.8rem 1rem;
    display: flex;
}
.card-toolbar .grid-content .avatar-image {
    height: 2.5rem;
    width: 2.5rem;
}
.card-toolbar .grid-content .information-container {
    padding: 0 0.5rem;
    width: 100%;
}
.card-toolbar .grid-content .text-information {
    margin-bottom: 0;
    font-size: 0.8rem;
}
.card-toolbar .logout-button {
    background-color: #ffffff;
    border: none;
    outline: none;
    padding: 0.8rem 1rem;
    width: 100%;
    text-align: left;
    border-bottom-left-radius: 0.75rem;
    border-bottom-right-radius: 0.75rem;
}
.card-toolbar .logout-button:hover {
    background-color: rgba(236, 236, 236, 0.7);
}
.card-toolbar .logout-button:active {
    background-color: rgba(216, 216, 216, 0.7);
}
.card-toolbar .logout-button .text-logout {
    font-size: 0.8rem;
    color: #000000;
    font-weight: 500;
    padding-left: 0.5rem;
}
</style>
