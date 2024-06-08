<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import {useI18n} from "vue-i18n";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const {t} = useI18n();
</script>

<template>
    <Head title="Friends"/>
    <AuthenticatedLayout>
        <template #header>{{$t('nav.friends')}}</template>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
