<template>
    <Map :mapId="mapId" :location="location" :beacons="beacons" />
</template>

<script>
import { HttpService,
         DataStoreService,
         ErrorService } from '../services';
import Map from './Map.vue';
import { MAP_TYPE_SMALL,
         MAP_TYPE_MED,
         MAP_TYPE_LARGE } from '../utility/constants';

export default {
    components: {
        Map,
    },
    props: {
        mapId: String,
        type: String,
        location: Object,
    },
    data() {
        return {
            loading: false,
            error: null,
            beacons: [],
        }
    },
    watch: {
        location(newVal, oldVal) {
            if (newVal === oldVal) {
                return;
            }

            return this.fetchData(newVal.latitude, newVal.longitude);
        }
    },
    methods: {
        async fetchData(latitude, longitude) {
            this.loading = true;

            if (latitude < 0) {
                latitude = latitude * -1;
            }
            if (longitude < 0) {
                longitude = longitude * -1;
            }

            try {
                let res = await HttpService.get(`/graphql`, {
                    params: {
                        query: `query FetchWeather {weather(latitude: "${latitude}", longitude: "${longitude}") { latitude longitude weatherReports { temperature conditions windGust windSpeed }}}`
                    }
                });

                this.beacons = res.data.data.weather;
            } catch (err) {
                console.log(err);
            } finally {
                this.loading = false;
            }
        },
    }
}
</script>

<style scoped></style>
