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
          <option>Monthly</option>
          <option>Quarterly</option>
          <option>Yearly</option>
        </select>
  
        <div>
          <button type="submit">Create</button>
        </div>
      </div>
    </form>
  </template>
  
  <script setup>
  import Edit from './EditIncome.vue'
  import { useForm } from '@inertiajs/vue3'
  defineProps({
    incomes: Array,
  })
  
  const form = useForm({
  description: null,
  amount: null,
  frequency: "Monthly",
  day_deposited: null,
  })
  const create = () => {
  form.post('/income');
  form.description = "";
  form.amount = "";
  form.frequency = "Monthly";
  form.day_deposited = "";
  }
  </script>