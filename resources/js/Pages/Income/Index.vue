<template>
  <Edit v-for="income in incomes" :key="income.id" :income="income"/>

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
      <select v-model="form.frequency">
        <option :value=form.frequency>Monthly</option>
        <option value="quarterly">Quarterly</option>
        <option value="yearly">Yearly</option>
      </select>

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
