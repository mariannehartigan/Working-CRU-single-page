<template>
    <Income :incomes="$page.props.incomes"/>
    <Expenses :expenses="$page.props.expenses"/>
</template>

<script setup>
import Income from './Income.vue'
import Expenses from './Expenses.vue'
defineProps({
  incomes: Array,
  expenses: Array,
})
</script>