const GOOGLE_GEOCODING_API_KEY = process.env.MIX_GOOGLE_GEOCODING_API_KEY;

export default {
    getGoogleGeocodingApiKey() {
        return GOOGLE_GEOCODING_API_KEY;
    }
}
