<script setup>
defineProps({
    modelValue: {
        type: String,
        default: '',
        required: true
    },
    type: {
        type: String,
        default: 'text'
    },
    name: String,
    id: String,
    placeholder: {
        type: String,
        default: 'Isi field ini...'
    },
    className: String,
    labelInput: String,
    isError: {
        type: Boolean,
        default: false
    },
    textError: String
})

defineEmits(['update:modelValue'])
</script>

<template>
    <div class="input-container" :class="{ 'invalid': isError }">
        <label :for="id">{{ labelInput }}</label>
        <input class="form-control custom" :class="className" :type="type" :name="name" :id="id" :placeholder="placeholder" autocomplete="off" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)">
        <div class="error-container" v-if="isError">{{ textError }}</div>
    </div>
</template>

<style scoped>
    .invalid label {
        color: #b91c1c;
    }
    .invalid input {
        border-color: #b91c1c;
        border-width: 1.5px;
    }
    .input-container {
        position: relative;
        margin: 1rem 0;
        width: 100%;
    }
    .input-container label {
        margin-bottom: 0.5rem;
    }
    .custom {
        border-color: #1a202c;
        border-radius: 0.25rem;
    }
    .form-control:focus {
        outline: none;
        box-shadow: none;
        border-width: 0.094rem;
        border-style: solid;
        border-color: var(--bs-blue);
    }
    .error-container {
        position: relative;
        display: block;
        font-size: 0.875rem;
        color: #dc2626;
        padding-left: 0.1rem;
    }
</style>
