<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import {useI18n} from "vue-i18n";

const {t} = useI18n();
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h2>{{$t("general.welcome_back", {name: $page.props.auth.user.name})}}</h2>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">{{$t("dashboard.pending_tasks")}}</div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
