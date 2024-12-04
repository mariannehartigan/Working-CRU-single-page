<template>
    <form @submit.prevent="update">
      <div>
        <div @change="update">
          <input v-model="form.description" type="text" />
          <input v-model="form.amount" type="text" />
          <select v-model="form.frequency">
            <option>Monthly</option>
            <option>Quarterly</option>
            <option>Yearly</option>
          </select>

          <input v-model="form.day_deposited" type="text" />
          <span v-if="props.income.day_deposited == 17">st</span>
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
    frequency: props.income.frequency,
    day_deposited: props.income.day_deposited,
  })
  const update = () => form.put(`/income/${props.income.id}`)
  </script>
 