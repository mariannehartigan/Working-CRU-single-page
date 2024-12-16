<template>
  VARIABLE EXPENSES
    <BudgetEdit v-for="budget in budgets" :key="budget.id" :budget="budget"/>

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
  
        <select v-model="form.frequency">
          <option>Weekly</option>
          <option>Monthly</option>
          <option>Quarterly</option>
          <option>Yearly</option>
        </select>

        <div>
        </div>
  
        <div>
          <button type="submit">Create Variable Expense</button>
        </div>
      </div>
    </form>
  </template>
  
  <script setup>
  import BudgetEdit from './BudgetEdit.vue'
  import { useForm } from '@inertiajs/vue3'
  defineProps({
    budgets: Array,
  })

  const form = useForm({
  description: null,
  amount: null,
  frequency: "Weekly",
  day_deposited: null,
  })
  const create = () => {
  form.post('/budget');
  form.description = "";
  form.amount = "";
  form.frequency = "Weekly";
  }
  </script>