<script setup>
import Layout from '../../Layouts/Home.vue'

const arrayIcon = ['icon-accounting.svg', 'icon-badge.svg', 'icon-building.svg', 'icon-chart.svg',
    'icon-office.svg', 'icon-transfer.svg'];

defineProps({
    klp_menu: Array
})

</script>

<template>
    <Layout>
        <div class="row">
            <div class="col-md-4 col-lg-4" v-for="klpMenu in klp_menu">
                <div class="card-portal">
                    <div class="row">
                        <div class="col-3">
                            <img alt="icon" :src="`/image/icon/${arrayIcon[Math.random() * arrayIcon.length | 0]}`" class="icon-portal" />
                        </div>
                        <div class="col-6 self-center">
                            <p class="text-portal">
                                {{ klpMenu.nama_klp_menu }}
                            </p>
                        </div>
                        <div class="col-3 self-center">
                            <div class="action-portal">
                                <i class="bi bi-arrow-right"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<style scoped>
.card-portal {
    box-shadow: 0 4px 6px rgba(88, 88, 88, 0.25);
    background-color: rgba(255, 255, 255, 0.7);
    border-radius: 0.5rem;
    cursor: pointer;
    position: relative;
    word-wrap: break-word;
    padding: 0.8rem 1rem;
    margin-bottom: 1rem;
}
.icon-portal {
    height: 4.3rem;
}
.text-portal {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0;
}
.self-center {
    align-self: center;
}
.action-portal {
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0.5rem;
    font-size: 1.25rem;
    background-color: #ffffff;
    color: #000000;
    height: 2.8rem;
    width: 2.8rem;
}
.action-portal i {
    -webkit-text-stroke-width: thin;
}
</style>
