<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import {useI18n} from "vue-i18n";
import BaseLayout from "@/Layouts/BaseLayout.vue";
const { t } = useI18n();

</script>

<template>
    <Head title="Home"/>
    <BaseLayout>
        <template #title>{{ $t("navigation.home") }}</template>
        <template #main>
            <h2></h2>
        </template>
    </BaseLayout>
</template>

<style scoped>

</style>
