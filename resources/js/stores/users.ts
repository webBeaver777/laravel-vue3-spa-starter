import { defineStore } from 'pinia'
import { ref } from 'vue'

export const useUsersStore = defineStore('users', () => {
    const users = ref<any[]>([])
    const filters = ref<{ search?: string }>({})

    function setUsers(data: any[]) {
        users.value = data
    }

    function setFilters(newFilters: { search?: string }) {
        filters.value = newFilters
    }

    return {
        users,
        filters,
        setUsers,
        setFilters,
    }
})
