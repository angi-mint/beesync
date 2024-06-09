<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import {useI18n} from "vue-i18n";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const {t} = useI18n();
</script>

<template>
    <Head title="Timer"/>
    <AuthenticatedLayout>
        <h1>{{$t("nav.timer")}}</h1>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
