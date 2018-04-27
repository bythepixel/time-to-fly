<template>
<div>
    <PageNav />
    <MapContainer mapId="test" type="large" :location="location" :beacons="beacons" />
    <PageContent />
    <PageFooter />
</div>
</template>

<script>
import PageNav from './PageNav.vue';
import MapContainer from './MapContainer.vue';
import PageContent from './PageContent.vue';
import PageFooter from './PageFooter.vue';
import { DataStoreService } from '../services';

export default {
    components: {
        PageNav,
        MapContainer,
        PageContent,
        PageFooter,
    },
    data() {
        return DataStoreService.state;
    },

}
</script>

<style scoped>

</style>
