<template>
    <form @submit.prevent="update">
        <div @input="update">
          <input v-model="form.description" type="text" />
          <input v-model="form.amount" type="text" >
          <select v-model="form.frequency">
            <option>Weekly</option>
            <option>Monthly</option>
            <option>Quarterly</option>
            <option>Yearly</option>
          </select>
          <Link :href="`/budget/${props.budget.id}`" method="DELETE" as="button" preserve-scroll>&nbsp Delete</Link>
        </div>
    </form>

  </template>
 
  <script setup>
  import { useForm } from '@inertiajs/vue3'
  import { Link } from '@inertiajs/vue3'
  
  const props = defineProps({
    budget: Object,
  })
  const form = useForm({
    id: props.budget.id,
    description: props.budget.description,
    amount: props.budget.amount,
    frequency: props.budget.frequency,
  })
  const update = () => {
    form.put(`/budget/${props.budget.id}`, {preserveScroll:true});
  }

  </script>
