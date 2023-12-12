<template>
    <div>
        <h1>Welcome, {{ username }}</h1>
        <p>Ini adalah Framework yang anda gunakan dalam pembikinan website</p>

        <ul>
            <li v-for="framework in frameworks" v-text="framework"></li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        username: String,
        frameworks: Array,
    }
};
</script>