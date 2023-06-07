<script setup>
import { ref, computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
import IconButton from '../Buttons/IconButton.vue'
import TopbarModulNavigation from './TopbarModulNavigation.vue'

const el = document.documentElement

const page = usePage()

const user = computed(() => page.props.auth.user)

const clickedPortal = ref(false)
const clickedZoom = ref(false)
const clickedCopy = ref(false)
const clickedRefresh = ref(false)
const clickNotification = ref(false)

const onClickedPortal = () => {
    clickedPortal.value = !clickedPortal.value
}

const onClickedHidePortal = () => {
    clickedPortal.value = false
}

const onClickedZoom = () => {
    clickedZoom.value = !clickedZoom.value

    if (el.requestFullscreen) {
        el.requestFullscreen();
    } else if (el.webkitRequestFullscreen) { /* Safari */
        el.webkitRequestFullscreen();
    } else if (el.msRequestFullscreen) { /* IE11 */
        el.msRequestFullscreen();
    }
}

const onClickedCopy = () => {
    clickedCopy.value = !clickedCopy.value

    window.open(document.URL, '_blank')
}

const onClickedRefresh = () => {
    clickedRefresh.value = !clickedRefresh.value

    location.reload()
}

const onClickedNotification = () => {
    clickNotification.value = !clickNotification.value
}
</script>

<template>
    <div class="grid-topbar-content">
        <div class="grid-content">
            <IconButton tooltipPlacement="bottom" tooltipText="Portal"
                        :isActive="clickedPortal"
                        @onClick="onClickedPortal">
                <img alt="icon-apps" src="/image/icon/icon-apps.png" class="icon-topbar"/>
            </IconButton>
            <TopbarModulNavigation @onToggleNavigationModul="onClickedHidePortal" v-if="clickedPortal" />
        </div>
        <div class="grid-content">
            <IconButton tooltipPlacement="bottom" tooltipText="Zoom" @onClick="onClickedZoom">
                <img alt="icon-apps" src="/image/icon/icon-zoom.png" class="icon-topbar"/>
            </IconButton>
        </div>
        <div class="grid-content">
            <IconButton tooltipPlacement="bottom" tooltipText="New Tab" @onClick="onClickedCopy">
                <img alt="icon-apps" src="/image/icon/icon-copy.png" class="icon-topbar"/>
            </IconButton>
        </div>
        <div class="grid-content">
            <IconButton tooltipPlacement="bottom" tooltipText="Reload" @onClick="onClickedRefresh">
                <img alt="icon-apps" src="/image/icon/icon-refresh.png" class="icon-topbar"/>
            </IconButton>
        </div>
        <div class="grid-content">
            <IconButton tooltipPlacement="bottom" tooltipText="Notification"
                        :isActive="clickNotification"
                        @onClick="onClickedNotification">
                <img alt="icon-apps" src="/image/icon/icon-notification.png" class="icon-topbar"/>
            </IconButton>
        </div>
        <div class="grid-content">
            <button type="button" class="button-user">
                {{ user.nik }}
                <i class="bi bi-caret-down-fill btn-icon"></i>
            </button>
        </div>
    </div>
</template>

<style scoped>
.grid-topbar-content {
    display: flex;
    flex-direction: row-reverse;
}
.grid-content {
    padding-left: 0.3rem;
    padding-right: 0.3rem;
    position: relative;
}
.icon-topbar {
    height: 1.25rem;
    width: 1.25rem;
}
.button-user {
    background-color: #ffffff;
    outline: none;
    border: none;
    color: #878787;
    font-size: 0.8rem;
    font-weight: 600;
    display: flex;
    padding: 0.3rem 0.5rem;
    border-radius: 0.25rem;
}
.button-user:hover {
    background-color: rgba(236, 236, 236, 0.7);
}
.button-user:active {
    background-color: rgba(216, 216, 216, 0.7);
}
.button-user .btn-icon {
    color: #000000;
    margin-left: 1rem;
}
</style>
