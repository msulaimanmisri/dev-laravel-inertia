<template>
    <h1>My Services</h1>
    <p>Ini adalah Framework yang anda gunakan dalam pembikinan website</p>

    <ul>
        <li v-for="framework in frameworks" v-text="framework"></li>
    </ul>
</template>

<script>
export default {
    props: {
        username: String,
        frameworks: Array,
    }
};
</script>