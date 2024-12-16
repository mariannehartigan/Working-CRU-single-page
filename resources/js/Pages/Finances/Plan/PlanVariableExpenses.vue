<template>
    <form @submit.prevent="update">
        <div @input="update">
          <input v-model="form.budget_description" type="text" />
          <input v-model="form.budget_amount" type="text" >
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
    budget_description: props.budget.description,
    budget_amount: props.budget.amount,
    budget_frequency: props.budget.frequency,
  })
  const update = () => {
    form.put(`/budget/${props.budget.id}`);
  }
  </script>
