<script setup lang="ts">
import { useForm, router } from '@inertiajs/vue3'

defineProps<{
    users: { id: number; name: string; email: string }[]
    filters: { search?: string }
}>()

const form = useForm({
    search: '',
})

function submit() {
    router.get('/users', { search: form.search }, { preserveState: true })
}
</script>

<template>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Пользователи</h1>

        <div class="mb-4 flex gap-2">
            <input
                v-model="form.search"
                @keyup.enter="submit"
                type="text"
                class="border rounded px-3 py-1 w-64"
                placeholder="Поиск по имени"
            />
            <button @click="submit" class="bg-blue-500 text-white px-4 py-1 rounded">
                Найти
            </button>
        </div>

        <div class="grid gap-4">
            <div
                v-for="user in users"
                :key="user.id"
                class="p-4 border rounded shadow-sm bg-white"
            >
                <div class="font-semibold">{{ user.name }}</div>
                <div class="text-sm text-gray-500">{{ user.email }}</div>
            </div>
        </div>
    </div>
</template>
