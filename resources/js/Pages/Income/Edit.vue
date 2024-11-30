<template>
    <form @submit.prevent="update">
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
          <button type="submit">Edit</button>
        </div>
      </div>
    </form>
  </template>
 
  <script setup>
  import { useForm } from '@inertiajs/vue3'
  const props = defineProps({
    income: Object,
  })
  const form = useForm({
    description: props.income.description,
    amount: props.income.amount,
    day_deposited: props.income.day_deposited,
  })
  const update = () => form.put(`/income/${props.income.id}`)
  </script>
 