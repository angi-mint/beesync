<script setup lang="ts">

import Navigation from "@/Layouts/Header/Navigation.vue";
import UserNavigation from "@/Layouts/Header/UserNavigation.vue";

</script>

<template>
    <header>
        <Navigation></Navigation>
        <span>
            <slot name="title"></slot>
        </span>
        <UserNavigation></UserNavigation>
    </header>
    <main>
        <slot name="main"/>
    </main>
</template>

<style scoped>

</style>
