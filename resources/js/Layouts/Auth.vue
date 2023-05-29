<template>
    <div class="row">
        <div class="col-8 pr-0">
            <slot name="image-page" />
        </div>
        <div class="col-4 pl-0">
            <slot />
        </div>
    </div>
</template>

<style>
.pr-0 {
   padding-right: 0;
}
.pl-0 {
    padding-left: 0;
}
</style>
