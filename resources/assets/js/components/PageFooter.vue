<template>
    <footer class="bg:blue text-align:center">
        <p class="color:blue-light">Made for fun and education from the team at <a class="color:blue-light" href="https://bythepixel.com">bythepixel.com</a></p>
        <p class="color:blue-light">&copy; {{ (new Date()).getFullYear() }} By the Pixel, LLC</p>
    </footer>
</template>

<script>
export default {}
</script>

<style lang="scss" scoped>
    footer {
        padding: 50px 0;
    }

    p {
        margin: 0 0 6px;
        font-size: 14px;

        &:last-child {
            margin-bottom: 0;
        }

        a {
            text-decoration: underline;
        }
    }
</style>
