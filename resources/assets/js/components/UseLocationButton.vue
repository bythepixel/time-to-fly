<template>
    <button class="bg:blue-dark color:blue-light" @click="requestLocation">Use my location</button>
</template>

<script>
export default {
    methods: {
        requestLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition((pos) => { console.log(pos) }, (err) => { console.log(err) }, {
                    enableHighAccuracy: true,
                    timeout: 5000,
                    maximumAge: 300000 // 5 min
                });
                return;
            }

            x.innerHTML = "Geolocation is not supported by this browser.";
        },
        successGetLocation(position) {
            console.log(position);
        },
        errorGetLocation(err) {

        }
    }
}
</script>

<style lang="scss" scoped>
    button {
        cursor: pointer;
        width: 121px;
        font-size: 12px;
        border: 0;
        outline: 0;
        padding: 18px 14px;
        border-radius: 5px;
    }
</style>
