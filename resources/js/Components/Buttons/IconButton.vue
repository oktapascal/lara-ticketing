<script setup>
    defineProps({
        className: String,
        isActive: {
          type: Boolean,
          default: false
        },
        typeButton: {
            type: String,
            default: "button"
        },
        disabledButton: {
            type: Boolean,
            default: false
        },
        tooltipText: {
            type: String,
            default: 'Default Tooltip'
        },
        tooltipPlacement: {
            type: String,
            default: 'auto'
        }
    })

    defineEmits(['onClick'])
</script>

<template>
    <button class="btn-icon" :class="[isActive ? 'active' : '', className]" :type="typeButton" :disabled="disabledButton"
            v-tooltip:[tooltipPlacement]="tooltipText"
            @click="$emit('onClick')">
        <slot />
    </button>
</template>

<style scoped>
.btn-icon {
    outline: none;
    border: none;
    background-color: #ffffff;
    border-radius: 0.5rem;
    text-align: center;
    padding: 0 0.4rem 0.3rem 0.4rem;
}
.btn-icon:hover {
    background-color: rgba(236, 236, 236, 0.7);
}
.btn-icon.active {
    background-color: rgba(216, 216, 216, 0.7);
}
</style>
