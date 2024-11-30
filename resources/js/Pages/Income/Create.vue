<template>
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
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  description: null,
  amount: null,
  day_deposited: null,
})
const create = () => form.post('/income')
</script>
