<template>
    <div class="bg:blue nav">
        <div class="title">
            <h1>The Best Places to <strong>Fly a Kite</strong> Right Now</h1>
            <i class="fas fa-info-circle"></i>
        </div>
        <div class="search-group">
            <LocationSearch />
        </div>
    </div>
</template>

<script>
import UseLocationButton from './UseLocationButton.vue';
import LocationSearch from './LocationSearch.vue';
export default {
    components: {
        LocationSearch,
    }
}
</script>

<style lang="scss" scoped>
    .nav {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-between;
        align-items: center;
        padding: 1vw;
    }

    .title {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: flex-start;
        align-items: center;
    }

    h1 {
        font-weight: 300;
        opacity: 0.8;
        margin: 0;

        strong {
            font-weight: 600;
        }
    }

    i {
        opacity: 0.5;
        transition: opacity 0.3s;
        font-size: 24px;
        margin-left: 16px;
        cursor: pointer;

        &:hover {
            opacity: 1.0;
        }
    }

    .search-group {
        width: 32%;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: flex-end;
        align-items: center;
    }
</style>
