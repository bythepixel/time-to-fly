<template>
    <main class="bg:blue color:white text-align:center">
        <div class="holder">
            <section>
                <header>
                    <h2>About this App</h2>
                </header>
                <p>This application uses live data to determine where the best places to go fly a kite right now are. Search for locations experiencing good kite flying conditions by using the search bar above.</p>
            </section>
            <section>
                <header>
                    <h2>Ideal Conditions for Flying a Kite</h2>
                </header>
                <p>To determine the best conditions for kite flying, we’ve established a few requirements:</p>
                <p>Wind speeds from 5 to 15mph, daylight, and no incliment weather (no rain, snow or lightening, etc.).</p>
            </section>
        </div>
    </main>
</template>

<script>
export default {}
</script>

<style lang="scss" scoped>
    .holder {
        width: 65%;
        margin: 0 auto;
        padding: 20px 0 60px;
    }
    h2 {
        margin-top: 82px;
        font-weight: 300;
        font-size: 30px;
        margin-bottom: 45px;
    }

    p {
        font-weight: 400;
        margin-bottom: 24px;
        font-size: 20px;
        line-height: 25px;
    }
</style>
