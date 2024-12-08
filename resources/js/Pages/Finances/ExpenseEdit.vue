<template>
    <form @submit.prevent="update">
      <div>
        <div @change="update">
          <input v-model="form.description" type="text" />
          <input v-model="form.amount" type="text" />
          <select v-model="form.frequency">
            <option>Weekly</option>
            <option>Monthly</option>
            <option>Quarterly</option>
            <option>Yearly</option>
          </select>

          <input v-model="form.day_deposited" type="text" />
          <span v-if="
            props.expense.day_deposited == 1 ||
            props.expense.day_deposited == 21 ||
            props.expense.day_deposited == 31">st</span>
          <span v-else-if="
            props.expense.day_deposited == 2 ||
            props.expense.day_deposited == 22">nd</span>
          <span v-else-if="
            props.expense.day_deposited == 3 ||
            props.expense.day_deposited == 23">rd</span>
          <span v-else-if="
            props.expense.day_deposited >= 4 &&
            props.expense.day_deposited <= 20 ||
            props.expense.day_deposited >= 24 &&
            props.expense.day_deposited <= 30">th</span>
          <Link :href="`/expenses/${props.expense.id}`" method="DELETE" as="button">&nbsp Delete</Link>
        </div>
        
      </div>
    </form>

  </template>
 
  <script setup>
  import { useForm } from '@inertiajs/vue3'
  import {Link} from '@inertiajs/vue3'
  const props = defineProps({
    expense: Object,
  })
  const form = useForm({
    id: props.expense.id,
    description: props.expense.description,
    amount: props.expense.amount,
    frequency: props.expense.frequency,
    day_deposited: props.expense.due,
    day_deposited: props.expense.notes,
  })
  const update = () => form.put(`/expenses/${props.expense.id}`)
  </script>
 