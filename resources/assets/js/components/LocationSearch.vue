<template>
    <div class="container">
        <div class="form-control">
            <input name="location-search" id="location-search" type="text" class="bg:blue-light color:blue" @focus="hideLabel" @blur="showLabel" v-model="formInput" debounce="1000" />
            <label for="location-search" class="color:blue" :class="{ active: (active || hasValue) }">
                <i class="fas fa-map-marker-alt"></i>&nbsp;<p>Address, City, State, Zip</p>
            </label>
        </div>
        <ul :if="addressOptions.length" class="addresses">
            <li v-for="address in addressOptions" @click="selectAddress(address)" class="color:blue">
                <p>{{ address.formatted_address }}</p>
            </li>
        </ul>
    </div>
</template>

<script>
import { HttpService,
         DataStoreService,
         ConfigService } from '../services';
export default {
    data() {
        return {
            formInput: '',
            active: false,
            addressOptions: [],
        }
    },
    watch: {
        formInput(newVal, oldVal) {
            if (newVal === oldVal) {
                return;
            }

            this.fetchAddress();
        }
    },
    computed: {
        hasValue() {
            if (this.formInput && this.formInput != "") {
                return true;
            }

            return false;
        }
    },
    methods: {
        hideLabel(e) {
            this.active = true;
        },
        showLabel(e) {
            this.active = false;
        },
        async fetchAddress(e) {
            try {
                let res = await HttpService.get(`https://maps.googleapis.com/maps/api/geocode/json?address=${encodeURIComponent(this.formInput)}&key=${ConfigService.getGoogleGeocodingApiKey()}`);

                if (res.data.results.length) {
                    this.addressOptions = res.data.results.slice(0,5);
                }
            } catch (err) {
            } finally {}

        },
        selectAddress(address) {
            this.addressOptions = [];
            console.log(address);
            DataStoreService.setLocation({ latitude: address.geometry.location.lat, longitude: address.geometry.location.lng });
        }
    }
}
</script>

<style lang="scss" scoped>
    .container {
        display: block;
        width: calc(100% - 121px);
        padding-left: 8px;
        position: relative;
    }

    .addresses {
        position: absolute;
        top: calc(100% + 12px);
        width: calc(100% - 8px);
        right: 0;
        list-style-type: none;
        margin: 0;
        z-index: 1;
        padding: 0;

        li {
            background: rgba(255,255,255, 0.75);
            border-bottom: 1px solid #384486;
            padding: 12px;
            cursor: pointer;

            transition: background 0.3s;

            &:last-child {
                border-bottom: 0;
            }

            &:hover {
                background: rgba(255,255,255, 1);
            }

            p {
                margin: 0;
                font-size: 16px;
                font-weight: 300;
            }
        }
    }

    .form-control {
        position: relative;
        display: block;
        width: 100%;

        label {
            position: absolute;
            top: 50%;
            left: 12px;
            transform: translateY(-50%);
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: flex-start;
            align-items: center;
            pointer-events: none;
        }
    }

    input {
        border: 0;
        outline: 0;
        padding: 15px 18px 15px 30px;
        border-radius: 5px;
        width: 100%;
    }

    .active p {
        opacity: 0;
    }
</style>
