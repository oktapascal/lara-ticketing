<script setup>
    defineProps({
        text: String,
        className: String,
        typeButton: {
            type: String,
            default: "button"
        },
        disabledButton: {
            type: Boolean,
            default: false
        }
    })
</script>

<template>
    <button>

    </button>
</template>

<style scoped>
.btn-icon {
    outline: none;
    border: none;
    background-color: #ffffff;
    border-radius: 0.5rem;
    text-align: center;
}
.btn-icon:hover {
    background-color: rgba(236, 236, 236, 0.7);
}
.btn-icon:active {
    background-color: rgba(216, 216, 216, 0.7);
}
</style>
