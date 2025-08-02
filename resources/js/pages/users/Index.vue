<script setup lang="ts">
import { useUsersStore } from '@/stores/users'
import { router, usePage } from '@inertiajs/vue3'
import { onMounted, watch } from 'vue'

type User = {
    id: number
    name: string
    email: string
}

const store = useUsersStore()
const page = usePage<any>() // убираем строгую типизацию

onMounted(() => {
    store.setUsers(page.props.users.data)
    store.setFilters(page.props.filters)
})

watch(
    () => store.filters.search,
    (search) => {
        router.get(
            route('users.index'),
            { search },
            {
                preserveState: true,
                replace: true,
                onSuccess: (newPage: any) => {
                    store.setUsers(newPage.props.users.data)
                }
            }
        )
    }
)

function goToPage(pageNumber: number) {
    router.get(
        route('users.index'),
        { search: store.filters.search, page: pageNumber },
        {
            preserveState: true,
            replace: true,
            onSuccess: (newPage: any) => {
                store.setUsers(newPage.props.users.data)
            }
        }
    )
}
</script>

<template>
    <div>
        <h1 class="text-2xl font-bold mb-4">Users</h1>

        <input
            v-model="store.filters.search"
            type="text"
            placeholder="Search..."
            class="border p-2 mb-4"
        />

        <table class="w-full border">
            <thead>
            <tr>
                <th class="p-2 border">#</th>
                <th class="p-2 border">Name</th>
                <th class="p-2 border">Email</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="user in store.users" :key="user.id">
                <td class="p-2 border">{{ user.id }}</td>
                <td class="p-2 border">{{ user.name }}</td>
                <td class="p-2 border">{{ user.email }}</td>
            </tr>
            </tbody>
        </table>

        <div class="mt-4 flex gap-2">
            <button
                v-for="n in page.props.users.last_page"
                :key="n"
                :class="['px-3 py-1 border', n === page.props.users.current_page ? 'bg-blue-500 text-white' : '']"
                @click="goToPage(n)"
            >
                {{ n }}
            </button>
        </div>
    </div>
</template>
