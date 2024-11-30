<template>
  <Edit v-for="income in incomes" :key="income.id" :income="income"/>



  <div v-for="income in incomes" :key="income.id">
      <Link :href="`/income/${income.id}`">
          {{ income.description }} {{ income.amount }} {{ income.day_deposited }}
      </Link>
    <div>
      <Link :href="`/income/${income.id}/edit`">Edit</Link>
    </div>
  </div>


  <form @submit.prevent="create">
    <div>
      <div>
        <label>Description</label>
        <input v-model="form.description" type="text" />
      </div>

      <div>
        <label>Amount</label>
        <input v-model="form.amount" type="text" />
      </div>

      <div>
        <label>Day Deposited</label>
        <input v-model="form.day_deposited" type="text" />
      </div>

      <div>
        <button type="submit">Create</button>
      </div>
    </div>
  </form>
</template>

<script setup>
import Edit from './Edit.vue'
import {Link} from '@inertiajs/vue3'
import { useForm } from '@inertiajs/vue3'
defineProps({
  incomes: Array,
})


const form = useForm({
description: null,
amount: null,
day_deposited: null,
})
const create = () => {
form.post('/income');
form.description = "";
form.amount = "";
form.day_deposited = "";
}
</script>
