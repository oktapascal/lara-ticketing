<script setup>
import Layout from '../../Layouts/Home.vue'
</script>

<template>
    <Layout>
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="card-portal">
                    <div class="row">
                        <div class="col-3">
                            <img alt="icon" src="/image/icon/icon-accounting.svg" class="icon-portal" />
                        </div>
                        <div class="col-6 self-center">
                            <p class="text-portal">
                                Menu Admin 1
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
            <div class="col-md-4 col-lg-4">
                <div class="card-portal">
                    <div class="row">
                        <div class="col-3">
                            <img alt="icon" src="/image/icon/icon-badge.svg" class="icon-portal" />
                        </div>
                        <div class="col-6 self-center">
                            <p class="text-portal">
                                Menu Admin 2
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
            <div class="col-md-4 col-lg-4">
                <div class="card-portal">
                    <div class="row">
                        <div class="col-3">
                            <img alt="icon" src="/image/icon/icon-building.svg" class="icon-portal" />
                        </div>
                        <div class="col-6 self-center">
                            <p class="text-portal">
                                Menu Admin 3
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
            <div class="col-md-4 col-lg-4">
                <div class="card-portal">
                    <div class="row">
                        <div class="col-3">
                            <img alt="icon" src="/image/icon/icon-chart.svg" class="icon-portal" />
                        </div>
                        <div class="col-6 self-center">
                            <p class="text-portal">
                                Menu Admin 4
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
            <div class="col-md-4 col-lg-4">
                <div class="card-portal">
                    <div class="row">
                        <div class="col-3">
                            <img alt="icon" src="/image/icon/icon-office.svg" class="icon-portal" />
                        </div>
                        <div class="col-6 self-center">
                            <p class="text-portal">
                                Menu Admin 5
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
            <div class="col-md-4 col-lg-4">
                <div class="card-portal">
                    <div class="row">
                        <div class="col-3">
                            <img alt="icon" src="/image/icon/icon-transfer.svg" class="icon-portal" />
                        </div>
                        <div class="col-6 self-center">
                            <p class="text-portal">
                                Menu Admin 6
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
