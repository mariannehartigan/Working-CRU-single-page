<template>
    <form>
      <div>
        <div @input="update">
          <input v-model="form.month" type="text" />
          <input v-model="form.day_deposited" type="text" />
          <input v-model="form.description" type="text" />
          <input v-model="form.amount" type="text" />
          <input v-model="form.paid" type="checkbox" true-value="1" false-value="0"/>
          <Link :href="`/income/${props.income.id}`" method="DELETE" as="button" preserve-scroll>&nbsp Delete</Link>
        </div>
      </div>
    </form>
</template>
 
  <script setup>
  import { useForm } from '@inertiajs/vue3'
  import { Link } from '@inertiajs/vue3'
  const props = defineProps({
    income: Object
  })

  const form = useForm({
    id: props.income.id,
    month: props.income.month,
    day_deposited: props.income.day_deposited,
    description: props.income.description,
    amount: props.income.amount,
    paid: props.income.paid,
  })

  const update = () => form.put(`/income/${props.income.id}`, {preserveScroll:true})
  </script>