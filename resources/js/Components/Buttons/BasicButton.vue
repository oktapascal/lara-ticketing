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
<div class="button-container d-grid gap-2">
    <button :type="typeButton" class="btn" :class="className" :disabled="disabledButton">
        {{ text }}
    </button>
</div>
</template>

<style scoped>
.button-container {
    margin: 0.8rem 0;
}
</style>
