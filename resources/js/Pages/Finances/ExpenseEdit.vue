<template>
    <form @submit.prevent="update">
      <div>
        <div @input="update">
          <input v-model="form.description" type="text" :preserve-scroll="true" />
          <input v-model="form.amount" type="text" :preserve-scroll="true" />
          <select v-model="form.frequency" :preserve-scroll="true">
            <option>Weekly</option>
            <option>Monthly</option>
            <option>Quarterly</option>
            <option>Yearly</option>
          </select>

          <input v-model="form.day_due" type="text" :preserve-scroll="true" />
          <span v-if="
            props.expense.day_due == 1 ||
            props.expense.day_due == 21 ||
            props.expense.day_due == 31">st</span>
          <span v-else-if="
            props.expense.day_due == 2 ||
            props.expense.day_due == 22">nd</span>
          <span v-else-if="
            props.expense.day_due == 3 ||
            props.expense.day_due == 23">rd</span>
          <span v-else-if="
            props.expense.day_due >= 4 &&
            props.expense.day_due <= 20 ||
            props.expense.day_due >= 24 &&
            props.expense.day_due <= 30">th</span>
          <input v-model="form.notes" type="text" :preserve-scroll="true" />
          <Link :href="`/expenses/${props.expense.id}`" method="DELETE" as="button" :preserve-scroll="true">&nbsp Delete</Link>

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
    day_due: props.expense.day_due,
    notes: props.expense.notes,
  })
  const update = () => form.put(`/expenses/${props.expense.id}`, {preserveScroll:true})
  </script>
 