

export default {
    state: {
        searchInput: undefined,
        location: { // Denver default
            latitude: 39.125212,
            longitude: -94.551136,
        },
        beacons: [],
    },
    setSearchInput(searchInput) {
        this.state.searchInput = searchInput;
    },
    setLocation(location = {}) {
        const { latitude, longitude } = location;

        this.state.location = { latitude, longitude };
    },
    setBeacons(beacons = []) {
        if (!beacons.length) {
            return;
        }

        this.state.beacons = beacons;
    },
}
