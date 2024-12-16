<template>
  FIXED EXPENSES
    <Edit v-for="expense in expenses" :key="expense.id" :expense="expense" />
  
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
          <label>Day Due</label>
          <input v-model="form.day_deposited" type="text" />
        </div>
        
        <select v-model="form.frequency">
          <option>Weekly</option>
          <option>Monthly</option>
          <option>Quarterly</option>
          <option>Yearly</option>
        </select>

        <div>
          <label>Notes</label>
          <input v-model="form.notes" type="text" />
        </div>
  
        <div>
          <button type="submit">Create Fixed Expense</button>
        </div>
      </div>
    </form>
  </template>
  
  <script setup>
  import Edit from './ExpenseEdit.vue'
  import { useForm } from '@inertiajs/vue3'
  defineProps({
    expenses: Array,
  })
  
  const form = useForm({
  description: null,
  amount: null,
  frequency: "Monthly",
  day_deposited: null,
  notes: null,
  })
  const create = () => {
  form.post('/expenses');
  form.description = "";
  form.amount = "";
  form.frequency = "Monthly";
  form.day_deposited = "";
  form.notes = "";
  }
  </script>