<script setup>
import { ref } from 'vue'
import IconButton from '../Buttons/IconButton.vue'

const el = document.documentElement

const clickedPortal = ref(false)
const clickedZoom = ref(false)
const clickedCopy = ref(false)
const clickedRefresh = ref(false)
const clickNotification = ref(false)

const onClickedPortal = () => {
    clickedPortal.value = !clickedPortal.value
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
        </div>
        <div class="grid-content">
            <IconButton tooltipPlacement="bottom" tooltipText="Zoom"
                        :isActive="clickedZoom"
                        @onClick="onClickedZoom">
                <img alt="icon-apps" src="/image/icon/icon-zoom.png" class="icon-topbar"/>
            </IconButton>
        </div>
        <div class="grid-content">
            <IconButton tooltipPlacement="bottom" tooltipText="New Tab"
                        :isActive="clickedCopy"
                        @onClick="onClickedCopy">
                <img alt="icon-apps" src="/image/icon/icon-copy.png" class="icon-topbar"/>
            </IconButton>
        </div>
        <div class="grid-content">
            <IconButton tooltipPlacement="bottom" tooltipText="Reload"
                        :isActive="clickedRefresh"
                        @onClick="onClickedRefresh">
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
}
.icon-topbar {
    height: 1.25rem;
    width: 1.25rem;
}
</style>
