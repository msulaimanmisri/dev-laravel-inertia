<template>
    <nav>
        <ul>
            <li>
                <Link href="/">Home</Link>
            </li>

            <li>
                <Link href="/clients">Clients</Link>
            </li>

            <li>
                <Link href="/services">Services</Link>
            </li>
        </ul>
    </nav>
</template>

<script>
import { Link } from '@inertiajs/vue3';
export default {
    components: {
        Link,
    }
};
</script>